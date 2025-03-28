<?php
// Define the PHP variables
$Title = "Kuari Pass Trek"; // Replace with the actual title of the trek
$canonical_link = "https://himalayayatri.com/kuari-pass-trek.php"; // Replace with the actual canonical link for the trek
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kuari Pass Trek | The Trekker</title>
  <meta name="description" content="Kuari Pass Trek is one of the most breathtaking high-altitude treks in the Indian Himalayas. Nestled in Uttarakhand, this trek offers a mesmerizing blend of landscapes, adventure, and cultural richness. ">
  <meta name="author" content="Fusejack">
  <meta name="keywords" content="Kuari Pass Trek, Kuari Pass, Kuari Pass Trek package,Kuari Pass Trek best time" />

  <!-- Favicons-->
  <link rel="shortcut icon" href="src/img/Favicon.png" type="image/x-icon" />
  <link rel="apple-touch-icon" type="image/x-icon" href="src/img/apple-touch-icon-57x57-precomposed.png" />
  <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="src/img/apple-touch-icon-72x72-precomposed.png" />
  <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="src/img/apple-touch-icon-114x114-precomposed.png" />
  <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="src/img/apple-touch-icon-144x144-precomposed.png" />


  <!-- Mobile Specific Metas -->
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no">
  <!---------------------------------------------- Meta ---------------------------------------->
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-touch-fullscreen" content="yes" />
  <meta name="distribution" content="Global" />
  <meta name="doc-type" content="Public" />
  <meta name="classification" content="<?php echo $meta_keywords ?>" />
  <link rel="canonical" href="<?php echo  $canonical_link ?>" />
  <meta property="og:locale" content="en_GB" />
  <meta property="og:type" content="Trekking, Travel, Camping, Packages, Entertainment, Tours, Fitness, Hiking, Adventure, Yatra" />
  
  
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <meta name="robots" content="index, follow" />
  <meta name="googlebot" content="index, follow" />
  <meta name="yahooseeker" content="index, follow" />
  <meta name="yandex" content="index, follow" />
  <meta name="msnbot" content="index, follow" />
  <meta name="language" content="english" />
  <meta name="revisit-after" content="7 days" />
  
  <meta http-equiv="expires" content="never" />

  <meta name="country" content="india" />






  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="css/package.scss" type="text/css" />
  <link rel="stylesheet" href="css/package.css" type="text/css" />
  <link rel="stylesheet" href="css/footer.css" type="text/css" />
  <link rel="stylesheet" href="css/header.css" type="text/css" />
  <link rel="stylesheet" href="css/new-Main.css" type="text/css" />
  <link rel="stylesheet" href="css/Main.css" type="text/css" />

  <!-- Slick Slider -->
  <link rel="stylesheet" type="text/css" href="src/slick/slick-theme.css" />
  <link rel="stylesheet" type="text/css" href="src/slick/slick.css" />

  <!--calendar-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css" rel="stylesheet" />

  <!-- sweet alert -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.13.0/sweetalert2.min.css" />

  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" type="text/css" href=""css/fontawesome-free/css/all.min.css"> -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />


  




  




</head>

<body>
  <script>
    document.addEventListener('scroll', function() {
      const nav = document.querySelector('.new-nav-style');
      if (window.scrollY > 150) {
        nav.style.backgroundColor = 'white'; // Change to your desired color
      } else {
        nav.style.backgroundColor = 'transparent'; // Original color
      }
    });
  </script>


  <style>
    .nav-link-center {
      display: flex;
      /* Enable Flexbox */
      align-items: center;
      /* Vertically center the content */
      text-decoration: none;
      /* Remove underline from link */
      color: inherit;
      height: 75px;
      margin-right: 20px;
      /* Inherit text color */
    }

    .nav-link-center img {
      margin-right: 5px;
      /* Space between image and text */
    }

    .nav-link-center img:hover {
      transform: scale(1.2);
      /* Space between image and text */
    }

    .nav-link-center p {
      margin: 0;

      color: black !important;
      /* Remove default margin from paragraph */
    }

    .sticky_nav_icon_continer .nav-item p,
    .sticky_nav_icon_continer .nav-item span {
      margin: 0;
      font-size: 0.9rem;
      font-weight: bold;
      margin-right: 5px;
      white-space: nowrap;
    }

    .dropdown-item:hover {
      text-emphasis-color: blue;
      background-color: #ff0000;
    }
  </style>
  <?php include_once("header.php"); ?>



  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <!-- Lightbox2 CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">





                                                                              <!-- Gallery -->

  <div class="gallery-container">
    <!-- Main Image -->
    <div class="gallery-main">
      <a href="img/packageImage/kuari-pass-trek.jpg" data-lightbox="trek-gallery">
        <img src="img/packageImage/kuari-pass-trek.jpg" alt="Kauri Pass Trek">
      </a>
    </div>

    <!-- Side Images -->
    <div class="gallery-side">
      <a href="img/packageImage/kuari-pass-trek-1.jpg" data-lightbox="trek-gallery">
        <img src="img/packageImage/kuari-pass-trek-1.jpg" alt="Kuari Pass Trek">
      </a>
      <a href="img/packageImage/kuari-pass-trek-2.jpg" data-lightbox="trek-gallery">
        <img src="img/packageImage/kuari-pass-trek-2.jpg" alt="Kuari Pass Trek">
      </a>
      <a href="img/packageImage/kuari-pass-trek-3.jpg" data-lightbox="trek-gallery">
        <img src="img/packageImage/kuari-pass-trek-3.jpg" alt="Kuari Pass Trek">
      </a>
      <a href="img/packageImage/kuari-pass-trek-4.jpg" data-lightbox="trek-gallery">
        <img src="img/packageImage/kuari-pass-trek-4.jpg" alt="Kuari Pass Trek">
      </a>
    </div>

    <!-- Gallery Button (Include Hidden Links to All Images) -->
    <a style="color:white" data-lightbox="trek-gallery" class="gallery-btn">📷 Gallery</a>


  </div>

  <style>
    .gallery-container {
      display: flex;
      gap: 5px;
      align-items: stretch;
      /* Make children stretch to the container's height */
      height: 550px;
      /* Use fixed height to ensure both sides are equal */
      position: relative;
    }

    .gallery-main {
      flex: 2;
      overflow: hidden;
      /* Remove min-height so it fills the parent's 550px height */
    }

    .gallery-main img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      transition: transform 0.3s ease-in-out;
    }

    .gallery-main img:hover {
      transform: translateY(-2px);
      /* Moves the image up by 10px */
    }

    .gallery-side img:hover {
      transform: translateY(-2px);
      /* Moves the image up by 10px */
    }

    .gallery-side {
      flex: 1;
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      grid-template-rows: repeat(2, 1fr);
      /* Create 2 rows */
      gap: 5px;
      /* Remove align-self since children will now fill the container's height */
      height: 100%;
      /* Fill full height of .gallery-container */
    }

    .gallery-side a {
      display: flex;
      width: 100%;
      height: 100%;
    }

    .gallery-side img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 5px;
      display: block;
    }

    .gallery-btn {
      position: absolute;
      top: 10px;
      right: 10px;
      background: rgba(0, 0, 0, 0.6);
      color: white;
      padding: 5px 10px;
      border-radius: 5px;
      cursor: pointer;
      text-decoration: none;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .gallery-side {
        display: none;
      }

      .gallery-container {
        flex-direction: column;
        height: auto;
      }

      .gallery-main {
        height: 100vh;
      }

      .gallery-main img {
        height: 100%;
        width: 100%;
        object-fit: cover;
      }
    }


    /* Responsive */
    @media (max-width: 768px) {
      .gallery-side {
        display: none;
      }

      .gallery-container {
        flex-direction: column;
        min-height: 0vh;
        /* Keep space below images */
      }

      .gallery-main {
        height: 100vh;
      }

      .gallery-main img {
        height: 100%;
        width: 100%;
        object-fit: cover;
      }
    }
  </style>



                                                                                 <!-- gallery Button carousel -->



  <div class="slider-container">
    <!-- Close Button -->
    <button class="slider-close">×</button>

    <!-- Images -->
    <img src="img/packageImage/kuari-pass-trek.jpg" alt="Kuari Pass Trek" class="active">
    <img src="img/packageImage/kuari-pass-trek-1.jpg" alt="Kuari Pass Trek">
    <img src="img/packageImage/kuari-pass-trek-2.jpg" alt="Kuari Pass Trek">
    <img src="img/packageImage/kuari-pass-trek-3.jpg" alt="Kuari Pass Trek">

    <!-- Navigation Buttons -->
    <button class="slider-nav prev">❮</button>
    <button class="slider-nav next">❯</button>
  </div>


  <style>
    /* Slider container */
    .slider-container {
      display: none;
      /* Hidden initially */
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 50vw;
      /* Half of the viewport width */
      height: 50vh;
      /* Half of the viewport height */
      background-color: #fff;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
      border-radius: 10px;
      overflow: hidden;
      z-index: 1000;
    }

    /* Slider images */
    .slider-container img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: none;
      /* Hide all images initially */
    }

    /* Show the active image */
    .slider-container img.active {
      display: block;
    }

    /* Navigation buttons */
    .slider-nav {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background-color: rgba(0, 0, 0, 0.5);
      color: #fff;
      border: none;
      padding: 10px;
      cursor: pointer;
      z-index: 1001;
    }

    .slider-nav.prev {
      left: 10px;
    }

    .slider-nav.next {
      right: 10px;
    }

    /* Close button */
    .slider-close {
      position: absolute;
      top: 10px;
      right: 10px;
      background-color: rgba(0, 0, 0, 0.5);
      color: #fff;
      border: none;
      padding: 5px 10px;
      cursor: pointer;
      z-index: 1001;
    }

    @media (max-width: 768px) {
      .slider-container {
        width: 80vw;
        /* 80% of the viewport width for smaller screens */
        height: 50vh;
        /* Keep height the same or adjust as needed */
      }
    }
  </style>

                                                                                              <!-- Slider Container -->


  <script>
    // JavaScript for Slider Functionality
    const sliderContainer = document.querySelector('.slider-container');
    const images = document.querySelectorAll('.slider-container img');
    const prevButton = document.querySelector('.slider-nav.prev');
    const nextButton = document.querySelector('.slider-nav.next');
    const closeButton = document.querySelector('.slider-close');
    const galleryButton = document.querySelector('.gallery-btn');

    let currentIndex = 0;

    // Function to show the slider
    galleryButton.addEventListener('click', () => {
      sliderContainer.style.display = 'block';
    });

    // Function to close the slider
    closeButton.addEventListener('click', () => {
      sliderContainer.style.display = 'none';
    });

    // Function to show the next image
    nextButton.addEventListener('click', () => {
      images[currentIndex].classList.remove('active');
      currentIndex = (currentIndex + 1) % images.length;
      images[currentIndex].classList.add('active');
    });

    // Function to show the previous image
    prevButton.addEventListener('click', () => {
      images[currentIndex].classList.remove('active');
      currentIndex = (currentIndex - 1 + images.length) % images.length;
      images[currentIndex].classList.add('active');
    });
  </script>







  <!--heading title -->

  <h1 class="responsive-heading">Kuari Pass Trek</h1>

  <style>
    h1 {
      position: relative;
      font-weight: 1000 !important;
      text-align: center;
      font-family: 'Arial', sans-serif;
      font-size: 4em;
      color: black !important;
      /* White text */

      backdrop-filter: blur(10px);
      /* Glass effect */
      -webkit-backdrop-filter: blur(10px);
      /* Safari support */
      padding: 20px 40px;
      margin-top: 20px !important;
      border-radius: 12px;

    }
  </style>
  <style>
    .responsive-heading {
      margin: 0;
      padding: 5px;
      font-size: 32px;
      /* Default size for larger screens */
    }

    /* Adjust font size for smaller screens */
    @media only screen and (max-width: 600px) {
      .responsive-heading {
        font-size: 24px;
        /* Smaller font size for smaller screens */
      }
    }
  </style>






                                                                                    <!-- price card small screens-->



  <div id="newPackageCard" class="package-box">
    <div class="">
      <div class="price-wrapper">
        <div>
          <small>Starting from <span class="old-price">&#8377; 8399</span></small><br>
          <span class="current-price">&#8377; 6,999</span> <small style="font-size:0.8rem">Incl. All</small>
        </div>
        <div class="offer-badge">20%</div>
      </div>
      <hr>
      <div class="package-details" style="margin-top: 5px;margin-bottom: 5px; font-size: 14px;">
        <span style="font-weight: bold;">Package Option:</span> INR 8999/- Rishikesh to Rishikesh
      </div>



      <!-- Button container for horizontal alignment -->
      <div class="button-group">
        <a href="#contactUs" class="quote-button">Get Quote</a>
        <a style="margin-top:5px" href="path/to/your.pdf" target="_blank" class="pdf-button">Get Pdf</a>
      </div>

    </div>
  </div>



  <style>
    .package-box {
      position: relative;
      margin: 200px auto 0;
      /* Center horizontally with a top margin */
      width: 350px;
      background: rgba(255, 255, 255, 0.3);
      /* Semi-transparent white */
      backdrop-filter: blur(10px);
      /* Glass-like blur effect */
      border-radius: 10px;
      border: 1px solid rgba(255, 255, 255, 0.3);
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 15px;
      color: black;
    }

    .price-wrapper {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .current-price {
      font-size: 30px;
      font-weight: bold;
      color: black;
    }

    .offer-badge {
      background: linear-gradient(90deg, red, darkred);
      color: white;
      padding: 3px 8px;
      border-radius: 5px;
      font-size: 12px;
      animation: gradientMove 3s infinite linear;
    }

    @keyframes gradientMove {
      0% {
        background-position: 0% 50%;
      }

      50% {
        background-position: 100% 50%;
      }

      100% {
        background-position: 0% 50%;
      }
    }

    .inquiry-button {
      display: block;
      width: 50%;
      background: #ff5722;
      color: white;
      text-align: center;
      padding: 8px;
      border-radius: 5px;
      text-decoration: none;
      margin: 5px auto 0;
    }

    .old-price {
      text-decoration: line-through;
      color: gray;
    }

    /* Responsive Styles for Smaller Screens */
    @media (max-width: 768px) {
      .package-box {
        width: 300px;
        padding: 8px;
      }

      .current-price {
        font-size: 25px;
      }

      .offer-badge {
        font-size: 8px;
        padding: 2px 6px;
      }

      .inquiry-button {
        width: 40%;
        padding: 6px;
      }
    }

    /* Hide the card on larger screens */
    @media (min-width: 768px) {
      .package-box {
        display: none;
      }
    }
  </style>

  <style>
    .package-box {
      position: relative;
      margin: 20px auto 0;
      /* top margin 200px, auto for left/right */
      width: 350px;
      background: white;
      align-content: center;
      border-radius: 10px;

    }

    .price-wrapper {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .current-price {
      font-size: 24px;
      font-weight: bold;
      color: #e65100;
    }

    .offer-badge {
      background: linear-gradient(90deg, #ff5722, #ffcc80);
      color: white;
      padding: 3px 8px;
      border-radius: 5px;
      font-size: 12px;
      animation: gradientMove 3s infinite linear;
    }

    @keyframes gradientMove {
      0% {
        background-position: 0% 50%;
      }

      50% {
        background-position: 100% 50%;
      }

      100% {
        background-position: 0% 50%;
      }
    }

    .inquiry-button {
      display: block;
      width: 50%;
      background: #ff5722;
      color: white;
      text-align: center;
      padding: 8px;
      border-radius: 5px;
      text-decoration: none;
      margin: 5px auto 0;
    }

    .old-price {
      text-decoration: line-through;
      color: gray;
    }

    /* Responsive Styles for Smaller Screens */
    @media (max-width: 768px) {
      .package-box {
        width: 300px;
        padding: 8px;
      }

      .current-price {
        font-size: 25px;
      }

      .offer-badge {
        font-size: 8px;
        padding: 2px 6px;
      }

      .inquiry-button {
        width: 40%;
        padding: 6px;
      }
    }


  </style>


  <!-- Lightbox2 JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
  <style>
    .price-box {
      width: 450px;
      /* Increased width */
      text-align: center;
      border: 3px solid #d9534f;
      padding: 25px;
      border-radius: 8px;
      background-color: #fff;
      box-shadow: 4px 4px 12px rgba(0, 0, 0, 0.2);
    }

    .price {
      font-size: 32px;
      font-weight: bold;
      color: #d9534f;
    }

    .small-text {
      color: #ff9800;
      font-size: 10px;
      font-weight: bold;
    }

    .details {
      text-align: left;
      font-size: 16px;
      margin: 15px 0;
      color: #333;
    }

    .details p {
      display: flex;
      align-items: center;
      gap: 10px;
      margin: 8px 0;
      font-size: 16px;
    }

    .buttons {
      display: flex;
      justify-content: space-between;
      margin: 20px 0;
    }

    .btn {
      flex: 1;
      padding: 12px;
      text-decoration: none;
      font-weight: bold;
      border: 2px solid #d9534f;
      color: #d9534f;
      background-color: #fff;
      border-radius: 5px;
      cursor: pointer;
      margin: 0 5px;
      font-size: 16px;
    }

    .btn:hover {
      background-color: #d9534f;
      color: #fff;
    }

    .book-now {
      display: block;
      width: 100%;
      background-color: #ff9800;
      color: white;
      padding: 12px;
      font-weight: bold;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 18px;
    }

    .book-now:hover {
      background-color: #e68a00;
    }

    /* Container to align buttons horizontally */
    .button-group {
      display: flex;
      align-items: center;
      gap: 10px;
      /* Adjust the gap between buttons as needed */
      width: 100%;
      /* Ensure the container takes full width */
    }

    /* Styling for Get Quote button */
    .quote-button {
      flex: 1;
      /* Take up remaining space */
      padding: 8px 18px !important;
      background-color: #007bff;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
      font-size: 14px;
      text-align: center;
      /* Center text horizontally */
    }

    /* Styling for PDF button */
    .pdf-button {
      flex: 1;
      /* Take up remaining space */
      padding: 8px 20px;
      background-color: #f0f0f0;
      color: #333;
      text-decoration: none;
      border: 1px solid red;
      /* Changed border color to red */
      border-radius: 4px;
      font-size: 12px;
      text-align: center;
      /* Center text horizontally */
    }
  </style>



                                                            <!-- price card large screens-->


  <div id="packageCard" class="sticky-package">
    <div class="package-container-price">
      <div class="pricing-wrapper">
        <div>
          <small>Starting from <span class="crossed-price">&#8377; 8399</span></small><br>
          <span class="pricing-amount">&#8377; 6,999</span> <small>Incl. All</small>
        </div>
        <div class="discount-badge">20%</div>
      </div>
      <hr style="margin-bottom: 5px; margin-top: 5px">
      <div class="package-details" style="margin-bottom: 5px; font-size: 14px;">
        <span style="font-weight: bold;">Package Option:</span> INR 8,999/- Rishikesh to Rishikesh
      </div>

      <!-- Button container for horizontal alignment -->
      <div class="button-group">
        <a href="#contactUs" class="quote-button">Get Quote</a>
        <a style="margin-top:5px;" href="path/to/your.pdf" target="_blank" class="pdf-button">Get Pdf</a>
      </div>




    </div>
  </div>
  <style>
    /* CSS */
    .help-section {
      text-align: center;
      position: relative;
      margin: 10px auto;
      max-width: 400px;
      /* adjust as needed */
    }

    /* Thin colored line at the top */
    .help-line {
      width: 100%;
      height: 1px;
      background-color: #FFA500;
      /* Adjust color as needed */
      margin-bottom: 15px;
    }

    /* "Need Help" heading */
    .help-title {
      margin: 0;
      font-size: 15px;
      color: #1D4B8E;
      /* Adjust color as needed */
      font-weight: 600;
    }

    /* "Talk To Our Mountain Expert" subheading */
    .help-subtitle {
      margin: 3px 0 10px;
      font-size: 12px;
      color: #1D4B8E;
      /* Adjust color as needed */
    }

    /* Phone contact section */
    .help-contact {
      font-size: 12px;
      color: #6D6D6D;
      /* Adjust color as needed */
    }

    /* Example styling for phone icon (if not using an icon font) */
    .phone-icon {
      margin-right: 5px;
    }
  </style>

  <script>
    window.addEventListener("scroll", function() {
      var packageCard = document.getElementById("packageCard");
      var scrollPosition = window.scrollY;
      var windowHeight = window.innerHeight;
      var documentHeight = document.documentElement.scrollHeight;
      var bottomThreshold = 400; // Adjust this value as needed

      if (scrollPosition > 400 && (scrollPosition + windowHeight < documentHeight - bottomThreshold)) {
        packageCard.style.display = "block";
      } else {
        packageCard.style.display = "none";
      }
    });
  </script>


  <style>
    @media (max-width: 768px) {
      #packageCard {
        display: none !important;
      }
    }

    .sticky-package {
      position: fixed;
      right: 10%;
      top: 86%;
      transform: translateY(-50%);
      z-index: 999;
    }

    .package-container-price {
      width: 350px;
      background: white;
      padding: 10px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .pricing-wrapper {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .pricing-amount {
      font-size: 24px;
      font-weight: bold;
      color: #e65100;
    }

    .discount-badge {
      background: linear-gradient(90deg, #ff5722, #ffcc80);
      color: white;
      padding: 3px 8px;
      border-radius: 5px;
      font-size: 12px;
      animation: gradientMove 3s infinite linear;
    }

    @keyframes gradientMove {
      0% {
        background-position: 0% 50%;
      }

      50% {
        background-position: 100% 50%;
      }

      100% {
        background-position: 0% 50%;
      }
    }

    .quote-button {
      display: block;
      width: 50%;
      background: #ff5722;
      color: white;
      text-align: center;
      padding: 8px;
      border-radius: 5px;
      text-decoration: none;
      margin: 5px auto 0;
    }

    .crossed-price {
      text-decoration: line-through;
      color: gray;
    }

    /* Responsive Styles for Smaller Screens */
    @media (max-width: 768px) {
      .sticky-package {
        right: 0%;
        top: 85%;
      }

      .package-container-price {
        width: 300px;
        padding: 8px;
      }

      .pricing-amount {
        font-size: 25px;
      }

      .discount-badge {
        font-size: 8px;
        padding: 2px 6px;
      }

      .quote-button {
        width: 40%;
        padding: 6px;
      }
    }
  </style>



  <style>
    .enquire-btn {
      margin-top: 20px;
      padding: 10px 20px;
      background-color: orange;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      transition: background 0.3s;
      border-radius: 25px;
    }

    .enquire-btn:hover {
      background-color: #cc5200;
    }
  </style>







                                <!-- details highlights-->

  <div class="tour-details">
    <div class="detail">
      <i class="icon fas fa-calendar-day"></i>
      <p class="label">Days</p>
      <p class="value">6</p>
    </div>
    <div class="detail">
      <i class="icon fas fa-route"></i>
      <p class="label">Distance</p>
      <p class="value">26 Km</p>
    </div>
    <div class="detail">
      <i class="icon fas fa-mountain"></i>
      <p class="label">Altitude</p>
      <p class="value">12,750 Ft</p>
    </div>
    <div class="detail">
      <i class="icon fas fa-signal"></i>
      <p class="label">Difficulty Level</p>
      <p class="value">Moderate</p>
    </div>

    <div class="detail">
      <i class="icon fas fa-map-marker-alt"></i>
      <p class="label">Location</p>
      <p class="value">Uttarakhand, India</p>
    </div>
    <div class="detail">
      <i class="icon fas fa-star"></i>
      <p class="label">Rating</p>
      <p class="value">4.8</p>
    </div>

    <div class="detail">
      <i class="icon fa-solid fa-flag"></i>
      <p class="label">Start</p>
      <p class="value">Joshimath</p>
    </div>
    <div class="detail">
      <i class="icon fa-solid fa-flag"></i>
      <p class="label">End</p>
      <p class="value">Joshimath</p>
    </div>

  </div>

  <style>



    .tour-details {
      display: flex;
      flex-wrap: wrap;
      /* Allow items to wrap to next line on smaller screens */
      justify-content: space-between;
      gap: 20px;
      padding: 30px;
      box-sizing: border-box;
    }

    .detail {
      background: #fff;
      border-radius: 12px;
      padding: 15px;
      text-align: center;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      flex: 1;
      /* Allow the items to grow and shrink depending on screen width */
      max-width: 180px;
      /* Limit the maximum size */
      transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
      cursor: pointer;
    }

    @media (max-width: 768px) {

      /* For tablets and smaller devices */
      .detail {
        flex: 0 0 30%;
        /* 3 items per row */
        max-width: none;
        /* Remove max-width to allow 3 items in row */
      }
    }

    @media (max-width: 480px) {

      /* For mobile phones */
      .detail {
        flex: 0 0 30%;
        /* 3 items per row on phones */
      }
    }


    .detail:hover {
      transform: translateY(-5px) rotate(2deg);
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
      background-color: #ffebc1;
      /* Light orange hover effect */
    }

    /* Icon styles for Start and End */
    .detail i {
      font-size: 2rem;
      margin-bottom: 8px;
      transition: color 0.3s ease;
    }

    .detail .fa-map-marker-alt {
      /* Start icon color */
      color: #ff5722;
      /* Orange color */
    }

    .detail .fa-flag-checkered {
      /* End icon color */
      color: #ff5722;
      /* Green color */
    }

    /* Optional: Hover effect to change icon color */
    .detail i:hover {
      color: #e64a19;
      /* Darker color on hover for both icons */
    }


    .detail .icon {
      font-size: 1.5rem;
      margin-bottom: 8px;
      background: linear-gradient(135deg, #ff5722, #ff9800);
      /* Gradient effect for vibrant icons */
      -webkit-background-clip: text;
      color: transparent;
      font-weight: bold;
    }

    .detail .icon.days {
      background: linear-gradient(135deg, #d32f2f, #f44336);
    }

    .detail .icon.distance {
      background: linear-gradient(135deg, #ff9800, #ff5722);
    }

    .detail .icon.altitude {
      background: linear-gradient(135deg, #8bc34a, #4caf50);
    }

    .detail .icon.difficulty {
      background: linear-gradient(135deg, #ffeb3b, #fbc02d);
    }

    .detail .icon.start {
      background: linear-gradient(135deg, #2196f3, #1976d2);
    }

    .detail .icon.end {
      background: linear-gradient(135deg, #673ab7, #512da8);
    }

    .detail .icon.location {
      background: linear-gradient(135deg, #ff4081, #e91e63);
    }

    .detail .icon.rating {
      background: linear-gradient(135deg, #9c27b0, #ba68c8);
    }

    .detail .icon.reviews {
      background: linear-gradient(135deg, #00bcd4, #0097a7);
    }

    .detail .label {
      font-size: 0.9rem;
      font-weight: 500;
      color: #d32f2f;
      /* Dark red for label */
    }

    .detail .value {
      font-size: 1.1rem;
      color: rgb(0, 0, 0);
      /* Vibrant red for the values */
      font-weight: 600;
    }

    @media (max-width: 1024px) {
      .tour-details {
        flex-direction: row;
        justify-content: space-around;
        gap: 15px;
      }

      .detail {
        width: 22%;
        /* 3 items in a row */
        padding: 12px;
      }


      .detail .icon {
        font-size: 1.3rem;
      }

      .detail .label {
        font-size: 0.85rem;
      }

      .detail .value {
        font-size: 1rem;
      }
    }

    @media (max-width: 768px) {
      .tour-details {
        flex-direction: row;
        justify-content: space-between;
        gap: 10px;
      }

      .detail {
        width: 22%;
        /* 4 items per row even for small screens (mobiles) */
        padding: 10px;
        font-size: 0.8rem;
        /* Reduced size for smaller screens */
      }

      .detail .icon {
        font-size: 1.2rem;
      }

      .detail .label {
        font-size: 0.75rem;
      }

      .detail .value {
        font-size: 0.9rem;
      }
    }

    @media (max-width: 480px) {
      .tour-details {
        flex-direction: row;
        justify-content: space-between;
        gap: 5px;
      }

      .detail {
        width: 30%;
        /* Keep 4 items in a row on very small screens */
        padding: 8px;
      }

      .detail .icon {
        font-size: 1.1rem;
      }

      .detail .label {
        font-size: 0.7rem;
      }

      .detail .value {
        font-size: 0.9rem;
      }
    }
  </style>
 
 
 
 
 
 
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const targetElement = document.getElementById("HIGHLIGHTS"); // Replace with your target element's ID
      const horizontalNavbar = document.getElementById("horizontal-navbar");

      // Hide the navbar initially
      horizontalNavbar.style.display = "none";

      window.addEventListener("scroll", function() {
        const targetPosition = targetElement.getBoundingClientRect().top + window.scrollY;

        if (window.scrollY >= targetPosition) {
          horizontalNavbar.style.display = "flex"; // Show the navbar
        } else {
          horizontalNavbar.style.display = "none"; // Hide the navbar
        }
      });
    });
  </script>

  <style>
    /* Hide Horizontal Navbar on Large Screens */
    .horizontal-navbar {
      display: none;
    }

    /* Media Query for Small Screens */
    @media (max-width: 768px) {

      /* Show horizontal navbar on small screens */
      .horizontal-navbar {
        display: flex;
        position: sticky;
        top: 0;
        z-index: 2000;
        /* Ensures it stays on top */
        overflow-x: auto;
        /* Allows horizontal scrolling */
        white-space: nowrap;
        /* Keeps buttons in a single line */
        background-color: #f8f9fa;
        /* Background color for the navbar */
        padding: 10px;
      }

      /* Style each link as a button */
      .horizontal-navbar .nav-button {
        display: inline-block;
        color: #fff;
        background-color: #FF9100;
        /* Change to preferred color */
        padding: 10px 5px;
        margin: 0 5px;
        border-radius: 5px;
        text-decoration: none;
        font-size: 0.6rem;
        white-space: nowrap;
        /* Prevents wrapping of text */
      }

      /* Hover effect for buttons */
      .horizontal-navbar .nav-button:hover {
        background-color: #0056b3;
        /* Darker shade on hover */
      }
    }
  </style>
  <style>
    html {
      scroll-behavior: smooth;
    }

    #availabe_detail_btn {
      background-color: #4CAF50;
      /* Primary green background */
      color: #000;
      /* White text */
      border: 2px solid #388E3C;
      /* Dark green border */
      border-radius: 8px;
      /* Rounded corners */
      padding: 12px 24px;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
      /* Subtle shadow */
      position: relative;
      transition: background-color 0.3s, transform 0.3s;
    }

    #availabe_detail_btn:hover,
    #availabe_detail_btn:focus {
      background-color: #388E3C;
      /* Darker green on hover */
      color: #000;
      /* Ensure text remains white */
      transform: translateY(-2px);
      box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.25);
      /* Elevated shadow */
    }

    #availabe_detail_btn:active {
      background-color: #2E7D32;
      /* Darkest green on click */
      transform: scale(0.98);
    }

    /* Adding a calendar icon */
    #availabe_detail_btn::before {
      content: "\1F4C5";
      /* Calendar icon */
      font-size: 18px;
      margin-right: 8px;
      display: inline-block;
      vertical-align: middle;
    }
  </style>

  <script>
    // Function to handle scroll event
    function handleScroll() {
      const navbar = document.getElementById('navbar-container');
      const showPoint = 500; // Adjust this value to control when the navbar should appear

      // Calculate the hidePoint as 100px above the total document height
      const documentHeight = document.documentElement.scrollHeight;
      const hidePoint = documentHeight - window.innerHeight - 600;

      // Check the screen width and adjust the navbar visibility
      if (window.innerWidth <= 1500) {
        navbar.style.display = 'none'; // Always hide navbar on small screens
      } else {
        if (window.scrollY > hidePoint) {
          navbar.style.display = 'none'; // Hide the navbar
        } else if (window.scrollY > showPoint) {
          navbar.style.display = 'block'; // Show the navbar
        } else {
          navbar.style.display = 'none'; // Ensure the navbar is hidden if above the showPoint
        }
      }
    }

    // Add event listener for scroll
    window.addEventListener('scroll', handleScroll);

    // Initial check in case the user is already scrolled down
    handleScroll();

    // Optional: Update hidePoint on resize
    window.addEventListener('resize', handleScroll);
  </script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Get all the section IDs and corresponding links
      const sections = document.querySelectorAll('div[id]');
      const navLinks = document.querySelectorAll('.vertical-navbar a');

      // Create an IntersectionObserver to watch the sections
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          const id = entry.target.getAttribute('id');
          const navLink = document.querySelector(`.vertical-navbar a[href="#${id}"]`);

          if (entry.isIntersecting) {
            navLinks.forEach(link => link.classList.remove('active'));
            if (navLink) navLink.classList.add('active');
          } else {
            if (navLink) navLink.classList.remove('active');
          }
        });
      }, {
        threshold: 0.5 // Adjust as needed: percentage of the section that needs to be visible
      });

      // Observe each section
      sections.forEach(section => {
        observer.observe(section);
      });
    });
  </script>


  <style>
    #have_any_quary_box {

      right: 10%;
      position: sticky;
      top: 80px;
      display: block;
    }

    .scroll-offset {
      scroll-margin-top: 180px;

    }

    @media(min-width:768px) {
      .carousel {
        height: 90vh;
      }

      .carousel-item {
        height: 90vh;
      }

      #navbar-container {
        display: none;
      }
    }


    .vertical-navbar {
      margin-top: 80px;
      height: 100%;
      width: 175px;
      position: fixed;
      top: 0;
      display: none;
      background-color: #ebebeb;
      padding-top: 0px;
      justify-items: center;
    }

    .vertical-navbar h2 {
      background-color: #FF9100;
      color: black;
      height: 40px;
      font-size: 1.4rem;
      width: 100%;
      margin-top: -10px;
      text-align: center;
      align-content: center;
      font-weight: bold;
    }


    .vertical-navbar a {
      padding: 4px 10px;
      margin-left: 0px;
      text-decoration: none;
      font-size: 0.8rem;
      color: #575757;
      display: block;
      font-weight: bold;
      position: relative;
      /* To position the dot */
      padding-left: 20px;
      /* text-align: center; */

    }

    .vertical-navbar a.active {
      color: black;
      /* Color when active */
      font-weight: bolder;
      /* Make the font weight bolder */
      text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
      /* Slight text shadow for better readability */
    }


    .vertical-navbar a:hover {
      color: black;

    }

    .vertical-navbar a::before {
      /* Add a dot before each link */
      color: black;
      /* Color of the dot */
      font-size: 20px;
      position: absolute;
      left: 10px;
      /* Space from the left edge */
      top: 50%;
      /* Center vertically */
      transform: translateY(-50%);
      /* Center vertically */
    }

    .golden-button {
      background-color: gold;
      border: none;
      color: black;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      font-size: 0.8rem;
      margin-top: 10px;
      /* Space above the button */
      cursor: pointer;
      border-radius: 5px;
      /* Optional: Rounded corners */
      width: 80%;
      display: block;
      /* Make the button a block-level element to apply centering */
      margin-left: auto;
      /* Centers the button horizontally */
      margin-right: auto;
      font-weight: bold;
      /* Centers the button horizontally */
    }


    .golden-button:hover {
      background-color: darkgoldenrod;
      /* Darker shade on hover */
    }

    .inclusion_detail_big_cards .col-lg-8 .card {
      height: 500px;
      /* Adjust the initial height as needed */

      transition: height 0.5s ease-in-out;
    }

    .inclusion_detail_big_cards .col-lg-4 .card {
      height: 500px;
      /* Keep the existing initial height */

      transition: height 0.5s ease-in-out;
    }

    .card-title {
      font-size: 1.2rem;
      /* Reduced font size */
      font-weight: 600;

      letter-spacing: 1px;
      color: black;
      background: rgba(255, 255, 255, 0.2);
      /* Soft glass effect */
      backdrop-filter: blur(10px);
      padding: 12px 20px;
      border: 2px solid transparent;
      border-radius: 8px;
      display: block;
      /* Full width */
      text-align: center;
      width: 100%;
      /* Ensure full horizontal coverage */
      position: relative;
      overflow: hidden;
    }

    .card-title::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: ;
      z-index: -1;
      border-radius: 8px;
    }

    .card-body p i {
      color: #ff5a13;
      /* Change to your preferred color */
      font-size: 1.2rem;
      /* Adjust size if needed */
      margin-right: 8px;
      /* Space between icon and text */
    }

    .card card-body h4::before {
      content: "✨";
      /* Unicode or custom symbol */
      font-size: 1.3rem;
      position: absolute;
      left: 0;
      top: 0;
      color: #feb47b;
    }
  </style>





                                                            
                                                            <!-- HIGHLIGHTS-->
                                                            
                                                            
  <section id="HIGHLIGHTS" class="inclusion_detail_big_cards scroll-offset">
    <div class="container mt-4">
      <div class="row">



        <!-- Free Tier -->



        <div class="col-lg-8 d-sm-block d-md-block d-lg-block order-3 order-lg-2">
          <div class="card ellipsis mb-5 mb-lg-0">
            <div class="card-body">
              <p style="color: #000;" class="h5 card-title text-center font-weight-bold ">Tour Highlights</p>
              <hr>


              <ul style="list-style: none; padding: 0;">
                <li style="position: relative; padding-left: 20px; margin-bottom: 8px;">
                  <span style=" left: 0; top: 4px; color: #ff5a13; font-size: 1.2em;">&#9679;</span>
                Scenic Views of Himalayan Peaks – Witness breathtaking views of Nanda Devi, Dronagiri, Kamet, and Hathi-Ghoda peaks.
                </li>

                <li style="position: relative; padding-left: 20px; margin-bottom: 8px;">
                  <span style="left: 0; top: 4px; color:#ff5a13; font-size: 1.2em;">&#9679;</span>
              Enchanting Forest Trails – Walk through dense oak, rhododendron, and deodar forests filled with rich flora and fauna.
                </li>

                <li style="position: relative; padding-left: 20px; margin-bottom: 8px;">
                  <span style=" left: 0; top: 4px; color:#ff5a13; font-size: 1.2em;">&#9679;</span>
               Stunning Campsites – Camp in picturesque locations like Chitrakatha, Khullara, and Tali.
                </li>

                <li style="position: relative; padding-left: 20px; margin-bottom: 8px;">
                  <span style=" left: 0; top: 4px; color:#ff5a13; font-size: 1.2em;">&#9679;</span>
           Meadows & Bugyals – Explore lush alpine meadows like Gorson Bugyal, offering stunning landscapes.
                </li>

               <li style="position: relative; padding-left: 20px; margin-bottom: 8px;">
                  <span style=" left: 0; top: 4px; color:#ff5a13; font-size: 1.2em;">&#9679;</span>
         Cultural Encounters – Experience the Garhwali culture and local village life in places like Auli and Joshimath.
                </li>
                
                 <li style="position: relative; padding-left: 20px; margin-bottom: 8px;">
                  <span style=" left: 0; top: 4px; color:#ff5a13; font-size: 1.2em;">&#9679;</span>
            Panoramic Sunrise & Sunset – Capture mesmerizing sunrise and sunset views over snow-capped mountains.
                </li>
                
                 <li style="position: relative; padding-left: 20px; margin-bottom: 8px;">
                  <span style=" left: 0; top: 4px; color:#ff5a13; font-size: 1.2em;">&#9679;</span>
             Moderate Difficulty Level – Suitable for beginners and experienced trekkers alike.
                </li>
                
                 <li style="position: relative; padding-left: 20px; margin-bottom: 8px;">
                  <span style=" left: 0; top: 4px; color:#ff5a13; font-size: 1.2em;">&#9679;</span>
           River Crossings & Bridges – Trek through beautiful streams and bridges, adding adventure to the journey.
                </li>
                
              
                
               
                
               
              </ul>

              <div class="see_more_btn">
                <a>Read more</a>
              </div>
              <div class="fadeout"></div>
            </div>
          </div>
        </div>
        <style>
          .gradient-text {
            background: linear-gradient(45deg, #FFD700, #FF4500, #FF8C00);
            background-size: 200% 200%;
            /* Increases background size for smooth animation */
            color: white;
            display: inline-block;
            animation: moveGradient 3s infinite linear;
            /* Animation applied */
          }

          /* Gradient Animation */
          @keyframes moveGradient {
            0% {
              background-position: 0% 50%;
            }

            50% {
              background-position: 100% 50%;
            }

            100% {
              background-position: 0% 50%;
            }
          }
        </style>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

        <!-- FontAwesome Latest CDN -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <!-- Plus Tier -->
        
        
        
        
                                                                        <!-- Inclusion and Exclusion-->
                                                                        
                                                                        
        <div class="col-lg-4 d-sm-block d-md-block d-lg-block order-3 order-lg-2">
          <div class="card ellipsis mb-5 mb-lg-0">
            <div class="card-body">
              <p style="color: #000;" class="h5 card-title text-center font-weight-bold">Inclusion/Exclusion</p>
              <hr>
              <h5>✅ Inclusions</h5>

              <p><i class="fa-solid fa-hotel"></i> 5 Nights Accommodation during the trek will be provided using Std. Category of camps and Home stay Triple or Quad sharing basis.</p>
              <p><i class="fa-solid fa-utensils"></i>Meals include from Day 1 Dinner to Last Day Breakfast. Meals will be simple vegetarian (Breakfast, Lunch, Tea, Snacks, Soup and Dinner).</p>
              <p><i class="fa-solid fa-user-tie"></i> Experienced Trek Guide and Trekking Crew.</p>
              <p><i class="fa-solid fa-ticket"></i> Forest Permit and entrance fee.</p>
              <p><i class="fa-solid fa-first-aid"></i> Basic First Aid and Medical assistance</p>
              <p><i class="fa-solid fa-mountain"></i> High quality Dome tents, Sleeping bags, Mattress, Gaiters or Crampons if Needed, Liner, Toilet Tents, Dining Tent, Dining table, Camping Stole, Kitchen team</p>
             
             
             
              </br>

              <h5>❌ Exclusions</h5>

               <p><i class="fa-solid fa-utensils"></i> Any Meals /Snacks / Beverages in during Trek.</p>
              <p><i class="fa-solid fa-plane"></i> Any of Cost for Airfare, Train fare.</p>
              <p><i class="fa-solid fa-plane-arrival"></i> Airport pickup & drop</p>
              <p><i class="fa-solid fa-basket-shopping"></i> Any tips, laundry, Phone call, liquors, mineral water, camera fee or any other personal nature expenses.</p>
              <p><i class="fa-solid fa-shield-alt"></i> Any kind of Travel / Health Insurance (each traveller to please carry your own travel / health insurance).</p>
              <p><i class="fa-solid fa-virus"></i> Any kind of medical expenses.</p>
           
              <p><i class="fa-solid fa-bus"></i> Any transportation used during the trek.</p>
              <div class="see_more_btn">
                <a>Read more</a>
              </div>
              <div class="fadeout"></div>
            </div>
          </div>
        </div>

      </div>
      <hr>
    </div>
  </section>




  <style>
    /* Style for the Add-ons section */
    .col-12.mt-3 {
      padding-top: 10px;
    }

    .form-check {
      margin-bottom: 10px;
    }

    .form-check-input {
      margin-right: 10px;
    }

    .form-check-label {
      font-size: 16px;
    }

    #transport_cost_price,
    #bagpack_offloading_price,
    #rental_gears_price {
      color: #FF9100;
    }
  </style>


  <style>
    .details-headings {
      margin-top: 20px;
      text-align: left;
      font-weight: bold;
      color: #FF3D00;
      font-size: 1.2rem;
      text-transform: uppercase;
      letter-spacing: 1px;
      padding-left: 15px;
      border-left: 5px solid #FFD600;
    }
  </style>



  <style>
    /* SUNSET THEME */
    .new-horizontal-navbar {
      display: flex;
      justify-content: center;
      align-items: center;

      padding: 8px;
      border-radius: 12px;
      position: sticky;
      top: 58px;
      z-index: 1000;
      background: linear-gradient(135deg, #FF9800, #FF5722, #D84315);
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    }

    @media(max-width:768px) {
      .new-horizontal-navbar {

        top: 58px;

      }
    }

    /* NAV BUTTON */
    .nav-button {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-decoration: none;
      padding: 6px 12px;
      border-radius: 10px;
      margin: 3px;
      font-size: 12px;
      font-weight: bold;
      color: #fff;
      background: rgba(255, 255, 255, 0.2);
      text-align: center;
      width: 80px;
      transition: 0.3s ease-in-out;
    }

    /* ICON */
    .nav-button i {
      font-size: 18px;
      margin-bottom: 3px;
    }

    /* HOVER EFFECT */
    .nav-button:hover {
      background: rgba(255, 255, 255, 0.4);
      transform: translateY(-3px);
    }

    /* NOTIFICATION BADGE */
    .badge {
      position: absolute;
      top: 3px;
      right: 8px;
      background: red;
      color: white;
      font-size: 10px;
      padding: 2px 6px;
      border-radius: 50%;
      font-weight: bold;
    }
  </style>
                                                                               
                                                                               
                                                                               
                                                                               
                                                                               
                                                                                <!-- Available dates-->

  <!-- Sticky Available Dates Button -->
  <button id="available-dates-btn" class="sticky-button">📅 Available Dates</button>

  <!-- Hidden Section for Available Dates -->
  <div id="available-dates-section" class="dates-section">
    <h2 style="font-size:1.5rem !important;">Available Dates</h2>

    <div class="accordion" id="datesAccordion">

      <!-- February 2025 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingFeb">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFeb" aria-expanded="true" aria-controls="collapseFeb">
            February 2025
          </button>
        </h2>
        <div id="collapseFeb" class="accordion-collapse collapse show" aria-labelledby="headingFeb" data-bs-parent="#datesAccordion">
          <div class="accordion-body">
            <ul>
              <li>10th February 2025</li>
              <li>15th February 2025</li>
              <li>20th February 2025</li>
              <li>25th February 2025</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- March 2025 (Add more dates here if needed) -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingMar">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMar" aria-expanded="false" aria-controls="collapseMar">
            March 2025
          </button>
        </h2>
        <div id="collapseMar" class="accordion-collapse collapse" aria-labelledby="headingMar" data-bs-parent="#datesAccordion">
          <div class="accordion-body">
            <ul>
              <li>Coming Soon...</li>
            </ul>
          </div>
        </div>
      </div>

    </div>

    <!-- Close Button -->
    <button id="close-dates-btn" class="close-btn">✖ Close</button>
  </div>





  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    /* Sticky Button */
    .sticky-button {
      position: fixed;
      bottom: 20px;
      left: 20px;
      background: linear-gradient(45deg, #FFD600, #FF9100, #FF3D00);
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 30px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
      transition: all 0.3s ease;
      z-index: 2000;
    }


    .sticky-button:hover {
      transform: scale(1.05);
    }

    @media(max-width:768px) {
      .sticky-button {
        font-size: 10px;
        font-weight: 400;
      }

      .dates-section h2 {
        color: #FF3D00;
        font-size: 1rem !important;
        margin-bottom: 10px;
      }

    }

    /* Available Dates Section */
    .dates-section {
      position: fixed;
      top: 0;
      left: -100%;
      /* Initially hidden on the left */
      width: 300px;
      /* Set width */
      height: 100vh;
      /* Full height */
      background: white;
      box-shadow: 5px 0px 10px rgba(0, 0, 0, 0.2);
      padding: 20px;
      text-align: center;
      transition: left 0.4s ease-in-out;
      z-index: 2999;
      overflow-y: auto;
      /* Enable scrolling */
    }



    }

    .dates-section h2 {
      color: #FF3D00;
      font-size: 1rem !important;
      margin-bottom: 10px;
    }

    .dates-section ul {
      list-style: none;
      padding: 0;
    }

    .dates-section li {
      font-size: 0.9rem;
      padding: 8px;
      color: #FF9100;
      border-bottom: 1px solid #FFD600;
    }

    .dates-section li:last-child {
      border-bottom: none;
    }

    /* Close Button */
    .close-btn {
      background: #FF3D00;
      color: white;
      padding: 8px 15px;
      border: none;
      font-size: 14px;
      cursor: pointer;
      border-radius: 5px;
      margin-top: 10px;
    }

    .close-btn:hover {
      background: #FFD600;
      color: black;
    }
  </style>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      let dateSection = document.getElementById("available-dates-section");
      let openBtn = document.getElementById("available-dates-btn");
      let closeBtn = document.getElementById("close-dates-btn");

      function toggleDateSection(open) {
        dateSection.style.left = open ? "0" : "-100%"; // Always slide in/out from the left

        // Add/remove click-outside listener
        if (open) {
          document.addEventListener("click", closeOnClickOutside);
        } else {
          document.removeEventListener("click", closeOnClickOutside);
        }
      }

      function closeOnClickOutside(event) {
        if (!dateSection.contains(event.target) && !openBtn.contains(event.target)) {
          toggleDateSection(false);
        }
      }

      openBtn.addEventListener("click", function(event) {
        event.stopPropagation(); // Prevents immediate closing
        toggleDateSection(true);
      });

      closeBtn.addEventListener("click", function(event) {
        event.stopPropagation(); // Prevents triggering closeOnClickOutside immediately
        toggleDateSection(false);
      });
    });
  </script>

  <script>
    document.getElementById("enquireBtn").addEventListener("click", function() {
      const target = document.getElementById("leadInputContac");
      if (target) {
        target.scrollIntoView({
          behavior: "smooth"
        });
      }
    });
  </script>







                                                                      <!-- Horizontal Navbar for Small Screens -->



  <section id="Trek-detail">
    <div class="container mt-4">

      <div class="package-detail row">


        <!-- OVERVIEW start -->
        <div class="col-lg-8 active show scroll-offset" id="OVERVIEW-ITINERARY" role="tabpanel" aria-labelledby="OVERVIEW-ITINERARY-tab">
          <!-- Horizontal Navbar for Small Screens -->
          <div id="new-horizontal-navbar" class="new-horizontal-navbar    ">
            <div class="nav-wrapper">
              <div class="nav-content">

                <a href="#ITINERARY" class="nav-button active">
                  <i class="fa fa-list"></i><span>Overview</span>
                </a>

                <a href="#SHORT-ITINERARY" class="nav-button">
                  <i class="fa fa-map"></i><span>Quick Itinerary</span>
                </a>

                <a href="#BEST-TIME" class="nav-button ">
                  <i class="fa fa-clock"></i><span>Best Time</span>
                </a>


                <a href="#THINGS-TO-CARRY" class="nav-button">
                  <i class="fa fa-suitcase"></i><span>Things</span>
                </a>

                <a href="#SAFETY" class="nav-button">
                  <i class="fa fa-shield"></i><span>Safety</span>
                </a>
                <a href="#FEE-POLICY" class="nav-button">
                  <i class="fa fa-money-bill"></i><span>Policy</span>
                </a>
                <a href="#FAQ" class="nav-button">
                  <i class="fa fa-question-circle"></i><span>FAQ</span>
                </a>
              </div>
            </div>
          </div>

          <style>
            .new-horizontal-navbar {
              display: flex;
              align-items: center;
              width: 100%;
            }

            .nav-wrapper {
              overflow-x: auto;
              white-space: nowrap;
              flex-grow: 1;
              scrollbar-width: none;
              -ms-overflow-style: none;
            }

            .nav-wrapper::-webkit-scrollbar {
              display: none;
            }

            .nav-content {
              display: flex;
              gap: 10px;
              padding: 5px 0;
            }

            .nav-button {
              display: flex;
              align-items: center;
              padding: 10px 15px;
              border-radius: 5px;
              text-decoration: none;
              color: #333;
              font-size: 10px;
              transition: 0.3s;
              flex-shrink: 0;
              background: #f8f8f8;
            }

            .nav-button:hover,
            .nav-button.active {
              background: Orange;
              color: #fff;
            }

            .nav-button i {
              margin-right: 5px;
            }

            @media screen and (max-width: 480px) {
              .nav-button {
                padding: 8px 10px;
                /* Reduced padding */
                font-size: 8px;
                /* Smaller font size */
              }

              .nav-button i {
                margin-right: 3px;
                /* Adjust spacing for the icon */
                font-size: 10px;
                /* Optionally reduce the icon size */
              }

              .nav-content {
                display: flex;
                gap: 0px;
                padding: 0px 0;
              }

            }
          </style>

          <script>
            document.addEventListener("DOMContentLoaded", function() {
              const navButtons = document.querySelectorAll(".nav-button");

              navButtons.forEach(button => {
                button.addEventListener("click", function() {
                  // Remove active class from all buttons
                  navButtons.forEach(btn => btn.classList.remove("active"));

                  // Add active class to the clicked button
                  this.classList.add("active");
                });
              });
            });
          </script>




          </script>
          <script>
            $(document).ready(function() {
              function updateActiveNav() {
                let scrollPosition = $(window).scrollTop();

                $(".new-horizontal-navbar a").each(function() {
                  let sectionId = $(this).attr("href"); // Get section ID from href
                  let section = $(sectionId); // Select corresponding div

                  if (section.length) {
                    let sectionTop = section.offset().top - 150; // Adjust for navbar height
                    let sectionBottom = sectionTop + section.outerHeight();

                    if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
                      $(".new-horizontal-navbar a").removeClass("active");
                      $(this).addClass("active");
                    }
                  }
                });
              }

              // Trigger on scroll
              $(window).on("scroll", function() {
                updateActiveNav();
              });

              // Smooth scrolling on click
              $(".new-horizontal-navbar a").on("click", function(e) {
                e.preventDefault();
                let target = $($(this).attr("href"));

                $("html, body").animate({
                    scrollTop: target.offset().top - 100, // Adjust for fixed navbar
                  },
                  500
                );
              });

              // Initial check on page load
              updateActiveNav();
            });
          </script>

          <style>
            .available-dates {
              border: 2px solid #3b82f6;
              /* Blue border for availability */
              color: #3b82f6;
              /* Blue text color */
              background-color: #ffffff;
              /* White background for contrast */

              padding: 15px;
              /* Padding for inner spacing */

              font-family: Arial, sans-serif;
              /* Font style */
              font-size: 1.2rem;
              /* Font size */
            }

            .available-dates:hover {
              background: #e3f2fd;
              /* Lighter blue background on hover */
              color: #1e40af;
              /* Darker blue text color on hover */
              cursor: pointer;
              /* Pointer cursor on hover */
              transform: scale(1.02);
              /* Slightly enlarge on hover */
            }
          </style>


          <!-- ITINERARY start -->
          <div id="ITINERARY" class="scroll-offset " role="tabpanel" aria-labelledby="Things-To-Carry-tab">
            <h3 class="details-headings">Overview & ITINERARY</h3>
            <div class="package-side-box mobile-short-itinerary p-4 mb-8" style="background:#f6f6f6;border-radius:15px">
              <div class="video-container" style="position: relative; width: 90%; margin: 0 auto; padding-bottom: 56.25%; height: 60%; overflow: hidden;border-radius:5px">
                <iframe
                  src="https://www.youtube.com/embed/YOUR_VIDEO_ID"
                  style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"
                  frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen>
                </iframe>
              </div>


              <br>
              <h2>Kuari Pass Trek Overview</h2>
              
              <p>The Kuari Pass Trek is one of the most breathtaking high-altitude treks in the Indian Himalayas. Nestled in Uttarakhand, this trek offers a mesmerizing blend of landscapes, adventure, and cultural richness. Ideal for both beginners and seasoned trekkers, the journey takes you through dense forests, vast meadows, and snow-covered trails, culminating at the stunning Kuari Pass. The panoramic views of towering peaks like Nanda Devi, Dronagiri, and Kamet make this trek a must-do for nature and adventure enthusiasts. The entire route is filled with natural wonders, making it a paradise for photographers and thrill-seekers. Whether trekking through lush green trails in summer or experiencing snow-laden paths in winter, the Kuari Pass Trek promises an experience like no other. The changing landscapes at every turn make it a dynamic and rewarding journey.</p>
              <p>The Kuari Pass Trek offers an incredible mix of adventure, natural beauty, and cultural exploration. With its captivating trails, panoramic mountain views, and exhilarating summit climb, this trek is perfect for those seeking an unforgettable Himalayan experience. Whether you're a first-time trekker or a seasoned adventurer, Kuari Pass is a journey that will leave you with lasting memories. The blend of challenging terrains, breathtaking landscapes, and immersive cultural experiences makes this trek a must for every mountain lover. From the first step to the last, the Kuari Pass Trek is an expedition that enriches the soul and ignites a lifelong passion for the Himalayas.</p>
                 
                   
             <hr/>
             
             <p><b>Starting Point: The Gateway to Adventure</b></p>
             <p>The trek begins from Dhak, a charming village near Joshimath. A scenic drive from Rishikesh (1,120 ft) to Joshimath (6,150 ft) sets the stage for this thrilling adventure. The journey takes you along the Alaknanda River, passing through picturesque towns and vibrant local markets. The trail from Dhak to Gulling Top (9,800 ft) is a moderate climb through oak and rhododendron forests, offering stunning glimpses of the surrounding peaks. As trekkers ascend, they are greeted with an ever-changing landscape that shifts from dense forests to open meadows. The peaceful ambiance and fresh mountain air make this initial stretch a memorable start to the adventure. The trek provides an opportunity to witness the local Garhwali culture, interact with villagers, and experience the raw beauty of the Himalayas. Every step taken on this journey brings trekkers closer to the majestic high-altitude views that await.</p>
             
              
              <hr/>
              
              
              
            
               
               <p><b>First Milestone: Gulling Top Campsite</b></p>
               <p>After a few hours of trekking, you reach the Gulling Top campsite, surrounded by towering trees and expansive meadows. The crisp mountain air and the tranquility of this site make it a perfect resting spot. As night falls, trekkers are treated to a spectacular view of the starlit sky, enhancing the charm of camping in the Himalayas. The silence of the night, broken only by the rustling of leaves and distant calls of mountain wildlife, adds to the mystique of the experience. Bonfires, storytelling sessions, and camaraderie among fellow trekkers make this a memorable stay. The temperature drops significantly at night, making warm clothing essential. The breathtaking sunrise the next morning paints the sky with hues of orange and pink, making the early wake-up call worth it. With recharged energy, trekkers eagerly continue their journey towards the next milestone, eager to uncover the beauty that lies ahead.</p>
               
                <hr/>
              
              
              
            
               
               <p><b>Journey to Khullara: The Path to Serenity</b></p>
               <p>On the second day, the trek continues towards Khullara Top (11,150 ft), a serene spot known for its rolling meadows and breathtaking scenery. The trail winds through dense forests and gradually opens up to alpine pastures. The majestic views of Mount Nanda Devi and other Himalayan giants create a surreal experience, making this a favorite stop among trekkers. The journey is both physically challenging and visually rewarding. As trekkers move forward, the air becomes thinner, and the terrain more rugged, testing endurance and willpower. However, the sense of achievement upon reaching Khullara is unparalleled. The campsite here offers uninterrupted views of the vast mountain ranges, allowing trekkers to appreciate the grandeur of nature truly. The night at Khullara is an experience in itself, with the crisp air and starlit sky creating an atmosphere of peace and reflection. This stop prepares adventurers for the trek's final and most thrilling part—the ascent to Kuari Pass.</p>
               
                <hr/>
              
              
              
            
               
               <p><b>The Grand Ascent: Conquering Kuari Pass</b></p>
               <p>The highlight of the trek is reaching Kuari Pass (12,763 ft). The ascent is challenging yet rewarding, offering mesmerizing 360-degree views of the surrounding Himalayan peaks. The sense of accomplishment upon reaching the pass is unparalleled. The descent takes you through pristine snowfields (depending on the season) and leads back to the Khullara campsite. The trail to the summit is steep, requiring careful navigation and determination. However, the effort is well worth it as the summit offers a stunning panoramic view of some of the highest peaks in India. Trekkers often take a moment to soak in the beauty, capturing photographs and celebrating their achievement. The descent, though easier, requires focus to navigate the snowy or rocky terrain. The return to the Khullara campsite is filled with reflections on the adventure, as trekkers recount their experiences and bond over shared memories of conquering the mighty Kuari Pass.</p>
             
               <hr/>
              
              
              
            
               
               <p><b>Exploring the Meadows: Gurson Bugyal and Auli</b></p>
               <p>The return journey includes a scenic trek through Gurson Bugyal, a vast meadow that looks magical during sunrise and sunset. The trek further descends to Auli, a famous ski destination known for its stunning landscapes. From Auli, a short drive takes you back to Joshimath, marking the end of an unforgettable journey. The lush green meadows of Gurson Bugyal are a stark contrast to the rugged terrain trekkers have experienced earlier. This stretch of the trek is peaceful and allows for moments of relaxation and appreciation of nature’s beauty. Auli, with its breathtaking views of the snow-capped peaks, provides the perfect conclusion to the trek. Many trekkers choose to stay in Auli for a day to indulge in skiing or simply relax and take in the beauty of the surroundings. This final leg of the journey leaves trekkers with a deep sense of fulfillment and a newfound appreciation for the majesty of the Himalayas.</p>
                
              
                <hr/>
                
               <p><b>How to Reach</b></p>
                <p>By Air:</p>
               
                <ul>
                <li>Nearest airport: Jolly Grant Airport (DED), 25 km from Dehradun.</li>
                <li>Regular flights connect Dehradun with major cities like Delhi and Mumbai.</li>
                 </ul>
                <ul>
                <p>By Road:</p>
                </ul>
                <ul>
                <li>From Delhi: 250 km, 7-8 hours by bus or private cab.</li>
                <li>From Rishikesh: 250 km to Joshimath, 9-10 hours by shared cab or private taxi.</li>
                
              </ul>
              
              <p>By Train:</p>
               
                <ul>
                <li>Dehradun Railway Station is well-connected to Delhi, Mumbai, and Kolkata.</li>
                <li>Popular trains: Shatabdi Express and Dehradun Express.</li>
                
              </ul>
            
               <hr/>
               
              <h3>Har Ki Dun Trek Itinerary</h3>

              

              
              <p>Day 1: Rishikesh to Joshimath</p>
              <ul>
               <li><strong> Altitude Joshimath:</strong> 6,151 Ft.</li>
               <li><strong> Drive Duration:</strong> 250 km | 9-10 hours (Depending on road conditions)</li>

             
               
              </ul>
              <p>The journey from Rishikesh to Joshimath is a long yet scenic drive, offering breathtaking views of the Himalayas. En route, you will pass through famous confluences such as Devprayag (where the Bhagirathi and Alaknanda rivers meet to form the Ganges), Rudraprayag, Karnaprayag, and Chamoli. The road winds along river valleys, providing spectacular landscapes.</p>
              
              

              <p>Day 2: Joshimath to Dhak Village by Drive and Trek to Gulling Top</p>
              <ul>
                 <li><strong> Altitude Gulling Top:</strong> 9,400 Ft.</li>
                 <li><strong>Drive Distance Joshimath to Dhak Village:</strong> 12 km | 30 minutes</li>
                <li><strong>Trek Distance:</strong> 5 km | 5-6 Hours</li>
                
           
                
              </ul>
              <p>A short drive takes you to Dhak Village, the starting point of the trek. The trek begins with a gradual ascent along a rocky trail, passing through remote mountain settlements. As you ascend, the landscape transitions from open rocky terrain to dense oak and rhododendron forests. The trail offers beautiful views of the surrounding peaks.</p>

              <p>Day 3: Gulling Top to Khullara Top</p>
              <ul>
                  <li><strong>Altitude Khullara:</strong> 11,000 Ft.</li>
                  <li><strong>Trek Distance:</strong> 5.5 km | 5 Hours</li>
               
                
              </ul>
              <p>The trail continues through thick oak, pine, and rhododendron forests. The trek becomes steeper as you ascend towards Khullara Top. As you reach the open meadows of Khullara, you are rewarded with panoramic views of the snow-clad peaks of the Garhwal Himalayas, including Nanda Devi and Dronagiri.</p>

             <p>Day 4: Khullara Top to Kuari Pass and Back to Khullara Top</p>
              <ul>
                  <li><strong>Altitude Kuari Pass:</strong>  12, 500 Ft.</li>
                  <li><strong>Trek Distance:</strong> 5-6 Km | 7-10 Hours</li>
               
              
              </ul>
              <p>The highlight of the trek, the journey to Kuari Pass, involves a steady ascent through alpine meadows. Depending on the season, the trail may be covered with snow, making it even more picturesque. Upon reaching Kuari Pass, you get a stunning 360-degree view of some of India's highest peaks, including Mt. Nanda Devi, Dronagiri, Kamet, and Trishul. After spending some time at the pass, you retrace your steps back to Khullara Top.</p>

             <p>Day 5: Khullara Top to Dhak Village via Gurson Bugyal and Auli | Drive to Joshimath</p>
              <ul>
                 <li><strong> Altitude Gurson Bugyal:</strong>  11,150 Ft.</li>
                 <li><strong> Altitude Gurson Auli:</strong>  9,680 Ft.</li>
                  <li><strong>Trek Distance:</strong> 11 km </li>
               
              
              </ul>
              <p>The descent from Khullara takes you through Gurson Bugyal, a stunning alpine meadow that offers uninterrupted views of the Himalayan peaks. The trail continues towards Auli, known for its famous ski slopes. The trek provides breathtaking views of the surrounding snow-covered mountains. From Auli, a short drive takes you back to Joshimath for a comfortable overnight stay.</p>
              
              <p>Day 6: Drive from Joshimath to Rishikesh</p>
             
              <p>The return journey retraces your path along the beautiful river valleys. Enjoy the scenic drive through the Himalayan foothills, passing by picturesque towns and river confluences before reaching Rishikesh.</p>
              
             
            </div>
          </div>
          <!-- ITINERARY ENDS -->





          <div class="scroll-offset " id="SHORT-ITINERARY" role="tabpanel" aria-labelledby="Things-To-Carry-tab">
            <h3 class="details-headings">SHORT ITINERARY </h3>
            <div class="package-side-box mobile-short-itinerary p-4 mb-4" style="background:#f6f6f6;">


              

              

             <p><b>Day 1:</b> Rishikesh to Joshimath</p>
             

              <p><b>Day 2:</b> Joshimath to Dhak Village by Drive and Trek to Gulling Top</p>
              

             <p><b>Day 3:</b> Gulling Top to Khullara Top </p>
             

              <p><b>Day 4:</b> Khullara Top to Kuari Pass and Back to Khullara Top</p>
              

              <p><b>Day 5:</b> Khullara Top to Dhak Village via Gurson Bugyal and Auli | Drive to Joshimath</p>
             
<p><b>Day 6:</b> Drive from Joshimath to Rishikesh</p>

            </div>


          </div>
          <!-- OVERVIEW end -->


          <!-- OVERVIEW start -->
          <!-- <div class=" active show scroll-offset" id="OVERVIEW-ITINERARY" role="tabpanel" aria-labelledby="OVERVIEW-ITINERARY-tab">
            <h3 class="details-headings">OVERVIEW </h3>
            <div class="package-side-box mobile-short-itinerary p-4 mb-4" style="background:#f6f6f6;">

              <div class="mb-3"><span class="mr-3"><b>Start Point </b> : <?php echo $start ?> </span> <span> <b> End Point</b> : <?php echo $end ?></span></div>
              <hr>
              <div class="package-heading-side my-2">
                <h2><strong>Short Itinerary</strong></h2>
              </div>

              <?php echo $Short_itinerary ?>
             
            </div>

           
          </div> -->
          <!-- OVERVIEW end -->

          <!-- BEST TIME START -->
          <div class="scroll-offset " id="BEST-TIME" role="tabpanel" aria-labelledby="Things-To-Carry-tab">
            <h3 class="details-headings">Best time to visit</h3>
            <div class="package-side-box mobile-short-itinerary p-4 mb-4" style="background:#f6f6f6;">

              <h3>Best Time to Visit Kuari Pass Trek</h3>
              

              <p>The best time for the Kuari Pass Trek is from December to March for a snow-covered experience and April to June for lush greenery. The temperatures range from 10°C to 15°C during the day and can drop to -5°C at night in winter. Choosing the right season can significantly impact the trekking experience. Winter offers a magical snowy landscape, while summer showcases the vibrant colors of the region’s flora. Both seasons provide unique challenges and rewards, making the Kuari Pass Trek a versatile and captivating adventure.</p>

            

              

            </div>
          </div>
          <!-- BEST TIME ENDS -->






          <!-- Things To KNOW start -->
          <!--<div class="scroll-offset " id="THINGS-TO-KNOW" role="tabpanel" aria-labelledby="Things-To-Carry-tab">-->
          <!--            <h3 class="details-headings">Things to know</h3>-->
          <!--            <?php echo $Things_to_know ?>-->
          <!--          </div>-->
          <!-- Things To KNOW End -->
          <!-- Things To Carry start -->
          <div class="scroll-offset " id="THINGS-TO-CARRY" role="tabpanel" aria-labelledby="Things-To-Carry-tab">
            <h3 class="details-headings">Things to Carry</h3>
            <div class="package-side-box mobile-short-itinerary p-4 mb-4" style="background:#f6f6f6;">
               <div class="container mt-4">
     
        <div>
            <img class="img-fluid" src="img/packageImage/things-to-carry-1.jpg" alt="Things to Carry">
             <img class="img-fluid" src="img/packageImage/things-to-carry-2.jpg" alt="Things to Carry">
              <img class="img-fluid" src="img/packageImage/things-to-carry-3.jpg" alt="Things to Carry">
          <img class="img-fluid" src="img/packageImage/things-to-carry-4.jpg" alt="Things to Carry">
          <img class="img-fluid" src="img/packageImage/things-to-carry-5.jpg" alt="Things to Carry">
          <img class="img-fluid" src="img/packageImage/things-to-carry-6.jpg" alt="Things to Carry">
          <img class="img-fluid" src="img/packageImage/things-to-carry-7.jpg" alt="Things to Carry">
          <img class="img-fluid" src="img/packageImage/things-to-carry-8.jpg" alt="Things to Carry">
          <img class="img-fluid" src="img/packageImage/things-to-carry-9.jpg" alt="Things to Carry">
          <img class="img-fluid" src="img/packageImage/things-to-carry-10.jpg" alt="Things to Carry">
          <img class="img-fluid" src="img/packageImage/things-to-carry-11.jpg" alt="Things to Carry">
          <img class="img-fluid" src="img/packageImage/things-to-carry-12.jpg" alt="Things to Carry">
          <img class="img-fluid" src="img/packageImage/things-to-carry-13.png" alt="Things to Carry">
          <img class="img-fluid" src="img/packageImage/things-to-carry-14.png" alt="Things to Carry">
        </div>
        
      
    </div>
            </div>
          </div>
          <!-- Things To Carry End -->

          <!-- SAFETY start -->
          <div class="scroll-offset" id="SAFETY" role="tabpanel" aria-labelledby="SAFETY-SECURITY-tab">
            <h3 class="details-headings">Safety & Security</h3>
            <div class="package-side-box mobile-short-itinerary p-4 mb-4" style="background:#f6f6f6;">
              
              <ul>
                <li>We assume that you have checked the challenge levels of the trek/tpor on your own or you can talk to our customer care team which will guide you on how to prepare for the trek.</li>
                <li>Please seek medical consultation before joining the trek as we are not skilled medical practitioners, although our trek leaders & guides can administer firstaid.</li>
                <li>It is solely your responsibility to highlight any prevailing medical condition that may hamper the trek/tour.</li>
               
              </ul>
            </div>
          </div>
          <!-- SAFETY end -->

          <!-- FITNESS start -->
          <!-- <div class="scroll-offset" id="FITNESS-TIPS" role="tabpanel" aria-labelledby="FITNESS-TIPS-tab">
            <h3 class="details-headings">fitness tips</h3>
          

          </div> -->
          <!-- FITNESS end -->

          <!-- FEE-POLICY start  -->
          <div class="scroll-offset" id="FEE-POLICY" role="tabpanel" aria-labelledby="FEE-POLICY-tab">

            <h3 class="details-headings">Cancellation Policy</h3>
            <div class="package-side-box mobile-short-itinerary p-4 mb-4" style="background:#f6f6f6;">


              <p><b>1. Booking Confirmation</b></p>
              <ul>
                <li>A booking is confirmed only after the full payment or the required deposit is received.</li>
                <li>Customers will receive a confirmation email with all the details of the booking.</li>
              </ul>

              <p><b>2. Payment Methods</b></p>
              <ul>
                <li>We accept payments through credit/debit cards, net banking, UPI, and other digital payment methods.</li>
                <li>Cash payments are not accepted for online bookings.</li>
              </ul>

             <p><b>3. Cancellation Policy</b></p>
              <ul>
                <li><strong>Cancellation 30 Days or More Before Departure:</strong> Full refund, minus a small processing fee.</li>
                <li><strong>Cancellation 15-29 Days Before Departure:</strong> 75% refund of the total booking amount.</li>
                <li><strong>Cancellation 7-14 Days Before Departure:</strong> 50% refund of the total booking amount.</li>
                <li><strong>Cancellation Less Than 7 Days Before Departure:</strong> No refund will be provided.</li>
              </ul>

              <p><b>4. Refund Process</b></p>
              <ul>
                <li>Refunds will be processed within 7-10 business days from the date of cancellation.</li>
                <li>The refund will be credited to the original payment method used during the booking.</li>
              </ul>

              <p><b>5. Rescheduling Policy</b></p>
              <ul>
                <li>Rescheduling requests must be made at least 15 days before the departure date.</li>
                <li>A rescheduling fee may apply, depending on the availability and the new dates chosen.</li>
              </ul>

              <p><b>6. No-Show Policy</b></p>
              <ul>
                <li>If a customer fails to show up on the departure date without prior notice, no refund will be provided.</li>
              </ul>

              <p><b>7. Force Majeure</b></p>
              <ul>
                <li>In case of unforeseen events like natural disasters, political unrest, or pandemics, customers will be offered a travel voucher equivalent to the booking amount, valid for one year.</li>
              </ul>

              <p><b>8. Additional Charges</b></p>
              <ul>
                <li>Any additional services or upgrades requested after the booking will incur extra charges.</li>
              </ul>

              <p><b>9. Child Policy</b></p>
              <ul>
                <li>Children below 5 years of age are usually free of charge, while those between 5-12 years may be charged at a discounted rate.</li>
              </ul>

              <p><b>10. Group Discounts</b></p>
              <ul>
                <li>Special discounts may be available for group bookings. Please contact our customer service for more details.</li>
              </ul>

             <p><b>11. Customer Support</b></p>
              <ul>
                <li>For any queries or assistance, customers can reach out to our 24/7 customer support team via phone, email, or live chat.</li>
              </ul>
            </div>

          </div>
          <!-- FEE-POLICY end -->
          <!-- FAQ start -->
          <div class="scroll-offset" id="FAQ" role="tabpanel" aria-labelledby="FAQ-tab">
            <h3 class="details-headings">FAQ</h3>
            <div class="package-side-box mobile-short-itinerary p-4 mb-4" style="background:#f6f6f6;">
              
             
             <p><b>1. What is the best time for Kuari Pass Trek?</b></p>

<p>	2. The best time is April to June (pleasant weather, lush greenery) and September to November (clear mountain views).</p>
<p><b>How difficult is the Kuari Pass Trek?</b></p>

<p>It is a moderate trek, suitable for beginners with basic fitness.</p>
<p><b>3.What is the total duration and distance?</b></p>

<p>The trek is 4-6 days long and covers around 33 km.</p>
<p><b>4. Do I need prior trekking experience?</b></p>

<p>	No, but a basic fitness level is recommended.</p>
<p><b>5. What is the altitude of Kuari Pass?</b></p>

<p>	The highest point is 12,516 feet (3,815 meters).</p>
<p><b>6. Is it possible to do Kuari Pass Trek in winter?</b></p>

<p>	Yes, December to February offers a snow-covered experience, but it is colder and more challenging.</p>
<p><b>7. What is the starting point of the trek?</b></p>

<p>The trek starts from Joshimath (reached via Haridwar or Rishikesh).</p>
<p><b>8. What kind of accommodation is available?</b></p>

<p>Camping in tents along the trekking route, and hotels/lodges in Joshimath or Auli.</p>
<p><b>9. What are the essential things to carry?</b></p>

<p>Trekking shoes, warm clothing, rain gear, trekking poles, and essentials like a water bottle and first aid kit.</p>
<p><b>10. Are there any permits required?</b></p>

<p>	Yes, forest entry permits are required, usually arranged by trekking operators.</p>

             
             
             
             
             
             
             
             
         
              
              
              
              

 



           
            </div>
          </div>
          <!-- FAQ end -->
        </div>

        <div id="contactUs" style="padding-top: 0 !important;" class="col-lg-4 py-4 order-first order-lg-last">
          <div class="card ellipsis mb-5 mb-lg-0 glass-effect" id="have_any_quary_box">
            <div style="min-width:250px;min-height:300px;justify-content:center" class="card-body">
              <p style="color:white; font-size:19px" class="h5 card-title text-center font-weight-bold gradient-text">Want a Detailed Itinerary? <span></span></p>
             
              <form method="post" action="tour/package-form-submission.php">
                <div class="form-group">
                  <input type="text" class="form-control" id="leadInputName" name="name" required placeholder="Enter your name ">
                  <input type="hidden" name="trek_name" value="<?php echo $Title ?>" readonly>
                  <input type="hidden" name="trek_name_link" value="<?php echo $canonical_link ?>" readonly>
                </div>
                <div class="form-group">
                  <input type="tel" class="form-control" id="leadInputContact" name="Contact" required placeholder="Contact">
                </div>
                <div style="text-align: center !important;" class="text-center">
                  <button style="max-width:60%" type="submit" class="btn package-btn my-2 px-4">Send Me</button>
                </div>
                <div class="private-policy">
                  <span style="color: black;">I accept the</span> <a href="term-and-condition.php" target="_blank" style="color:orange">Terms of Use</a> <span style="color: black;"> and</span>
                  <a href="privacy-policy.php" target="_blank" style="color:orange">Privacy Policy</a>.
                </div>
                <div class="help-section">
                  <div class="help-line"></div>
                  <h2 class="help-title">Need Help?</h2>
                  <h4 class="help-subtitle">Talk To Our Expert</h4>
                  <div class="help-contact">
                    <!-- Use any icon library you prefer (Font Awesome, etc.) -->
                    <span class="phone-icon">📞</span> +91 6395847208 | +91 6397353509
                  </div>
                </div>


              </form>

              <!--               <div class="call-expert-wrapper">-->
              <!--  <div class="call-expert" onclick="window.location.href='tel:+919876543210'">-->
              <!--    <img src="img/test/call-center.png" alt="Call Icon" class="call-icon">-->
              <!--    <p style="margin-bottom: 0px;">Call Our Expert</p>-->
              <!--    <a href="tel:+919876543210" class="phone-number">+91 9876543210</a>-->
              <!--  </div>-->
              <!--</div>-->

            </div>


          </div>


        </div>


        <style>
          @media (max-width: 991px) {

            /* Targets smaller screens */
            #contactUs {
              margin: 0 auto;
              /* Centers the div horizontally */
              display: flex;
              justify-content: center;
            }
          }

          .call-expert-wrapper {
            display: flex;
            justify-content: center;
            /* Centers horizontally */
            align-items: center;
            /* Centers vertically */
            width: 100%;
            /* Full width to ensure centering */
          }



          /* Background image and glass effect */
          .glass-effect {
            background: white center/cover no-repeat;
            /* Replace with your image URL */
            position: relative;
            border-radius: 15px;
            overflow: hidden;
          }

          /* Transparent glass effect */
          .glass-effect::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.2);
            /* Light transparent overlay */
            backdrop-filter: blur(3px);
            /* Blurred glass effect */
            -webkit-backdrop-filter: blur(3px);
            border-radius: 15px;
          }

          /* Ensuring card-body content is above the overlay */
          .glass-effect .card-body {
            position: relative;
            z-index: 1;
          }
        </style>


      </div>
    </div>
    </div>

    <div class="container">

        <div class="d-flex justify-content-center">
          <h6 class="titles-subheadings">Recommended Treks</h6>
        </div>
        <!-- <div class="d-flex justify-content-center">
                    <h6 class="titles-subheadings">
                        <span class="month">Oct</span>
                        <span class="month">Nov</span>
                        <span class="month">Dec</span>
                        <span class="month">Jan</span>
                        <span class="month">Feb</span>
                        <span class="month">Mar</span>
                    </h6>

                </div> -->




        <div class="row regular lazy">


          <!-- new card design -->
          <a class="my_card" href="tour/kedarkantha-trek.php" target="_Blank">
            <div style="border: 1px solid #e0e0e0;" class="box">
              <div class="productCard_discountTag__bJQTv">
                <span class="productCard_discountTagIcon__10rS7">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                    <path d="M10.705 5.79L6.205 1.29C6.025 1.11 5.775 1 5.5 1H2C1.45 1 1 1.45 1 2V5.5C1 5.775 1.11 6.025 1.295 6.21L5.795 10.71C5.975 10.89 6.225 11 6.5 11C6.775 11 7.025 10.89 7.205 10.705L10.705 7.205C10.89 7.025 11 6.775 11 6.5C11 6.225 10.885 5.97 10.705 5.79ZM6.5 10.005L2 5.5V2H5.5V1.995L10 6.495L6.5 10.005Z" fill="#fff"></path>
                    <path d="M3.25 4C3.66421 4 4 3.66421 4 3.25C4 2.83579 3.66421 2.5 3.25 2.5C2.83579 2.5 2.5 2.83579 2.5 3.25C2.5 3.66421 2.83579 4 3.25 4Z" fill="#fff"></path>
                  </svg>
                </span>
                20%
                <div class="productCard_discountTagAmount__9R5ID">off</div>
              </div>
              <div class="ribbon-review"><i style="color: #ffd604;margin-left: 8px" class="fa fa-star mr-2"></i>4.8 <small>(126 Reviews)</small> </div>
              <img class="card-img-top" width="355" height="220" src="" data-lazy="img/packageImage/kedarkantha-trek-2.jpg" alt="Chopta Trek">
              <div class="p-2">
                <div class="price-details">
                  <div style="padding-top: 5px;">
                    <h5 class="card-trek-name" style="text-align: center; font-size: 1.2em; font-weight: bold;">
                      Kedarkantha Trek
                    </h5>




                  </div>

                </div>


                <div class="ratings">
                  <div class="main-grid">
                    <!-- Location -->
                    <div class="sub-grid location">
                      <div class="icon-container">
                        <i class="fa fa-map-marker fa-lg"></i>

                        <small>Uttarakhand</small>
                      </div>
                    </div>

                    <!-- Difficulty -->
                    <div class="sub-grid difficulty">
                      <div class="icon-container">
                        <i class="fa fa-tasks fa-lg"></i>
                        <small>Moderate</small>
                      </div>
                    </div>
                  </div>

                  <div class="main-grid">
                    <!-- Duration (Days) -->
                    <div class="sub-grid duration">
                      <div class="icon-container">
                        <i class="fa fa-calendar-alt fa-lg"></i>
                        <small>5 Days</small>
                      </div>
                    </div>

                    <!-- Altitude -->
                    <div class="sub-grid altitude">
                      <div class="icon-container">
                        <i class="fa fa-arrow-up fa-lg"></i>
                        <small>12,500 Ft.</small>
                      </div>
                    </div>
                  </div>
                </div>



                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                  <!-- Price Section -->
                  <span class="tour-price">
                    <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>
                    <b> &#8377; 3,250</b>
                  </span>

                  <!-- Get Quote Button -->
                  <button class="glow-on-hover">Get Quote</button>
                </div>

              </div>
              <hr>
            </div>
          </a>


          <a class="my_card" href="har-ki-dun-trek.php" target="_Blank">
            <div style="border: 1px solid #e0e0e0;" class="box">
              <div class="productCard_discountTag__bJQTv">
                <span class="productCard_discountTagIcon__10rS7">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                    <path d="M10.705 5.79L6.205 1.29C6.025 1.11 5.775 1 5.5 1H2C1.45 1 1 1.45 1 2V5.5C1 5.775 1.11 6.025 1.295 6.21L5.795 10.71C5.975 10.89 6.225 11 6.5 11C6.775 11 7.025 10.89 7.205 10.705L10.705 7.205C10.89 7.025 11 6.775 11 6.5C11 6.225 10.885 5.97 10.705 5.79ZM6.5 10.005L2 5.5V2H5.5V1.995L10 6.495L6.5 10.005Z" fill="#fff"></path>
                    <path d="M3.25 4C3.66421 4 4 3.66421 4 3.25C4 2.83579 3.66421 2.5 3.25 2.5C2.83579 2.5 2.5 2.83579 2.5 3.25C2.5 3.66421 2.83579 4 3.25 4Z" fill="#fff"></path>
                  </svg>
                </span>
                20%
                <div class="productCard_discountTagAmount__9R5ID">off</div>
              </div>
              <div class="ribbon-review"><i style="color: #ffd604;margin-left: 8px" class="fa fa-star mr-2"></i>4.8 <small>(126 Reviews)</small> </div>
              <img class="card-img-top" width="355" height="220" src="" data-lazy="img/packageImage/har-ki-dun-trek-4.jpg" alt="Har Ki Dun Trek">
              <div class="p-2">
                <div class="price-details">
                  <div style="padding-top: 5px;">
                    <h5 class="card-trek-name" style="text-align: center; font-size: 1.2em; font-weight: bold;">
                      Har Ki Dun Trek
                    </h5>



                  </div>

                </div>


                <div class="ratings">
                  <div class="main-grid">
                    <!-- Location -->
                    <div class="sub-grid location">
                      <div class="icon-container">
                        <i class="fa fa-map-marker fa-lg"></i>

                        <small>Uttarakhand</small>
                      </div>
                    </div>

                    <!-- Difficulty -->
                    <div class="sub-grid difficulty">
                      <div class="icon-container">
                        <i class="fa fa-tasks fa-lg"></i>
                        <small>Moderate</small>
                      </div>
                    </div>
                  </div>

                  <div class="main-grid">
                    <!-- Duration (Days) -->
                    <div class="sub-grid duration">
                      <div class="icon-container">
                        <i class="fa fa-calendar-alt fa-lg"></i>
                        <small>7 Days</small>
                      </div>
                    </div>

                    <!-- Altitude -->
                    <div class="sub-grid altitude">
                      <div class="icon-container">
                        <i class="fa fa-arrow-up fa-lg"></i>
                        <small>11,800 Ft.</small>
                      </div>
                    </div>
                  </div>
                </div>



                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                  <!-- Price Section -->
                  <span class="tour-price">
                    <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>
                    <b> &#8377; 3,250</b>
                  </span>

                  <!-- Get Quote Button -->
                  <button class="glow-on-hover">Get Quote</button>
                </div>

              </div>
              <hr>
            </div>
          </a>


          <a class="my_card" href="chopta-tungnath-chandrashila-deoriatal-trek.php" target="_Blank">
            <div style="border: 1px solid #e0e0e0;" class="box">
              <div class="productCard_discountTag__bJQTv">
                <span class="productCard_discountTagIcon__10rS7">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                    <path d="M10.705 5.79L6.205 1.29C6.025 1.11 5.775 1 5.5 1H2C1.45 1 1 1.45 1 2V5.5C1 5.775 1.11 6.025 1.295 6.21L5.795 10.71C5.975 10.89 6.225 11 6.5 11C6.775 11 7.025 10.89 7.205 10.705L10.705 7.205C10.89 7.025 11 6.775 11 6.5C11 6.225 10.885 5.97 10.705 5.79ZM6.5 10.005L2 5.5V2H5.5V1.995L10 6.495L6.5 10.005Z" fill="#fff"></path>
                    <path d="M3.25 4C3.66421 4 4 3.66421 4 3.25C4 2.83579 3.66421 2.5 3.25 2.5C2.83579 2.5 2.5 2.83579 2.5 3.25C2.5 3.66421 2.83579 4 3.25 4Z" fill="#fff"></path>
                  </svg>
                </span>
                20%
                <div class="productCard_discountTagAmount__9R5ID">off</div>
              </div>
              <div class="ribbon-review"><i style="color: #ffd604;margin-left: 8px" class="fa fa-star mr-2"></i>4.8 <small>(126 Reviews)</small> </div>
              <img class="card-img-top" width="355" height="220" src="" data-lazy="img/packageImage/chopta-trek-2.jpg" alt="Chopta Trek">
              <div class="p-2">
                <div class="price-details">
                  <div style="padding-top: 5px;">
                    <h5 class="card-trek-name" style="text-align: center; font-size: 1.2em; font-weight: bold;">
                      Chopta Tungnath Trek
                    </h5>



                  </div>

                </div>


                <div class="ratings">
                  <div class="main-grid">
                    <!-- Location -->
                    <div class="sub-grid location">
                      <div class="icon-container">
                        <i class="fa fa-map-marker fa-lg"></i>

                        <small>Uttarakhand</small>
                      </div>
                    </div>

                    <!-- Difficulty -->
                    <div class="sub-grid difficulty">
                      <div class="icon-container">
                        <i class="fa fa-tasks fa-lg"></i>
                        <small>Easy</small>
                      </div>
                    </div>
                  </div>

                  <div class="main-grid">
                    <!-- Duration (Days) -->
                    <div class="sub-grid duration">
                      <div class="icon-container">
                        <i class="fa fa-calendar-alt fa-lg"></i>
                        <small>3 Days</small>
                      </div>
                    </div>

                    <!-- Altitude -->
                    <div class="sub-grid altitude">
                      <div class="icon-container">
                        <i class="fa fa-arrow-up fa-lg"></i>
                        <small>12,083 Ft.</small>
                      </div>
                    </div>
                  </div>
                </div>



                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                  <!-- Price Section -->
                  <span class="tour-price">
                    <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>
                    <b> &#8377; 3,250</b>
                  </span>

                  <!-- Get Quote Button -->
                  <button class="glow-on-hover">Get Quote</button>
                </div>

              </div>
              <hr>
            </div>
          </a>
          
          
          
          <a class="my_card" href="dodital-darwa-pass-trek.php" target="_Blank">
            <div style="border: 1px solid #e0e0e0;" class="box">
              <div class="productCard_discountTag__bJQTv">
                <span class="productCard_discountTagIcon__10rS7">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                    <path d="M10.705 5.79L6.205 1.29C6.025 1.11 5.775 1 5.5 1H2C1.45 1 1 1.45 1 2V5.5C1 5.775 1.11 6.025 1.295 6.21L5.795 10.71C5.975 10.89 6.225 11 6.5 11C6.775 11 7.025 10.89 7.205 10.705L10.705 7.205C10.89 7.025 11 6.775 11 6.5C11 6.225 10.885 5.97 10.705 5.79ZM6.5 10.005L2 5.5V2H5.5V1.995L10 6.495L6.5 10.005Z" fill="#fff"></path>
                    <path d="M3.25 4C3.66421 4 4 3.66421 4 3.25C4 2.83579 3.66421 2.5 3.25 2.5C2.83579 2.5 2.5 2.83579 2.5 3.25C2.5 3.66421 2.83579 4 3.25 4Z" fill="#fff"></path>
                  </svg>
                </span>
                20%
                <div class="productCard_discountTagAmount__9R5ID">off</div>
              </div>
              <div class="ribbon-review"><i style="color: #ffd604;margin-left: 8px" class="fa fa-star mr-2"></i>4.8 <small>(126 Reviews)</small> </div>
              <img class="card-img-top" width="355" height="220" src="" data-lazy="img/packageImage/dodital-trek.jpg" alt="Chopta Trek">
              <div class="p-2">
                <div class="price-details">
                  <div style="padding-top: 5px;">
                    <h5 class="card-trek-name" style="text-align: center; font-size: 1.2em; font-weight: bold;">
                      Dodital Darwa Pass Trek
                    </h5>



                  </div>

                </div>
    

                <div class="ratings">
                  <div class="main-grid">
                    <!-- Location -->
                    <div class="sub-grid location">
                      <div class="icon-container">
                        <i class="fa fa-map-marker fa-lg"></i>

                        <small>Uttarakhand</small>
                      </div>
                    </div>

                    <!-- Difficulty -->
                    <div class="sub-grid difficulty">
                      <div class="icon-container">
                        <i class="fa fa-tasks fa-lg"></i>
                        <small>Moderate</small>
                      </div>
                    </div>
                  </div>

                  <div class="main-grid">
                    <!-- Duration (Days) -->
                    <div class="sub-grid duration">
                      <div class="icon-container">
                        <i class="fa fa-calendar-alt fa-lg"></i>
                        <small>7 Days</small>
                      </div>
                    </div>

                    <!-- Altitude -->
                    <div class="sub-grid altitude">
                      <div class="icon-container">
                        <i class="fa fa-arrow-up fa-lg"></i>
                        <small>11,400 Ft.</small>
                      </div>
                    </div>
                  </div>
                </div>



                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                  <!-- Price Section -->
                  <span class="tour-price">
                    <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>
                    <b> &#8377; 3,250</b>
                  </span>

                  <!-- Get Quote Button -->
                  <button class="glow-on-hover">Get Quote</button>
                </div>

              </div>
              <hr>
            </div>
          </a>
          
          

          
          
          <a class="my_card" href="phulara-ridge-trek.php" target="_Blank">
            <div style="border: 1px solid #e0e0e0;" class="box">
              <div class="productCard_discountTag__bJQTv">
                <span class="productCard_discountTagIcon__10rS7">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                    <path d="M10.705 5.79L6.205 1.29C6.025 1.11 5.775 1 5.5 1H2C1.45 1 1 1.45 1 2V5.5C1 5.775 1.11 6.025 1.295 6.21L5.795 10.71C5.975 10.89 6.225 11 6.5 11C6.775 11 7.025 10.89 7.205 10.705L10.705 7.205C10.89 7.025 11 6.775 11 6.5C11 6.225 10.885 5.97 10.705 5.79ZM6.5 10.005L2 5.5V2H5.5V1.995L10 6.495L6.5 10.005Z" fill="#fff"></path>
                    <path d="M3.25 4C3.66421 4 4 3.66421 4 3.25C4 2.83579 3.66421 2.5 3.25 2.5C2.83579 2.5 2.5 2.83579 2.5 3.25C2.5 3.66421 2.83579 4 3.25 4Z" fill="#fff"></path>
                  </svg>
                </span>
                20%
                <div class="productCard_discountTagAmount__9R5ID">off</div>
              </div>
              <div class="ribbon-review"><i style="color: #ffd604;margin-left: 8px" class="fa fa-star mr-2"></i>4.8 <small>(126 Reviews)</small> </div>
              <img class="card-img-top" width="355" height="220" src="" data-lazy="img/packageImage/phulara-ridge-trek.jpg" alt="Chopta Trek">
              <div class="p-2">
                <div class="price-details">
                  <div style="padding-top: 5px;">
                    <h5 class="card-trek-name" style="text-align: center; font-size: 1.2em; font-weight: bold;">
                      Phulara Ridge Trek
                    </h5>



                  </div>

                </div>


                <div class="ratings">
                  <div class="main-grid">
                    <!-- Location -->
                    <div class="sub-grid location">
                      <div class="icon-container">
                        <i class="fa fa-map-marker fa-lg"></i>

                        <small>Uttarakhand</small>
                      </div>
                    </div>

                    <!-- Difficulty -->
                    <div class="sub-grid difficulty">
                      <div class="icon-container">
                        <i class="fa fa-tasks fa-lg"></i>
                        <small>Moderate</small>
                      </div>
                    </div>
                  </div>

                  <div class="main-grid">
                    <!-- Duration (Days) -->
                    <div class="sub-grid duration">
                      <div class="icon-container">
                        <i class="fa fa-calendar-alt fa-lg"></i>
                        <small>6 Days</small>
                      </div>
                    </div>

                    <!-- Altitude -->
                    <div class="sub-grid altitude">
                      <div class="icon-container">
                        <i class="fa fa-arrow-up fa-lg"></i>
                        <small>12,150 m</small>
                      </div>
                    </div>
                  </div>
                </div>



                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                  <!-- Price Section -->
                  <span class="tour-price">
                    <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>
                    <b> &#8377; 3,250</b>
                  </span>

                  <!-- Get Quote Button -->
                  <button class="glow-on-hover">Get Quote</button>
                </div>

              </div>
              <hr>
            </div>
          </a>



        </div>
        <a style="align-items: center;justify-content: center;" href="trekking.php" class="">
          <span style="font-size: 0.8rem;margin-right: 5px;align-items: center;justify-content: center;">View All</span>
          <i style="color: #ff0000;" class="fas fa-arrow-right"></i>
        </a>
      </div>
    
    
    
  <link rel="stylesheet" type="text/css" href="src/slick/slick-theme.css" />
  <link rel="stylesheet" type="text/css" href="src/slick/slick.css" />
      <style>
       

        a {
          text-decoration: none;
          color: inherit;
          
         
        }

      
       
      </style>
      
  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>

  <!-- Slick Slider -->
  <script type="text/javascript" src="src/slick/slick.min.js"></script>
  <script type="text/javascript" src="js/Main.js"></script>

  <script type="text/javascript">
    $(document).on('ready', function() {

      $(".top_icons").slick({
        lazyLoad: 'anticipated',
        dots: false,
        speed: 300,
        arrows: false,
        cssEase: 'linear',
        autoplay: true,
        autoplaySpeed: 2000,
        infinite: true,
        centerMode: false,
        centerPadding: '1%',
        slidesToShow: 2,
        swipeToSlide: true,
        slidesToScroll: 2,
        responsive: [{
            breakpoint: 1200,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
              centerMode: true,
              centerPadding: '1%',
            }
          },
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 2,
              centerMode: true,
              centerPadding: '1%',
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 2,
              centerPadding: '1%',
            }
          },
          {
            breakpoint: 568,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 2,
              centerPadding: '1%',
            }
          },
          {
            breakpoint: 392,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
              centerPadding: '1%',
            }
          }
        ]
      });

      $(".destination_slider").slick({
        lazyLoad: 'progressive',
        dots: false,
        speed: 300,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 3000,
        cssEase: 'linear',
        infinite: true,
        centerMode: true,
        centerPadding: '2%',
        slidesToShow: 1,
        swipeToSlide: true,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 1200,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              centerPadding: '5%',
            }
          },
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
              centerMode: false,
              centerPadding: '5%',
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
              centerMode: false,
              centerPadding: '10%',
            }
          },
          {
            breakpoint: 568,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
              centerMode: true,
              centerPadding: '7%',
            }
          },
          {
            breakpoint: 450,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              centerMode: false,
              centerPadding: '3%',
            }
          }
        ]
      });
      $(".offer_top").slick({
        lazyLoad: 'progressive', // ondemand progressive anticipated
        infinite: true,
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: false,
        //autoplay: false,
        //autoplaySpeed: 2000,
        responsive: [{
            breakpoint: 1200,
            settings: {
              centerMode: false,
            }
          },
          {
            breakpoint: 992,
            settings: {
              centerMode: true,
              centerPadding: '1%',
              slidesToShow: 2,
              slidesToScroll: 2,
            }
          },
          {
            breakpoint: 768,
            settings: {
              centerMode: false,
              infinite: true,
              centerPadding: '0%',
              slidesToShow: 1,
              slidesToScroll: 1,
            }
          },
          {
            breakpoint: 392,
            settings: {
              centerMode: false,
              infinite: true,
              centerPadding: '0%',
              slidesToShow: 1,
              slidesToScroll: 1,
            }
          }
        ]
      });

      $(".regular").slick({
        lazyLoad: 'ondemand',
        dots: false,
        speed: 300,
        arrows: true,
        cssEase: 'linear',
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 3,
        responsive: [{
            breakpoint: 1200,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              centerMode: true,
              centerPadding: '3%',
            }
          },
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
              arrows: false,
              infinite: false,
              centerMode: false,
              centerPadding: '6%',
            }
          },
          {
            breakpoint: 568,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: false,
              arrows: false,
              infinite: false,
              centerMode: false,
              centerPadding: '10%',
            }
          }
        ]
      });

      $(".offer").slick({
        lazyLoad: 'progressive', // ondemand progressive anticipated
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        //centerMode: true,
        //centerPadding: '1%',
        autoplay: true,
        autoplaySpeed: 1500,
        responsive: [{
          breakpoint: 1200,
          settings: {
            centerMode: true,
            centerPadding: '1%',
          }
        }, ]
      });

      $(".regularreview").slick({
        lazyLoad: 'ondemand', // ondemand progressive anticipated
        infinite: true,
        speed: 300,
        arrows: true,
        cssEase: 'linear',
        infinite: true,
        slidesToShow: 3,
        centerMode: true,
        centerPadding: '3%',
        slidesToScroll: 3,
        responsive: [{
            breakpoint: 1200,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              centerMode: true,
              centerPadding: '2%',
            }
          },
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
              arrows: false,
              infinite: false,
              centerMode: false,
              centerPadding: '4%',
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              arrows: false,
              infinite: false,
              centerMode: false,
              centerPadding: '4%',
            }
          }
        ]
      });

    });
  </script>
  <script>
    $(document).ready(function() {

      $('.trekking_icon').on('shown.bs.tab', function(event) {
        $(".icon_dropedown").removeClass('active');
        $(".nav-link").removeClass('active');
        $(".trekking_icon").addClass('active');

      });
      $('.tour-packages_icon').on('shown.bs.tab', function(event) {
        $(".icon_dropedown").removeClass('active');
        $(".nav-link").removeClass('active');
        $(".tour-packages_icon").addClass('active');
      });

      $('.wildlife_icon').on('shown.bs.tab', function(event) {
        $(".icon_dropedown").removeClass('active');
        $(".nav-link").removeClass('active');
        $(".wildlife_icon").addClass('active');

      });
      $('.festival_icon').on('shown.bs.tab', function(event) {
        $(".icon_dropedown").removeClass('active');
        $(".nav-link").removeClass('active');
        $(".festival_icon").addClass('active');

      });
      $('.tribal_icon').on('shown.bs.tab', function(event) {
        $(".icon_dropedown").removeClass('active');
        $(".nav-link").removeClass('active');
        $(".tribal_icon").addClass('active');

      });
      $('.Homestays_icon').on('shown.bs.tab', function(event) {
        $(".icon_dropedown").removeClass('active');
        $(".nav-link").removeClass('active');
        $(".Homestays_icon").addClass('active');
      });
      $('.Religious_icon').on('shown.bs.tab', function(event) {
        $(".icon_dropedown").removeClass('active');
        $(".nav-link").removeClass('active');
        $(".Religious_icon").addClass('active');
      });
      $('.Houseboat_icon').on('shown.bs.tab', function(event) {
        $(".icon_dropedown").removeClass('active');
        $(".nav-link").removeClass('active');
        $(".Houseboat_icon").addClass('active');
      });


    });


    $(document).ready(function() {
      $("#menuicon").click(function() {
        var x = document.getElementById("menuicon").style.backgroundColor;
        if (x == '#f6f6f600') {
          $("#menuicon").css('background-color', '#f7472e')
        } else {
          $("#menuicon").css('background-color', '#f6f6f600')
        }
      });


      //display slider inside tabse after refreshing slider
      $('.nav-link').on('shown.bs.tab', function() {
        let $tabPane = $($(this).attr('href'));
        $('.top_icons', $tabPane).slick('refresh');
        $('.destination_slider', $tabPane).slick('refresh');
        $('.offer_top', $tabPane).slick('refresh');
      });
      $('.icon_dropedown').on('shown.bs.tab', function() {
        let $tabPane = $($(this).attr('href'));
        $('.top_icons', $tabPane).slick('refresh');
        $('.destination_slider', $tabPane).slick('refresh');
        $('.offer_top', $tabPane).slick('refresh');
      });

    });

    //remove active class after click inside tabs in drope down
    $(document).ready(function() {
      $(".icon_dropedown").click(function() {
        $(".icon_dropedown").removeClass('active');
      });
    });
  </script>


  </section>




  <style>
    .call-expert {

      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      margin-bottom: 30px;
      padding: 5px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.57);
      margin-top: 20px;
      padding: 5px 20px 5px 20px;
      width: fit-content;
      /* Increased width */
      cursor: pointer;
      transition: transform 0.2s ease-in-out;
    }

    .call-expert:hover {
      transform: scale(1.05);
    }

    .call-icon {
      width: 40px;
      /* Slightly bigger icon */
      height: 40px;
      margin-bottom: 10px;
    }

    .phone-number {
      font-size: 14px;
      /* Bigger font */
      font-weight: bold;
      color: rgb(255, 85, 0);
      text-decoration: none;
    }

    .phone-number:hover {
      color: #0056b3;
      text-decoration: underline;
    }
  </style>

  <style>
    .productCard_reviewBox {
      width: 120px;
      display: flex;
      align-items: baseline;
      gap: 0px;
      padding: 0px;
      margin-top: -20px;
      justify-self: right;
      margin-right: -62px;
      border-radius: 4px;
      transition: background-color 0.3s, box-shadow 0.3s;
      cursor: pointer;
      position: relative;
      right: 0;
    }
  </style>



  <section class="" id="footer">

    <?php include_once("footer.php"); ?>
  </section>

  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="js/package.js"></script>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js"></script>

  <!-- Sweet alert -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.13.0/sweetalert2.min.js"></script>
  <!-- /Sweet alert -->

  <!-- Slick Slider -->
  <script type="text/javascript" src="src/slick/slick.min.js"></script>

  <script type="text/javascript">
    $(document).on('ready', function() {

      var tourtype = '<?php echo $Tour_type  ?>';
      if (tourtype == 'trekking') {
        $(".things_tab,.safty_tab,.fitness_tab").removeClass("d-none");
      }

      $(".slider").slick({
        lazyLoad: 'ondemand', // ondemand progressive anticipated
        infinite: true,
        fade: false,
        autoplay: false,
        centerMode: true,
        centerPadding: '0%',
      });

      $(".regular").slick({
        lazyLoad: 'ondemand', // ondemand progressive anticipated
        infinite: true,
        speed: 300,
        arrows: true,
        cssEase: 'linear',
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 3,
        responsive: [{
            breakpoint: 1200,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              centerMode: true,
              centerPadding: '3%',
            }
          },
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
              arrows: false,
              infinite: false,
              centerMode: false,
              centerPadding: '6%',
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              arrows: false,
              infinite: false,
              centerMode: false,
              centerPadding: '10%',
            }
          }
        ]
      });

      $('#calendar').fullCalendar({
        header: {
          left: 'prev, today',
          center: 'title',
          right: 'next',
        },
        selectable: true,
        selectHelper: true,
        fixedWeekCount: false,
        allDaySlot: true,

        eventRender: function(event, element, view) {
          var dateString = event.start.format("YYYY-MM-DD");
          $(view.el[0]).find('.fc-day[data-date=' + dateString + ']').css('color', 'green');
        },

        eventAfterRender: function(event, element, view) {
          var date = new Date();
          if (event.title == 'Closed' || event.title == 'closed') {
            element.css('background-color', 'red');
            element.css('border-color', 'red');
            //element.css('Text-color', 'white');
          }
        },

        dayClick: function(date, jsEvent, view) {
          $(view.el[0]).find('.fc-day[data-date]').css('background-color', 'white');
          $('#trek_date_test').val('');
          $('#main_btn_book').css('display', 'none');
          var eventsCount = 0;
          var date = date.format('YYYY-MM-DD');
          $('#calendar').fullCalendar('clientEvents', function(event) {
            var start = moment(event.start).format("YYYY-MM-DD");
            var end = moment(event.end).format("YYYY-MM-DD");
            var title = event.title;
            if (date == start) {
              $('#trek_date_test').val(start);
              $(view.el[0]).find('.fc-day[data-date=' + date + ']').css('background-color', 'lightblue');
              $('#main_btn_book').css('display', 'block');
              if (title == 'closed' || title == 'full' || title == 'Full' || title == 'Closed') {
                $('#trek_date_test').val('');
                $('#main_btn_book').css('display', 'none');
              }
            }
          });
        },

        eventClick: function(calEvent, jsEvent, view) {
          var dateString2 = calEvent.start.format("YYYY-MM-DD");
          $(view.el[0]).find('.fc-day[data-date]').css('background-color', 'white');
          $(view.el[0]).find('.fc-day[data-date=' + dateString2 + ']').css('background-color', 'lightblue');
          if (calEvent.title == 'closed' || calEvent.title == 'full' || calEvent.title == 'Full' || calEvent.title == 'Closed') {
            $('#trek_date_test').val('');
            $('#main_btn_book').css('display', 'none');
          } else {
            $('#trek_date_test').val(calEvent.start.format('YYYY-MM-DD'));
            $('#main_btn_book').css('display', 'block');
          }
        }

      });

      $('#my_calander').on('shown.bs.modal', function() {
        $("#calendar").fullCalendar('render');
      });

    });
  </script>

</body>

</html>