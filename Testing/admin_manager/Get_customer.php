<form id="get_customer_form">
    
   <div class="form-row">
        
        <div class="form-group col-md-4">
          <label for="g_date">Date</label>
          <input type="Date" class="form-control" id="g_date" placeholder="Date" name="date" required>
        </div>
        
        <div class="form-group col-md-4">
          <label for="g_location">Location</label>
          <input type="Text" class="form-control" id="g_location" placeholder="location" name="location" required>
        </div>
        
  </div>
    
  <div class="form-row">
      
    <div class="form-group col-md-4">
      <label for="departuretime">Departure time</label>
      <input type="time" class="form-control" id="departuretime" name="departure-time" required >
    </div>
      
    <div class="form-group col-md-4">
      <label for="phone">Phone</label>
      <input type="tel" class="form-control" id="phone" name="phone" required>
    </div>
      
  </div>
    
    <div class="form-row">
     
    <div class="form-group col-md-4">
      <label for="departuretime">Vehicle no</label>
      <input type="text" class="form-control" id="departuretime" name="Vehical-no" required>
    </div>
      
    <div class="form-group col-md-4">
      <label for="Modelno">Vehicle Model</label>
      <input type="text" class="form-control" id="Modelno" name="Model" required>
    </div>
      
  </div>
    
    <button type="submit" class="btn btn-primary" id="get_customer_form_submit_btn"> Submit</button>
    
</form>


<script>  
    $(document).ready(function(){  
        $('#get_customer_form').on('submit', function(event){  
                    event.preventDefault();  
                    $("#get_customer_form_submit_btn").prop("disabled", true);
                    $('#get_customer_form_submit_btn').html('Wait');
                    $.ajax({  
                        url:"Get_customer_update.php",  
                        method:"POST",  
                        data:new FormData(this),  
                        contentType:false,  
                        processData:false,  
                        success:function(data){  
                           
                            $("#get_customer_form_submit_btn").prop("disabled", false);
                            $('#get_customer_form_submit_btn').html('Submit');
                             $('#snackbar').html(data);
                            ShowSnackbar();
                            $('#get_customer_form').trigger("reset");
                            
                        }  
                });  
        });  
    });
</script> 

<style>
    #get_customer_form{
        margin-top: 20px;
    }
</style>    