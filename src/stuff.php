<!DOCTYPE html>
<html>
<head>
    <title>Join the SUNNY ISLE Hotel</title>
    <link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>
    <p class="head1back"><a style=" text-decoration: none; color: #F4F5F6;" href="./Index.html">Back</a></p><br>
    <p class="head3">
        SUNNY ISLE<br>
    </p>
    <p class="head4">Unlock unforgettable experiences in the east region of Lukewarm Kingdom</p>

    <?php

        $code = $_POST['code'];
        $comp = 12345678;
        
        if(!empty($code))
        { 
            
            if ($code == $comp) {            
                session_start();
                $_SESSION["code"] = $code;
                echo '<script>window.location="Stuffroom.php";</script>';        
            } 
            else {            
                 exit('<center><h3>Wrong stuff authentication code. <br> Please back to <a style=" text-decoration: none; color: #CCCCCC;" href = "./Stuff.html"> Stufflog </a>.</center></h3>');     
            }




            
        } 
        

        else{
            exit('<center><h3>Sorry, you must enter your code. <br> Please back to <a style=" text-decoration: none; color: #CCCCCC;" href = "./Login.html"> Login </a>.</center></h3>');
        } 

        
    ?>

</body>
</html>
