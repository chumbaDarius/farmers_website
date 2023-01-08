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
    	$query ="select * from users where farmer_name ='$farmer_name' && farmer_email='$farmer_email'  && farmer_id='$farmer_id' limit 1";
    	$result =mysqli_query($con,$query);

    	if($result){


    	   if($result && mysqli_num_rows($result)>0)
		   {

			$farmer_data =mysqli_fetch_assoc($result);
			
			if($farmer_data['password']==$password){

				$_SESSION['farmer_id']=$farmer_data['farmer_id'];
				header("Location: index.php");
            die;
			}
		}
            
    }
      echo "wrong farmername or password";
   }
       else 
       {
       	echo" please valid data!";
       }
   }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login</title>
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
			<div style="font-size: 20px;margin: 10px; color: rgb(45, 100, 64);">Login</div>
			<label>Name</label><br><br>
			<input id="text"type="text" name="farmer_name"><br><br>
			<label>Email</label><br><br>
			<input id="text" type="email" name="farmer_email"><br><br>
			<label>National ID</label><br><br>
			<input id="text" type="id" name="farmer_id"><br><br>
			<label>Password</label><br><br>
			<input id="text" type="password" name="password"><br><br>
			<input id="button" type="submit" value ="Login"><br><br>
			<a href="Signup.php">signup</a><br><br>

		</form>
	</div>

</body>
</html>