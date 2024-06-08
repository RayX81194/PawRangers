<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
  header("location: login.php");
  exit;
}
$user_name = $_SESSION['name'];

$showAlert = false;
$showError = false;

// Database connection
$conn = new mysqli("localhost", "root", "", "pet_info");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}

// Function to handle file upload
if (isset($_POST['submit'])) {
  $pet_name = $_POST['pet_name'];
  $pet_breed = $_POST['pet_breed'];
  $pet_location = $_POST['pet_location'];
  $pet_gender = $_POST['pet_gender'];
  $pet_weight = $_POST['pet_weight'];
  $pet_category = $_POST['pet_category'];
  $pet_age = $_POST['pet_age'];
  $pet_phone = $_POST['pet_phone'];
  $pet_image = $_FILES['pet_image']['name'];
  $pet_image_tmp = $_FILES['pet_image']['tmp_name'];

  // Move uploaded image to a folder
  move_uploaded_file($pet_image_tmp, "assets/upload/" . $pet_image);

  // Insert data into database
  $sql = "INSERT INTO pet_info (pet_name, pet_breed, pet_location, pet_gender,  pet_weight, pet_category, pet_age, pet_phone, pet_image)
VALUES ('$pet_name', '$pet_breed', '$pet_location','$pet_gender','$pet_weight', '$pet_category', '$pet_age','$pet_phone', '$pet_image')";

  if ($conn->query($sql) === TRUE) {
    $showAlert = true;
  } else {
    $showError = true;
  }
}
// Close connection
$conn->close();
?>







<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title>PawRangers - List your Pets</title>
  <meta name="title" content="PawRangers - A Dog Adoption Website">
  <meta name="description" content="This is an dog adoption website">

  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
  <link rel="stylesheet" href="style1.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Bangers&family=Carter+One&family=Nunito+Sans:wght@400;700&display=swap"
    rel="stylesheet">
  <link rel="preload" as="image" href="./assets/images/hero-banner.jpg">
  <style>
    form {
      max-width: 600px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 10px 20px rgba(0,0,0,.1);
    }

    h1 {
      text-align: center;
      color: #333;
    }

    h2 {
      margin-top: 20px;
      color: #555;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    input[type="text"],
    input[type="number"],
    input[type="email"],
    input[type="tel"],
    textarea,
    select {
      width: calc(100% - 12px);
      padding: 8px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    select {
      width: 100%;
    }

    input[type="submit"] {
    font-family: 'Nunito Sans', sans-serif;
    padding-left:25rem ;
    padding-right:25rem ;
    padding-top: 1rem;
    padding-bottom:1rem ;
    font-size: 17px;
    border: none;
    background-color: #ED6335;
    box-shadow: 0 0 10px 0 #d7d2d2;
    border-radius: 10px;
    color: white;
    transition: linear 0.1s;
    }

    input[type="submit"]:hover {
      background-color: #ab360f;
    }

    .error {
  width: 320px;
  padding: 12px;
  display: flex;
  position:absolute;
  top:9rem;
  left:2rem;
  flex-direction: row;
  align-items: center;
  justify-content: start;
  background: #309c36;
  border-radius: 8px;
  box-shadow: 0px 0px 5px -3px #111;
}

.error__icon {
  width: 20px;
  height: 20px;
  transform: translateY(-2px);
  margin-right: 8px;
}

.error__icon path {
  fill: #fff;
}

.error__title {
  font-weight: 500;
  font-size: 14px;
  color: #fff;
}

.error__close {
  width: 20px;
  height: 20px;
  cursor: pointer;
  margin-left: auto;
}

.error__close path {
  fill: #fff;
}
  </style>

</head>

<body id="top">


  <!--Header-->
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

  <!--Form-->
  <?php
  if ($showAlert) {
    echo '<div class="error">
    <div class="error__icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" height="24" fill="none"><path fill="#393a37" d="m13 13h-2v-6h2zm0 4h-2v-2h2zm-1-15c-1.3132 0-2.61358.25866-3.82683.7612-1.21326.50255-2.31565 1.23915-3.24424 2.16773-1.87536 1.87537-2.92893 4.41891-2.92893 7.07107 0 2.6522 1.05357 5.1957 2.92893 7.0711.92859.9286 2.03098 1.6651 3.24424 2.1677 1.21325.5025 2.51363.7612 3.82683.7612 2.6522 0 5.1957-1.0536 7.0711-2.9289 1.8753-1.8754 2.9289-4.4189 2.9289-7.0711 0-1.3132-.2587-2.61358-.7612-3.82683-.5026-1.21326-1.2391-2.31565-2.1677-3.24424-.9286-.92858-2.031-1.66518-3.2443-2.16773-1.2132-.50254-2.5136-.7612-3.8268-.7612z"></path></svg>
    </div>
    <div class="error__title">Success! Your Information has been stored.</div>
</div>';
  }
  if ($showError) {
    echo '<div class="error">
    <div class="error__icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" height="24" fill="none"><path fill="#393a37" d="m13 13h-2v-6h2zm0 4h-2v-2h2zm-1-15c-1.3132 0-2.61358.25866-3.82683.7612-1.21326.50255-2.31565 1.23915-3.24424 2.16773-1.87536 1.87537-2.92893 4.41891-2.92893 7.07107 0 2.6522 1.05357 5.1957 2.92893 7.0711.92859.9286 2.03098 1.6651 3.24424 2.1677 1.21325.5025 2.51363.7612 3.82683.7612 2.6522 0 5.1957-1.0536 7.0711-2.9289 1.8753-1.8754 2.9289-4.4189 2.9289-7.0711 0-1.3132-.2587-2.61358-.7612-3.82683-.5026-1.21326-1.2391-2.31565-2.1677-3.24424-.9286-.92858-2.031-1.66518-3.2443-2.16773-1.2132-.50254-2.5136-.7612-3.8268-.7612z"></path></svg>
    </div>
    <div class="error__title">Error! Check details correctly.</div>
</div>';
  }
?>

  <section class="section brand has-bg-image" aria-label="brand" style="background-image: url('./assets/images/dogbg.jpg')">
    <div class="container">

      <h2 class="h2 section-title">
        List your Pets
      </h2>

      <form action="/paws/listpet.php" method="post" enctype="multipart/form-data">
        <label for="pet_name">Pet Name:</label>
        <input type="text" id="fullname" name="pet_name" required><br>

        <label for="pet_age">Pet Age (Months):</label>
        <input type="text" id="fullname" name="pet_age" required><br>

        <label for="size">Pet Gender:</label>
        <select id="size" name="pet_gender">
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Other">Other</option>
        </select><br>

        <label for="pet_weight">Pet Weight (in KG):</label>
        <input type="text" id="fullname" name="pet_weight" required><br>

        <label for="size">Pet Category:</label>
        <select id="size" name="pet_category">
          <option value="Dog">Dogs</option>
          <option value="Cats">Cats</option>
          <option value="Others">Others</option>
        </select><br>

        <label for="pet_breed">Pet Breed:</label>
        <select id="dogBreeds" name="pet_breed" required>
          <optgroup label="Dogs">
            <option value="Indian Spitz">Indian Spitz</option>
            <option value="Labrador Retriever">Labrador Retriever</option>
            <option value="German Shepherd">German Shepherd</option>
            <option value="Golden Retriever">Golden Retriever</option>
            <option value="Bulldog">Bulldog</option>
            <option value="Beagle">Beagle</option>
            <option value="Poodle">Poodle</option>
            <option value="Pitbull">Pitbull</option>
            <option value="Boxer">Boxer</option>
            <option value="Dachshund">Dachshund</option>
            <option value="Siberian Husky">Siberian Husky</option>
            <option value="Shiba Inu">Shiba Inu</option>
            <option value="Shih Tzu">Shih Tzu</option>
            <option value="Rottweiler">Rottweiler</option>
            <option value="Yorkshire Terrier">Yorkshire Terrier</option>
            <option value="Doberman Pinscher">Doberman Pinscher</option>
            <option value="Great Dane">Great Dane</option>
            <option value="Chihuahua">Chihuahua</option>
            <option value="Australian Shepherd">Australian Shepherd</option>
            <option value="Border Collie">Border Collie</option>
            <option value="Cocker Spaniel">Cocker Spaniel</option>
            <option value="Shetland Sheepdog">Shetland Sheepdog (Sheltie)</option>
            <option value="Miniature Schnauzer">Miniature Schnauzer</option>
            <option value="Pembroke Welsh Corgi">Pembroke Welsh Corgi</option>
            <option value="Boston Terrier">Boston Terrier</option>
            <option value="French Bulldog">French Bulldog</option>
            <option value="Cavalier King Charles Spaniel">Cavalier King Charles Spaniel</option>
            <option value="Basset Hound">Basset Hound</option>
            <option value="Weimaraner">Weimaraner</option>
            <option value="Maltese">Maltese</option>
            <option value="Vizsla">Vizsla</option>
            <option value="Australian Cattle Dog">Australian Cattle Dog (Blue Heeler)</option>
            <option value="Scottish Terrier">Scottish Terrier</option>
          </optgroup>
          <optgroup label="Cats">
            <option value="Persian">Persian</option>
            <option value="Maine Coone">Maine Coone</option>
            <option value="Siamese">Siamese</option>
            <option value="Ragdoll">Ragdoll</option>
            <option value="British Shorthair">British Shorthair</option>
            <option value="Bengal">Bengal</option>
            <option value="Abyssinian">Abyssinian</option>
            <option value="Sphynx">Sphynx</option>
            <option value="Scottish Fold">Scottish Fold</option>
            <option value="Birman">Birman</option>
            <option value="Burmese">Burmese</option>
            <option value="Russian Blue">Russian Blue</option>
            <option value="Norwegian Forest">Norwegian Forest</option>
            <option value="Cornish Rex">Cornish Rex</option>
            <option value="Himalayan">Himalayan</option>
            <option value="Manx">Manx</option>
            <option value="Tonkinese">Tonkinese</option>
            <option value="Devon Rex">Devon Rex</option>
            <option value="Ocicat">Ocicat</option>
            <option value="Balinese">Balinese</option>
            <option value="Exotic Shorthair">Exotic Shorthair</option>
            <option value="Domestic Shorthair">Domestic Shorthair</option>
            <option value="Turkish Van">Turkish Van</option>
            <option value="Japanese Bobtail">Japanese Bobtail</option>
            <option value="Siberian">Siberian</option>
            <option value="Tabby">Tabby</option>
            <option value="American Bobtail">American Bobtail</option>
            <option value="Burmilla">Burmilla</option>
            <option value="Oriental">Oriental</option>
            <option value="Chartreux">Chartreux</option>
            <option value="Somali">Somali</option>
            <option value="Selkirk Rex">Selkirk Rex</option>
          </optgroup>
          <optgroup label="Others">
            <option value="Rabbit">Rabbit</option>
            <option value="Hamster">Hamster</option>
            <option value="Guinea Pig">Guinea Pig</option>
            <option value="Ferret">Ferret</option>
            <option value="Birds">Birds (Parrot, Canary, etc.)</option>
            <option value="Fish">Fish (Goldfish, Betta, etc.)</option>
            <option value="Turtle">Turtle</option>
            <option value="Snake">Snake</option>
            <option value="Lizard">Lizard</option>
            <option value="Horse">Horse</option>
            <option value="Gerbil">Gerbil</option>
            <option value="Chinchilla">Chinchilla</option>
            <option value="Hedgehog">Hedgehog</option>
            <option value="Guinea Fowl">Guinea Fowl</option>
            <option value="Duck">Duck</option>
            <option value="Goat">Goat</option>
            <option value="Pig">Pig</option>
          </optgroup>

          </optgroup>
        </select>

        <label for="pet_location">Pet Location Link:</label>
        <input type="text" id="phone" name="pet_location" required><br>

        <label for="pet_phone">Owner Contact No:</label>
        <input type="text" id="phone" name="pet_phone" required><br>

        <label for="pet_image">Pet Photo:</label>
        <input type="file" id="age" name="pet_image" required>
        <ul>
          <li>○ Please ensure that the photos are uploaded in landscape mode.</li>
        </ul>
        <br>
        <input name="submit" type="submit" value="Submit">
    </div>
  </section>

  <!--Footer-->
  <footer class="footer" style="background-image: url('./assets/images/footer-bg.jpg')">

    <div class="footer-top section">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo newfont">PawRangers</a>

          <ul class="contact-list">

            <li class="contact-item">
              <ion-icon name="location-outline" aria-hidden="true"></ion-icon>

              <address class="address">
                <a
                  href="https://www.google.com/maps/place/Bhosari,+Pimpri-Chinchwad,+Maharashtra/data=!4m2!3m1!1s0x3bc2c780c24d3757:0xcf7459421a58fa5b?sa=X&ved=1t:242&ictx=111">Sco
                  No.3 Adrash Nagar Chandigarh IND 160050</a>
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