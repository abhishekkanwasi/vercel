<?php
include_once("config.php");
include "connection.php";
?>
<?php
$root = 'https://themountaintrekker.com';
?>

<html lang="en">

<head>
    
    


  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
  <title>Disclaimer - Trekking in India - The Mountain Trekker</title>
  <!-- Favicons-->
  <link rel="shortcut icon" href="src/icons/Favicon.png" type="image/x-icon" />
  <link rel="apple-touch-icon" type="image/x-icon" href="src/icons/apple-touch-icon-57x57-precomposed.png" />
  <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="src/icons/apple-touch-icon-72x72-precomposed.png" />
  <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="src/icons/apple-touch-icon-114x114-precomposed.png" />
  <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="src/icons/apple-touch-icon-144x144-precomposed.png" />

  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="css/Main.css" type="text/css" />
  <link rel="stylesheet" href="css/footer.css" type="text/css" />
  <link rel="stylesheet" href="css/header.css" type="text/css" />
  <link rel="stylesheet" href="css/new-Main.css" type="text/css" />

  <!-- Slick Slider -->
  <link rel="stylesheet" type="text/css" href="src/slick/slick-theme.css" />
  <link rel="stylesheet" type="text/css" href="src/slick/slick.css" />

  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" type="text/css" href="css/fontawesome-free/css/all.min.css"> -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <!--google analytics-->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-105370673-1"></script>

  <!-- Meta Pixel Code -->
  <script>
    ! function(f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function() {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1137130713101122');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=1137130713101122&ev=PageView&noscript=1" /></noscript>
  <!-- End Meta Pixel Code -->

  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-105370673-1');
  </script>


  <!-- <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1198830075848247"
     crossorigin="anonymous"></script> -->


  <!-- Custom Styles -->
  <style>
    body {
      
      background-color: #fffff;
      color: #333;
      
    }

    header {
      background: #2f6f49; /* Dark Green for Mountain Theme */
      color: white;
      padding: 20px 0;
      font-family: 'Raleway', sans-serif;
    }

    header h1 {
      font-size: 2.5rem;
      font-weight: 600;
    }

    .image-aboutus-banner {
      background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.6)), url("https://themountaintrekker.com/img/test/bg.png");
      background-size: cover;
      background-position: center center;
      color: #fff;
      height: 70vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .image-aboutus-banner h1 {
      font-size: 60px;
      font-weight: bold;
      text-transform: uppercase;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
    }
    
    .image-aboutus-banner-small {
      background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.6)), url("https://themountaintrekker.com/img/test/bg.png");
      background-size: cover;
      background-position: center center;
      color: #fff;
      height: 70vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .image-aboutus-banner-small h1 {
      font-size: 60px;
      font-weight: bold;
      text-transform: uppercase;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
    }


    .breadcrumb {
      background: transparent;
      font-size: 14px;
      margin-top: 15px;
    }

    .breadcrumb a {
      color: #6c6c6c;
    }

    .breadcrumb .active {
      color: #333;
    }

    .aboutus-section {
      padding: 60px 10px;
      background-color: #ffffff;
    }

    .aboutus-section .container {
      max-width: 1100px;
    }

    .aboutus-section h4 {
      font-size: 28px;
      font-weight: 600;
      color: #2f6f49;
    }

    .aboutus-section p {
      font-size: 16px;
      line-height: 1.6;
      color: #555;
    }

    .strong {
      font-weight: bold;
      color: #2f6f49;
    }

    .video-testimonial-content h4 {
      font-size: 18px;
      color: #2f6f49;
    }

    .content-section {
      position: relative;
    }

    .pattern-overlay {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 1;
    }

    .video-testimonial-block iframe {
      width: 100%;
      height: 100%;
      border: 0;
    }

    .regular .my_card {
      background: #fff;
      border-radius: 8px;
      margin: 15px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .Btn {
      background-color: #2f6f49;
      color: #fff;
      font-weight: 600;
      padding: 10px 25px;
      border-radius: 4px;
      border: none;
      text-transform: uppercase;
    }

    .Btn:hover {
      background-color: #1f4e34;
    }
  </style>
  
  <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/674564e84304e3196ae8d4d1/1idjh4bj0';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6JH70TX87K"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-6JH70TX87K');
</script>

<!-- End of Google tag (gtag.js) -->

</head>


<body>
  <?php include_once(ROOT . "header.php"); ?>
  <!-- About Us Hero Banner -->
<div class="image-aboutus-banner">
  <h1>Disclaimer Policy</h1>
</div>

<div class="container">

  <div class="col-md-12 my-4">
    <div class="d-flex text-center align-items-center">
      <div class="w-100 h-100 text-black">
        <h1 class="h2" style="display: inline-block; border-bottom: 1px solid blue; padding-bottom:4px;">Disclaimer Policy</h1>
      </div>
    </div>
  </div>

  <div class="col-md-12">
    <hr class="solid">
    <p>A disclaimer may specify mutually agreed-upon and privately arranged terms and conditions as part of a contract or may provide warnings or expectations to the general public (or specific groups) to fulfill a duty of care and prevent unreasonable risks of harm or injury. Some disclaimers aim to limit exposure to damages after harm or injury has occurred. Additionally, certain disclaimers may represent a voluntary waiver of a right or obligation owed to the disclaimant. Disclaimers vary in uniformity. Some may be tailored to specific contexts and parties involved, while others adhere to a uniform and established set of formalities, modified only under official authority.</p>

      <p><b>Website Disclaimer</b></p>

      <p>The website disclaimer includes the following sections:</p>
      
      <ul>
  <li>No Warranties</li>
  <li>Limitations of Liability</li>
  <li>Exceptions</li>
  <li>Reasonableness</li>
  <li>Other Parties</li>
  <li>Unenforceable Provisions</li>
  <li>This Website Disclaimer</li>
 
</ul>

    <p><b>General Disclaimer</b></p>
    <p>The information on this website is provided for general informational purposes only. While The Mountain Trekker endeavors to ensure the information is accurate and up-to-date, we make no representations or warranties of any kind, express or implied, about the completeness, accuracy, reliability, suitability, or availability of the website or the information, products, services, or related graphics contained on the website for any purpose. Any reliance you place on such information is strictly at your own risk.</p>

    <p><b>Limitations of Liability</b></p>
    <p>In no event will we be liable for any loss or damage, including without limitation indirect or consequential loss or damage, or any loss or damage whatsoever arising from loss of data or profits, in connection with the use of this website.</p>
    
    <p><b>Third-Party Links</b></p>
    
    <p>Through this website, you may link to other websites that are not under the control of The Mountain Trekker. We have no control over the nature, content, or availability of those sites. The inclusion of any links does not imply a recommendation or endorsement of the views expressed within them.</p>
    
    <p><b>Availability</b></p>
    <p>Every effort is made to keep the website running smoothly. However, The Mountain Trekker takes no responsibility for, and will not be liable for, the website being temporarily unavailable due to technical issues beyond our control.</p>

  </div><!-- End disclaimer content -->

</div><!-- End container -->

  <section id="footer">
  <?php include_once(ROOT . "footer.php"); ?>
  </section>
  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>

  <script type="text/javascript" src="js/othrpage.js"></script>
</body>

</html>