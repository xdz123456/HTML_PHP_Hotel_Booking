<!DOCTYPE html>
<html>
<head>
    <title>Join the SUNNY ISLE Hotel</title>
    <link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>
    <p class="head1log"><a style=" text-decoration: none; color: #F4F5F6;" href="./Logout.php">Log out</a></p><br>
    <p class="head3">
        SUNNY ISLE<br>
    </p>
    <p class="head4">Unlock unforgettable experiences in the east region of Lukewarm Kingdom</p></br>
    
    <?php 
        error_reporting(E_ALL || ~E_NOTICE);
        session_start();
        $name = $_SESSION['username'];
        if ($name) {}
        else{
            exit('<center><h3>You have to Login<br> Please back to <a style=" text-decoration: none; color: #CCCCCC;" href = "Login.html"> Login </a>.</center></h3>');     
        }
    ?>

    <p class="head5"><img src="05.png" width="100%"></p>
    <p class="head1book"><a style=" text-decoration: none; color: #F4F5F6;" href="./bookTime.php">BOOK NOW</a></p>
    <p class="head2book"><a style=" text-decoration: none; color: #F4F5F6;" href="./Myorder.php">My Order</a></p>

    


</body>
</html>