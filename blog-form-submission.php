<?php
include_once("config.php");
include(ROOT . "connection.php");

 


$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['telephone'];
$comments = $_POST['comments'];
$trek  = $_POST['trek_name'];
$lead_date = date("Y/m/d");
$lead_souce = 'Blog';

$Package_link  = $_POST['trek_name_link'];


if (mysqli_connect_error()) {
  die("Connection error: " . mysqli_connect_error());
} else {

  $INSERT = "insert into online_Leads(Lead_date,Name,Email,Phone,Trek,Comments,Lead_source)values(?,?,?,?,?,?,?)";
  $stmt = $conn->prepare($INSERT);
  $stmt->bind_param("sssssss", $lead_date, $name, $email, $phone, $trek, $comments, $lead_souce);
  $stmt->execute();

  }

?>


<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<html>

<head>
  <meta charset="utf-8">
  <title>Success | The Mountain Trekker</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->
   <!-- Favicons-->
  <link rel="shortcut icon" href="src/icons/Favicon.png" type="image/x-icon" />
  <link rel="apple-touch-icon" type="image/x-icon" href="src/icons/apple-touch-icon-57x57-precomposed.png" />
  <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="src/icons/apple-touch-icon-72x72-precomposed.png" />
  <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="src/icons/apple-touch-icon-114x114-precomposed.png" />
  <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="src/icons/apple-touch-icon-144x144-precomposed.png" />



</head>

<body>
  <div class="container">
    <div class="row text-center">
      <div class="col-sm-6 col-sm-offset-3">
        <br><br>
        <h2 style="color:#0fad00">Success</h2>
        <img src="<?php echo $root1 ?>/img/check-true.jpg">
        <h3>Dear <b><?php echo $name ?></b>,</h3>
        <p style="font-size:20px;color:#5C5C5C;">Thank you for your enquiry! Our Travel Expert will assist you soon.</p>
        <a href="<?php echo $root1 ?>/" class="btn btn-success">     Read More     </a>
        <br><br>
      </div>

    </div>
  </div>
  <script>
    $(function() {
      setTimeout(function() { // wait for 5 secs(2)
        window.location.replace("<?php echo $root1 ?>");    
      }, 3000);
    });
  </script>
</body>

</html>