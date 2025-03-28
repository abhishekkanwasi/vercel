    <div class="col-xs-12">
                <?php 
                        include 'connection.php';
                         session_start();
                        $User_name = $_SESSION['UserName'];
                        $sql = "SELECT * FROM Customer_detail where  Accept = 'Yes'  and Approve = 'No' and Accepted_by = '$User_name' ;";
                        $result = $conn->query($sql);
                        $Approve = 1;
                            while($row = $result->fetch_assoc()){  
                              echo "<div class='alert alert-success' id='Alert_message_$Approve'>
                                            <strong>Submitted By   : ".$row['Submitted_by']."    Accepted By : ".$row['Accepted_by']."</strong> <span><button  id=Approve_btn$Approve>Approve</button></span>
                                                
                                             <form  id='Approve_form_$Approve' style='display:none'>
                                                 
                                                  <div class='form-group col-md-4'>
                                                   <label for='id'>Id</label>
                                                   <input type='text' class='form-control' id='user_Id_$Approve' value=' ".$row['id']."''  name='id' required readonly> 
                                                 </div>
                                                 
                                                <div class='form-group col-md-4'>
                                                   <label for='Pick_up_location'>Pick Up Location</label>
                                                   <input type='text' class='form-control'  placeholder='Pick Up Location' name='Pick_Up_Location' required>
                                                 </div>

                                                 <div class='form-group col-md-4'>
                                                   <label for='Drop_location'>Drop Location</label>
                                                   <input type='Text' class='form-control' id='g_location' placeholder='location' name='Drop_location' required>
                                                 </div>
                                                 
                                                  <div class='form-group col-md-4'>
                                                   <label for='Cost'>Cost</label>
                                                   <input type='number' class='form-control' min = '1' id='1g_date' placeholder='Cost' name='Cost' required>
                                                 </div>

                                                 <div class='form-group col-md-4'>
                                                   <label for='No_of_people'>No Of People</label>
                                                   <input type='Text' class='form-control' id='no_of_people' placeholder='No of people' name='No_of_people' required>
                                                 </div>
                                                 
                                                 <div class='form-group col-md-12'>
                                                    <button type='submit' id='Comfirm_btn$Approve'>confirm</button>
                                                 </div>
                                                
                                             </form>
        
                                         </div>";
                                    ?>
                <script>
                        $(document).ready(function(){  
                            $('#Approve_btn<?php echo $Approve ?>').on('click', function(event){  
                                $('#Approve_form_<?php echo $Approve ?>').slideToggle();
                            });
                                
                            $('#Approve_form_<?php echo $Approve ?>').on('submit', function(event){       
                                $('#Comfirm_btn<?php echo $Approve ?>').html('Wait...');
                                        event.preventDefault();   
                                        $.ajax({    
                                          url:"Approve.php", 
                                         method:"POST",  
                                        data:new FormData(this),  
                                        contentType:false,  
                                        processData:false,   
                                            success:function(data){  
                                                ('#Comfirm_btn<?php echo $Approve ?>').html('confirm');     
                                                ('#Alert_message_<?php echo $Approve ?>').hide();     
                                                 $('#snackbar').html(data);
                                                 ShowSnackbar();
                                            }  
                                    });  
                            });  
                        });    
                </script>
                <?php
                              $Approve++;
                            }
                ?>
    </div>

    <style>
        .alert-success{
                position: absolute;
        }
    </style>
