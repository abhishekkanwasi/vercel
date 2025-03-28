<?php
    session_start();
    $fingerprint             = hash_hmac('sha256', $_SERVER['HTTP_USER_AGENT'], hash('sha256', $_SERVER['REMOTE_ADDR'], true));
    $_SESSION['last_active'] = time();
    $_SESSION['fingerprint'] = $fingerprint;
    $message="";
    
    if(count($_POST)>0) {  
        $con = mysqli_connect('162.144.39.63','trekveda_vikas','Admin@123','trekveda_office') or die('Unable To connect');
        $myusername=$_POST['name']; 
        $mypassword=$_POST['password']; 

         // To protect MySQL injection
        $myusername = stripslashes($myusername);
        $mypassword = stripslashes($mypassword);
        $myusername = mysqli_real_escape_string($con,$myusername);
        $mypassword = mysqli_real_escape_string($con,$mypassword);

        $result = mysqli_query($con,"SELECT * FROM test_loging WHERE uname='" . $myusername. "' and upass = '". $mypassword."'");
        $row  = mysqli_fetch_array($result);
        
        if(is_array($row)) {   
        $_SESSION["id"] = $row[id];
        $_SESSION["name"] = $row[uname];
        $_SESSION["password"] = $row[upass];
        $UserType = $row['utype']; 
        } else {
            $message = "Invalid Username or Password!";
        }
    }

// You may want to do a redirect here if a user is already logged in:
if(!empty($_SESSION['id'])){
    
     if($UserType == "Driver")
     {
        header("Location:Dashboard.php");
        exit;
     }
     
 else
    {
          header("Location:invelidIp.php");
          exit;
     }
    
}
?>

<html>
<head>
<title>User Login</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body id="login_body"  class="container">
            <center>
                <div id="login_container"  >  
                    <img src="" />
                    <br>
                    <form name="frmUser" method="post" action="" align="center">
                        <div class="message"><?php if($message!="") { echo $message; } ?></div>
                        Username:<br>
                        <input type="text" name="name"  style="border: 1px solid #978d8d;">
                        <br>
                        Password: <br>
                        <input type="password" name="password" style="border: 1px solid #978d8d;background-color: white;">

                        <br><br>
                        <input type="submit" name="submit" value="login"  style="border: 1px solid #978d8d;background-color: white;">

                    </form>
                 </div>
            </center> 
            <style>
                #login_body{
                    background-image: url('') ;
                    background-position: center; /* Center the image */
                    background-repeat: no-repeat; /* Do not repeat the image */
                    background-size: cover; 
                }
                  
                #login_container{
                    background-color:wheat;
                    width: fit-content;
                    padding: 20px;
                    border-radius: 3px;
                    -webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
                    -moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
                    box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
                    margin-top: 13%;
                }
               
            </style>            
</body>
</html>
</html>