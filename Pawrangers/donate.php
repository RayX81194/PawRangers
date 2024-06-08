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


  <title>PawRangers - Donate</title>
  <meta name="title" content="PawRangers - A Dog Adoption Website">
  <meta name="description" content="This is an dog adoption website">


  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
  <link rel="stylesheet" href="style1.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Bangers&family=Carter+One&family=Nunito+Sans:wght@400;700&display=swap"
    rel="stylesheet">
  <link rel="preload" as="image" href="./assets/images/donate.jpg">
  <style>
    .donate {
      margin-top: 3%;
      margin-left: 28%;
      justify-content: center;
      width: 500px;
      height: 480px;
      background-color: rgb(255, 255, 255);
      border-radius: 15px;
      box-shadow: 0 1px 20px rgba(0,0,0,.1);
    }

    .donate input {
      width: 440px;
      height: 40px;
      margin-left: 30px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    .headings {
      padding: 5px;
      font-size: 2rem;
      margin-left: 20px;
    }

    .amount {
      display: flex;
    }

    .price {
      border: 1px solid black;
      border-radius: 3px;
      padding: 5px;
      padding-left: 30px;
      padding-right: 30px;
      margin-left: 20px;
      margin-right: 10px;
      transition: linear 0.1s;
    }

    .price:hover {
      color: white;
      background-color: black;
    }

    .last {
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
    }

    .new1btn {
      background-color: #ED6335;
      box-shadow: 0 0 10px 0 #d7d2d2;
      color: var(--white);
      max-width: max-content;
      padding: 10px 170px;
      font-size: 18px;
      margin: 27px;
      font-weight: var(--fw-700);
      border-radius: 15px;
      transition: ease 0.1s;
    }

    .new1btn:hover {
      background-color: #ab360f;
    }
    
  </style>

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

  <section class="section brand has-bg-image" aria-label="brand" style="background-image: url('./assets/images/donate.jpg')">
    <div class="container">

    <h2 class="h2 section-title">
    Support Our Furry Friends: Donate Today!
      </h2>
      <h2 class="text-center text-3xl">
      Your contribution helps provide shelter, food, and care for pets awaiting their forever homes.
      Join us in making a difference and giving these animals a second chance at happiness.
      </h2>
      <div class="donate">
        <br>
        <h1 class="headings">Enter the Amount:</h1>
        <input type="text" placeholder=" Enter amount in ₹">
        <h2 class="headings">Name:</h2>
        <input type="text" name="" id="" placeholder=" Enter your Name">
        <h2 class="headings">Email Address</h2>
        <input type="email" name="" id="" placeholder=" Enter your email">
        <a href="gateway.php" class="new1btn">Donate Now</a>
        <div class="last">
          <p>By donating you agree to our ToS and <a href="#" style="text-decoration:underline;color: #4249d6;">Privacy
              Policy</a></p>
        </div>
      </div>
    </div>
  </section>


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
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>