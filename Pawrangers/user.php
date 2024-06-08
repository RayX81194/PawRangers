<?php
// Include the database connection file
include 'compo/_dbconnect.php';

// Start session to access user information
session_start();

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.php");
    exit;
}

$showAlert = false;
$showError = false;

// Get the user's ID from the session
$userId = $_SESSION['id'];

// Retrieve the user's information from the database
$sql = "SELECT * FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the updated information from the form
    $name = $_POST['name'];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    // Validate the updated information (you may add more validation)
    if ($password != $cpassword) {
        $showError = "Passwords do not match";
    } else {
        // Hash the new password
        $hash = password_hash($password, PASSWORD_DEFAULT);

        // Update the user's information in the database
        $updateSql = "UPDATE users SET name = ?, email = ?, password = ? WHERE id = ?";
        $stmt = $conn->prepare($updateSql);
        $stmt->bind_param("sssi", $name, $email, $hash, $userId);
        $updateResult = $stmt->execute();

        if ($updateResult) {
            $showAlert = true;
        } else {
            $showError = "Error updating record: " . $conn->error;
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up - PawRangers</title>
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <style>
      @font-face {
  font-family: 'd_sariultrablack';
  src: url('dsariultrablack-webfont.woff2') format('woff2'),
       url('dsariultrablack-webfont.woff') format('woff');
}
.logo{
    font-family: 'd_sariultrablack';
}  

.btn{
  background-color: rgb(33, 30, 30);
  color: white;
  max-width: max-content;
  padding: 10px 37px;
  border-radius: 50px;
  transition: ease-in 0.1s;
}
.btn:hover{
    background-color: black;
}
    </style>
</head>
<body class="bg-gray-100">

    <!--Navbar-->   
    <nav class="bg-gray-100 border border-gray-200">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="index.php" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="icon.svg" class="h-8" alt="logo" />
          <span class="logo self-center text-2xl font-bold text-black whitespace-nowrap dark:text-white">PawRangers</span>
      </a>
      <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
      <div class="hidden w-full bg-gray-50 md:block md:w-auto" id="navbar-default">
        <ul class="font-medium bg-gray-100 flex flex-col p-4 md:p-0 mt-4 border border-gray-100 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-gray-100 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
            <a href="about.php" class="block py-2 px-3 text-green-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-green-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
          </li>
          <li>
            <a href="donate.php" class="block py-2 px-3 text-green-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-green-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Donate</a>
          </li>
          <li>
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Pets<svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
  </svg></button>
            <!-- Dropdown menu -->
            <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                  <li>
                    <a href="dogs.php" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dogs</a>
                  </li>
                  <li>
                    <a href="cats.php" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Cats</a>
                  </li>
                  <li>
                    <a href="others.php" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Others</a>
                  </li>
                </ul>
            </div>
        </li>
          <li>
            <a href="shelter.php" class="block py-2 px-3 text-green-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-green-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Shelters</a>
          </li>
          <li>
            <a href="listpet.php" class="block py-2 px-3 text-green-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-green-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">List your Pets</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!--Alert-->
  <?php
    if ($showAlert) {
        echo '<div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
        <span class="font-bold">Success!</span> Your account is updated.
        </div>';
    }
    if ($showError) {
        echo '<div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
        <span class="font-bold">Error! </span>' . $showError . '
        </div>';
    }
    ?>
    <!--Update the Profile-->
    <section class="bg-gray-100 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-8 py-9 mx-10 my-10 ">
            <div class="w-auto bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-3xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                        User Profile&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="/paws/user.php" method="post">
                        <div>
                            <label for="name" class="block mb-2 text-sm font-light text-gray-900 dark:text-white">Your Name</label>
                            <input type="text" value="<?php echo $row['name']; ?>" name="name" id="name" class="bg-gray-50 border transition duration-100 border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="eg. Ray, Ankur" required="">
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-light text-gray-900 dark:text-white">Your email</label>
                            <input type="email" value="<?php echo $row['email']; ?>" name="email" id="email" class="bg-gray-50 border transition duration-100 border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 cursor-not-allowed dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="eg. gccba@gmail.com" disabled>
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-light  text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border transition duration-100 border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                        </div>
                        <div>
                            <label for="cpassword" class="block mb-2 text-sm font-light  text-gray-900 dark:text-white">Confirm Password</label>
                            <input type="password" name="cpassword" id="cpassword" placeholder="••••••••" class="bg-gray-50 border transition duration-100 border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                        </div>
                        <button type="submit" class="btn">Update your Profile</button>
                    </form>
                </div>
            </div>
        </div>
      </section>

      <!--Footer-->
      <footer class="bg-white rounded-lg shadow dark:bg-gray-900 m-4 mt-10">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="index.php" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                <span class="logo self-center text-2xl font-semibold whitespace-nowrap dark:text-white">PawRangers</span>
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="about.php" class="hover:underline me-4 md:me-6">About</a>
                </li>
                <li>
                    <a href="shelter.php" class="hover:underline me-4 md:me-6">ToS</a>
                </li>
                <li>
                    <a href="shelter.php" class="hover:underline me-4 md:me-6">Contact</a>
                </li>
                <li>
                    <a href="listpet.php" class="hover:underline">Privacy Policy</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="easteregg.php" class="hover:underline">PawRangers™</a>. All Rights Reserved.
            </span>
            <div class="flex mt-4 sm:justify-center sm:mt-0">
                <a href="https://www.facebook.com/maniphartiyal/" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                          <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
                      </svg>
                    <span class="sr-only">Facebook page</span>
                </a>
                <a href="https://twitter.com/noice_ray" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                      <path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd"/>
                  </svg>
                    <span class="sr-only">Twitter page</span>
                </a>
            </div>
    </div>
</footer>



      <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>