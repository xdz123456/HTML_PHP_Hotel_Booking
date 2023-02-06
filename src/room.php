<html>
<head>
    <title>Join the SUNNY ISLE Hotel</title>
    <link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>
    <p class="head1back"><a style=" text-decoration: none; color: #F4F5F6;" href="./bookTime.php">Back</a></p><br>
    <p class="head3">
        SUNNY ISLE<br>
    </p>
    <p class="head4">Unlock unforgettable experiences in the east region of Lukewarm Kingdom</p>

    <?php

        error_reporting(E_ALL || ~E_NOTICE);
        session_start();
        $name = $_SESSION['username'];
        if ($name) {}
        else{
                exit('<center><h3>You have to Login<br> Please back to <a style=" text-decoration: none; color: #CCCCCC;" href = "./Login.html"> Login </a>.</center></h3>');     
        }
        
        $yearin_php = $_POST['Yearin'];
        $yearout_php = $_POST['Yearout'];
        $monthout_php = $_POST['Monthout'];
        $dayout_php = $_POST['Dayout'];
        $monthin_php = $_POST['Monthin'];
        $dayin_php = $_POST['Dayin'];
        $roomtype_php = $_POST['Roomtype'];

        $year_string = date("Y");
        $month_string = date("m");
        $day_string = date("d");

        $year_int = (int) $year_string;
        $month_int = (int) $month_string;
        $day_int = (int) $day_string;

        $timechoice = 10000*$yearin_php + 100*$monthin_php + $dayin_php;
        $timenow = 10000*$year_int + 100*$month_int + $day_int;
        //Overdue
        if($timechoice < $timenow)
        {
            exit(' <center><h3>Sorry, your choisen time is overdue. <br> Please back to <a style=" text-decoration: none; color: #CCCCCC;" href = "./bookTime.php"> Choose time </a>.</h3></center>');
        }



        //Checkin Time later than Checkout Time
        if(($yearin_php > $yearout_php))
        {
            exit(' <center><h3>Sorry, you have to choose the valuable checkin and checkout date. <br> Please back to <a style=" text-decoration: none; color: #CCCCCC;" href = "./bookTime.php"> Choose time </a>.</h3></center>');
        }

        if(($yearin_php <= $yearout_php) && ($monthin_php > $monthout_php))
        {
            exit(' <center><h3>Sorry, you have to choose the valuable checkin and checkout date. <br> Please back to <a style=" text-decoration: none; color: #CCCCCC;" href = "./bookTime.php"> Choose time </a>.</h3></center>');
        }

        if(($yearin_php <= $yearout_php) && ($monthin_php == $monthout_php) &&($dayin_php >= $dayout_php))
        {
            exit(' <center><h3>Sorry, you have to choose the valuable checkin and checkout date. <br> Please back to <a style=" text-decoration: none; color: #CCCCCC;" href = "./bookTime.php"> Choose time </a>.</h3></center>');
        }



        //Some month doesn't have some day
        if (($monthin_php==2 && ($dayin_php==29 || $dayin_php==30 || $dayin_php==31)) || ($monthin_php==4 && $dayin_php==31) || ($monthin_php==6 && $dayin_php==31) || ($monthin_php==9 && $dayin_php==31) || ($monthin_php==11 && $dayin_php==31))
        {
            exit(' <center><h3>Sorry, there is no this day in this month. <br> Please back to <a style=" text-decoration: none; color: #CCCCCC;" href = "./bookTime.php"> Choose time </a>.</h3></center>');
        }

        if (($monthout_php==2 && ($dayout_php==29 || $dayout_php==30 || $dayout_php==31)) || ($monthout_php==4 && $dayout_php==31) || ($monthout_php==6 && $dayout_php==31) || ($monthout_php==9 && $dayout_php==31) || ($monthout_php==11 && $dayout_php==31))
        {
            exit(' <center><h3>Sorry, there is no this day in this month. <br> Please back to <a style=" text-decoration: none; color: #CCCCCC;" href = "bookTime.php"> Choose time </a>.</h3></center>');
        }


        $checkindate_php = ($yearin_php*10000) + ($monthin_php*100) + $dayin_php;
        $checkoutdate_php = ($yearout_php*10000) + ($monthout_php*100) + $dayout_php;
        
        
        $_SESSION["checkindate"] = $checkindate_php;
        $_SESSION["checkoutdate"] = $checkoutdate_php;
        $_SESSION["roomtype"] = $roomtype_php;

        $dbc = new mysqli('localhost','scydx2','scydx2','scydx2');
        
        if(!$dbc){
            die("Error connecting to MySQL server.".mysqli_error());
        }

        $find = "SELECT roomnum FROM bookroom WHERE (checkindate <= $checkoutdate_php AND checkoutdate >= $checkoutdate_php) OR (checkindate <= $checkindate_php AND checkoutdate >= $checkindate_php) AND roomtype = $roomtype_php";
        $room_booked = mysqli_query($dbc,$find) or die("Wrong sql");
        $number = mysqli_num_rows($room_booked);
        if ($number == 0) {
             echo "<center>All the room are available</center>";

        } 
        else{
            

            echo "<h3> <center> These room(s) has been booked: </center> </h3>";

            $table = '<table>';
            while($row = mysqli_fetch_array($room_booked)){
                $table .= '<td>'.$row["roomnum"].'</td>';
            }
            $table .= '</table>';
            echo "<center><h3>$table</h3></center>";
            
        
            
        } 

        mysqli_close($dbc);
        


    ?>

    <center><h3><p>Enter your choisen room:</p></h3></center><br />
    <center><h3><p>(The roomnum must match your choisen roomtype)</p></h3></center><br />
    <center><form method="post" action="booksubmit.php">
        <label>Enter your choisen room:</label>
        <input type="text" id="roomnum" name="roomnum" /><br /><br />
        <input type="submit" value="Book now" name="submit" />
    </form></center>

    <p class="head6"><img src="03.png" width="100%"></p>

</body>
</html>
