<?php
include_once("../config.php");
include(ROOT . "connection.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Journey of Kashmir with Ladakh via Kargil </title>
  <!-- Favicons-->
  <!-- Favicons-->
  <link rel="shortcut icon" href="<?php echo $root1 ?>/src/icons/Favicon.png" type="image/x-icon" />
  <link rel="apple-touch-icon" type="image/x-icon" href="src/icons/apple-touch-icon-57x57-precomposed.png" />
  <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?php echo $root1 ?>/src/icons/apple-touch-icon-72x72-precomposed.png" />
  <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?php echo $root1 ?>/src/icons/apple-touch-icon-114x114-precomposed.png" />
  <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?php echo $root1 ?>/src/icons/apple-touch-icon-144x144-precomposed.png" />
  <!-- Mobile Specific Metas -->
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no">

  <link rel="stylesheet" href="<?php echo $root1 ?>/css/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $root1 ?>/css/package.scss" type="text/css" />
  <link rel="stylesheet" href="<?php echo $root1 ?>/css/footer.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $root1 ?>/css/header.css" type="text/css" />

  <!--calendar-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css" rel="stylesheet" />

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo $root1 ?>/css/fontawesome-free/css/all.min.css">
  <!--google analytics-->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-105370673-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-105370673-1');
  </script>

  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
      Tawk_LoadStart = new Date();
    (function() {
      var s1 = document.createElement("script"),
        s0 = document.getElementsByTagName("script")[0];
      s1.async = true;
      s1.src = 'https://embed.tawk.to/59a81850c28eca75e461d4ea/default';
      s1.charset = 'UTF-8';
      s1.setAttribute('crossorigin', '*');
      s0.parentNode.insertBefore(s1, s0);
    })();
  </script>

</head>

<body>
  <style>
    .from_conatinaer {
      height: 110vh;
      background-color: #f7472e;
      background-image: url("http://trekveda.com/images/slides/kashmir-with-ladakh-via-kargil-offer-banner.webp");
      /* The image used */
      background-color: #cccccc;
      /* Used if the image is unavailable */
      background-position: center;
      /* Center the image */
      background-repeat: no-repeat;
      /* Do not repeat the image */
      background-size: cover;
      /* Resize the background image to cover the entire container */
    }

    .from_conatinaer .container-fluid .h4 {
      color: white;
      align-self: center;
    }

    .from_conatinaer .jumbotron-heading,
    p {
      color: white;
      margin-top: 20px;
    }

    @media screen and (max-width: 509px) {
      .from_conatinaer .container-fluid .h4 {
        font-size: 16px;
      }

      .from_conatinaer .jumbotron-heading {
        font-size: 26px;
      }

      .from_conatinaer p {
        font-size: 20px;
      }
    }

    .landing_page_submit_form input,
    textarea {
      width: 100%;
      color: #000;
      background: #fff;
      outline: none;
      font-size: 15px;
      letter-spacing: 2px;
      padding: 12px 20px;
      height: 50px;
      border: 0px;
      box-shadow: 0 0 6px 1.5px rgb(0 0 0 / 30%);
      border-radius: 3px;
      -webkit-appearance: none;
      display: block;
      margin-bottom: .6em;
    }

    @media screen and (max-width:768px) {

      .landing_page_submit_form input,
      textarea {
        font-size: 12px;
        letter-spacing: 1.5px;
        padding: 10px 16px;
        height: 40px;
        margin-bottom: .4em;
      }

    }

    .landing_submit_btn {
      outline: none;
      color: #fff;
      text-transform: uppercase;
      width: 250px;
      height: 50px;
      padding: 0.5em 0;
      font-size: 20px;
      font-weight: 600;
      margin: 1em 0 0 0;
      border-radius: 30px;
      border: 1px solid #fff;
      -webkit-appearance: none;
      background: #f7472e;
      transition: 0.5s all;
      -webkit-transition: 0.5s all;
      transition: 0.5s all;
      -moz-transition: 0.5s all;
      cursor: pointer;
    }

    .t-c {
      color: white;
      margin-top: 15px;
      font-size: 10px;
    }

    .t-c a {
      color: #f7472e;
    }

    @media screen and (max-width:509px) {
      .t-c {
        color: white;
        margin-top: 15px;
        font-size: 10px !important;
      }
    }

    .package-heading-side {
      font-size: 25px;
      text-align: center;
      font-weight: 700;
      border-bottom: 1px solid #dadada;
      margin-bottom: 15px;
      padding-bottom: 15px;
      color: black;
    }
  </style>

  <section class="jumbotron text-center from_conatinaer py-4" id="main-form">
    <div class="container-fluid">
      <div class="row">
        <h1 class="col-6 h4 text-left">
          <a class=""><img height="45px" src="https://trekveda.com/img/trekveda-logo-update-white-version.png" id="main_logo"> </a>
        </h1>
        <h1 class="col-6 h4 text-right">+91 9821325153</h1>
      </div>
    </div>
    <div class="container">
      <h1 class="jumbotron-heading">Journey of Kashmir with Ladakh via Kargil </h1>
      <p class="lead">Want a detailed PDF - Day wise Itinerary & Quotation.</p>
      <div class="form-container text-center d-flex justify-content-center">

        <form method="post" action="form-submission.php" class="landing_page_submit_form col-md-8 p-0 m-0">
          <div class="form-group">
            <input class="form-control" placeholder="Name" type="text" name="name" required>
          </div>
          <div class="form-group">
            <input class="form-control" placeholder="Email" type="text" name="email" required>
          </div>
          <div class="form-group">
            <input class="form-control" placeholder="Contact" type="tel" name="telephone" required>
            <input type="hidden" name="trek_name" value="Journey of Kashmir with Ladakh via Kargil " />
            <input type="hidden" name="Package_link" value="trekveda.com/tour/cultural-heritage/kashmir-with-ladakh-via-kargil " />
          </div>

          <div class="form-group">
            <textarea class="form-control" placeholder="Message (Optional)" name="comments" maxlength="1000" cols="25" rows="6"></textarea>
          </div>

          <button type="submit" class="btn landing_submit_btn ">GET DETAIL</button>
          <p class="t-c">By clicking the button, you agree to our <a href="term-and-condition.php"><u>Terms of Services</u></a></p>
        </form>

      </div>
    </div>
  </section>
<section class="inclusion_detail_big_cards">
  <div class="container my-4">
    <div class="row">

      <?php
      if (mysqli_connect_error()) {
        die("Connection error: " . mysqli_connect_error());
      } else {
        $sql = "select * FROM Tour_package_pages where Title = 'Journey of Kashmir with Ladakh via Kargil' ;";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {

          $price_without_discount = $row['price_without_discount'];

          $cost_with_discount = $row['price_with_discount'];
          $discount_Percentage = $row['discount_percentage'];
          $comment_for_price = $row['price_comment'];
        }
      }
      ?>

      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card">
          <div class="card-body" id="pack_detail_card">
            <div class="row">
              <h6 class="text-left start-from col-12"> Starting from</h6>
              <h4 class="price-field text-left col-9"><small style="color:gray"><s> &#8377; <?php echo $price_without_discount ?></s></small> &#8377; <b><span id="mainprice" style="color:#f7472e;" onchange="onpricechange()"><?php echo $cost_with_discount ?></span></b><small id="gst_text"> +5% GST</small></h4>
              <h6 class="card-price col-3 text-right"><mark class="top-mark">35% OFF</mark></b></h6>
              <input hidden type="text" id="mainprice_without_addOn" value="<?php echo $cost_with_discount ?>">
              <div class="ratings py-0 my-0 text-left col-8">
                <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span>
                <span>(28 reviews)</span>
              </div>
              <div class="ratings py-0 my-0 text-right col-4">
                <span class="badge badge-pill right-green"> 4.8</span>
              </div>

            </div>
            <hr>
            <ul>
              <li class="flex-container mb-2">
                <div style="border-right: 2px solid #dadada;"><i class="fa fa-calendar-alt" style="color: #ff6219"></i> 8 Days</div>
                <div style="border-right: 2px solid #dadada;"><i class="fa fa-mountain" style="color: #ff6219"></i> -- ft.</div>
                <div><i class="fa fa-route" style="color: #ff6219"></i> -- Km</div>
              </li>
              <hr>

              <li class="flex-container mb-2">
                <div style="border-right: 2px solid #dadada;"><b>Start</b> : Srinagar</div>
                <div style="border-right: 2px solid #dadada;"><b>End</b> : Leh</div>

              </li>
              <hr>
              <li class="flex-container mb-2">
                <div style="border-right: 2px solid #dadada;"><i class="fa fa-level-up-alt" style="color: #ff6219"></i> N/A</div>
                <div><i class="fa fa-map-marker-alt" style="color: #ff6219"> </i> J & K & ladakh</div>
              </li>
            </ul>
            <hr>

            <div class="col-12 p-0 m-0 mt-3">
              <a href="#main-form"><button type="button" class="btn btn-block package-btn py-3"> Get Quote </button></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card ellipsis mb-5 mb-lg-0">
          <div class="card-body">
            <p class="h4 card-title text-center package-heading-side">Inclusion/Exclusion</p>
            <ul class="fa-ul">
              <li><span class="fa-li"></span><strong>Inclusion in cost during the Tour:</strong></li>
              <li><span class="fa-li"><i class="fas fa-check" style="color: green;"></i></span>Transfers and sightseeing tours by Qualis/Inovva/Scorpio/Tempo as per the itinerary.</li>
              <li><span class="fa-li"><i class="fas fa-check" style="color: green;"></i></span>Accommodation on twin sharing basis using base category rooms at Standard Hotel.</li>
              <li><span class="fa-li"><i class="fas fa-check" style="color: green;"></i></span>Meals on MAPAI basis at all places (Breakfast and Dinner on fixed menu basis).</li>
              <li><span class="fa-li"><i class="fas fa-check" style="color: green;"></i></span>Service of our representative on arrival and Departure only.</li>
              <li>&nbsp;</li>
              <li><span class="fa-li"></span><strong>Exclusion in cost during the Tour:</strong></li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times" style="color: red;"></i></span>Mandatory GST of 5% on Invoice Amount. </li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times" style="color: red;"></i></span>Airfare to and from Srinagar/Leh.</li>
               <li class="text-muted"><span class="fa-li"><i class="fas fa-times" style="color: red;"></i></span>Any Kind of Personal Expenses or Optional Tours / Extra Meals Ordered.</li>
                <li class="text-muted"><span class="fa-li"><i class="fas fa-times" style="color: red;"></i></span>Anything not specifically mentioned under the head Prices included</li>
                 <li class="text-muted"><span class="fa-li"><i class="fas fa-times" style="color: red;"></i></span>Tips, Laundry, Phone Calls, Medical.</li>
                  <li class="text-muted"><span class="fa-li"><i class="fas fa-times" style="color: red;"></i></span>Any Kind of Drinks (Alcoholic, Mineral, Aerated).</li>
                  <li class="text-muted"><span class="fa-li"><i class="fas fa-times" style="color: red;"></i></span>Guide fee, camera fee, Soft or Hard drinks, Starters.</li>
                  <li class="text-muted"><span class="fa-li"><i class="fas fa-times" style="color: red;"></i></span>Any kind of Travel / Health Insurance (Trekveda strictly recommend each traveller to please carry your own travel / health insurance).</li>
                   <li class="text-muted"><span class="fa-li"><i class="fas fa-times" style="color: red;"></i></span>Additional costs due to flight cancellation, road blocks etc.</li>
                    <li class="text-muted"><span class="fa-li"><i class="fas fa-times" style="color: red;"></i></span>Any entrances Fee at Monasteries, Museum, Temples or any other heritage sites ( this will be payable directly by the clients as per applicable charges).</li>
            </ul>
            <div class="see_more_btn">
                <a>Read more </a>
              </div>
              <div class="fadeout"></div>
          </div>
        </div>
      </div>



      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card ellipsis mb-5 mb-lg-0">
          <div class="card-body">
            <p class="h4 card-title text-center package-heading-side">Available Dates</p>
            <?php
            $sql = "SELECT * FROM Treking_date where Trek_name = 'Journey of Kashmir with Ladakh via Kargil' ";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc())
              for ($i = 1; $i < 367; $i++) {
                $date[$i] = $row['Date_' . $i];
              }

            $sql1 = "SELECT * FROM Treking_date_Status where Trek_name = 'Journey of Kashmir with Ladakh via Kargil' ";
            $result1 = $conn->query($sql1);
            while ($row1 = $result1->fetch_assoc())
              for ($i = 1; $i < 367; $i++) {
                $Status[$i] = $row1['Date_' . $i];
              }

            ?>
            <div id="calendar"></div>
          </div>
        </div>
      </div>

    </div>

  </div>
 </section>
<style>
    ul.timeline {
      list-style-type: none;
      position: relative;
      color: black;
    }

    ul.timeline:before {
      content: ' ';
      background: #d4d9df;
      display: inline-block;
      position: absolute;
      left: 29px;
      width: 2px;
      height: 100%;
      z-index: 400;
    }

    ul.timeline>li {
      margin: 20px 0;
      padding-left: 50px;
      color: black;
    }

    ul.timeline>li>p {

      color: black;
    }

    ul.timeline>li:before {
      content: ' ';
      background: white;
      display: inline-block;
      position: absolute;
      border-radius: 50%;
      border: 3px solid #22c0e8;
      left: 20px;
      width: 20px;
      height: 20px;
      z-index: 400;
      color: black;
    }
  </style>
  <div class="container mt-5 mb-5">
    <div class="row">
      <div class="col-md-12">
        <h4>Short Itinerary</h4>
        <ul class="timeline">
          <li>
            <a href="#">Day 1</a>
            <p>Arrival in Srinagar.</p>
          </li>
          <li>
            <a href="#">Day 2</a>
            <p>Srinagar Local sightseeing (50 Kms).</p>
          </li>
          <li>
            <a href="#">Day 3</a>
            <p>Excursion to Gulmarg by surface 60 Kms approx 2 Hrs – One Way.</p>
          </li>
          <li>
            <a href="#">Day 4</a>
            <p>Srinagar – Sonmarg - Kargil by surface 205 Kms approx 5-6 Hrs.</p>
          </li>
          <li>
            <a href="#">Day 5</a>
            <p>Kargil – Leh by surface 235 Kms approx 6-7 Hrs.</p>
          </li>
          <li>
            <a href="#">Day 6</a>
            <p>Explore Leh Town.</p>
          </li>
          <li>
            <a href="#">Day 7</a>
            <p>Leh – Khardongla Pass – Leh 85 Kms.</p>
          </li>
          <li>
            <a href="#">Day 8</a>
            <p>Departure from Leh.</p>
          </li>
        </ul>
      </div>
    </div>
  </div>


  <div class="container mb-4">
    <div class="col-md-12 text-center section-title">
      <h2>What Our Customer Says</h2>
      <!-- <p>Quisque tempus justo molestie lacus blandit</p> -->
    </div>
    <div class="row">
      <div class="col-md-4">

        <div class="video-testimonial-block">

          <div class="video">
            <iframe src="https://www.youtube.com/embed/Q8vjnYSkYSc" allowfullscreen></iframe>
            </iframe>
          </div>
        </div>
        <div></div>
        <div class="video-testimonial-content">
          <h4 class="mb10">Kedarkantha Trek | Customer Review - 6</h4>
        </div>
      </div>

      <div class="col-md-4">
        <div class="video-testimonial-block">

          <div class="video">
            <iframe src="https://www.youtube.com/embed/jwv3QYakQJ0" allowfullscreen></iframe>
            </iframe>
          </div>
        </div>
        <div class="video-testimonial-content">
          <h4 class="mb10">Kedarkantha Trek | Customer Review - 5</h4>
        </div>
      </div>

      <div class="col-md-4">
        <div class="video-testimonial-block">

          <div class="video">
            <iframe src="https://www.youtube.com/embed/Qotz3S95c8o" allowfullscreen></iframe>
            </iframe>
          </div>
        </div>
        <div class="video-testimonial-content">
          <h4 class="mb10">Dayara Bugyal Trek | Customer Review - 4</h4>
        </div>
      </div>
    </div>



  </div>
  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row">


    <div class="col-md-4 col-lg-3">
          <?php
          $sql = "select * FROM Tour_package_pages  where Title = 'Best of Havelock and Port Blair' ;";
          $result = $conn->query($sql);
          $row = $result->fetch_assoc();
          ?>
          <a href="https://trekveda.com/landing/havelock-port-blair-offer.php">
            <div class="box">
              <div class="ribbon ribbon-top-left"><span>POPULAR</span></div>
              <img class="card-img-top" src="<?php echo $root1 ?>/<?php echo $row['card_image']; ?>" alt="<?php echo $row['Title']; ?>">
              <div class="p-2">
                <span class="tour-price"><s><small>&#8377; <?php echo $row['price_without_discount']; ?> </small></s><b> &#8377; <?php echo $row['price_with_discount']; ?></b> </span>
                <span class="badge badge-pill float-right right-gary"><?php echo $row['days']; ?>D/<?php echo $row['days'] - 1; ?>N</span>
                <h5><?php echo $row['Title']; ?></h5>
                <div class="ratings">
                  <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span><span>(<?php echo $row['Reviews']; ?>)</span>
                  <span class="badge badge-pill float-right right-green"><?php echo $row['Rating']; ?></span>
                </div>
                <div class="py-3">
                  <span class="card_location"> <i class="fa fa-map-marker-alt" style="color: #ff6219;"></i> <?php echo $row['Location']; ?></span>
                  <span class="float-right"><button class="btn package-card-btn">Get Quotes</button></span>
                </div>
              </div>
              <hr>
            </div>
          </a>
        </div>
        
      
        <div class="col-md-4 col-lg-3">
          <?php
          $sql = "select * FROM Trek_add_ons_detail  where Trek_name = 'Kashmir Great Lakes Trek' ;";
          $result = $conn->query($sql);
          $row = $result->fetch_assoc();
          ?>
          <a href="https://trekveda.com/landing/kashmir-great-lakes-offer.php">
            <div class="box">
              <div class="ribbon ribbon-top-left"><span>POPULAR</span></div>
              <img class="card-img-top" src="../<?php echo $row['card_image']; ?>" alt="Kashmir Great Lakes Trek">
              <div class="p-2">
                <span class="tour-price"><s><small>&#8377; <?php echo $row['price_without_discount']; ?> </small></s><b> &#8377; <?php echo $row['Price']; ?></b> </span>
                <span class="badge badge-pill float-right right-gary"><?php echo $row['days']; ?>D/<?php echo $row['days'] - 1; ?>N</span>
                <h5><?php echo $row['Trek_name']; ?></h5>
                <div class="ratings">
                  <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span><span>(<?php echo $row['Reviews']; ?>)</span>
                  <span class="badge badge-pill float-right right-green"><?php echo $row['Rating']; ?></span>
                </div>
                <div class="py-3">
                  <span class="card_location"> <i class="fa fa-map-marker-alt" style="color: #ff6219;"></i> <?php echo $row['Location']; ?></span>
                  <span class="float-right"><button class="btn package-card-btn">Get Quotes</button></span>
                </div>
              </div>
              <hr>
            </div>
          </a>
        </div>
        
        
       
        
   
        
        
        
        <div class="col-md-4 col-lg-3">
          <?php
          $sql = "select * FROM Tour_package_pages  where Title = 'Paradise Called Andaman' ;";
          $result = $conn->query($sql);
          $row = $result->fetch_assoc();
          ?>
          <a href="https://trekveda.com/landing/paradise-called-andaman-offer.php">
            <div class="box">
              <div class="ribbon ribbon-top-left"><span>POPULAR</span></div>
              <img class="card-img-top" src="<?php echo $root1 ?>/<?php echo $row['card_image']; ?>" alt="<?php echo $row['Title']; ?>">
              <div class="p-2">
                <span class="tour-price"><s><small>&#8377; <?php echo $row['price_without_discount']; ?> </small></s><b> &#8377; <?php echo $row['price_with_discount']; ?></b> </span>
                <span class="badge badge-pill float-right right-gary"><?php echo $row['days']; ?>D/<?php echo $row['days'] - 1; ?>N</span>
                <h5><?php echo $row['Title']; ?></h5>
                <div class="ratings">
                  <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span><span>(<?php echo $row['Reviews']; ?>)</span>
                  <span class="badge badge-pill float-right right-green"><?php echo $row['Rating']; ?></span>
                </div>
                <div class="py-3">
                  <span class="card_location"> <i class="fa fa-map-marker-alt" style="color: #ff6219;"></i> <?php echo $row['Location']; ?></span>
                  <span class="float-right"><button class="btn package-card-btn">Get Quotes</button></span>
                </div>
              </div>
              <hr>
            </div>
          </a>
        </div>

      </div>
    </div>
  </div>


  <section class="" id="footer">
    <?php include_once(ROOT . "footer.php"); ?>
  </section>

  <!-- jQuery -->
  <script type="text/javascript" src="<?php echo $root1 ?>/js/jquery-2.2.4.min.js"></script>
  <script type="text/javascript" src="<?php echo $root1 ?>/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="<?php echo $root1 ?>/js/package.js"></script>

  <!-- full calander -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js"></script>


  <script type="text/javascript">
    $(document).ready(function() {
      // page is now ready, initialize the calendar...
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

        events: [
          <?php for ($i = 1; $i < 367; $i++) {
            if ($date[$i] != '') {
          ?> {
                title: '<?php echo $Status[$i]; ?>',
                start: '<?php echo $date[$i]; ?>',
                color: 'green',
              },

          <?php }
          } ?>
        ],

      });
    });
  </script>
  <style>
    .fc .fc-toolbar>*>:first-child {
      margin-left: 0;
      font-size: 15px;
      padding: Auto;
      max-inline-size: fit-content;
    }

    .fc-basic-view .fc-body .fc-row {
      min-height: min-content;
    }

    .fc-ltr .fc-basic-view .fc-day-top .fc-day-number {
      float: right;
      font-size: 20px;
      color: black;
    }

    .fc-view-container *,
    .fc-view-container :after,
    .fc-view-container :before {
      -webkit-box-sizing: content-box;
      -moz-box-sizing: content-box;
      font-weight: normal;
      white-space: pre-wrap;
      box-sizing: content-box;
      font-size: 7px;
      color: white;
    }
  </style>
  <?php
  mysqli_close($conn);
  ?>
</body>

</html>