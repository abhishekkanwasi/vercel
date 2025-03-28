<?php 
        session_start();
         $User_name = $_SESSION['UserName'];
         $id = $_POST['id'];
             include 'connection.php';
            $sql = "Update Customer_detail set Accept = 'Yes' , Accepted_by = '$User_name '  where  id = '$id' ;";
            $result = $conn->query($sql);
            if($result){
                 echo 'Accepted';
                 
            ?>
    <script>
       $(document).ready(function(){  
           $('#Items_Broken_no<?php echo $W_B ?>').html('Accepted');
           $('#Items_Broken_no<?php echo $W_B ?>').prop("disabled", true); 
       });
   </script>
<?php
                    }else{
                         echo 'Error';
                    }

        ?>