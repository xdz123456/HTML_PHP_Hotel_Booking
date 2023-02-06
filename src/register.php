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

		$username_php = $_POST['username'];
		$password_php = $_POST['password'];
		$psw_php = $_POST['psw'];
		

		$realname_php = $_POST['realname'];
		$passportID_php = $_POST['passportID'];
		$telephone_php = $_POST['telephone'];
		$email_php = $_POST['email'];
		
	    if(!empty($username_php) && !empty($password_php) && !empty($psw_php) && $password_php == $psw_php)
	    { 
        	$dbc = new mysqli('localhost','scydx2','scydx2','scydx2');
			if(!$dbc){
				die("Error connecting to MySQL server.".mysqli_error());
			}

			$sqlsearch = "SELECT * FROM joinnow WHERE username='$username_php'";	
			$userindbs = mysqli_query($dbc,$sqlsearch);	
			if($userindbs->num_rows>0){
				exit('  <center><h3> Sorry, your username has been registed. <br> Please try other user name and back to <a style=" text-decoration: none; color: #CCCCCC;" href = "./Joinnow.html"> Join now </a>.</h3></center>');
			}


			$query = "INSERT INTO joinnow (username,password,psw,realname,passportID,telephone,email) values('$username_php','$password_php','$psw_php','$realname_php','$passportID_php','$telephone_php','$email_php')";
		
			$result = mysqli_query($dbc,$query)
				or die("Error querying database");
			mysqli_close($dbc);
        } 
        

        else{
        	exit(' <center><h3>Sorry, you have to enter the right username and the same password each time. <br> Please back to <a style=" text-decoration: none; color: #CCCCCC;" href = "./Joinnow.html"> Join now </a>.</h3></center>');
    	} 

        
	?>

	<center><h3> Register successfully, <a style=" text-decoration: none; color: #CCCCCC;" href = "Login.html"> Login </a> now.</h3></center>
</body>
</html>


