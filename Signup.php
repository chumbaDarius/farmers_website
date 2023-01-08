<?php
session_start();
  

   include("Connection.php");
   include("function.php");


   

   If($_SERVER['REQUEST_METHOD']=="POST")
  {
    $farmer_name  = $_POST['farmer_name'];
    $farmer_email =$_POST['farmer_email'];    
    $farmer_id     =$_POST['farmer_id'];
    $password      =$_POST['password'];

    if(!empty($farmer_name && $farmer_email && $farmer_id) && !empty($password) &&!is_numeric($farmer_name && $farmer_email)){
    
        $query ="insert into users(farmer_id,farmer_name,farmer_email,password) values(
            '$farmer_id','$farmer_name','$farmer_email','$password')";
            mysqli_query($con,$query);
            header("Location: Login.php");
            die;
    }
       else {
       	echo" please valid data!";
       }
   }
  
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Signup</title>
</head>
<body>
	<style type="text/css">
		#text{
			height: 25px;
			border-radius: 5px;
			padding: 4px;
			border: solid thin #aaa;
		}
		#button{
			padding:10px;
			width: 100px;
			color: white;
			background-color: lightblue;
			border: none;
		}
		#box{
			background-color: grey;
			margin:auto;
			width: 300px;
			padding: 20px;
		}
		
	</style>
	<div id="box">
		<form method="post">
			<div style="font-size: 20px;margin: 10px; color: rgb(45, 100, 64);">Signup</div>
			<label>Name</label><br><br>
			<input id="text"type="text" name="farmer_name"><br><br>
			<label>email</label><br><br>
			<input id="text" type="email" name="farmer_email"><br><br>
			<label>National id</label><br><br>
			<input id="text" type="id" name="farmer_id"><br><br>
			<label>password</label><br><br>
			<input id="text" type="password" name="password"><br><br>
			<input id="button" type="submit" value ="Signup"><br><br>
			<a href="Login.php">Login</a><br><br>

		</form>
	</div>

</body>
</html>