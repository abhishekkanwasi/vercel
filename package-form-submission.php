<?php
// Sanitize and validate user input
$name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : 'Guest';
$email = 'enquiry@fusejack.in';
$phone = isset($_POST['Contact']) ? htmlspecialchars($_POST['Contact']) : 'N/A';
$comments = '---';
$trek = isset($_POST['trek_name']) ? htmlspecialchars($_POST['trek_name']) : 'Unknown Trek';
$lead_date = date("Y/m/d");
$lead_souce = 'Package';
$Package_link = isset($_POST['trek_name_link']) ? htmlspecialchars($_POST['trek_name_link']) : '#';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="description" content="Thank you for your enquiry. Our Travel Expert will get back to you with the details of your selected trek.">
  <meta name="robots" content="index, follow">
  <title>Success | The Trekker</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>
  <div class="container">
    <div class="row text-center">
      <div class="col-sm-6 col-sm-offset-3">
        <br><br>
        <h2 style="color:#0fad00">Success</h2>
        <img src="img/test/check-true.jpg" alt="Success" style="max-width: 80px; height: auto;">

        <h3>Dear <b><?php echo $name; ?></b>,</h3>
        <p style="font-size:20px;color:#5C5C5C;">Thank you for your enquiry! Our Travel Expert will get back to you with complete details of <b><?php echo $trek; ?></b>.</p>
        <p>You will be redirected shortly, or you can click below to proceed:</p>
        <a href="<?php echo $Package_link; ?>" class="btn btn-success">Go to Package Details</a>
        <br><br>
      </div>
    </div>
  </div>
  <script>
    $(function() {
      setTimeout(function() { 
        window.location.replace("<?php echo $Package_link; ?>");
      }, 3000);
    });
  </script>
</body>

</html>
