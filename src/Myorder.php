<!DOCTYPE html>
<html>
<head>
    <title>Join the SUNNY ISLE Hotel</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <p class="head1log"><a style=" text-decoration: none; color: #F4F5F6;" href="Logout.php">Log out</a></p><br>
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
            exit('<center><h3>You have to Login<br> Please back to <a style=" text-decoration: none; color: #CCCCCC;" href = "Login.html"> Login </a>.</h3></center>');     
        }


        $dbc = new mysqli('localhost','scydx2','scydx2','scydx2');
        
        if(!$dbc){
            die("Error connecting to MySQL server.".mysqli_error());
        }

        $find = "SELECT *FROM bookroom WHERE username = $name";
        $room_booked = mysqli_query($dbc,$find) or die("Wrong sql");

        $number = mysqli_num_rows($room_booked);
        
        if ($number == 0) {
             exit('<center><h3>You have not order any room<br> Please back to <a style=" text-decoration: none; color: #CCCCCC;" href = "Mypage.php"> Mypage </a>.</h3></center>');     

        } 
        else{
            

           echo "<center><h3>Your order is: </h3></center>";

            $table = '<table>';
            $table .= '<tr>'.'<td>'.'Roomnum &nbsp;'.'</td>'.'<td>'.'Checkindate &nbsp;'.'</td>'.'<td>'.'Checkoutdate'.'</td>'.'</tr>';
            while($row = mysqli_fetch_array($room_booked)){
                $table .= '<tr>'.'<td>'.$row["roomnum"].'</td>'.'<td>'.$row["checkindate"].'</td>'.'<td>'.$row["checkoutdate"].'</td>'.'</tr>';
            }
            $table .= '</table>';
            echo "<center><h3>$table</h3></center>";
            
        
            
        } 

        mysqli_close($dbc);



    ?>



</body>
</html>
