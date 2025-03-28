<?php
// Check if the form is submitted via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Sanitize and validate user inputs
    $name = isset($_POST['name_contact']) ? htmlspecialchars(trim($_POST['name_contact'])) : '';
    $lastname = isset($_POST['lastname_contact']) ? htmlspecialchars(trim($_POST['lastname_contact'])) : '';
    $email = isset($_POST['email_contact']) ? filter_var(trim($_POST['email_contact']), FILTER_VALIDATE_EMAIL) : '';
    $phone = isset($_POST['phone_contact']) ? htmlspecialchars(trim($_POST['phone_contact'])) : '';
    $message = isset($_POST['message_contact']) ? htmlspecialchars(trim($_POST['message_contact'])) : '';

    // If validation fails
    if (!$email) {
        echo "Invalid email format.";
        exit;
    }

    // Insert form data into a database, send an email, or handle as needed
    // For simplicity, let's just display the form data here
    $subject = "Contact Form Submission";
    $to = "info@himalayayatri.com"; // Change to your email address
    $headers = "From: " . $email;

    // Prepare email body
    $email_content = "
    Name: $name $lastname
    Email: $email
    Phone: $phone
    Message: $message
    ";

    // Send email (you can also save it to a database here)
    if (mail($to, $subject, $email_content, $headers)) {
        $success_message = "Thank you for reaching out! We will get back to you soon.";
    } else {
        $error_message = "There was an error submitting your message. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Contact Us - The Trekker</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="row text-center">
      <div class="col-sm-6 col-sm-offset-3">
        <h2>Contact Form Submission</h2>
        
        <?php if (isset($success_message)): ?>
          <div class="alert alert-success">
            <strong>Success!</strong> <?php echo $success_message; ?>
          </div>
        <?php elseif (isset($error_message)): ?>
          <div class="alert alert-danger">
            <strong>Error!</strong> <?php echo $error_message; ?>
          </div>
        <?php endif; ?>

        <h3>Dear <b><?php echo $name . ' ' . $lastname; ?></b>,</h3>
        <p>Thank you for your message! Here are the details:</p>
        <ul>
          <li><b>Email:</b> <?php echo $email; ?></li>
          <li><b>Phone:</b> <?php echo $phone; ?></li>
          <li><b>Message:</b> <?php echo nl2br($message); ?></li>
        </ul>

        <a href="index.php" class="btn btn-primary">Go Back to Home</a>
      </div>
    </div>
  </div>
</body>
</html>
