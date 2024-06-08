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

  
  <title>PawRangers - Home</title>
  <meta name="title" content="PawRangers - A Dog Adoption Website">
  <meta name="description" content="This is an dog adoption website">

  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Carter+One&family=Nunito+Sans:wght@400;700&display=swap" rel="stylesheet"> 
  <link rel="preload" as="image" href="./assets/images/hero-banner.jpg">

</head>

<body id="top">

  

  <header class="header" data-header>
    <div class="container">

      <button class="nav-toggle-btn" aria-label="toggle manu" data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true" class="menu-icon"></ion-icon>
        <ion-icon name="close-outline" aria-label="true" class="close-icon"></ion-icon>
      </button>

      <a href="index.php" class="logo newfont">PawRangers</a>

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

        <a href="login.php" class="navbar-action-btn">Log In</a>
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

  <main>
    <article>

      

      <section class="section hero has-bg-image" id="home" aria-label="home"
        style="background-image: url('./assets/images/hero-banner.jpg')">
        <div class="container" data-aos="zoom-out">

          <h1 class="h1 hero-title">
            <span class="span newfont">Don't buy</span><span class="newfont">Adopt!</span> 
          </h1>

          <p class="hero-text">Find your perfect furry companion today!</p>
          <div class="btn-con">
          <a href="listpet.php" class="btn" id="about">List your Pets</a>
          <a href="shelter.php" class="btn" id="about">Check Shelters</a>
          </div>
        </div>
      </section>

      

      <section class="section category" aria-label="category">
        <div class="container" data-aos="fade-up">

          <h2 class="h2 section-title section-h1">
            <span class="span">Every </span>Breed Available
          </h2>
          

          <ul class="has-scrollbar">

            <li class="scrollbar-item">
              <div class="category-card">

                <figure class="card-banner img-holder" style="--width: 330; --height: 300;">
                  <img src="category-1.jpg" width="330" height="300" loading="lazy" alt="Cat Food"
                    class="img-cover section-im">
                </figure>

                <h3 class="h3">
                  <a href="#" class="card-title">German Shapard</a>
                </h3>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="category-card">

                <figure class="card-banner img-holder" style="--width: 330; --height: 300;">
                  <img src="category-2.jpg" width="330" height="300" loading="lazy" alt="Cat Toys"
                    class="img-cover">
                </figure>

                <h3 class="h3">
                  <a href="#" class="card-title">Husky</a>
                </h3>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="category-card">

                <figure class="card-banner img-holder" style="--width: 330; --height: 300;">
                  <img src="category-3.jpg" width="330" height="300" loading="lazy" alt="Dog Food"
                    class="img-cover">
                </figure>

                <h3 class="h3">
                  <a href="#" class="card-title">Persian Cat</a>
                </h3>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="category-card">

                <figure class="card-banner img-holder" style="--width: 330; --height: 300;">
                  <img src="category-4.jpg" width="330" height="300" loading="lazy" alt="Dog Toys"
                    class="img-cover">
                </figure>

                <h3 class="h3">
                  <a href="#" class="card-title">Ragdoll Cat</a>
                </h3>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="category-card">

                <figure class="card-banner img-holder" style="--width: 330; --height: 300;">
                  <img src="category-5.jpg" width="330" height="300" loading="lazy"
                    alt="Dog Sumpplements" class="img-cover">
                </figure>

                <h3 class="h3">
                  <a href="#" class="card-title">Siamese Cat</a>
                </h3>

              </div>
            </li>

          </ul>

          <h2 class="h2 section-title">
            <span class="span"><br>and </span>many more....
          </h2>

        </div>
      </section>

      

      <section class="section offer" aria-label="offer">
        <div class="container" data-aos="fade-up">

          <ul class="grid-list">

            <li>
              <div class="offer-card has-bg-image img-holder"
                style="background-image: url('./assets/images/offer-banner-1.jpg'); --width: 540; --height: 374;">

                <p class="card-subtitle">Adopt</p>

                <h3 class="h3 card-title">
                  Add a new<span class="span">member</span>
                </h3>
              </div>
            </li>

            <li>
              <div class="offer-card has-bg-image img-holder"
                style="background-image: url('./assets/images/offer-banner-2.jpg'); --width: 540; --height: 374;">
                <p class="card-subtitle">Donate</p>
                <h3 class="h3 card-title">
                  Change lives with<span class="span"> one penny.</span>
                </h3>
              </div>
            </li>

            <li>
              <div class="offer-card has-bg-image img-holder"
                style="background-image: url('./assets/images/offer-banner-3.jpg'); --width: 540; --height: 374;">
                <p class="card-subtitle">Foster</p>
                <h3 class="h3 card-title">
                  Shelter until you<span class="span">can with help.</span>
                </h3>
              </div>
            </li>

          </ul>

        </div>
      </section>

      

      <section class="section service" aria-label="service">
        <div class="container" data-aos="fade-up">

          <img src="./assets/images/service-image.png" width="122" height="136" loading="lazy" alt="" class="img">

          <h2 class="h2 section-title">
            <span class="span">Our </span>Happy Customers
          </h2>

          <ul class="grid-list">

            <li>
              <div class="service-card">

                <figure class="card-icon">
                  <img src="./assets/images/service-icon1.png" width="70" height="70" loading="lazy"
                    alt="service icon">
                </figure>

                <h3 class="h3 card-title">So happy right now!</h3>

                <p class="card-text">
                  “Thrilled to welcome this incredible German Shepherd into my life! Ready for endless love, loyalty, and unforgettable adventures together.”
                </p>

              </div>
            </li>

            <li>
              <div class="service-card">

                <figure class="card-icon">
                  <img src="./assets/images/service-icon1.png" width="70" height="70" loading="lazy"
                    alt="service icon">
                </figure>

                <h3 class="h3 card-title">The website exceeded my expectations</h3>

                <p class="card-text">
                  "The interface was user-friendly, and the adoption process was seamless. The ability to communicate directly with shelters was a plus. Overall, a fantastic resource for anyone looking to adopt a dog."
                </p>

              </div>
            </li>

            <li>
              <div class="service-card">

                <figure class="card-icon">
                  <img src="./assets/images/service-icon1.png" width="70" height="70" loading="lazy"
                    alt="service icon">
                </figure>

                <h3 class="h3 card-title">Great user experience!</h3>

                <p class="card-text">
                  "The layout was intuitive, and the adoption process was straightforward. I appreciated the variety of dogs available and the detailed descriptions. Highly recommend!"
                </p>

              </div>
            </li>

            <li>
              <div class="service-card">

                <figure class="card-icon">
                  <img src="./assets/images/service-icon1.png" width="70" height="70" loading="lazy"
                    alt="service icon">
                </figure>

                <h3 class="h3 card-title">Using this website was a breeze</h3>

                <p class="card-text">
                  "I appreciated the emphasis on adoption ethics and the thorough vetting process for potential adopters. Finding my new companion was a joy thanks to this platform."
                </p>

              </div>
            </li>

          </ul>

        </div>
      </section>

      <section class="section brand" aria-label="brand">
        <div class="container" data-aos="fade-up">

          <h2 class="h2 section-title">
            <span class="span">#Adopt</span>Love
          </h2>

          <h2 class="text-center">
            Approximately 1478 dogs & cats die every day on road in India. PawRangers is on a mission to provide every dog and cat a home before 2035. It’s just one of the many ways PawRangers! gives back and helps you become a part of something larger. Join with our mission and help setting up Pet houses in your surrounding for strays.
          </h2>

        </div>
      </section>

    </article>
  </main>

  

  <footer class="footer" style="background-image: url('./assets/images/footer-bg.jpg')">

    <div class="footer-top section">
      <div class="container"data-aos="fade-up">

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

  <script>
    $(window).on("load",function(){
     $(".loader-wrapper").fadeOut("slow");
    });
  </script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="assets/js/script.js" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  

</body>

</html>