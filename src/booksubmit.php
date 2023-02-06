<!DOCTYPE html>
<html>
<head>
    <title>Join the SUNNY ISLE Hotel</title>
    <link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>
    <p class="head1log"><a style=" text-decoration: none; color: #F4F5F6;" href="./Index.html">Log out</a></p><br>
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


        $checkindate_sub = $_SESSION['checkindate'];
        $checkoutdate_sub = $_SESSION['checkoutdate'];
        $roomtype_sub = $_SESSION['roomtype'];
        $username_sub = $_SESSION['username'];
        $roomnum_sub = $_POST['roomnum'];

        $room_c = $roomnum_sub % 100;

        if ($room_c != 1 && $room_c != 2 && $room_c != 3 && $room_c != 4 && $room_c != 5 && $room_c != 6 && $room_c != 7 && $room_c != 8 && $room_c != 9 && $room_c != 10 && $room_c != 11 && $room_c != 12 && $room_c != 13 && $roomnum_sub > 1014) 
            {
               exit('<center><h3>Sorry you have to enter the right format of roomnum <br> Please back to <a style=" text-decoration: none; color: #CCCCCC;" href = "./bookTime.php"> Choose </a> and try again</center></h3>');
            }

        if ($roomtype_sub == 1) {
            if ($room_c != 13) {
               exit('<center><h3>Sorry you have to enter right roomnum with right roomtype <br> Please back to <a style=" text-decoration: none; color: #CCCCCC;" href = "./bookTime.php"> Choose </a> and try again</center></h3>');
           }
        }

        if ($roomtype_sub == 2) {
            if ($room_c != 3 && $room_c != 4 && $room_c != 9 && $room_c != 10) {
               exit('<center><h3>Sorry you have to enter right roomnum with right roomtype <br> Please back to <a style=" text-decoration: none; color: #CCCCCC;" href = "./bookTime.php"> Choose </a> and try again</center></h3>');
           }
        }

        if ($roomtype_sub == 3) {
            if ($room_c != 5 && $room_c != 6 && $room_c != 7 && $room_c != 8) {
               exit('<center><h3>Sorry you have to enter right roomnum with right roomtype <br> Please back to <a style=" text-decoration: none; color: #CCCCCC;" href = "./bookTime.php"> Choose </a> and try again</center></h3>');
           }
        }

        if ($roomtype_sub == 4) {
            if ($room_c != 1 && $room_c != 2 && $room_c != 11 && $room_c != 12) {
               exit('<center><h3>Sorry you have to enter right roomnum with right roomtype <br> Please back to <a style=" text-decoration: none; color: #CCCCCC;" href = "./bookTime.php"> Choose </a> and try again</center></h3>');
           }
        }



       



        $dbc = new mysqli('localhost','scydx2','scydx2','scydx2');
        
        if(!$dbc){
            die("Error connecting to MySQL server.".mysqli_error());
        }

        $find = "SELECT roomnum FROM bookroom WHERE (checkindate <= $checkoutdate_sub AND checkoutdate >= $checkoutdate_sub) OR (checkindate <= $checkindate_sub AND checkoutdate >= $checkindate_sub) AND roomtype = $roomtype_sub";
        $room_booked = mysqli_query($dbc,$find) or die("Wrong sql");
        $number = mysqli_num_rows($room_booked);
        if ($number == 0) {} 
        else{
            

            while($row = mysqli_fetch_array($room_booked)){
                if ($roomnum_sub == $row["roomnum"]) {
                    exit('<center><h3>Sorry this room has been booked <br> Please back to <a style=" text-decoration: none; color: #CCCCCC;" href = "./bookTime.php"> Choose </a> to choose another room.</center></h3>');
                }
            }
            
        } 



        $query = "INSERT INTO bookroom (roomnum,checkindate,checkoutdate,roomtype,username) values('$roomnum_sub','$checkindate_sub','$checkoutdate_sub','$roomtype_sub','$username_sub')";

        $result = mysqli_query($dbc,$query)
                or die("Error querying database");

        mysqli_close($dbc);
        exit('<center><h2>BOOK SUCCESSFUL</h2> Please back to <a style=" text-decoration: none; color: #CCCCCC;" href = "./Mypage.php"> MyPage </a> to check your order</center></h3>');

    ?>

</body>
</html>
