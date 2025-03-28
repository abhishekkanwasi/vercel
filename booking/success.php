<?php
session_start();
include_once("../config.php");
include(ROOT . "connection.php");

$status = $_POST["status"];
$firstname = $_POST["firstname"];
$amount = $_POST["amount"];
$txnid = $_POST["txnid"];
$posted_hash = $_POST["hash"];
$key = $_POST["key"];
$productinfo = $_POST["productinfo"];
$Invoice_ID = $_POST["productinfo"];
$email = $_POST["email"];
$salt = "7as6L5hbQW";

// Salt should be same Post Request 

if (isset($_POST["additionalCharges"])) {
      $additionalCharges = $_POST["additionalCharges"];
      $retHashSeq = $additionalCharges . '|' . $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
} else {
      $retHashSeq = $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
}
$hash = hash("sha512", $retHashSeq);

?>

<html lang="en">

<head>
      <!-- Basic Page Needs -->
      <meta charset="utf-8">
      <title>Trekveda - Booking </title>
      <meta name="description" content="Trekveda is one of the best trekking community that offers the best trekking experience, and make trekkers explore the mother nature and mountain views." />
      <meta name="keywords" content="Trekveda,Booking. trekking in India, trekking in Himalayas, trekking in Uttarakhand, trekking packages in india, trekking in sikkim, trekking in ladakh, best trekking places in india, himalayan trekking tours, trekking" />
      <meta name="author" content="Amit Kukreti">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="google-site-verification" content="6RXEm45dLS9ToSO6TrSBLIhB4Oi8IkQv7YwgI4NVLwU" />
      <!-- Favicons-->
      <link rel="shortcut icon" href="<?php echo $root1 ?>/src/icons/Favicon.png" type="image/x-icon" />
      <link rel="apple-touch-icon" type="image/x-icon" href="src/icons/apple-touch-icon-57x57-precomposed.png" />
      <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?php echo $root1 ?>/src/icons/apple-touch-icon-72x72-precomposed.png" />
      <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?php echo $root1 ?>/src/icons/apple-touch-icon-114x114-precomposed.png" />
      <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?php echo $root1 ?>/src/icons/apple-touch-icon-144x144-precomposed.png" />


      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


      <!-- Stylesheets -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" type="text/css" />
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" type="text/css" />
      <link rel="stylesheet" href="index.css" type="text/css">
      <link rel="stylesheet" href="<?php echo $root1 ?>/css/bootstrap.min.css" type="text/css" />
      <link rel="stylesheet" href="<?php echo $root1 ?>/css/package.scss" type="text/css" />
      <link rel="stylesheet" href="<?php echo $root1 ?>/css/footer.css" type="text/css" />
      <link rel="stylesheet" href="<?php echo $root1 ?>/css/header.css" type="text/css" />
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" type="text/css" />

      <script src="https://code.jquery.com/jquery-3.4.1.min.js" type="text/javascript"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" type="text/javascript"></script>

</head>

<body>
      <?php include_once(ROOT . "header.php"); ?>
      <div class="container">
            <div class="col-md-12 px-0">
                  <!-- multistep form -->
                  <?php
                  if ($hash != $posted_hash) {
                        echo "Invalid Transaction. Please try again";
                  ?>
                        <div class="col-md-12 my-4 py-3">
                              <h4 class="text-center text-danger">There might be some error.</h4>
                              <div class="text-center">
                                    <div>For Support :</div>
                                    <div>Email: info@trekveda.com </div>
                                    <div>Phone: +91 9821325153</div>
                              </div>
                        </div>
                        <?php
                  } else {

                        $UPDATE = "UPDATE offline_data  SET Payment_status = '$status', Transaction_ID = '$txnid' WHERE Name = '$firstname' AND  Email = '$email'  AND Invoice_No = '$Invoice_ID'";
                        $result = $conn->query($UPDATE);
                        if ($result) {

                              $to = "$email";
                              $subject = "Booking successfull";

                              $message = "
                                          <html>
                                                <head>
                                                      <title>Booking successfull </title>
                                                </head>
                                                <body>
                                                      
                                                      <div style=''>
                                                      <p>Dear  <b>$firstname</b> ,</p>                                          

                                                       <p>Warm Greetings from Trekveda!</p> 

                                                       <p>We thank you for booking your trip with us, your booking id is  $Invoice_ID .</p>

                                                       <p>We are a team of professionals and experts, one of our travel experts will soon get in touch with you with more details about your trip and it will be your one point contact until the trip ends in order to make it more smooth and comfortable for you.</p>

                                                       <p>You can always get in touch on our emergency contact number +91 9821325153 or write to us at info@trekveda.com.</p>

                                                       <p>We are committed to try our level best to make it one of your memorable trip with Trekveda.</p>

                                                       <p>With Warm regards and Best Wishes!</p>

                                                       <p>Team Trekveda </p>
                  
                                                      </div>
                                                      <div><img src='https://trekveda.com/img/trekveda-logo-update-color-version.png' style='width:200px' ></div>
                                                      
                                                </body>
                                          </html>
                                          ";

                              // Always set content-type when sending HTML email
                              $headers = "MIME-Version: 1.0" . "\r\n";
                              $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                              // More headers
                              $headers .= 'From: Trekveda<info@trekveda.com>' . "\r\n";
                              $headers .= 'Cc: ' . "\r\n";

                              mail($to, $subject, $message, $headers);


                        ?>
                              <div class="col-md-12 my-4 py-3">

                                    <div class="col-md-12 text-center">
                                          <img src="success.png" height="100px">
                                    </div>

                                    <h3 class="text-center my-4">Thank You. Your Booking status is " <span class="font-weight-bold text-success"><?php echo $status ?></span> ".</h3>
                                    <h3 class="text-center"> Your Transaction ID for this transaction is <span class="font-weight-bold text-success"><?php echo $txnid ?></span> .</h3>
                                    <h3 class="text-center"> We have received a payment of Rs <span class="font-weight-bold text-success"><?php echo $amount ?></span> .</h3>

                                    <div class="text-center my-4">
                                          <div>For any queries please contact :</div>
                                          <div>Email: info@trekveda.com </div>
                                          <div>Phone: +91 9821325153</div>
                                    </div>
                              </div>
                        <?php
                        } else {
                        ?>
                              <div class="col-md-12 my-4 py-3">
                                    <h4 class="text-center text-danger">Error!.</h4>
                                    <div class="text-center">
                                          <div>For Support :</div>
                                          <div>Email: info@trekveda.com </div>
                                          <div>Phone: +91 9821325153</div>
                                    </div>
                              </div>
                  <?php

                        }
                  }

                  ?>
            </div>
      </div>

      <?php include_once(ROOT . "footer.php"); ?>

</body>

</html>