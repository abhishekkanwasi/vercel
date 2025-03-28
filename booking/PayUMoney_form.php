<?php

$MERCHANT_KEY = "Xds547B6";
$SALT = "7as6L5hbQW";
// Merchant Key and Salt as provided by Payu.

//$PAYU_BASE_URL = "https://sandboxsecure.payu.in";		// For Sandbox Mode
$PAYU_BASE_URL = "https://secure.payu.in";      // For Production Mode

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
    || empty($posted['productinfo'])
    || empty($posted['firstname'])
    || empty($posted['email'])
    || empty($posted['phone'])

    || empty($posted['surl'])
    || empty($posted['furl'])
    || empty($posted['service_provider'])
  ) {
    $formError = 1;
  } else {
    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
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

<?php
if (isset($_POST['check_name_Transport'])) {
  $transport = 'yes';
} else {
  $transport = 'No';
}
if (isset($_POST['check_name_Rental'])) {
  $Rental_gear =  'yes';
} else {
  $Rental_gear =  'No';
}
if (isset($_POST['check_name_Backpack'])) {
  $Backpack = 'Yes';
} else {
  $Backpack = 'No';
}
if (isset($_POST['check_name_Zipline'])) {
  $Zipline = 'Yes';
} else {
  $Zipline = 'No';
}

$name = $_POST['Fullname'];
$email = $_POST['email'];
$contact = $_POST['phone'];
$age = $_POST['Other1_age'];
$address = $_POST['Fulladdress'];
$trek = $_POST['Trek-Selected'];
$noofperson = $_POST['noofperson'];
$trek_date = $_POST['Treking-Date'];
$other = $_POST['OtherDetail'];
$unit_cost = $_POST['final_Unit_price'];
$cost = $_POST['amount2'];
$height = $_POST['Other1_height'];
$weight = $_POST['Other1_weight'];
$coupon_name = $_POST['coupon_name'];
$bookid = $_POST['book_id'];
$payable_amt = $_POST['Payable-Amount'];
$due_amt = $_POST['Next-due'];
$host = "162.144.39.63";
$dbUserName = "trekveda_vikas";
$dbPassword = "Admin@123";
$dbName = "trekveda_office";

$conn = new mysqli($host, $dbUserName, $dbPassword, $dbName);
if ($name != null) {
  if (mysqli_connect_error()) {
    die("Connection error: " . mysqli_connect_error());
  } else {
    $INSERT = "insert into booking (Booking_id,Name,Email,Contact,Age,Address,Trek,Person_count,Trek_date,Trek_cost,Total_cost,Height,Weight,Coupon_code,Other,Payable_Amount,Due_amount,Transport,Rental_gear,Backpack_offloading,Zipline) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $stmt = $conn->prepare($INSERT);
    $stmt->bind_param("sssisssisssssssssssss", $bookid, $name, $email, $contact, $age, $address, $trek, $noofperson, $trek_date, $unit_cost, $cost, $height, $weight, $coupon_name, $other, $payable_amt, $due_amt, $transport, $Rental_gear, $Backpack, $Zipline);
    $stmt->execute();
  }
  $conn->close();
} else {
  $conn->close();
}
?>


<html>

<head>


</head>

<body>



</body>

</html>