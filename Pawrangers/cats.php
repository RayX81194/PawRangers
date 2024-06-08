<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
$user_name = $_SESSION['name'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  
  <title>PawRangers - Cats</title>
  <meta name="title" content="PawRangers - A Dog Adoption Website">
  <meta name="description" content="This is an dog adoption website">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
  <link rel="stylesheet" href="style1.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Bangers&family=Carter+One&family=Nunito+Sans:wght@400;700&display=swap"
    rel="stylesheet">
  <link rel="preload" as="image" href="./assets/images/hero-banner.jpg">

</head>

<body id="top">

  

  <header class="header" data-header>
    <div class="container">

      <button class="nav-toggle-btn" aria-label="toggle manu" data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true" class="menu-icon"></ion-icon>
        <ion-icon name="close-outline" aria-label="true" class="close-icon"></ion-icon>
      </button>

      <a href="index.php" class="logo newfont text-black">PawRangers</a>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">
          
          <li class="navbar-item">
            <a href="about.php" class="navbar-link" data-nav-link>About</a>
          </li>
          <li class="navbar-item">
            <a href="donate.php" class="navbar-link" data-nav-link>Donate</a>
          </li>
          
<div class="dropdown">
  <button class="dropbtn text-3xl font-bold navbar-link">Pets ▼</button>
  
  <div class="dropdown-content">
    <a href="dogs.php">Dogs</a>
    <a href="cats.php">Cats</a>
    <a href="others.php">Others</a>

  </div>
</div>
          <li class="navbar-item">
            <a href="shelter.php" class="navbar-link" data-nav-link>Shelters</a>
          </li>
          <li class="navbar-item">
            <a href="listpet.php" class="navbar-link" data-nav-link>List your Pets</a>
          </li>
        </ul>

        <a href="#" class="navbar-action-btn">Log In</a>
      </nav>

      <div class="header-actions">
      <div class="dropdown">
  <button class="dropbtn text-3xl font-bold navbar-link">Hello, <?php echo $user_name; ?> ▼</button>
  
  <div class="dropdown-content1">
    <a href="user.php"><ion-icon name="person-circle-outline"></ion-icon>User Profile</a>
    <a class="red" href="logout.php"><ion-icon name="log-out-outline"></ion-icon>Logout</a>
  </div>
</div>
      </div>

    </div>
  </header>


  <!--Dogs-->
  <section class="section brand  " aria-label="brand" style="background-image: url('./assets/images/dogbg.jpg')">
        <div class="container">

          <h2 class="h2 section-title">
            Cats
          </h2>
          <h2 class="text-center text-3xl">   
                Adopted cats bring warmth and charm to our homes, each with their own quirky personality and endearing traits. Choosing to adopt a cat not only provides a loving home for a deserving feline friend but also helps reduce the number of homeless cats and alleviate the burden on shelters.
          </h2>
        </div>
      </section>



      <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pet_info";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM pet_info WHERE pet_category = 'Cats'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<div class="grid grid-cols-4">';
    
    // Loop through results and display in cards
    while ($row = $result->fetch_assoc()) {
        $pet_name = $row['pet_name'];
        $pet_breed = $row['pet_breed'];
        $pet_location = $row['pet_location'];
        $pet_gender = $row['pet_gender'];
        $pet_weight = $row['pet_weight'];
        $pet_phone = $row['pet_phone'];
        $pet_category = $row['pet_category'];
        $pet_age = $row['pet_age'];
        $pet_image = $row['pet_image'];
        
        // Output HTML card
        echo '<div class="petbox">';
        if ($pet_image != "") {
          echo "<img src='assets/upload/$pet_image' alt='$pet_name' width='500px' height='250px' class='pet-image'>";
      }
      echo '
            <div class="heading">
                <h2 class="headtxt">' . $pet_name . '</h2>
                <p class="breed">' . $pet_breed . '</p>
            </div>
            <div class="info">
                <div class="box1">
                    <p>' . $pet_age . ' Mo</p>
                    <p class="light">Age</p>
                </div> 
                <div class="box2">
                    <p>' . $pet_gender . '</p>
                    <p class="light">Gender</p>
                </div>   
                <div class="box3">
                    <p>' . $pet_weight . ' Kg</p>
                    <p class="light">Weight</p>
                </div>     
            </div>
            <div class="button">
                <a href="' . $pet_phone . '" class="boxbtn">Contact</a>
                <a href="' . $pet_location . '" class="boxbtn">Location</a>
            </div>
        </div>';
    }
    echo '</div>';
} else {
    echo "No pets found";
}

$conn->close();
?> 

  <footer class="footer" style="background-image: url('./assets/images/footer-bg.jpg')">

    <div class="footer-top section">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo newfont">PawRangers</a>

          <ul class="contact-list">

            <li class="contact-item">
              <ion-icon name="location-outline" aria-hidden="true"></ion-icon>

              <address class="address">
                <a href="https://www.google.com/maps/place/Bhosari,+Pimpri-Chinchwad,+Maharashtra/data=!4m2!3m1!1s0x3bc2c780c24d3757:0xcf7459421a58fa5b?sa=X&ved=1t:242&ictx=111">Sco No.3 Adrash Nagar Chandigarh IND 160050</a>
              </address>
            </li>

            <li class="contact-item">
              <ion-icon name="call-outline" aria-hidden="true"></ion-icon>

              <a href="tel:+16234567891011" class="contact-link">(+91)-7696-976-969</a>
            </li>
            <li class="contact-item">
              <ion-icon name="mail-outline"></ion-icon>
              <a href="mailto:support@gmail.com" class="email-link">support@pawrangers.com</a>
            </li>

          </ul>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Shop</p>
          </li>

          <li>
            <a href="#" class="footer-link">Food</a>
          </li>

          <li>
            <a href="#" class="footer-link">Bathing</a>
          </li>

          <li>
            <a href="#" class="footer-link">Grooming</a>
          </li>

          <li>
            <a href="#" class="footer-link">Toys</a>
          </li>

          <li>
            <a href="#" class="footer-link">Makeup</a>
          </li>

          <li>
            <a href="#" class="footer-link">Others</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Resources</p>
          </li>

          <li>
            <a href="#" class="footer-link">Online Store</a>
          </li>

          <li>
            <a href="#" class="footer-link">Privacy Policy</a>
          </li>

          <li>
            <a href="#" class="footer-link">Contact Policy</a>
          </li>

          <li>
            <a href="#" class="footer-link">Information</a>
          </li>

          <li>
            <a href="#" class="footer-link">Terms of Service</a>
          </li>
        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Social Media</p>
          </li>

          <li>
            <a href="#" class="footer-link">Facebook</a>
          </li>

          <li>
            <a href="#" class="footer-link">Twitter</a>
          </li>

          <li>
            <a href="#" class="footer-link">Instagram</a>
          </li>

          <li>
            <a href="#" class="footer-link">Github</a>
          </li>

          <li>
            <a href="#" class="footer-link">Youtube</a>
          </li>
        </ul>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2024 PawRangers by <a href="easteregg.php" class="copyright-link">Ray.</a>
        </p>
      </div>
    </div>

  </footer>

  

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>

  
  <script src="./assets/js/script.js" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>