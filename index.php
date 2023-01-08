<?php
session_start();
   include("Connection.php");
   include("function.php");

   $farmer_data = check_login($con);

?>
<<!DOCTYPE html>
<html>
<head>
	<a href="Logout.php">logout</a>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>This is Farmers Website</title>
</head>
<body>
	<a href="Logout.php">logout</a>
	<h1>This farmers Login page</h1>
	<br><h1>hello, <?php echo $farmer_data['farmer_name'];?></h1>


</body>
</html>