<!DOCTYPE html>
<html>
<head>
    <title>Join the SUNNY ISLE Hotel</title>
    <link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>
    <p class="head1back"><a style=" text-decoration: none; color: #F4F5F6;" href="./Index.php">Back</a></p><br>
    <p class="head3">
        SUNNY ISLE<br>
    </p>
    <p class="head4">Unlock unforgettable experiences in the east region of Lukewarm Kingdom</p>

    <?php

        $username_php = $_POST['username'];
        $password_php = $_POST['password'];

        
        if(!empty($username_php) && !empty($password_php))
        { 
            $dbc = new mysqli('localhost','scydx2','scydx2','scydx2');
            if(!$dbc){
                die("Error connecting to MySQL server.".mysqli_error());
            }

            $find = "SELECT username,password FROM joinnow WHERE username = '$_POST[username]' and password = '$_POST[password]'";     
            $userinf = mysqli_query($dbc,$find);   
            $number = mysqli_num_rows($userinf);
            
            if ($number) {            
                session_start();
                $_SESSION["username"] = $username_php;
                echo '<script>window.location="./Mypage.php";</script>';        
            } 
            else {            
                 exit('<center><h3>Wrong username and password. <br> Please back to <a style=" text-decoration: none; color: #CCCCCC;" href = "./Login.html"> Login </a>.</center></h3>');     
            }


            mysqli_close($dbc);

            
        } 
        

        else{
            exit('<center><h3>Sorry, you must enter your username and password. <br> Please back to <a style=" text-decoration: none; color: #CCCCCC;" href = "Login.html"> Login </a>.</center></h3>');
        } 

        
    ?>

</body>
</html>
