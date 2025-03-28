<?php
include_once("../config.php");
include(ROOT . "connection.php");


$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['telephone'];
$comments = $_POST['comments'];
$trek  = $_POST['trek_name'];
$lead_date = date("Y/m/d");
$lead_souce = 'PPC';

$Package_link  = $_POST['Package_link'];


if (mysqli_connect_error()) {
  die("Connection error: " . mysqli_connect_error());
} else {

  $INSERT = "insert into online_Leads(Lead_date,Name,Email,Phone,Trek,Comments,Lead_source)values(?,?,?,?,?,?,?)";
  $stmt = $conn->prepare($INSERT);
  $stmt->bind_param("sssssss", $lead_date, $name, $email, $phone, $trek, $comments, $lead_souce);
  $stmt->execute();
}
?>
<?php


// EDIT THE 2 LINES BELOW AS REQUIRED
$email_to = "atuljaideep@gmail.com";
$email_subject = "Form Submission PPC $trek";

function died($error)
{
  // your error code can go here
  echo "We are very sorry, but there were error(s) found with the form you submitted. ";
  echo "These errors appear below.<br /><br />";
  echo $error . "<br /><br />";
  echo "Please go back and fix these errors.<br /><br />";
  die();
}


// validation expected data exists
if (
  !isset($_POST['name']) ||
  !isset($_POST['email']) ||
  !isset($_POST['telephone']) ||
  !isset($_POST['comments'])
) {
  died('We are sorry, but there appears to be a problem with the form you submitted.');
}




$name = $_POST['name']; // required
$email_from = $_POST['email']; // required
$telephone = $_POST['telephone']; // not required
$comments = $_POST['comments']; // required

$error_message = "";
$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';






if (strlen($telephone) < 10) {
  $error_message .= 'The Comments you entered do not appear to be valid.<br />';
}



if (strlen($error_message) > 0) {
  died($error_message);
}

$email_message = "Form details below.\n\n";


function clean_string($string)
{
  $bad = array("content-type", "bcc:", "to:", "cc:", "href");
  return str_replace($bad, "", $string);
}




$email_message .= "Name: " . clean_string($name) . "\n";
$email_message .= "Email: " . clean_string($email_from) . "\n";
$email_message .= "Telephone: " . clean_string($telephone) . "\n";
$email_message .= "Comments: " . clean_string($comments) . "\n";

// create email headers
$headers = 'From: ' . $email_from . "\r\n" .
  'Reply-To: ' . $email_from . "\r\n" .
  'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);
?>

<!-- include your own success html here -->

<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<html>

<head>
  <meta charset="utf-8">
  <title>Success | Trekveda Received Enquiry Of Trek</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->
  <!-- Favicons-->
  <link rel="shortcut icon" href="../../../img/Favicon.png" type="image/x-icon" />
  <link rel="apple-touch-icon" type="image/x-icon" href="../../../img/apple-touch-icon-57x57-precomposed.png" />
  <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="../../../img/apple-touch-icon-72x72-precomposed.png" />
  <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="../../../img/apple-touch-icon-114x114-precomposed.png" />
  <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="../../../img/apple-touch-icon-144x144-precomposed.png" />


<!-- Global site tag (gtag.js) - Google Ads: 810658167 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-810658167"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-810658167');
</script>

<!-- Event snippet for thank you conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-810658167/gIwxCKan9uIDEPfSxoID'});
</script>
</head>

<body>
  <div class="container">
    <div class="row text-center">
      <div class="col-sm-6 col-sm-offset-3">
        <br><br>
        <h2 style="color:#0fad00">Success</h2>
        <img src="<?php echo $root1 ?>/img/check-true.jpg">
        <h3>Dear Sir/Ma'am,</h3>
        <p style="font-size:20px;color:#5C5C5C;">Thank you for your enquiry! We will assist you soon.</p>
        <a href="<?php echo $Package_link ?>" class="btn btn-success">     Read More     </a>
        <br><br>
      </div>

    </div>
  </div>
  <script>
    $(function() {
      setTimeout(function() { // wait for 5 secs(2)
        window.location.replace("<?php echo $Package_link ?>");
      }, 1000);
    });
  </script>
</body>

</html>