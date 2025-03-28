<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
  <title>Char Dham Yatra - The Trekker</title>
  
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

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <style>
    .container {
      max-width: min(100vw, 1100px);
    }

    * {
      box-sizing: border-box;
    }

    /* Layout for image and form */
    .blog-detail .row {
      display: flex;
      flex-wrap: wrap;
    }

    .blog-detail .col-img {
      flex: 1;
      padding: 15px;
    }

    .blog-detail .col-form {
      flex: 1;
      padding: 15px;
    }

    /* Contact form custom styles */
    .contact-form-section {
      max-width: 350px;
      margin: 0 auto;
      padding: 20px;
      background-color: #f9f9f9;
      border: 1px solid #ddd;
      border-radius: 8px;
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }

    .contact-form-section h2 {
      font-size: 1.5rem;
      margin-bottom: 15px;
      color: #333;
    }

    .contact-form-section .form-group input,
    .contact-form-section .form-group textarea {
      border: 1px solid #ccc;
      border-radius: 5px;
      padding: 10px;
      width: 100%;
      margin-bottom: 15px;
    }

    .contact-form-section .form-group input:focus,
    .contact-form-section .form-group textarea:focus {
      border-color: #0069d9;
      box-shadow: 0 0 5px rgba(0, 105, 217, 0.5);
    }

    .contact-form-section button {
      background-color: #0069d9;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      width: 100%;
      font-size: 1.1rem;
    }

    .contact-form-section button:hover {
      background-color: #0056b3;
    }

    /* For small screens, stack the image and form */
    @media screen and (max-width: 768px) {
      .blog-detail .col-img,
      .blog-detail .col-form {
        flex: 1 100%;
        width: 100%;
      }

      .contact-form-section {
        max-width: 100%;
      }
    }

    /* Author and Date Section */
    .author-date {
      display: flex;
      justify-content: flex-start;
      align-items: center;
      margin-bottom: 15px;
    }

    .author-date i {
      margin-right: 8px;
      color: #0069d9;
    }

    .author-date p {
      margin: 0;
      font-size: 1rem;
      color: #555;
    }

  </style>
  <style>
    .container {
      max-width: min(100vw, 1100px);
      padding: 0 15px; /* Ensures padding on smaller screens */
    }

    * {
      box-sizing: border-box;
    }

    /* Layout for image and form */
    .blog-detail .row {
      display: flex;
      flex-wrap: wrap;
    }

    .blog-detail .col-img {
      flex: 1;
      padding: 15px;
    }

    .blog-detail .col-form {
      flex: 1;
      padding: 15px;
    }

    /* Contact form custom styles */
    .contact-form-section {
      max-width: 350px;
      margin: 0 auto;
      padding: 20px;
      background-color: #f9f9f9;
      border: 1px solid #ddd;
      border-radius: 8px;
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }

    .contact-form-section h2 {
      font-size: 1.5rem;
      margin-bottom: 15px;
      color: #333;
    }

    .contact-form-section .form-group input,
    .contact-form-section .form-group textarea {
      border: 1px solid #ccc;
      border-radius: 5px;
      padding: 10px;
      width: 100%;
      margin-bottom: 15px;
    }

    .contact-form-section .form-group input:focus,
    .contact-form-section .form-group textarea:focus {
      border-color: #0069d9;
      box-shadow: 0 0 5px rgba(0, 105, 217, 0.5);
    }

    .contact-form-section button {
      background-color: #0069d9;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      width: 100%;
      font-size: 1.1rem;
    }

    .contact-form-section button:hover {
      background-color: #0056b3;
    }

    /* For small screens, stack the image and form */
    @media screen and (max-width: 768px) {
      .blog-detail .col-img,
      .blog-detail .col-form {
        flex: 1 100%;
        width: 100%;
      }

      .contact-form-section {
        max-width: 100%;
      }

     
    }

    /* Author and Date Section */
    .author-date {
      display: flex;
      justify-content: flex-start;
      align-items: center;
      margin-bottom: 15px;
    }

    .author-date i {
      margin-right: 8px;
      color: #0069d9;
    }

    .author-date p {
      margin: 0;
      font-size: 1rem;
      color: #555;
    }

    /* Additional margin between Author and Date */
    .author-date p + p {
      margin-left: 15px; /* Adds space between Author and Date */
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

  <!-- Blog Detail Section -->
  <section style="margin:10px" class="blog-detail">
    <div class="container">
      <h1>Char Dham Yatra: A Sacred Trek for the Soul</h1>

      <!-- Author and Date Section -->
      <div class="author-date">
        <i class="fas fa-user"></i>
        <p><strong>Author:</strong> John Doe</p>
        <i style="margin-left:5px;"class="fas fa-calendar-alt"></i>
        <p><strong>Published on:</strong> February 23, 2025</p>
      </div>

      <p>The Char Dham Yatra is one of the most revered pilgrimage routes in India. This sacred journey takes you through the breathtaking Himalayan landscapes, visiting four of the most sacred temples in Hinduism: Yamunotri, Gangotri, Kedarnath, and Badrinath. Each of these Dhams holds a unique significance, and visiting them is said to purify the soul and bring eternal peace.</p>

      <div class="row">
        <!-- Image Column -->
        <div class="col-img">
          <img src="img/test/bg1.jpg" alt="Char Dham Yatra Image" class="img-fluid" style="max-width: 100%; max-height: 600px; height: 500px; width: auto; display: block;">
        </div>

        <!-- Form Column -->
        <div class="col-form">
          <div class="contact-form-section">
            <h2>Get in Touch</h2>
            <form name="contactform" method="post" class="form-group" action="blog-form-submission.php"> 
              <div class="form-group">
                <input placeholder="Name" type="text" name="name" class="form-control" required>
              </div>
              <div class="form-group">
                <input placeholder="Email" type="email" name="email" class="form-control" required>
              </div>
              <div class="form-group">
                <input placeholder="Phone" type="text" name="telephone" class="form-control" required>
              </div>

              <input type="hidden" name="trek_name" value="Char Dham Yatra" readonly>
              <input type="hidden" name="trek_name_link" value="your_canonical_link_here" readonly>

              <div class="form-group">
                <textarea placeholder="Message" name="comments" maxlength="1000" cols="25" rows="6" class="form-control" required></textarea>
              </div>
              <button type="submit" class="btn btn-block" id="submit" value="Submit">Submit</button>
               <div class="private-policy" style="font-size:10px; text-align:center; margin-top:8px">I accept the <a href="https://themountaintrekker.com/term-and-condition.php" target="_blank" style="color:orange">Terms of Use</a> and <a href="https://themountaintrekker.com/privacy-policy.php" target="_blank" style="color:orange">Privacy Policy</a>.</div>
            </form>
          </div>
        </div>
      </div>

      <h2>About the Four Dhams</h2>
      <ul>
        <li><strong>Yamunotri</strong>: The source of the Yamuna River, Yamunotri is the first stop in the Char Dham Yatra. The trek here is serene, offering picturesque views of snow-capped peaks.</li>
        <li><strong>Gangotri</strong>: The origin of the Ganges River, Gangotri is a sacred place for Hindus. The stunning temple is located beside the river, surrounded by magnificent mountains.</li>
        <li><strong>Kedarnath</strong>: Kedarnath, dedicated to Lord Shiva, is perched at an altitude of 3,583 meters. The trek here is challenging, but the rewards are immense, including breathtaking views of the Himalayan peaks.</li>
        <li><strong>Badrinath</strong>: Badrinath is the final stop on the Char Dham Yatra. Situated in the Chamoli district of Uttarakhand, the temple here is dedicated to Lord Vishnu and is one of the most popular pilgrimage sites in India.</li>
      </ul>

      <h2>Tips for Trekkers</h2>
      <ul>
        <li>Be prepared for cold weather, especially at higher altitudes.</li>
        <li>Ensure you have proper trekking footwear and clothing for varying weather conditions.</li>
        <li>Stay hydrated and carry energy snacks during the trek.</li>
        <li>Consult your doctor before embarking on this trek, especially if you have altitude sickness concerns.</li>
      </ul>

      <h2>Customer Testimonials</h2>
      <div class="testimonial">
        <p>"An unforgettable experience! The Char Dham trek not only gave me spiritual peace but also allowed me to witness nature's beauty at its best." – Rajesh K.</p>
        <p>"The guides were incredible, and the journey was breathtaking. A must-do trek for anyone looking for a spiritual and adventurous experience!" – Priya S.</p>
      </div>
      
    </div>
  </section>

  <?php include_once("footer.php"); ?>

</body>

</html>
