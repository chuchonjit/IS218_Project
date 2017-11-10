<?php
$db_host = 'sql1.njit.edu'; // Server Name
$db_user = 'jda29'; // Username
$db_pass = 'r4mZlygN'; // Password
$db_name = 'jda29'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}


$email = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM `accounts` WHERE `email`= '$email' and 'password'= $password"; 
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

if(count($query) > 0)
{
	$fname = $query[0]['fname'];
	$lname = $query[0]['lname'];

	header("Location: loginsuc.php?fname=$fname&lname=$lname");
}else{
	header("Location: loginfail.php");
}



?>
<!doctype html>
<html class="no-js" lang=""> 
   
    <head> 
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
 
        <title>IS 218</title>
	
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="icon" href="img/WWlogo.png">
        
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">

       
    </head>
    <body>
        
       <div id="wrapper">
	<div id="header">
	<div id="logo">
     <div id = "lg"></div>
		  <a href="index.html">
		  <div id="name">Logged in successfully</div></a>
		
		
   
		
		</div>
   
		<div id="menu">
		</div>
	</div>
		
	
	<div id="image">
    
    </div>
			
	
		</div>
		<div id="feature-4">
		<div id="COA">
			<a href="index.html" class="button">
				<span class="text"><h5>Back</h5></span>
			</a>
      
		</div>
		</div>
		<div class="clear"></div>
	
	
 

	<div id="footer">
			<div id="footer-1">
				<p></p>
			
			
		
	</div>
	</div>	
        
    </body>
</html>
