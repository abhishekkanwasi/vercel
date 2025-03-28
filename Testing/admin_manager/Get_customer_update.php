<?php
    include 'connection.php';
     session_start();
    $User_name = $_SESSION['UserName'];
    $date = $_POST['date'];
    $location = $_POST['location'];
    $departure = $_POST['departure-time'];
    $phone = $_POST['phone'];
    $Vehical_no = $_POST['Vehical-no'];
    $Model = $_POST['Model'];
    $Submitted_by = $_SESSION['UserName'];
    if(mysqli_connect_error())
    {
            die("Connection error: " . mysqli_connect_error());
    }
    else{
            $INSERT="insert into Customer_detail (Date,Location,Departure_time,Phone,Vehical_no,Vehical_model,Submitted_by) values (?,?,?,?,?,?,?)";
            $stmt=$conn->prepare($INSERT);
            $stmt->bind_param("sssssss",$date,$location,$departure,$phone,$Vehical_no,$Model,$Submitted_by);
            $stmt->execute();
            if($stmt){
                echo 'Success';
              }else{
                    echo 'Faild';
              }
    }
    $conn ->close();

?>