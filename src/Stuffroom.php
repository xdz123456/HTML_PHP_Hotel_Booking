<!DOCTYPE html>
<head>
    <title>Login the SUNNY ISLE Hotel as stuff</title>
    <link rel="stylesheet" type="text/css" href="./style.css" />
</head>
<body>
    <p class="head1back"><a style=" text-decoration: none; color: #F4F5F6;" href="./Index.html">Back</a></p><br>
    <p class="head3">
        SUNNY ISLE<br>
    </p>
    <p class="head4">Unlock unforgettable experiences in the east region of Lukewarm Kingdom</p>


    <?php
        error_reporting(E_ALL || ~E_NOTICE);
        session_start();
        $code = $_SESSION['code'];
        if ($code) {}
        else{
                exit('<center><h3>You have to Login as stuff<br> Please back to <a style=" text-decoration: none; color: #CCCCCC;" href = "./Stuff.html"> Login </a>.</center></h3>');     
        }
    ?>


    <center><h3>Enter the room you want to search:</h3></center>
    <center>
    <form method="post" action="Stuffroomfind.php">
    <label for="num">Roomnum</label>
    <input type="text" id="num" name="num" /><br /><br/>
    <input type="submit" value="Search now" name="submit" />
    </center>
    </form>
    <p class="head6"><img src="04.png" width="100%"></p>
</body>
</html>