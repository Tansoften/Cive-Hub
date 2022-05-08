<!DOCTYPE html>
<html>
<head>
	<title>add category</title>
		<?php 
     session_start(); 
  if(!(isset($_SESSION['UserID'])))
  {
    //navigate to the login page
    header("Refresh:0.001;url=/civehub/login.php");
  }
    ?>
	<link rel="stylesheet" href="/civehub/css/navbar.css">
	<link rel="stylesheet" href="/civehub/css/index.css">
	
	
	<style>
		label{
			float: left;
		}
		body{
			background: #138086;
			padding: 80px;
		}
		#myForm{
			display: block;
			border: 1px solid black;
			background: white;
			width: 40%	;
			height: 100px;
			border-radius: 20px;
			padding: 30px;
		}
		input{
			float: right;
		}
		.cat_name{
			width: 300px;
		}
		.cat_desc{
			width: 300px;
			//height: 100px;
		}
		h1{color: #ffffff;}
	}


	</style>
</head>
<body>
	<?php  require 'navbar.php' ;   ?>
	<center>
		
		<h1>Add Room</h1>
		<div id="myForm">
		<form name="my_orderform" method="POST" action="insert_room.php">
			<label>Room Name</label><input class="cat_name" type="text" name="room_name" autofocus required placeholder="eg. Sports"><br><br>
			<label>Room Description </label><input class="cat_desc" type="text" name="room_desc" placeholder="Room Description" required><br><br>
				<input type="submit" name="add" value="Add Room" autofocus style="background: #138086;color: white;border-radius: 5px;font-family: serif; font-style: bold;">
				<input type="reset" name="" value="CLEAR" style="margin-right: 50px; background: #138086;color: white;border-radius: 5px;font-family: serif;font-style: bold;">
				
		</form>

	</div>
	</center>
</body>
</html>