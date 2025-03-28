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
  <title>2022 Gangotri and Yumnotri from Haridwar - Trekveda</title>
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
      background-image: url("http://trekveda.com/images/slides/gangotri-and-yumnotri-offer-banner.webp");
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
        <p class="col-6 text-right" style="font-size:10px"><a href="https://wa.me/+91 9821325153" class="fab fa-whatsapp" style="color: white; font-size:25px"></a> Click to chat</p>
      </div>
    </div>
    <div class="container">
      <h1 class="jumbotron-heading">Gangotri and Yumnotri from Haridwar</h1>
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
            <input type="hidden" name="trek_name" value="Gangotri and Yumnotri from Haridwar" />
            <input type="hidden" name="Package_link" value="https://trekveda.com/tour/tour-packages/gangotri-and-yumnotri" />
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
        $sql = "select * FROM Tour_package_pages where Title = 'Gangotri and Yumnotri from Haridwar' ;";
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
              <h4 class="price-field text-left col-9"><small style="color:gray"><s> &#8377; 14400</s></small> &#8377; <b><span id="mainprice" style="color:#f7472e;" onchange="onpricechange()">10800</span></b><small id="gst_text"> +5% GST</small></h4>
              <h6 class="card-price col-3 text-right"><mark class="top-mark">25% OFF</mark></b></h6>
              <input hidden type="text" id="mainprice_without_addOn" value="<?php echo $cost_with_discount ?>">
              <div class="ratings py-0 my-0 text-left col-8">
                <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span>
                <span>(28 reviews)</span>
              </div>
              <div class="ratings py-0 my-0 text-right col-4">
                <span class="badge badge-pill right-green"> 4.9</span>
              </div>

            </div>
            <hr>
            <ul>
              <li class="flex-container mb-2">
                <div style="border-right: 2px solid #dadada;"><i class="fa fa-calendar-alt" style="color: #ff6219"></i> 5 Days</div>
                <div style="border-right: 2px solid #dadada;"><i class="fa fa-mountain" style="color: #ff6219"></i> -- </div>
                <div><i class="fa fa-route" style="color: #ff6219"></i> -- </div>
              </li>
              <hr>

              <li class="flex-container mb-2">
                <div style="border-right: 2px solid #dadada;"><b>Start</b> : Dehradun</div>
                <div style="border-right: 2px solid #dadada;"><b>End</b> : Dehradun</div>

              </li>
              <hr>
              <li class="flex-container mb-2">
                <div style="border-right: 2px solid #dadada;"><i class="fa fa-level-up-alt" style="color: #ff6219"></i> -- </div>
                <div><i class="fa fa-map-marker-alt" style="color: #ff6219"> </i> Uttarakhand</div>
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
              

              <li><span class="fa-li"><i class="fas fa-check" style="color: green;"></i></span> 04 Nights Accommodation during the trip will be provided using Standard Category of hotel / Home stay/ Guest House at all location in Base room category on Triple sharing basis.</li>
              <li><span class="fa-li"><i class="fas fa-check" style="color: green;"></i></span> Meals as specified in the itinerary on MAP basis in Guptkashi (it will be basic Indian vegetarian Meals on buffet basis i.e. Breakfast and Dinner only), No Meals in Kedarnath.</li>
              <li><span class="fa-li"><i class="fas fa-check" style="color: green;"></i></span> Transportation using private vehicle on sharing basis from Haridwar till Haridwar as per the itinerary and given routine.</li>
              <li><span class="fa-li"><i class="fas fa-check" style="color: green;"></i></span> All toll tax, parking, fuel, Green Tax and driver allowances.</li>
              <li>&nbsp;</li>
              <li><span class="fa-li"></span><strong>Exclusion in cost during the Tour:</strong></li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times" style="color: red;"></i></span> Mandatory GST of 5% on Invoice Amount.</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times" style="color: red;"></i></span> Any kind of Travel / Health Insurance (Trekveda strictly recommend each traveller to please carry your own travel / health insurance).</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times" style="color: red;"></i></span> Any Meals /Snacks / Beverages in during trip.</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times" style="color: red;"></i></span> Any of Cost for Airfare, Train fare.</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times" style="color: red;"></i></span> Any kind of medical expenses.</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times" style="color: red;"></i></span> Accommodation and Meals in Dehradun ( Will be subject to additional cost).</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times" style="color: red;"></i></span> Any tips, laundry, Phone call, liquors, mineral water, camera fee or any other personal nature expenses.</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times" style="color: red;"></i></span> Airport pickup and drop services ( Will be subject to additional cost).</li>
                <li class="text-muted"><span class="fa-li"><i class="fas fa-times" style="color: red;"></i></span> Any other fee / charges not mentioned in the cost included section.</li>
                
                <li class="text-muted"><span class="fa-li"><i class="fas fa-times" style="color: red;"></i></span> Any Helicopter charges - subject to additional cost.</li>
                <li class="text-muted"><span class="fa-li"><i class="fas fa-times" style="color: red;"></i></span> Any kind of rituals or Pooja Ceremonies.</li>
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
                <p class="h4 card-title text-center package-heading-side">Short Itinerary</p>
                    <ul class="timeline">
                        <li>
                            <p>Day 1: Dehradun to Barkot (1352 Meters) by surface 135 Kms approx 6 Hrs.</p>
                         </li>
                        <li>
                            <p>Day 2: Day Excursion to Yamunotri (3535 Meters) by surface 36 Kms and by Trek 6 Kms (One Way).</p>
                        </li>
                        <li>
                            <p>Day 3: Barkot to Uttarkashi (1352 Meters) by surface 90 Kms approx 5-6 Hrs.</p>
                        </li>
                         <li>
                            <p>Day 4: Uttarkashi Excursion to Gangotri (3048 Meters) by surface 110 Kms approx 3-4 Hrs One way.</p>
                        </li>
                         <li>
                            <p>Day 5: Uttarkashi to Dehradun by surface 165 Kms approx 5-6 Hrs.</p>
                        </li>
                    </ul>
           
           <div class="see_more_btn">
                <a>Read more </a>
              </div>
              <div class="fadeout"></div>
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
    

      <br/>
    <hr/>
    
     <div class="col-md-12 text-center section-title">
                
                    <div class="telephone-icon">
                      <img src="../src/icons/customer-service.png" alt="customer service">
                    </div>
                    <div class="details">
                      <p style="color:black; font-weight: 600">Have any question?</p>
                      <p style="color:black">Ask our Yatra Travel Expert</p>
                      <p style="color:black; font-Size: 40px; font-weight: 600">8958094170</p>
                    </div>
                 
                
        </div>

   <hr/>
   <br/>
   
        

        
       
    <br/>
    
    
  <div class="album py-5 bg-light">
      <div class="col-md-12 text-center section-title">
      <h2>Popular Yatra Tour Packages 2022</h2>
      <!-- <p>Quisque tempus justo molestie lacus blandit</p> -->
      </div>
    <div class="container">
      <div class="row">

        <div class="col-md-4 col-lg-3">
          <?php
          $sql = "select * FROM Tour_package_pages  where Title = 'Char Dham Yatra by Helicopter Package 6 Days' ;";
          $result = $conn->query($sql);
          $row = $result->fetch_assoc();
          ?>
          <a href="https://trekveda.com/landing/char-dham-yatra-helicopter-offer.php" target="_Blank">
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
          $sql = "select * FROM Tour_package_pages  where Title = 'Kedarnath & Badrinath Yatra Package by Helicopter' ;";
          $result = $conn->query($sql);
          $row = $result->fetch_assoc();
          ?>
          <a href="https://trekveda.com/landing/kedarnath-badrinath-helicopter-offer.php" target="_Blank">
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
          $sql = "select * FROM Tour_package_pages  where Title = 'Kedarnath Yatra Tour from Haridwar 4 Days' ;";
          $result = $conn->query($sql);
          $row = $result->fetch_assoc();
          ?>
          <a href="https://trekveda.com/landing/kedarnath-yatra-2n-3d-offer.php" target="_Blank">
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
          $sql = "select * FROM Tour_package_pages  where Title = 'Char Dham Yatra Tour with Rishikesh Haridwar 11 Days' ;";
          $result = $conn->query($sql);
          $row = $result->fetch_assoc();
          ?>
          <a href="https://trekveda.com/landing/char-dham-yatra-from-delhi-offer.php" target="_Blank">
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
          $sql = "select * FROM Tour_package_pages  where Title = 'Kedarnath Yatra Tour with Rishikesh Haridwar from Delhi 5 Days' ;";
          $result = $conn->query($sql);
          $row = $result->fetch_assoc();
          ?>
          <a href="https://trekveda.com/landing/kedarnath-from-delhi-offer.php" target="_Blank">
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
          $sql = "select * FROM Tour_package_pages  where Title = 'Kedarnath with Tungnath from Delhi' ;";
          $result = $conn->query($sql);
          $row = $result->fetch_assoc();
          ?>
          <a href="https://trekveda.com/landing/kedarnath-tungnath-delhi-offer.php" target="_Blank">
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
          $sql = "select * FROM Tour_package_pages  where Title = 'Kedarnath with Tungnath Tour from Haridwar 5 Days' ;";
          $result = $conn->query($sql);
          $row = $result->fetch_assoc();
          ?>
          <a href="https://trekveda.com/landing/kedarnath-tungnath-haridwar-offer.php" target="_Blank">
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
          $sql = "select * FROM Tour_package_pages  where Title = 'Char Dham Yatra Tour from Haridwar 9 Days' ;";
          $result = $conn->query($sql);
          $row = $result->fetch_assoc();
          ?>
          <a href="https://trekveda.com/landing/char-dham-yatra-from-haridwar-offer.php" target="_Blank">
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
          $sql = "select * FROM Tour_package_pages  where Title = 'Kedarnath with Badrinath from Haridwar' ;";
          $result = $conn->query($sql);
          $row = $result->fetch_assoc();
          ?>
          <a href="https://trekveda.com/landing/kedarnath-badrinath-haridwar-offer.php" target="_Blank">
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
          $sql = "select * FROM Tour_package_pages  where Title = 'Kedarnath & Badrinath with Rishikesh Haridwar from Delhi' ;";
          $result = $conn->query($sql);
          $row = $result->fetch_assoc();
          ?>
          <a href="https://trekveda.com/landing/kedarnath-badrinath-delhi-offer.php" target="_Blank">
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
          $sql = "select * FROM Tour_package_pages  where Title = 'Vaishno Devi Darshan Package from Delhi 2 Nights' ;";
          $result = $conn->query($sql);
          $row = $result->fetch_assoc();
          ?>
          <a href="https://trekveda.com/landing/vaishno-devi-delhi-train-offer.php" target="_Blank">
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
          $sql = "select * FROM Tour_package_pages  where Title = 'Vaishno Devi Package from Delhi with Flight' ;";
          $result = $conn->query($sql);
          $row = $result->fetch_assoc();
          ?>
          <a href="https://trekveda.com/landing/vaishno-devi-delhi-flight-offer.php" target="_Blank">
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


 <div class="container mb-4">
    <div class="col-md-12 text-center section-title">
      <h2>What Our Customer Says</h2>
      <!-- <p>Quisque tempus justo molestie lacus blandit</p> -->
    </div>
    <div class="row">
      
      
        <div class="col-md-4">
        <div class="video-testimonial-block">
          <!-- <div class="video-thumbnail"><img src="https://easetemplate.com/free-website-templates/finvisor/images/testi_img_2.jpg" alt="" class="img-fluid"></div> -->
          <div class="video">
            <iframe src="https://www.youtube.com/embed/bEj_CnYHsyU" allowfullscreen>
            </iframe>
          </div>

        </div>
        <div class="video-testimonial-content">
          <h4 class="mb10">Kedarnath Yatra | Customer Review - 17</h4>
          <!-- <p>Retirement Planning</p> -->
        </div>
      </div>
      
       <div class="col-md-4">
        <div class="video-testimonial-block">
          <!-- <div class="video-thumbnail"><img src="https://easetemplate.com/free-website-templates/finvisor/images/testi_img_2.jpg" alt="" class="img-fluid"></div> -->
          <div class="video">
            <iframe src="https://www.youtube.com/embed/O6konFKcXL0" allowfullscreen>
            </iframe>
          </div>

        </div>
        <div class="video-testimonial-content">
          <h4 class="mb10">Kedarnath Yatra | Customer Review - 16</h4>
          <!-- <p>Retirement Planning</p> -->
        </div>
      </div>
       
           <div class="col-md-4">
        <div class="video-testimonial-block">
          <!-- <div class="video-thumbnail"><img src="https://easetemplate.com/free-website-templates/finvisor/images/testi_img_2.jpg" alt="" class="img-fluid"></div> -->
          <div class="video">
            <iframe src="https://www.youtube.com/embed/8LKGVuU_8zk" allowfullscreen>
            </iframe>
          </div>

        </div>
        <div class="video-testimonial-content">
          <h4 class="mb10">Char Dham Yatra | Customer Review - 15</h4>
          <!-- <p>Retirement Planning</p> -->
        </div>
      </div>
          
           <div class="col-md-4">
        <div class="video-testimonial-block">
          <!-- <div class="video-thumbnail"><img src="https://easetemplate.com/free-website-templates/finvisor/images/testi_img_2.jpg" alt="" class="img-fluid"></div> -->
          <div class="video">
            <iframe src="https://www.youtube.com/embed/9P2Lih3Njow" allowfullscreen>
            </iframe>
          </div>

        </div>
        <div class="video-testimonial-content">
          <h4 class="mb10">Kuari Pass Trek | Customer Review - 14</h4>
          <!-- <p>Retirement Planning</p> -->
        </div>
      </div>
        
        <div class="col-md-4">
        <div class="video-testimonial-block">
          <!-- <div class="video-thumbnail"><img src="https://easetemplate.com/free-website-templates/finvisor/images/testi_img_2.jpg" alt="" class="img-fluid"></div> -->
          <div class="video">
            <iframe src="https://www.youtube.com/embed/6MTEAWGe_Rw" allowfullscreen>
            </iframe>
          </div>

        </div>
        <div class="video-testimonial-content">
          <h4 class="mb10">Dayara Bugyal Trek | Customer Review - 13</h4>
          <!-- <p>Retirement Planning</p> -->
        </div>
      </div>
        
        
        <div class="col-md-4">
        <div class="video-testimonial-block">
          <!-- <div class="video-thumbnail"><img src="https://easetemplate.com/free-website-templates/finvisor/images/testi_img_2.jpg" alt="" class="img-fluid"></div> -->
          <div class="video">
            <iframe src="https://www.youtube.com/embed/7ZYxTkTLYT0" allowfullscreen>
            </iframe>
          </div>

        </div>
        <div class="video-testimonial-content">
          <h4 class="mb10">Valley of Flowers Trek | Customer Review - 12</h4>
          <!-- <p>Retirement Planning</p> -->
        </div>
      </div>
       
       <div class="col-md-4">
        <div class="video-testimonial-block">
          <!-- <div class="video-thumbnail"><img src="https://easetemplate.com/free-website-templates/finvisor/images/testi_img_2.jpg" alt="" class="img-fluid"></div> -->
          <div class="video">
            <iframe src="https://www.youtube.com/embed/ChFnJGk6d1o" allowfullscreen>
            </iframe>
          </div>

        </div>
        <div class="video-testimonial-content">
          <h4 class="mb10">Dayara Bugyal Trek | Customer Review - 11</h4>
          <!-- <p>Retirement Planning</p> -->
        </div>
      </div>
       
       
       <div class="col-md-4">
        <div class="video-testimonial-block">
          <!-- <div class="video-thumbnail"><img src="https://easetemplate.com/free-website-templates/finvisor/images/testi_img_2.jpg" alt="" class="img-fluid"></div> -->
          <div class="video">
            <iframe src="https://www.youtube.com/embed/hydbOF8UjWU" allowfullscreen>
            </iframe>
          </div>

        </div>
        <div class="video-testimonial-content">
          <h4 class="mb10">Valley of Flowers Trek | Customer Review - 10</h4>
          <!-- <p>Retirement Planning</p> -->
        </div>
      </div>
       
       
       <div class="col-md-4">
        <div class="video-testimonial-block">
          <!-- <div class="video-thumbnail"><img src="https://easetemplate.com/free-website-templates/finvisor/images/testi_img_2.jpg" alt="" class="img-fluid"></div> -->
          <div class="video">
            <iframe src="https://www.youtube.com/embed/DL4M67rc46s" allowfullscreen>
            </iframe>
          </div>

        </div>
        <div class="video-testimonial-content">
          <h4 class="mb10">Kashmir Great Lakes Trek | Customer Review - 9</h4>
          <!-- <p>Retirement Planning</p> -->
        </div>
      </div>
      
      <div class="col-md-4">
        <div class="video-testimonial-block">
          <!-- <div class="video-thumbnail"><img src="https://easetemplate.com/free-website-templates/finvisor/images/testi_img_2.jpg" alt="" class="img-fluid"></div> -->
          <div class="video">
            <iframe src="https://www.youtube.com/embed/3ZkV-dsbU1o" allowfullscreen>
            </iframe>
          </div>

        </div>
        <div class="video-testimonial-content">
          <h4 class="mb10">Pangarchulla Trek | Customer Review - 8</h4>
          <!-- <p>Retirement Planning</p> -->
        </div>
      </div>
      
      <div class="col-md-4">
        <div class="video-testimonial-block">
          <!-- <div class="video-thumbnail"><img src="https://easetemplate.com/free-website-templates/finvisor/images/testi_img_2.jpg" alt="" class="img-fluid"></div> -->
          <div class="video">
            <iframe src="https://www.youtube.com/embed/k74tu7Wpkp4" allowfullscreen>
            </iframe>
          </div>

        </div>
        <div class="video-testimonial-content">
          <h4 class="mb10">Kedarkantha Trek | Customer Review - 7</h4>
          <!-- <p>Retirement Planning</p> -->
        </div>
      </div>

      <div class="col-md-4">
        <div class="video-testimonial-block">
          <div class="video">
            <iframe src="https://www.youtube.com/embed/wXXZC5wMJ_U" allowfullscreen></iframe>
            </iframe>
          </div>
        </div>
        <div class="video-testimonial-content">
          <h4 class="mb10">Kedarkantha Trek | Customer Review - 6</h4>
        </div>
      </div>

      <div class="col-md-4">
        <div class="video-testimonial-block">
          <div class="video">
            <iframe src="https://www.youtube.com/embed/-CcPHpujoZ0" allowfullscreen></iframe>
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
            <iframe src="https://www.youtube.com/embed/8QDrGt9PF6c" allowfullscreen></iframe>
            </iframe>
          </div>
        </div>
        <div class="video-testimonial-content">
          <h4 class="mb10">Dayara Bugyal Trek | Customer Review - 4</h4>
        </div>
      </div>

      <div class="col-md-4">
        <div class="video-testimonial-block">
          <div class="video">
            <iframe src="https://www.youtube.com/embed/GXWx9XnOe2c" allowfullscreen></iframe>
            </iframe>
          </div>
        </div>
        <div class="video-testimonial-content">
          <h4 class="mb10">Dayara Bugyal Trek | Customer Review - 3</h4>
        </div>
      </div>

      <div class="col-md-4">
        <div class="video-testimonial-block">
          <div class="video">
            <iframe src="https://www.youtube.com/embed/4xRQAmbl_7w" allowfullscreen></iframe>
            </iframe>
          </div>
        </div>
        <div class="video-testimonial-content">
          <h4 class="mb10">Dayara Bugyal Trek | Customer Review - 2</h4>
        </div>
      </div>

      <div class="col-md-4">
        <div class="video-testimonial-block">
          <div class="video">
            <iframe src="https://www.youtube.com/embed/pwAdoKpxNt8" allowfullscreen></iframe>
            </iframe>
          </div>
        </div>
        <div class="video-testimonial-content">
          <h4 class="mb10">Kedarkantha Trek | Customer Review - 1</h4>
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