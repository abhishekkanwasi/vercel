<?php
session_start();
$timeout = 60 * 60; // In seconds, i.e. 30 minutes.
$fingerprint = hash_hmac('sha256', $_SERVER['HTTP_USER_AGENT'], hash('sha256', $_SERVER['REMOTE_ADDR'], true));
if ((isset($_SESSION['last_active']) && $_SESSION['last_active']<(time()-$timeout))
     || (isset($_SESSION['fingerprint']) && $_SESSION['fingerprint']!=$fingerprint)
     || isset($_GET['logout'])
    )
{
    setcookie(session_name(), '', time()-3600, '/');
    session_destroy();
}
 
$_SESSION['last_active'] = time();
$_SESSION['fingerprint'] = $fingerprint;

if(isset($_SESSION["id"])){
    $con = mysqli_connect('162.144.39.63','trekveda_vikas','Admin@123','trekveda_office') or die('Unable To connect');
    $result = mysqli_query($con,"SELECT * FROM test_loging WHERE uname='" . $_SESSION["name"] . "' and upass = '". $_SESSION["password"]."'");
    $row  = mysqli_fetch_array($result);
    $UserType = $row['utype']; 
    $UserName = $row['Name']; 
    $_SESSION['UserType'] = $UserType;
    $_SESSION['UserName'] = $UserName;
    }
    else{
   //     echo 'session error';
    }
?>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">        
        <title>Dashboard</title>
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     
        <style> table.example-table, .example-table td ,th { border: 1px solid black; border-collapse: collapse; } </style>
         <script>
                $(window).load(function() {
                $(".loader").fadeOut("slow");
           });      
        </script>  
                 <script>
             
                function showmain(){
                    document.getElementById('mainbody').style.display ='block';
                    document.getElementById('loader').style.display ='none';
                }
                
         </script> 
    </head>
    
    <body onload="showmain()"   style="display:block" >
        
        <div class="loader" id="loader"></div>
        
        <div div class="container-fluid"  id="mainbody" style="display:none;" >
          <?php
           $UserType = $row['utype']; 
           if($UserType == 'Driver'){
          ?> 
            <div class="col-md-12" id="btn_container" style="padding:0px">
                <button type="button"  id="inbox_btn">Inbox</button>
                <button type="button"  id="get_customer_btn">Get Customer</button>
                <button type="button"  id="information_btn">Information</button>
                <button class="btn btn-danger" onclick="window.location.href='logout.php'"><a  style="color:white" href="logout.php">Log Out</a></button>
         </div>
           
        <!----------------------Inbox------------------------------->
        <div class="col-md-12" id="inbox_container">
                 
         </div>
             
        <!----------------------Get Customer------------------------------->
        <div class="col-md-12" id="Get_Customer_container">

        </div>
             
        <!----------------------Information------------------------------->
         <div class="col-md-12"  id="Information_container">
                 
         </div>
            
        
        <!-- The actual snackbar -->
        <div id="snackbar"></div>

        <script>
            function ShowSnackbar() {
            // Get the snackbar DIV
            var x = document.getElementById("snackbar");

            // Add the "show" class to DIV
            x.className = "show";

            // After 3 seconds, remove the show class from DIV
            setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
          }
        </script>
        
          <?php
              }else{ echo "<center><h1>Please login first .</h1></center>";
              echo "<center><button class='btn-warning' id='myButton2'  ><a style='color:black' href='index.php'>Log In</a></button></center>";
              }
              ?>
        </div>


        
            <style>
                #inbox_container,#Get_Customer_container,#Information_container{
                    margin-top: 20px;
                    padding: 0px;
                    font-size: 14px;
                }
                
                .loader {
                    position: fixed;
                    left: 0px;
                    top: 0px;
                    width: 100%;
                    height: 100%;
                    z-index: 9999;
                    background: url('loading.svg') 50% 50% no-repeat rgb(249,249,249);
                 }
                 
                #btn_container button{
                    isplay: inline-block;
                    margin-bottom: 0;
                    font-weight: 400;
                    color: #fff;
                    background-color: #007bff;
                    border-color: #007bff;
                    text-align: center;
                    white-space: nowrap;
                    vertical-align: middle;
                    -ms-touch-action: manipulation;
                    touch-action: manipulation;
                    cursor: pointer;
                    background-image: none;
                    border: 1px solid transparent;
                    padding: 6px 12px;
                    font-size: 14px;
                    line-height: 1.42857143;
                    border-radius: 4px;
                    -webkit-user-select: none;
                   margin-bottom: 10px;
                }
                
                #btn_container{
                    margin-top: 20px;
                }

                    /* The snackbar - position it at the bottom and in the middle of the screen */
                    #snackbar {
                      visibility: hidden; /* Hidden by default. Visible on click */
                      min-width: 250px; /* Set a default minimum width */
                      margin-left: -125px; /* Divide value of min-width by 2 */
                      background-color: #333; /* Black background color */
                      color: #fff; /* White text color */
                      text-align: center; /* Centered text */
                      border-radius: 2px; /* Rounded borders */
                      padding: 16px; /* Padding */
                      position: fixed; /* Sit on top of the screen */
                      z-index: 1; /* Add a z-index if needed */
                      left: 50%; /* Center the snackbar */
                      bottom: 30px; /* 30px from the bottom */
                    }

                    /* Show the snackbar when clicking on a button (class added with JavaScript) */
                    #snackbar.show {
                      visibility: visible; /* Show the snackbar */
                      /* Add animation: Take 0.5 seconds to fade in and out the snackbar.
                      However, delay the fade out process for 2.5 seconds */
                      -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
                      animation: fadein 0.5s, fadeout 0.5s 2.5s;
                    }

                    /* Animations to fade the snackbar in and out */
                    @-webkit-keyframes fadein {
                      from {bottom: 0; opacity: 0;}
                      to {bottom: 30px; opacity: 1;}
                    }

                    @keyframes fadein {
                      from {bottom: 0; opacity: 0;}
                      to {bottom: 30px; opacity: 1;}
                    }

                    @-webkit-keyframes fadeout {
                      from {bottom: 30px; opacity: 1;}
                      to {bottom: 0; opacity: 0;}
                    }

                    @keyframes fadeout {
                      from {bottom: 30px; opacity: 1;}
                      to {bottom: 0; opacity: 0;}
                    }
                </style>  
 
        <script type="text/javascript" src="Adminscripts.js" defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="http://ajax.aspnetcdn.com/ajax/modernizr/modernizr-2.8.3.js"></script>
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="http://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

        
    </body> 
</html>