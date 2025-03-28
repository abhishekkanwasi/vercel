<?php
include 'connection.php';
$id  = $_POST['id'];
$Title =  $_POST['Title'];
$Tour_type =  $_POST['Tour_type'];

$meta_dis =  $_POST['meta_dis'];
$meta_keywords =  $_POST['meta_keywords'];
$canonical_link =  $_POST['canonical_link'];
$meta_image_link =  $_POST['meta_image_link'];

$Slug =  $_POST['Slug'];
$recommendation =  $_POST['Recommendation'];

$Price =  $_POST['Price'];
$days =   $_POST['days'];
$distance =  $_POST['distance'];
$Altitude =  $_POST['Altitude'];
$Difficulty_Level =  $_POST['Difficulty_Level'];
$start =  $_POST['start'];
$end =    $_POST['end'];
$facility =  $_POST['facility_ckeditor'];
$Heighlight =  $_POST['Heighlight_ckeditor'];
$inclusion =   $_POST['Inclusion_ckeditor'];
$Overview_itinerary =  html_entity_decode($_POST['Overview_ckeditor']);
$Things_to_carry =  html_entity_decode($_POST['Things_to_carry_ckeditor']);
$Saftey_security =  html_entity_decode($_POST['Saftey_security_ckeditor']);
$Fitness_Tips =  html_entity_decode($_POST['Fitness_Tips_ckeditor']);
$Fee_policy =    html_entity_decode($_POST['Fee_policy_ckeditor']);

$targetDir = "Upload_Tour_images/";

$image1Name = $_POST['Image1'];
$image2Name = $_POST['Image2'];
$image3Name = $_POST['Image3'];
$image4Name = $_POST['Image4'];

if (mysqli_connect_error()) {
  die("Connection error: " . mysqli_connect_error());
} else {

    $sql = "update Tour_package_pages set Title = '$Title'  ,Tour_type = '$Tour_type' , meta_dis = '$meta_dis' , meta_keywords = '$meta_keywords' , meta_image_link = '$meta_image_link' , canonical_link = '$canonical_link' , Slug = '$Slug', recommendation = '$recommendation', image1 = '$image1Name', image2 = '$image2Name', image3 = '$image3Name', image4 = '$image4Name', Price = '$Price', days = '$days', distance = '$distance', Altitude = '$Altitude' , Difficulty_Level = '$Difficulty_Level', start = '$start', end = '$end', facility = '$facility', Heighlight = '$Heighlight', inclusion = '$inclusion', Overview_itinerary = '$Overview_itinerary', Things_to_carry = '$Things_to_carry', Saftey_security = '$Saftey_security', Fitness_Tips = '$Fitness_Tips' , Fee_policy = '$Fee_policy' where id = '$id' ;";
    $result = $conn->query($sql);

    if ($result) {
      echo '<div class="alert alert-success alert-dismissible" id="Tour_updatetresultSuccess" >
            <a href="#" class="close" id="Tour_updatetresultSuccessCancle">&times;</a>
            <strong>Saved!</strong>
            </div>';
    } else {
      echo '<div class="alert alert-danger alert-dismissible" id="Tour_updatetresultError" >
            <a href="#" class="close" id="Tour_updatetresultErrorCancle">&times;</a>
            <strong>Error!</strong> Try  again.
            </div>';
    }
}

?>
<script>
  $(document).ready(function() {
    $('#Tour_updatetresultSuccessCancle').click(function() {
      $('#Tour_updatetresultSuccess').fadeOut("fast");
    });

    $('#Tour_updatetErrorCancle').click(function() {
      $('#Tour_updatetresultError').fadeOut("fast");
    });
  });
</script>