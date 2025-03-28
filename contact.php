<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
  <title>Contact Us - The Trekker</title>
  <!-- External CSS and slider libraries -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="shortcut icon" href="src/img/Favicon.png" type="image/x-icon" />
  <link rel="apple-touch-icon" type="image/x-icon" href="src/img/apple-touch-icon-57x57-precomposed.png" />
  <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="src/img/apple-touch-icon-72x72-precomposed.png" />
  <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="src/img/apple-touch-icon-114x114-precomposed.png" />
  <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="src/img/apple-touch-icon-144x144-precomposed.png" />

  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="css/Main.css" type="text/css" />
  <link rel="stylesheet" href="css/footer.css" type="text/css" />
  <link rel="stylesheet" href="css/header.css" type="text/css" />
  <link rel="stylesheet" href="css/new-Main.css" type="text/css" />
  <link rel="stylesheet" href="css/trekking.css" type="text/css" />
  
  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="js/anime.min.js"></script>

  <!-- Slick Slider -->
  <script type="text/javascript" src="src/slick/slick.min.js"></script>
  <script type="text/javascript" src="js/Main.js"></script>

  <!-- Slick Slider -->
  <link rel="stylesheet" type="text/css" href="src/slick/slick-theme.css" />
  <link rel="stylesheet" type="text/css" href="src/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <style>


    .container-form {
      display: flex;
      justify-content: space-between;
      max-width: 1100px;
      width: 100%;
      flex-wrap: wrap; /* Allow wrapping for smaller screens */
      margin-top: 25px;
    }

    .contact-form-card {
      width: 55%; /* Reduced width of the contact form */
      background: #fff;
      border: none;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      padding: 15px;
    }

    .contact-details-card {
      width: 38%; /* Reduced width of the contact details section */
      background: #fff;
      border: none;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      padding: 15px;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      /* Remove extra height and allow it to fit content */
      height: fit-content;
    }

    .card-header {
      background: #ff4500;
      color: white;
      padding: 15px;
      text-align: center;
      font-size: 1.25rem;
      font-weight: bold;
      letter-spacing: 1px;
    }

    .card-body {
      padding: 20px;
    }

    .form-control {
      border-radius: 30px;
      padding: 8px 15px;
      border: 2px solid #ff4500;
      transition: all 0.3s ease;
    }

    .form-control:focus {
      box-shadow: none;
      border-color: #e03e00;
    }

    .btn-custom {
      background-color: #ff4500;
      color: white;
      border: none;
      border-radius: 30px;
      width: 100%;
      padding: 10px;
      font-size: 0.9rem;
      font-weight: bold;
      transition: background-color 0.3s ease;
    }

    .btn-custom:hover {
      background-color: #e03e00;
    }

    .form-text {
      font-size: 0.9rem;
      text-align: center;
      margin-top: 10px;
    }

    .form-text a {
      color: #ff4500;
      text-decoration: underline;
    }

    .input-group-text {
      background: #fff;
      border: 2px solid #ff4500;
      border-right: none;
      border-radius: 30px 0 0 30px;
      padding: 8px 12px;
    }

    .input-group .form-control {
      border-left: none;
      border-radius: 0 30px 30px 0;
    }

    textarea.form-control {
      border-radius: 20px;
      border: 2px solid #ff4500;
    }

    .contact-details {
      margin-top: 20px;
    }

    .contact-details i {
      color: #ff4500;
      margin-right: 10px;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .contact-form-card {
        width: 100%; /* Full width on small screens */
        margin-bottom: 20px; /* Add some space between the form and details card */
      }

      .contact-details-card {
        width: 100%; /* Full width on small screens */
      }
    }
    
    /* Add padding for smaller screens */
    @media screen and (max-width: 768px) {
      .container {
        padding: 35px; /* Add padding on smaller screens */
      }
    }
/* Outer container centering */
.outer-container {
    display: flex; /* Use Flexbox for centering */
    justify-content: center; /* Centers horizontally */
    align-items: center; /* Centers vertically */
    height: 50vh; /* Makes the parent take 60% of the viewport height */
}

/* Banner container with responsive behavior */
.banner-container {
    width: 70%; /* 70% of the width */
    max-height: 90%; /* Limits the height to 80% of the viewport */
    overflow: hidden; /* Ensures the image doesn't overflow */
    display: flex; /* Use Flexbox for centering the image */
    justify-content: center; /* Centers horizontally */
    align-items: center; /* Centers vertically */
}

/* Banner image scaling */
.responsive-banner {
    width: 100%; /* Makes the image fill the container's width */
    height: auto; /* Maintains aspect ratio */
    max-height: 100%; /* Ensures the image doesn't overflow vertically */
}

/* Media Query for smaller screens */
@media (max-width: 768px) {
    .outer-container {
        height: 50vh; /* Reduces height on smaller screens */
    }

    .banner-container {
        width: 90%; /* Increase the width to 90% for smaller screens */
        max-height: 80%; /* Adjust the max-height for better display */
    }

    .responsive-banner {
        width: 100%; /* Makes the image fill the container's width */
        height: auto; /* Maintains aspect ratio */
    }
}

/* Media Query for extra-small screens (mobile portrait) */
@media (max-width: 480px) {
    .outer-container {
        height: 40vh; /* Reduces height further on very small screens */
    }

    .banner-container {
        width: 95%; /* Makes the container almost full-width on mobile */
        max-height: 60%; /* Limits height even more on small devices */
    }
}

  </style>

    <style>
    @media screen and (min-width: 1200px) {
      .sticky_nav_icon_continer_other {
        align-items: center;
        justify-content: center;
        margin-left: 180px !important;
      }
  </style>
  
  
</head>

<body>
     <?php include_once("header.php"); ?>
     
<div class="outer-container">
    <div class="banner-container">
        <img src="img/packageImage/contact-banner.jpg" alt="Website Banner" class="responsive-banner">
    </div>
</div>

    
    
  <div class=" container container-form">
      
    <div class="contact-form-card">
      <div class="card-header">Contact Us</div>
      <div class="card-body">
        <form name="contactform" method="post" action="contact-submission.php">
          <div class="mb-3">
            <div class="input-group">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
              <input type="text" name="name_contact" class="form-control" placeholder="First Name" />
            </div>
          </div>
          <div class="mb-3">
            <div class="input-group">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
              <input type="text" name="lastname_contact" class="form-control" placeholder="Last Name" />
            </div>
          </div>
          <div class="mb-3">
            <div class="input-group">
              <span class="input-group-text"><i class="fas fa-envelope"></i></span>
              <input type="email" name="email_contact" class="form-control" placeholder="Email" />
            </div>
          </div>
          <div class="mb-3">
            <div class="input-group">
              <span class="input-group-text"><i class="fas fa-phone"></i></span>
              <input type="text" name="phone_contact" class="form-control" placeholder="Phone" />
            </div>
          </div>
          <div class="mb-3">
            <textarea name="message_contact" class="form-control" placeholder="Message" rows="4"></textarea>
          </div>
          <button type="submit" class="btn btn-custom">Send Message</button>
          <div class="form-text">
            By clicking the button, you agree to our
            <a href="https://himalayayatri.com/terms-and-condition.php" target="_blank"><u>Terms of Services</u></a>
          </div>
        </form>
      </div>
    </div>

    <div class="contact-details-card">
      <div class="card-header">Contact Details</div>
      <div class="card-body contact-details">
        <p><i class="fas fa-map-marker-alt"></i> Narayan Vihar, Kargi Chowk, Patel Nagar, Dehradun, India</p>
        <p><i class="fas fa-envelope"></i> info@himalayayatri.com</p>
        <p><i class="fas fa-phone"></i> 6395847208, 6397353509</p>
        <p><i class="fas fa-clock"></i> Mon - Fri: 10:00 AM - 8:00 PM</p>
      </div>
    </div>
  </div>

 <?php

  include_once("footer.php"); ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
