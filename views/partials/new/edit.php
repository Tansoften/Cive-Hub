



<?php
	include('connection.php');
	//$id='UID_002';
	$id = $_GET['userID'];
	$query=mysqli_query($conn,"select firstName,lasttName,email,phone,password from `users` where userID='$id'");

	$row=mysqli_fetch_array($query);
?>





<!DOCTYPE html>
<html>
<head>
	<title>Edit User</title>
	<?php 
      session_start();
  if(!(isset($_SESSION['UserID'])))
  {
    //navigate to the login page
    header("Refresh:0.001;url=/civehub/login.php");
  }
     ?>
	<style type="text/css">

body{
	background-color: #138086;
	align-content: center;
	align-items: center;
}
		
/* .box-shadow {
					background-color: #fff;
					border: 0.25rem solid #fff;
					padding: 1rem;
					margin: 2rem;
					box-shadow: 0.5rem 0.5rem 0.25rem darkgray;
				/* } */
input[type=text]{
	width: 50%;
	padding: 12px 20px;
	margin: 8px 0px;
	display: inline-block;
	border: 2px solid #ccc;
	box-sizing: border-box;
}

input[type=password]{
	width: 50%;
	padding: 12px 20px;
	margin: 8px 0px;
	display: inline-block;
	border: 2px solid #ccc;
	box-sizing: border-box;

}
input[type=number]{
	width: 50%;
	padding: 12px 20px;
	margin: 8px 0px;
	display: inline-block;
	border: 2px solid #ccc;
	box-sizing: border-box;
}
input[type=email]{
	width: 50%;
	padding: 12px 20px;
	margin: 8px 0px;
	display: inline-block;
	border: 2px solid #ccc;
	box-sizing: border-box;
}

/* input{
	border-style: none;
	width: 50%;
	padding: 12px 20px;
	margin: 8px 0px;
	display: inline-block;
	border: 2px solid #ccc;
	box-sizing: border-box;
		/* border-bottom: 1px solid orange;
		margin-bottom: 2px;
		margin-top: 20px; */
*/

.group{
	margin: 20px;
	align-content: space-between;
	

}

.group input[type="text"],
.group input[type="password"],
.group input[type="email"],
.group input[type="number"]{
	width: 50%;
	padding-right: 50px;
	margin-right: 50px;
	margin-left: 50px;
	align-items: center;

}

 .group label{
	 padding-right: 20px;
	 padding-left: 0;
	 float: left;
	 padding-top: 20px;
	 
 }
 .group label{
display: block;
width: 100px;

 }
.signupbtn{
	/* float: left; */
	width: 25%;
	background-color:  #138086;
	color: white;
	padding: 15px 20px;
	margin: 8px 0;
	border: none;
	cursor: pointer;
	
}
 
.cancelbtn{
	/* float: left; */
	width: 25%;
	background-color:#ff6600;
	color: white;
	padding: 15px 20px;
	margin: 8px 0;
	border: none;
	cursor: pointer;
	
}

.container{
	max-width: 40%;
	  max-height: 70%;
           padding: 0 20px;
           margin-top: 10%;
		   margin-left: 25%;
		   text-align: center;
			display: block;
			background: #fff;
			border: 1px solid black;
			border-radius: 10px;
			/* width: 200px; */
			/* height: 200px; */
		
		}


.clearfix::after{
	content: "";
	clear: both;
	display: table;
}

@media screen and (max-width: 300px){
	.canselbtn,
	.signupbtn{
		width: 100%
	}
}


	</style>
</head>
<body>

	<div class="box">
	<div class="container">
	<form class="box-shadow"  method="POST" action="update.php? userID=<?php echo $id; ?>">
		
<div class="group">
	<label><b>first name</b></label>
	<input type="text" value="<?php echo $row['firstName']; ?>" name="fame">
	</div>
	<div class="group">
	<label><b>last name</b></label>
	<input type="text" value="<?php echo $row['lasttName']; ?>" name="lame">
	</div>
	<div class="group">
	<label><b>Email</b></label>
	<input type="email" value="<?php echo $row['email']; ?>" name="email">
	</div>
	<div class="group">	
	<label><b>phone number</b></label>
	<input type="number" value="<?php echo $row['phone']; ?>" name="phone">
	</div>
	<div class="group">
	<label><b>password</b></label>
	<input type="text" value="<?php echo $row['password']; ?>" name="pass">
	</div>
	
	<label>Gender</label>
          <input type="radio" id="male"  name="gender" value="M">
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="F">
            <label for="female">Female</label><br>
	
	
	
	<div class="clearfix">
		<a href="popform.php"><button type="submit" class="cancelbtn">Back</button></a>
		<button type="submit" class="signupbtn" >Save data</button>
		
	</div>
	
	<!-- style="background-color: green; color: white;padding: 15px 20px;margin: 8px 0;cursor: pointer;width: 50%; -->


		</form>
		</div>	

	</div>



</body>
</html>