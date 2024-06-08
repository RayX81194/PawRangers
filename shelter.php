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

  
  <title>PawRangers - Shelters</title>
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
  <section class="section brand " aria-label="brand" style="background-image: url('./assets/images/dogbg.jpg')">
        <div class="container">

          <h2 class="h2 section-title">
            Shelters
          </h2>
          <h2 class="text-center text-3xl">
            Explore shelters in our pet adoption website, where compassion meets opportunity. Discover a diverse array of shelters dedicated to rescuing and rehoming animals in need. From large-scale organizations to grassroots efforts, find your perfect match and make a difference in the life of a furry friend today.
          </h2>
        </div>
      </section>


    <!--Cards-->
<div class="grid grid-cols-3 m-4  ">
  <div class="nft">
    <div class='main'>
      <img class='tokenImage' src="assets/images/shel1.jpg"/>
      <br>
      <h1 class="text-5xl">Furever Friends Foundation</h1>
      <p class='description'>Maya Garden Phase 3, VIP Rd, Zirakpur, Punjab 140603</p>
      <div class='tokenInfo'>
        <div class="price">
          <ion-icon name="globe"></ion-icon>
          &nbsp;
          <p><a class="hover:text-blue-600 transition" href="https://www.facebook.com/ifureverfriends">https://www.facebook.com/ifureverfriends</a></p>
        </div>
        <div class="duration">
          <ion-icon name="star"></ion-icon>&nbsp;
          <p>3.7/5</p>
        </div>
      </div>
      <hr />
      <div class='container flex flex-col mx-auto items-start justify-start'>
        <br>
        Rescue of animals in Chandigarh, Tricity. We help with:<br>
*Rescuing injured street animals<br>
*Re-homing abandoned pets<br>
*Sterilisations, vaccinations, awareness programs, and more
        <div class="button">
                <a href="tel:07888416969" class="boxbtn">Contact</a>
                <a href="https://maps.app.goo.gl/HK8Lro9eThAREDy48" class="boxbtn">Location</a>
            </div>
      </div>
    </div>
  </div>

  <div class="nft">
    <div class='main'>
      <img class='tokenImage' src="assets/images/shel2.jpg"/>
      <br>
      <h1 class="text-5xl">Society for the Prevention of Cruelty to Animals</h1>
      <p class='description'>Motor Market, Near, Sector 38 West, Chandigarh 160014</p>
      <div class='tokenInfo'>
        <div class="price">
          <ion-icon name="globe"></ion-icon>
          &nbsp;
          <p><a class="hover:text-blue-600 transition" href="https://societyforanimals.com/">https://societyforanimals.com/</a></p>
        </div>
        <div class="duration">
          <ion-icon name="star"></ion-icon>&nbsp;
          <p>4.2/5</p>
        </div>
      </div>
      <hr />
      <div class='container flex flex-col mx-auto items-start justify-start'>
        <br>
        Established in the year 2002, Society For The Prevention Of Cruelty To Animals in Chandigarh Sector 38 West, Chandigarh is a top player in the category Animal Welfare Organisations in the Chandigarh.
        <div class="button">
                <a href="tel:01722696450" class="boxbtn">Contact</a>
                <a href="https://maps.app.goo.gl/JpkDjmfa1hfE8NbR8" class="boxbtn">Location</a>
            </div>
      </div>
    </div>
  </div>

  <div class="nft">
    <div class='main'>
      <img class='tokenImage' src="assets/images/shel3.jpg"/>
      <br>
      <h1 class="text-5xl">ANIMAL AID NGO - Animal NGO</h1>
      <p class='description'>Rurki, Chando Rd, Kharar, Punjab 140301</p>
      <div class='tokenInfo'>
        <div class="price">
          <ion-icon name="globe"></ion-icon>
          &nbsp;
          <p><a class="hover:text-blue-600 transition" href="https://www.animalaid.org/">https://www.animalaid.org/</a></p>
        </div>
        <div class="duration">
          <ion-icon name="star"></ion-icon>&nbsp;
          <p>3.2/5</p>
        </div>
      </div>
      <hr />
      <div class='container flex flex-col mx-auto items-start justify-start'>
        <br>
        ANIMAL AID NGO in Chandigarh offers refuge to distressed animals, providing care, shelter, and medical aid. Together, we rescue, rehabilitate, and rehome, fostering compassion and making a lasting impact.
        <div class="button">
                <a href="tel:08332000005" class="boxbtn">Contact</a>
                <a href="https://maps.app.goo.gl/r9XbWnrSL8anbiYDA" class="boxbtn">Location</a>
            </div>
      </div>
    </div>
  </div>

  <div class="nft">
    <div class='main'>
      <img class='tokenImage' src="assets/images/shel4.jpg"/>
      <br>
      <h1 class="text-5xl">Whooftown - The Best Dog Care Shelter</h1>
      <p class='description'>Chroma Farm,New Chandigarh, Punjab 140110</p>
      <div class='tokenInfo'>
        <div class="price">
          <ion-icon name="globe"></ion-icon>
          &nbsp;
          <p><a class="hover:text-blue-600 transition" href="https://whooftown.com/">https://whooftown.com/</a></p>
        </div>
        <div class="duration">
          <ion-icon name="star"></ion-icon>&nbsp;
          <p>4.5/5</p>
        </div>
      </div>
      <hr />
      <div class='container flex flex-col mx-auto items-start justify-start'>
        <br>
        We are an organization working for animal welfare, primarily pet and street dogs, through our dog care shelters and animal rescue vehicles. Improving the life and survival conditions of animal is our primary objective;
        <div class="button">
                <a href="tel:8332000005" class="boxbtn">Contact</a>
                <a href=https://maps.app.goo.gl/aep5PfZKauB4gkGe6" class="boxbtn">Location</a>
            </div>
      </div>
    </div>
  </div>

  <div class="nft">
    <div class='main'>
      <img class='tokenImage' src="assets/images/shel5.jpg"/>
      <br>
      <h1 class="text-5xl">Samarpan Animal Shelter</h1>
      <p class='description'>35,Teachers Colony, Yamuna Nagar, Haryana</p>
      <div class='tokenInfo'>
        <div class="price">
          <ion-icon name="globe"></ion-icon>
          &nbsp;
          <p><a class="hover:text-blue-600 transition" href="https://www.samarpanshelter.org/">https://www.samarpanshelter.org/</a></p>
        </div>
        <div class="duration">
          <ion-icon name="star"></ion-icon>&nbsp;
          <p>3.6/5</p>
        </div>
      </div>
      <hr />
      <div class='container flex flex-col mx-auto items-start justify-start'>
        <br>
        Samarpan Animal Shelter, nestled in Haryana, is a sanctuary for animals, offering shelter, and medical assistance. Committed to rescue, rehabilitation, and rehoming, we strive to cultivate compassion and make a lasting impact in our community.
        <div class="button">
                <a href="tel:+917404070463" class="boxbtn">Contact</a>
                <a href="https://maps.app.goo.gl/Ttt7W1sEK4TcVUhR9" class="boxbtn">Location</a>
            </div>
      </div>
    </div>
  </div>

  <div class="nft">
    <div class='main'>
      <img class='tokenImage' src="assets/images/shel6.jpeg"/>
      <br>
      <h1 class="text-5xl">Sri Sai Pet World</h1>
      <p class='description'>G.F 72, Ravinder Singh Sohi Marg, Zirakpur, 140603</p>
      <div class='tokenInfo'>
        <div class="price">
          <ion-icon name="globe"></ion-icon>
          &nbsp;
          <p><a class="hover:text-blue-600 transition" href="https://stardogworld.blogspot.com/">https://stardogworld.blogspot.com/</a></p>
        </div>
        <div class="duration">
          <ion-icon name="star"></ion-icon>&nbsp;
          <p>4.1/5</p>
        </div>
      </div>
      <hr />
      <div class='container flex flex-col mx-auto items-start justify-start'>
        <br>
        We deals in Show Quality All pet breeds of dogs, cats, fish aquarium, small animals, etc. <br>Dedicating to this passion, we are managing a complete pet store in Mohali, Chandigarh & Jalandhar. Please don’t hesitate in approaching us for any guidance related to pets. 
        <div class="button">
                <a href="tel:09888341827" class="boxbtn">Contact</a>
                <a href="https://maps.app.goo.gl/DLnt4nBjE7bhRLB59" class="boxbtn">Location</a>
            </div>
      </div>
    </div>
  </div>


  

  



</div>

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