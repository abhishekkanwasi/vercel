<?php
include 'connection.php';


$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['phone'];
$age = $_POST['Age'];
$height = $_POST['Height'];
$weight = $_POST['weight'];
$trek = $_POST['Trek-Selected'];
$off_loading = $_POST['Off-Loading'];
$transportation = $_POST['Transportation'];
$noofperson = $_POST['No-of-person'];
$address = $_POST['Address'];
$trek_date = $_POST['Treking-Date'];
$unit_cost = $_POST['Trek-cost'];
$Total_cost = $_POST['Total-Amount'];
$payable_amt = $_POST['Paid-Amount'];
$due_amt = $_POST['Due-Amount'];
$Transition_Id = $_POST['Transition-Id'];
$Invoice_no = $_POST['Invoice-No'];
$Sale_Executive_Name_Frontier = $_POST['Sale_Executive_Name_Frontier'];
$Invoice_Link = $_POST['Invoice_Link'];

$Comment = $_POST['Comment'];

$DOB = $_POST['DOB'];
$Trek_Days = $_POST['Trek-Days'];
$Transaction_Mode = $_POST['Transaction_mode'];

// File path config
$targetDir = "Payment-Receipt/";
$RecieptName = basename($_FILES["Reciept"]["name"]);
$targetFilePath = $targetDir . $RecieptName;

$type = 'Advance';

$paymentStatus = 'success';

$Date = date("Y/m/d");

if (mysqli_connect_error()) {
    die("Connection error: " . mysqli_connect_error());
} else {
    $query = mysqli_query($conn, "SELECT Invoice_No FROM offline_data where Invoice_No = '$Invoice_no' ");
    if (mysqli_num_rows($query) >= 1) {
?>
        <script>
            alert("Invoice No already exists");
        </script>
<?php
    } else {
        if (move_uploaded_file($_FILES["Reciept"]["tmp_name"], $targetFilePath)) {
            $INSERT = "insert into offline_data (Name,Email,Contact,Age,Height,Weight,Trek,Person_count,off_loading,Transportation,Trek_date,Address,Trek_cost,Total_cost,Paid_Amount,Due_amount,Transaction_ID,Payment_status,Invoice_No,Sales_Excutive_name_fronter,Invoice_Link,No_Of_Days,Date_of_birth,Comment) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("sssiiisisssssssssssssis", $name, $email, $contact, $age, $height, $weight, $trek, $noofperson, $off_loading, $transportation, $trek_date, $address, $unit_cost, $Total_cost, $payable_amt, $due_amt, $Transition_Id, $paymentStatus, $Invoice_no, $Sale_Executive_Name_Frontier, $Invoice_Link, $Trek_Days, $DOB,$Comment);

            $stmt->execute();

            $sql = "INSERT INTO Account_management_due_submit_table (Invoice_No ,Transaction_mode,Transaction_ID,Amount,Screenshot, Amount_Type ,Date) Values ('$Invoice_no','$Transaction_Mode','$Transition_Id','$payable_amt','$RecieptName','$type','$Date');";
            $result = $conn->query($sql);
            if ($stmt && $result) {
                echo '<div class="alert alert-success alert-dismissible" id="BudgetresultSuccess" >
                              <a href="#" class="close" id="BudgetresultSuccessCancle">&times;</a>
                              <strong>Uploaded!</strong>
                              </div>';
            } else {
                echo '<div class="alert alert-danger alert-dismissible" id="BudgetresultSuccess" >
                              <a href="#" class="close" id="BudgetresultErrorCancle">&times;</a>
                              <strong>Error!</strong> Try  again.
                              </div>';
            }
        } else {
            echo '<div class="alert alert-danger alert-dismissible" id="BudgetresultSuccess" >
                              <a href="#" class="close" id="BudgetresultErrorCancle">&times;</a>
                              <strong>Error!</strong> Try  again.
                              </div>';
        }
    }
}
$conn->close();
?>