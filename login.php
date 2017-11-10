<?php
$db_host = 'sql1.njit.edu'; // Server Name
$db_user = 'jda29'; // Username
$db_pass = 'r4mZlygN'; // Password
$db_name = 'jda29'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}



?>
<!doctype html>
<html class="no-js" lang=""> 
    
    <head> 
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
 
        <title>IS 218</title>
	 <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

 
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">

  
       <div id="wrapper">
	<div id="header">
	<div id="logo">
     <div id = "lg"></div>
		  <a href="index.html">
		  <div id="name">myProject1</div></a>
		
		
   
		
		</div>
   
		<div id="menu">
		</div>
	</div>
		
	
	<div id="contact">
		<p>Log In</p>
		<form class = "form-horizontal" action = "success.php" name = "Login" method = "POST" target = "_blank">
     
			<div id="User">
      <label>Username:</label><input type="text" input="text" name = "username">
      </div>
      <div id="Password">
      <label>Password:</label><input type="text" input="text" name = "password">
      </div>
      <div id="feature-4" style="width:100%">
		<div id="COA">
			<a href="success.php" class="button">
				<span class="text"><h5>Log In</h5></span>
			</a>
      </div>
      </div>
      
		</form>
   </div>

	<div id="footer">
			<div id="footer-1">
				<p> </p>
	
		
		
	</div>
	</div>	
        
    </body>
</html>
