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
    ?>

    <center><h3>Choose you check in date</h3></center>
        <center><form action="room.php" method="post">

            Year:
            <select name="Yearin"> 
                <option value="2019">2019</option> 
                <option value="2020">2020</option>
                <option value="2021">2021</option>  
                <option value="2022">2022</option> 
                <option value="2023">2023</option> 
                <option value="2024">2024</option> 
                <option value="2025">2025</option> 
                <option value="2026">2026</option> 
                <option value="2027">2027</option> 
                <option value="2028">2028</option>
                <option value="2029">2029</option>  
            </select> 

            Month:
            <select name="Monthin"> 
                <option value="1">1</option> 
                <option value="2">2</option>
                <option value="3">3</option>  
                <option value="4">4</option> 
                <option value="5">5</option> 
                <option value="6">6</option> 
                <option value="7">7</option> 
                <option value="8">8</option> 
                <option value="9">9</option> 
                <option value="10">10</option>
                <option value="11">11</option>  
                <option value="12">12</option> 
            </select>

            Day:
            <select name="Dayin"> 
                <option value="1">1</option>
                <option value="2">2</option> 
                <option value="3">3</option> 
                <option value="4">4</option> 
                <option value="5">5</option> 
                <option value="6">6</option>  
                <option value="7">7</option> 
                <option value="8">8</option> 
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option> 
                <option value="12">12</option>
                <option value="13">13</option>  
                <option value="14">14</option> 
                <option value="15">15</option> 
                <option value="16">16</option> 
                <option value="17">17</option> 
                <option value="18">18</option> 
                <option value="19">19</option> 
                <option value="20">20</option>
                <option value="21">21</option>  
                <option value="22">22</option>                 
                <option value="23">23</option> 
                <option value="24">24</option>
                <option value="25">25</option>  
                <option value="26">26</option> 
                <option value="27">27</option> 
                <option value="28">28</option> 
                <option value="29">29</option> 
                <option value="30">30</option> 
                <option value="31">31</option>    
            </select> 


            <center><h3>Choose you check out date</h3></center>
            Year:
            <select name="Yearout"> 
                <option value="2019">2019</option> 
                <option value="2020">2020</option>
                <option value="2021">2021</option>  
                <option value="2022">2022</option> 
                <option value="2023">2023</option> 
                <option value="2024">2024</option> 
                <option value="2025">2025</option> 
                <option value="2026">2026</option> 
                <option value="2027">2027</option> 
                <option value="2028">2028</option>
                <option value="2029">2029</option>  
            </select> 

            Month:
            <select name="Monthout"> 
                <option value="1">1</option> 
                <option value="2">2</option>
                <option value="3">3</option>  
                <option value="4">4</option> 
                <option value="5">5</option> 
                <option value="6">6</option> 
                <option value="7">7</option> 
                <option value="8">8</option> 
                <option value="9">9</option> 
                <option value="10">10</option>
                <option value="11">11</option>  
                <option value="12">12</option> 
            </select> 
            
            Day:
            <select name="Dayout"> 
                <option value="1">1</option>
                <option value="2">2</option> 
                <option value="3">3</option> 
                <option value="4">4</option> 
                <option value="5">5</option> 
                <option value="6">6</option>  
                <option value="7">7</option> 
                <option value="8">8</option> 
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option> 
                <option value="12">12</option>
                <option value="13">13</option>  
                <option value="14">14</option> 
                <option value="15">15</option> 
                <option value="16">16</option> 
                <option value="17">17</option> 
                <option value="18">18</option> 
                <option value="19">19</option> 
                <option value="20">20</option>
                <option value="21">21</option>  
                <option value="22">22</option>                 
                <option value="23">23</option> 
                <option value="24">24</option>
                <option value="25">25</option>  
                <option value="26">26</option> 
                <option value="27">27</option> 
                <option value="28">28</option> 
                <option value="29">29</option> 
                <option value="30">30</option> 
                <option value="31">31</option>    
            </select> 


            <center><h3>Choose your Roomtype</h3></center>
            Roomtype
            <select name="Roomtype"> 
                <option value="1">VIP ROOM</option>
                <option value="2">Large room with a large single bed</option> 
                <option value="3">Small room with a single bed</option> 
                <option value="4">Large room with double beds</option>
            </select> </br></br>


            <input type="submit" value="Search" name="submit" />
        </form> </center></br>

        <p class="head6"><img src="04.png" width="100%"></p>

</body>
</html>
