<table class="table" style="padding: 0px">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Date</th>
                <th scope="col">Location</th>
                <th scope="col">Departure time</th>
                <th scope="col">------</th>
              </tr>
            </thead>  
            <tbody>

                <?php 
                        include 'connection.php';
                        session_start();
                        $User_name = $_SESSION['UserName'];
                        
                        $sql = "SELECT * FROM Customer_detail where  Accept = 'No' and Submitted_by != '$User_name' ;";
                        $result = $conn->query($sql);
                        $W_B = 1;
                              while($row = $result->fetch_assoc()){  
                              echo "<tr id='Items_row_no$W_B' ><th scope='row'>$W_B</th>
                                                <td>".$row['Date']."</td>
                                                <td>".$row['Location']."</td>
                                                <td>".$row['Departure_time']."</td>   
                                                <td><input hidden id='id$W_B' value='".$row['id']."'> <Button  id='Items_Broken_no$W_B'   type='button' >Accept</button></td>
                                              </tr>";
                                    ?>
                <script>
                        $(document).ready(function(){  
                            $('#Items_Broken_no<?php echo $W_B ?>').on('click', function(event){  
                                        event.preventDefault();  
                                        $('#Items_Broken_no<?php echo $W_B ?>').html('wait..');
                                        var formData = {
                                                'id': $('#id<?php echo $W_B ?>').val(),     
                                       };      
                                       $.ajax({    
                                      url:"Accept.php", 
                                      method:"POST",  
                                      data: formData,  
                                        success:function(data){  
                                            $('#snackbar').html(data);
                                            ShowSnackbar();
                                        }  
                                    });  
                            });  
                        });    
                </script>
                <?php
                              $W_B++;
                            }
                ?>
            </tbody>
         </table>