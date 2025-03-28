<?php
$Tour_name = $_POST['Tour-Selected'];
include 'connection.php';
if (mysqli_connect_error()) {
  die("Connection error: " . mysqli_connect_error());
} else {
  $sql = "select * FROM Tour_package_pages  where Title = '$Tour_name' ;";
  $result = $conn->query($sql);
  while ($row = $result->fetch_assoc()) {
    $id =  $row['id'];
    $Title =  $row['Title'];
    $Tour_type =  $row['Tour_type'];

    $meta_dis =  $row['meta_dis'];
    $meta_keywords =  $row['meta_keywords'];
    $canonical_link =  $row['canonical_link'];
    $meta_image_link =  $row['meta_image_link'];
    
    $Slug =  $row['Slug'];
    $recommendation =  $row['recommendation'];
    $image1 =  $row['image1'];
    $image2 =  $row['image2'];
    $image3 =  $row['image3'];
    $image4 =  $row['image4'];
    $Price =  $row['Price'];
    $days =   $row['days'];
    $distance =  $row['distance'];
    $Altitude =  $row['Altitude'];
    $Difficulty_Level =  $row['Difficulty_Level'];
    $start =  $row['start'];
    $end =    $row['end'];
    $facility =  $row['facility'];
    $Heighlight =  $row['Heighlight'];
    $inclusion =   $row['inclusion'];
    $Overview_itinerary =  $row['Overview_itinerary'];
    $Things_to_carry =  $row['Things_to_carry'];
    $Saftey_security =  $row['Saftey_security'];
    $Fitness_Tips =  $row['Fitness_Tips'];
    $Fee_policy =    $row['Fee_policy'];
    $FAQ =  $row['FAQ'];
  }
}
?>

<div class="col-md-12" style="padding: 0px;">
  <form id="Tour_Detailo_update_form">
    <ul class="nav nav-pills">
      <li class="active"><a data-toggle="pill" href="#Maindata">Main</a></li>
      <li><a data-toggle="pill" href="#facilitydetail">Facility </a></li>
      <li><a data-toggle="pill" href="#Heighlight">Heighlight </a></li>
      <li><a data-toggle="pill" href="#inclusion">Inclusion </a></li>
      <li><a data-toggle="pill" href="#Overview_itinerary">Overview itinerary</a></li>
      <li><a data-toggle="pill" href="#Things_to_carry">Things To Carry</a></li>
      <li><a data-toggle="pill" href="#Saftey_security">Saftey Security</a></li>
      <li><a data-toggle="pill" href="#Fitness_Tips">Fitness Tips</a></li>
      <li><a data-toggle="pill" href="#Fee_policy">Fee Policy</a></li>
    </ul>
    <div class="tab-content">
      <div id="Maindata" class="tab-pane fade in active" style="background-color: wheat;padding: 10px;">
        <div class="row">
          <div class="form-group  col-md-4" style="display:none">
            <label> id: </label><br>
            <input type="text" id="id" name="id" value="<?php echo $id ?>" required class="form-control" />
          </div>
          <div class="form-group  col-md-4">
            <label> Title: </label><br>
            <input type="text" id="Title" name="Title" value="<?php echo $Title ?>" required class="form-control" />
          </div>
          <div class="form-group  col-md-3">
            <label> Tour Type: </label><br>
            <input type="text" id="Tour_type" name="Tour_type" value="<?php echo $Tour_type ?>" required class="form-control" />
          </div>
          <div class="form-group  col-md-5">
            <label> Slug: </label><br>
            <input type="text" id="Slug" name="Slug" value="<?php echo $Slug ?>" required class="form-control" />
          </div>

          <div class="form-group  col-md-6">
            <label> Meta discription: </label><br>
            <input type="text" id="meta_dis" name="meta_dis" value="<?php echo $meta_dis ?>" required class="form-control" />
          </div>

          <div class="form-group  col-md-6">
            <label> Meta Keywords: </label><br>
            <input type="text" id="meta_keywords" name="meta_keywords" value="<?php echo $meta_keywords ?>" required class="form-control" />
          </div>

          <div class="form-group  col-md-6">
            <label> Canonical link: </label><br>
            <input type="link" id="canonical_link" name="canonical_link" value="<?php echo $canonical_link ?>" required class="form-control" />
          </div>

          <div class="form-group  col-md-6">
            <label> Meta Image link: </label><br>
            <input type="link" id="meta_image_link" name="meta_image_link" value="<?php echo $meta_image_link ?>" required class="form-control" />
          </div>

          <div class="form-group  col-md-3">
            <label> Image1: </label><br>
            <input type="url" id="Image1" name="Image1" value="<?php echo $image1 ?>" required class="form-control" />
          </div>
          <div class="form-group  col-md-3">
            <label> Image2: </label><br>
            <input type="url" id="Image2" name="Image2" value="<?php echo $image2 ?>" required class="form-control" />
          </div>
          <div class="form-group  col-md-3">
            <label> Image3: </label><br>
            <input type="url" id="Image3" name="Image3" value="<?php echo $image3 ?>" required class="form-control" />
          </div>
          <div class="form-group  col-md-3">
            <label> Image4: </label><br>
            <input type="url" id="Image4" name="Image4" value="<?php echo $image4 ?>" required class="form-control" />
          </div>
          <div class="form-group  col-md-2">
            <label> Recommendation: </label><br>
            <select type="text" id="Recommendation" name="Recommendation"   class="form-control">
              <option><?php echo $recommendation ?></option>
              <option>NOT Recommended</option>
              <option>Yes</option>
            </select>
          </div>
          <div class="form-group  col-md-2">
            <label> Price: </label><br>
            <input type="Number" id="Price" name="Price" value="<?php echo $Price ?>" required class="form-control" />
          </div>
          <div class="form-group  col-md-1">
            <label> days: </label><br>
            <input type="text" id="days" name="days" value="<?php echo $days ?>" required class="form-control" />
          </div>
          <div class="form-group  col-md-2">
            <label> distance: </label><br>
            <input type="text" id="distance" name="distance" value="<?php echo $distance ?>" required class="form-control" />
          </div>
          <div class="form-group  col-md-2">
            <label> Altitude: </label><br>
            <input type="text" id="Altitude" name="Altitude" value="<?php echo $Altitude ?>" class="form-control" />
          </div>
          <div class="form-group  col-md-2">
            <label> Difficulty Level: </label><br>
            <input type="text" id="Difficulty_Level" name="Difficulty_Level" value="<?php echo $Difficulty_Level ?>" class="form-control" />
          </div>
          <div class="form-group  col-md-2">
            <label> start: </label><br>
            <input type="text" id="start" name="start" value="<?php echo $start ?>" class="form-control" />
          </div>
          <div class="form-group  col-md-2">
            <label> end: </label><br>
            <input type="text" id="end" name="end" value="<?php echo $end ?>" class="form-control" />
          </div>
        </div>
      </div>

      <div id="facilitydetail" class="tab-pane fade">
        <h3>Facilities</h3>
        <textarea id="facility_ckeditor" name="facility_ckeditor"><?php echo $facility ?></textarea>
      </div>
      <div id="Heighlight" class="tab-pane fade">
        <h3>Heighlight</h3>
        <textarea id="Heighlight_ckeditor" name="Heighlight_ckeditor"><?php echo $Heighlight ?></textarea>
      </div>
      <div id="inclusion" class="tab-pane fade">
        <h3>Inclusion</h3>
        <textarea id="Inclusion_ckeditor" name="Inclusion_ckeditor"><?php echo $inclusion ?></textarea>
      </div>
      <div id="Overview_itinerary" class="tab-pane fade">
        <h3>Overview itinerary</h3>
        <textarea id="Overview_ckeditor" name="Overview_ckeditor"><?php echo $Overview_itinerary ?></textarea>
      </div>
      <div id="Things_to_carry" class="tab-pane fade">
        <h3>Things To Carry </h3>
        <textarea id="Things_to_carry_ckeditor" name="Things_to_carry_ckeditor"><?php echo $facility ?></textarea>
      </div>

      <div id="Saftey_security" class="tab-pane fade">
        <h3>Saftey Security </h3>
        <textarea id="Saftey_security_ckeditor" name="Saftey_security_ckeditor"><?php echo $Things_to_carry ?></textarea>
      </div>

      <div id="Fitness_Tips" class="tab-pane fade">
        <h3>Fitness Tips</h3>
        <textarea id="Fitness_Tips_ckeditor" name="Fitness_Tips_ckeditor"><?php echo $Fitness_Tips ?></textarea>
      </div>

      <div id="Fee_policy" class="tab-pane fade">
        <h3>Fee Policy</h3>
        <textarea id="Fee_policy_ckeditor" name="Fee_policy_ckeditor"><?php echo $Fee_policy ?></textarea>
      </div>
    </div>
    <div class="col-md-4" style="padding: 0px;">
      <button type="Submit" class="btn"  id="TourDetail-updatePleaseWaitMsg" style="width:200px;height:50px">Save</button>
    </div>
    <div class="col-md-8" id="TourDetail-updateSuccessmsg">

    </div>
  </form>
</div>

<script>
  $(document).ready(function() {
    CKEDITOR.replace('facility_ckeditor', {

    });

    CKEDITOR.replace('Heighlight_ckeditor', {

    });
    CKEDITOR.replace('Inclusion_ckeditor', {

    });
    CKEDITOR.replace('Overview_ckeditor', {

    });
    CKEDITOR.replace('Things_to_carry_ckeditor', {

    });
    CKEDITOR.replace('Saftey_security_ckeditor', {

    });
    CKEDITOR.replace('Fitness_Tips_ckeditor', {

    });
    CKEDITOR.replace('Fee_policy_ckeditor', {

    });
    $('#Tour_Detailo_update_form').on('submit', function(event) {
      event.preventDefault();
      for (instance in CKEDITOR.instances) {
        CKEDITOR.instances[instance].updateElement();
      }

      $('#TourDetail-updatePleaseWaitMsg').html('Saving');
      $.ajax({
        url: "Tour_detail_update_final.php",
        method: "POST",
        data: new FormData(this),
        contentType: false,
        processData: false,
        success: function(data) {
          $('#TourDetail-updateSuccessmsg').html(data);
          $('#TourDetail-updatePleaseWaitMsg').html('Save');
        }
      });
    });


  });
</script>