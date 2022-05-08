

 


<?php


include('connection.php');

	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$phone = $_POST['phone'];
	$gender = $_POST['gender'];


 			$selectUsers = "SELECT *FROM users";
 			$isAnyUser = mysqli_query($conn,$selectUsers);
 				$temp = "";
 				$userID;
 			if(mysqli_num_rows($isAnyUser)> 0)
 			{
 				while($row = mysqli_fetch_assoc($isAnyUser))
 				{
 						$temp = $row['userID'];
 				}
 				$temp = substr($temp, 6);
 				$temp = $temp + 1;
 				$userID = "UID_00"."$temp";
 			}
 			else
 			{
 				$userID = "UID_001";
 			}



	$isInserted=mysqli_query($conn,"insert into `users` (userID,password,firstName,lasttName,email,phone,gender,roleID) values ('$userID','$pass','$fname','$lname','$email','$phone','$gender','1')");

	if($isInserted)
	{
		header('location:popform.php');	
	}
	
	else
	{
		echo "not isInserted";
	}
	# code...


?>


