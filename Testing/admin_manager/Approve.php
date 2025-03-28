<?php 
                $Alert_no = $_POST['Alert_no'];
              $id = $_POST['id'];
              $Pick_Up_Location = $_POST['Pick_Up_Location'];
              $Drop_location = $_POST['Drop_location'];
              $Cost = $_POST['Cost'];
              $No_of_people = $_POST['No_of_people'];
               include 'connection.php';
               $sql = "Update Customer_detail set Approve = 'Yes' , Pickup_location = '$Pick_Up_Location' , Drop_location = '$Drop_location' , Cost = '$Cost' , No_of_people = '$No_of_people'  where  id = '$id' ;";
               $result = $conn->query($sql);
            if($result){
                 echo 'Approved';
            }else{
                 echo 'Error';
            }

?>