<?php
include 'connection.php';
echo $Invoice_id = $_POST['Invoice_No'];
$Total = $_POST['Total'];
$Paid = $_POST['paid'];
$Due = $_POST['due'];
$due_Paid_today = $_POST['due_Paid_today'];
$Transaction_Mode = $_POST['Transaction-mode'];
$Transaction_ID = $_POST['Transaction-id-due'];
$Group_name   = $_POST['Name'];

$newPaid = $Paid + $due_Paid_today;
$newDew = $Due - $due_Paid_today;

$type = 'Due';

// File path config
$targetDir = "Payment-Receipt/";
$RecieptName = basename($_FILES["Reciept"]["name"]);
$targetFilePath = $targetDir . $RecieptName;

$Transaction_id =  $_POST['Transaction-id-due'];

if (mysqli_connect_error()) {
    die("Connection error: " . mysqli_connect_error());
} else {

    if (move_uploaded_file($_FILES["Reciept"]["tmp_name"], $targetFilePath)) {
        $sql = "UPDATE offline_data SET Paid_Amount = '$newPaid' , Due_Amount = '$newDew'  WHERE  Invoice_No = '$Invoice_id' and Paid_Amount !='' ;";
        $result = $conn->query($sql);


        $Date = date("Y/m/d");
        $sql1 = "INSERT INTO Account_management_due_submit_table (Invoice_No ,Group_name,Transaction_mode,Transaction_ID,Amount,Screenshot, Amount_Type,Date) Values ('$Invoice_id','$Group_name','$Transaction_Mode','$Transaction_ID','$due_Paid_today','$RecieptName','$type','$Date');";
        $result1 = $conn->query($sql1);
    
        if ($result && $result1 ) {
            echo 'Successfully Updated';
        } else {
            echo '<h5 style="color:red">error</h5>';
        }
    } else {
        Echo "Sorry, there was an error uploading your file.";
    }

   
}
