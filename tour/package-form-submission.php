<?php
// Initialize success flag and message
$success = false;
$error = false;
$message = "";

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate user input
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : 'Guest';
    $email = 'info@himalayayatri.com'; // This is the email address where you want to receive the form submissions
    $phone = isset($_POST['Contact']) ? htmlspecialchars($_POST['Contact']) : 'N/A';
   
    $trek = isset($_POST['trek_name']) ? htmlspecialchars($_POST['trek_name']) : 'Unknown Trek';
    $lead_date = date("Y/m/d");
    $lead_souce = 'Package';
    $Package_link = isset($_POST['trek_name_link']) ? htmlspecialchars($_POST['trek_name_link']) : '#';

    // Email subject and message content
    $subject = "New Inquiry for Trek: $trek";
    $messageContent = "
        <html>
        <head>
            <title>New Inquiry for $trek</title>
        </head>
        <body>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Trek:</strong> $trek</p>
            <p><strong>Lead Source:</strong> $lead_souce</p>
            <p><strong>Date:</strong> $lead_date</p>
            <p><strong>Package Link:</strong> <a href='$Package_link'>$Package_link</a></p>
        </body>
        </html>
    ";

    // Set content-type header for HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Additional headers
    $headers .= "From: $email" . "\r\n";

    // Send the email
    if(mail('info@himalayayatri.com', $subject, $messageContent, $headers)) {
        $success = true;
    } else {
        $error = true;
        $message = "Error: Email not sent.";
    }
}
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
        <?php if ($success): ?>
          <br><br>
          <h2 style="color:#0fad00">Success</h2>
          <img src="img/test/check-true.jpg" alt="Success" style="max-width: 80px; height: auto;">
          <h3>Dear <b><?php echo $name; ?></b>,</h3>
          <p style="font-size:20px;color:#5C5C5C;">Thank you for your enquiry! Our Travel Expert will get back to you with complete details of <b><?php echo $trek; ?></b>.</p>
          <p>You will be redirected shortly, or you can click below to proceed:</p>
          <a href="<?php echo $Package_link; ?>" class="btn btn-success">Go to Package Details</a>
          <br><br>
        <?php elseif ($error): ?>
          <div class="alert alert-danger">
            <strong>Error!</strong> <?php echo $message; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
  
  <?php if ($success): ?>
    <script>
      // Automatically redirect the user after 3 seconds
      setTimeout(function() {
        window.location.replace("<?php echo $Package_link; ?>");
      }, 3000);
    </script>
  <?php endif; ?>
</body>

</html>
