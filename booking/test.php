<?php
session_start();
include_once("../config.php");
include(ROOT . "connection.php");

$MERCHANT_KEY = "Xds547B6";
$SALT = "7as6L5hbQW";
// Merchant Key and Salt as provided by Payu.

//$PAYU_BASE_URL = "https://sandboxsecure.payu.in";    // For Sandbox Mode
$PAYU_BASE_URL = "https://secure.payu.in";			// For Production Mode

$action = '';

$posted = array();
if (!empty($_POST)) {
  //print_r($_POST);
  foreach ($_POST as $key => $value) {
    $posted[$key] = $value;
  }
}

$formError = 0;

if (empty($posted['txnid'])) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
  $txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if (empty($posted['hash']) && sizeof($posted) > 0) {
  if (
    empty($posted['key'])
    || empty($posted['txnid'])
    || empty($posted['amount'])
    || empty($posted['firstname'])
    || empty($posted['email'])
    || empty($posted['phone'])
    || empty($posted['surl'])
    || empty($posted['furl'])
    || empty($posted['productinfo'])
    || empty($posted['service_provider'])
  ) {
    $formError = 1;
  } else {
    $hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';
    foreach ($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }

    $hash_string .= $SALT;

    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
  }
} elseif (!empty($posted['hash'])) {
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
}

?>

<html lang="en">

<head>
  <!-- Basic Page Needs -->
  <meta charset="utf-8">
  <title> Trekveda - Booking </title>
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


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" type="text/css" />
  <link rel="stylesheet" href="index.css" type="text/css">
  <link rel="stylesheet" href="<?php echo $root1 ?>/css/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $root1 ?>/css/package.scss" type="text/css" />
  <link rel="stylesheet" href="<?php echo $root1 ?>/css/footer.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $root1 ?>/css/header.css" type="text/css" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" type="text/css" />

  <script src="https://code.jquery.com/jquery-3.4.1.min.js" type="text/javascript"></script>

  <script>
    var hash = '<?php echo $hash ?>';

    function submitPayuForm() {
      if (hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>
</head>

<body onload="submitPayuForm()">
  <?php include_once(ROOT . "header.php"); ?>
  <div class="container my-4">
    <div class="col-md-12 px-0 py-4">
      <!-- multistep form -->

      <!-- progressbar -->
      <ul id="progressbar">
        <li class="active">Personal Details</li>
        <li class="active">Tour details</li>
        <li class="active">Addons</li>
        <li class="active">Payment</li>
      </ul>

      <form action="<?php echo $action; ?>" method="post" name="payuForm">

        <?php
        // $_SESSION["Booking"] = "Booking";
        if (isset($_POST['submit'])) {

          $Name = $_POST['Name'];
          $Email = $_POST['Email'];
          $Contact = $_POST['Mobilenumber'];
          $Age = $_POST['Age'];
          $Weight = $_POST['Weight'];
          $Height = $_POST['Height'];
          $gender = $_POST['gender'];
          $Address = $_POST['Address'];

          $Tour = $_POST['tourName'];
          $tourPrice = $_POST['tourPrice'];
          $PersonCount = $_POST['PersonCount'];
          $Trek_Date = $_POST['Trek_Date'];
          $Message = $_POST['Message'];
          $PersonCount = $_POST['PersonCount'];

          if (isset($_POST['Transport'])) {
            $Transport = $_POST['Transport'];
            $totalTransport = $Transport * $PersonCount;
            $TransportStatus = "Yes";
          } else {
            $Transport = 0;
            $totalTransport = 0;
            $TransportStatus = "No";
          }
          if (isset($_POST['Offloading'])) {
            $Offloading = $_POST['Offloading'];
            $totalOffloading = $Offloading * $PersonCount;
            $OffloadingStatus = "Yes";
          } else {
            $Offloading = 0;
            $totalOffloading = 0;
            $OffloadingStatus = "No";
          }

          if (isset($_POST['Rental'])) {
            $Rental = $_POST['Rental'];
            $totalRental = $Rental * $PersonCount;
            $RentalStatus = "Yes";
          } else {
            $Rental = 0;
            $totalRental = 0;
            $RentalStatus = "No";
          }

          if (isset($_POST['ZIPADD'])) {
            $ZIPADD = $_POST['ZIPADD'];
            $totalZIPADD = $ZIPADD * $PersonCount;
            $ZIPADDStatus = "Yes";
          } else {
            $ZIPADD = 0;
            $totalZIPADD = 0;
            $ZIPADDStatus = "No";
          }

          $totalTourPrice = $tourPrice * $PersonCount;

          $UnitTourCost = $tourPrice + $ZIPADD + $Rental + $Offloading + $Transport;

          $Subtotal = $totalTourPrice + $totalTransport + $totalOffloading + $totalRental + $totalZIPADD;

          $GST =  ($Subtotal * 5) / 100;

          $GrandTotal = $Subtotal + $GST;

          $Payment_status = "Pending";
          $Booking_Mode = "Online";

          if (mysqli_connect_error()) {
            die("Connection error: " . mysqli_connect_error());
          } else {
            if (!isset($_SESSION["Invoice_No"])) {
              $sql = "select Invoice_No FROM offline_data Where Booking_Mode = 'Online' AND Person_count  != '' ORDER BY Booking_date DESC LIMIT 1;";
              $result = $conn->query($sql);
              $row = $result->fetch_assoc();

              $previoudInvoice_No = $row['Invoice_No'];
              $Last_Invoice_No = preg_replace("/[a-zA-Z\s]/", "", $previoudInvoice_No);
              $New_Invoice_No = ($Last_Invoice_No + 1);
              $Invoice_No = "TRKVDAON" . $New_Invoice_No;
              $_SESSION["Invoice_No"] = $Invoice_No;
              $query = mysqli_query($conn, "SELECT Invoice_No FROM offline_data where Invoice_No = '$Invoice_No' ");
              $rowsmo = mysqli_num_rows($query);
              if (mysqli_num_rows($query) == 0) {
                if ($Invoice_No != "") {

                  $INSERT = "INSERT INTO offline_data (Name,Trek,Email, Contact,Age,Height,Weight,Gender,Person_count,Transportation,off_loading,Rental_gear,ZipLine,Trek_date,Address,Trek_cost,Total_cost,Payment_status,Invoice_No,Comment,Booking_Mode) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
                  $stmt = $conn->prepare($INSERT);
                  $stmt->bind_param("ssssiiisissssssssssss", $Name, $Tour, $Email, $Contact, $Age, $Height, $Weight, $gender, $PersonCount, $TransportStatus, $OffloadingStatus, $RentalStatus, $ZIPADDStatus, $Trek_Date, $Address, $UnitTourCost, $GrandTotal, $Payment_status, $Invoice_No, $Message, $Booking_Mode);
                  $stmt->execute();

                  $BookingStatus = 1;
                } else {
                  $BookingStatus = 0;
                }
              } else {
                $BookingStatus = 0;
              }
            } else {
              $Invoice_No = $_SESSION["Invoice_No"];
              $BookingStatus = 1;
            }
          }
          $BookingStatus = 1;
        } else {
          $BookingStatus = 0;
        }
        // if ($BookingStatus == 1) {

        ?>
        <?php if (!$hash) { ?>
          <div class="container-fluid">
            <div id="ui-view" data-select2-id="ui-view">
              <div>
                <div class="card">
                  <div class="card-header">Invoice
                    <strong><?php echo $Invoice_No ?></strong>
                    <a class="btn btn-sm btn-secondary float-right mr-1 d-print-none" href="#" onclick="javascript:window.print();" data-abc="true">
                      <i class="fa fa-print"></i> Print</a>
                  </div>
                  <div class="card-body">
                    <div class="row mb-4">
                      <div class="col-sm-4">
                        <div><img src="<?php echo $root1 ?>/img/trekveda-logo-update-color-version.png" width="200px"></div>
                        <div>Email: info@trekveda.com </div>
                        <div>Phone: +91 9821325153</div>
                      </div>
                      <div class="col-sm-4">
                        <!-- blank space -->
                      </div>
                      <div class="col-sm-4">
                        <h6 class="mb-3">Details:</h6>
                        <div>Invoice
                          <strong><?php echo $Invoice_No ?></strong>
                        </div>
                        <div><?php echo date("j M Y") ?></div>
                      </div>
                    </div>
                    <div class="table-responsive-sm">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Tour</th>
                            <th class="center">No Of Persons</th>
                            <th class="right">Unit Cost</th>
                            <th class="right">Total</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="left"><?php echo $Tour ?></td>
                            <td class="center"><?php echo $PersonCount ?></td>
                            <td class="right"><SPAN class="RupeeSign">&#8377;</SPAN> <?php echo moneyFormatIndia($tourPrice) ?></td>
                            <td class="right"><SPAN class="RupeeSign">&#8377;</SPAN> <?php echo moneyFormatIndia($tourPrice * $PersonCount) ?></td>
                          </tr>
                          <?php
                          if (isset($_POST['Transport'])) {
                          ?>
                            <tr>
                              <td class="left">Transport</td>
                              <td class="center"><?php echo $PersonCount ?></td>
                              <td class="right"><SPAN class="RupeeSign">&#8377;</SPAN> <?php echo moneyFormatIndia($Transport) ?></td>
                              <td class="right"><SPAN class="RupeeSign">&#8377;</SPAN> <?php echo moneyFormatIndia($Transport * $PersonCount) ?></td>
                            </tr>
                          <?php
                          }
                          ?>

                        </tbody>
                      </table>
                    </div>
                    <div class="row">
                      <div class="col-lg-4 col-sm-5">
                        <div class="col-md-6 text-right"> <img src="payumoney_logo.png"></div>
                      </div>
                      <div class="col-lg-4 col-sm-5 ml-auto">
                        <table class="table table-clear">
                          <tbody>
                            <tr>
                              <td class="left">
                                <strong>Subtotal</strong>
                              </td>
                              <td class="right"><SPAN class="RupeeSign">&#8377;</SPAN> <?php echo  moneyFormatIndia($Subtotal) ?></td>
                            </tr>
                            <tr>
                              <td class="left">
                                <strong>GST (5%)</strong>
                              </td>
                              <td class="right"><SPAN class="RupeeSign">&#8377;</SPAN> <?php echo  moneyFormatIndia($GST) ?></td>
                            </tr>
                            <tr>
                              <td class="left">
                                <strong>Total</strong>
                              </td>
                              <td class="right">
                                <strong><SPAN class="RupeeSign">&#8377;</SPAN> <?php echo  moneyFormatIndia($GrandTotal) ?></strong>
                              </td>
                            </tr>
                          </tbody>
                        </table>

                        <input class="btn btn-success" type="submit" value="Proceed" />

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php }else{ ?>
          
          <div class="col-md-12">
            <h1>Please wait.......</h1>
          </div>

          <?php  } ?>
        
        <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
        <input type="hidden" name="hash" value="<?php echo $hash ?>" />
        <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
       
        <?php if ($formError) { ?>
          <span style="color:red">Please fill all mandatory fields.</span>
          <br />
          <br />
        <?php } ?>
        <table>

          <tr>
            <td><b>Mandatory Parameters</b></td>
          </tr>
          <tr>
            <td>Amount: </td>
            <td><input name="amount" value="<?php echo 1000 ?>" /></td>
            <td>First Name: </td>
            <td><input name="firstname" id="firstname" value="<?php echo $Name ?>" /></td>
          </tr>
          <tr>
            <td>Email: </td>
            <td><input name="email" id="email" value="<?php echo $Email ?>" /></td>
            <td>Phone: </td>
            <td><input name="phone" value="<?php echo $Contact ?>" /></td>
          </tr>
          <tr>
            <td>Product Info: </td>
            <td colspan="3"><textarea name="productinfo"><?php echo 'test' ?></textarea></td>
          </tr>
          <tr>
            <td>Success URI: </td>
            <td colspan="3"><input name="surl" value="success.php" size="64" /></td>
          </tr>
          <tr>
            <td>Failure URI: </td>
            <td colspan="3"><input name="furl" value="failure.php" size="64" /></td>
          </tr>

          <tr>
            <td colspan="3"><input type="hidden" name="service_provider" value="payu_paisa" size="64" /></td>
          </tr>

          <tr>
            <td><b>Optional Parameters</b></td>
          </tr>
          <tr>
            <td>Last Name: </td>
            <td><input name="lastname" id="lastname" value="<?php echo (empty($posted['lastname'])) ? '' : $posted['lastname']; ?>" /></td>
            <td>Cancel URI: </td>
            <td><input name="curl" value="" /></td>
          </tr>
          <tr>
            <td>Address1: </td>
            <td><input name="address1" value="<?php echo (empty($posted['address1'])) ? '' : $posted['address1']; ?>" /></td>
            <td>Address2: </td>
            <td><input name="address2" value="<?php echo (empty($posted['address2'])) ? '' : $posted['address2']; ?>" /></td>
          </tr>
          <tr>
            <td>City: </td>
            <td><input name="city" value="<?php echo (empty($posted['city'])) ? '' : $posted['city']; ?>" /></td>
            <td>State: </td>
            <td><input name="state" value="<?php echo (empty($posted['state'])) ? '' : $posted['state']; ?>" /></td>
          </tr>
          <tr>
            <td>Country: </td>
            <td><input name="country" value="<?php echo (empty($posted['country'])) ? '' : $posted['country']; ?>" /></td>
            <td>Zipcode: </td>
            <td><input name="zipcode" value="<?php echo (empty($posted['zipcode'])) ? '' : $posted['zipcode']; ?>" /></td>
          </tr>
          <tr>
            <td>UDF1: </td>
            <td><input name="udf1" value="<?php echo (empty($posted['udf1'])) ? '' : $posted['udf1']; ?>" /></td>
            <td>UDF2: </td>
            <td><input name="udf2" value="<?php echo (empty($posted['udf2'])) ? '' : $posted['udf2']; ?>" /></td>
          </tr>
          <tr>
            <td>UDF3: </td>
            <td><input name="udf3" value="<?php echo (empty($posted['udf3'])) ? '' : $posted['udf3']; ?>" /></td>
            <td>UDF4: </td>
            <td><input name="udf4" value="<?php echo (empty($posted['udf4'])) ? '' : $posted['udf4']; ?>" /></td>
          </tr>
          <tr>
            <td>UDF5: </td>
            <td><input name="udf5" value="<?php echo (empty($posted['udf5'])) ? '' : $posted['udf5']; ?>" /></td>
            <td>PG: </td>
            <td><input name="pg" value="<?php echo (empty($posted['pg'])) ? '' : $posted['pg']; ?>" /></td>
          </tr>

        </table>
      </form>


    </div>
  </div>
 

  <?php include_once(ROOT . "footer.php"); ?>
  <style>
    .card {
      margin-bottom: 1.5rem
    }

    .card {
      position: relative;
      display: -ms-flexbox;
      display: flex;
      -ms-flex-direction: column;
      flex-direction: column;
      min-width: 0;
      word-wrap: break-word;
      background-color: #fff;
      background-clip: border-box;
      border: 1px solid #c8ced3;
      border-radius: .25rem
    }

    .card-header:first-child {
      border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0
    }

    .card-header {
      padding: .75rem 1.25rem;
      margin-bottom: 0;
      background-color: #f0f3f5;
      border-bottom: 1px solid #c8ced3
    }
  </style>
</body>

</html>

<?php
function moneyFormatIndia($num)
{
  $explrestunits = "";
  if (strlen($num) > 3) {
    $lastthree = substr($num, strlen($num) - 3, strlen($num));
    $restunits = substr($num, 0, strlen($num) - 3); // extracts the last three digits
    $restunits = (strlen($restunits) % 2 == 1) ? "0" . $restunits : $restunits; // explodes the remaining digits in 2's formats, adds a zero in the beginning to maintain the 2's grouping.
    $expunit = str_split($restunits, 2);
    for ($i = 0; $i < sizeof($expunit); $i++) {
      // creates each of the 2's group and adds a comma to the end
      if ($i == 0) {
        $explrestunits .= (int)$expunit[$i] . ","; // if is first value , convert into integer
      } else {
        $explrestunits .= $expunit[$i] . ",";
      }
    }
    $thecash = $explrestunits . $lastthree;
  } else {
    $thecash = $num;
  }
  return $thecash; // writes the final format where $currency is the currency symbol.
}


?>