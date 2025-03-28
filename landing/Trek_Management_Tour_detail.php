<div class="col-md-12" style="padding: 0px;margin-top: 10px">
  <div class='top_heading_bar'>
    <center>
      <h5 style="width:100%;">Tour Detail</h5>
    </center>
  </div>
  <form id="Tour_detail_form">
    <label style="float:left;margin-top: 10px;">Select Trek:</label>
    <select name="Tour-Selected" id="tour_list" class="required" required>
      <option selected disabled>Select Tour</option>
      <?php
      include 'connection.php';
      if (mysqli_connect_error()) {
        die("Connection error: " . mysqli_connect_error());
      } else {
        $sql = "SELECT Title  FROM Tour_package_pages  ORDER BY Title ASC;";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
          echo "<option>" . $row["Title"] . "</option>";
        }
      }
      ?>
    </select>
    <input type="submit" class="btn_sale_data" value="Get Detail" />
    <span id="Tour_detailPleaseWaitMsg" style="display: none;">Please wait <IMG SRC="loadinggif.gif" style="height:30px;width:auto"></span>
  </form>

  <div class="col-md-12" id="Tour_detail_form_sussess" style="padding:0px;">

  </div>
</div>
<script>
  $(document).ready(function() {
    $('#Tour_detail_form').on('submit', function(event) {
      event.preventDefault();
      $('#Tour_detailPleaseWaitMsg').show();
      $.ajax({
        url: "Tour_detail_update_form.php",
        method: "POST",
        data: new FormData(this),
        contentType: false,
        processData: false,
        success: function(data) {
          $('#Tour_detail_form_sussess').html(data);
          $('#Tour_detailPleaseWaitMsg').hide();
        }
      });
    });
  });
</script>