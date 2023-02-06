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



        $room = $_POST['num'];
        $dbc = new mysqli('localhost','scydx2','scydx2','scydx2');

        $room_c = $room % 100;

        if ($room_c != 1 && $room_c != 2 && $room_c != 3 && $room_c != 4 && $room_c != 5 && $room_c != 6 && $room_c != 7 && $room_c != 8 && $room_c != 9 && $room_c != 10 && $room_c != 11 && $room_c != 12 && $room_c != 13 && $room > 1013) 
            {
               exit('<center><h3>Sorry you have to enter the right format of roomnum <br> Please back to <a style=" text-decoration: none; color: #CCCCCC;" href = "./Stuffroom.php"> Choose </a> and try again</center></h3>');
            }
        
        if(!$dbc){
            die("Error connecting to MySQL server.".mysqli_error());
        }

        $find = "SELECT *FROM bookroom WHERE roomnum = $room";
        $room_booked = mysqli_query($dbc,$find) or die("Wrong sql");

        $number = mysqli_num_rows($room_booked);
        
        if ($number == 0) {
             echo "<center>This room haven't been booked.</center>";

        } 
        else{
            

           echo "<center><h3>Order in this room is: </h3></center>";

            $table = '<table>';
            $table .= '<tr>'.'<td>'.'Username &nbsp;'.'</td>'.'<td>'.'Checkindate &nbsp;'.'</td>'.'<td>'.'Checkoutdate'.'</td>'.'</tr>';
            while($row = mysqli_fetch_array($room_booked)){
                $table .= '<tr>'.'<td>'.$row["username"].'</td>'.'<td>'.$row["checkindate"].'</td>'.'<td>'.$row["checkoutdate"].'</td>'.'</tr>';
            }
            $table .= '</table>';
            echo "<center><h3>$table</h3></center>";
            
        
            
        } 

        mysqli_close($dbc);
    ?>
