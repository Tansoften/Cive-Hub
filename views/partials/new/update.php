<?php
	include('connection.php');
	$id=$_GET['userID'];
 
	$firstname=$_POST['fame'];
	$lastname=$_POST['lame'];
	$email = $_POST['email'];
	$phone =$_POST['phone'];
	$gender = $_POST['gender'];
	$pass = $_POST['pass'];
	print_r($_POST);
 


$sql = "UPDATE `users` SET `password` = '$pass', `firstName` = '$firstname', `lasttName` = '$lastname', `email` = '$email', `phone` = '$phone', `gender` = '$gender', `updatedAt` = NULL WHERE `users`.`userID` = '$id'";


	mysqli_query($conn,$sql) or die(mysqli_error($conn));



	header('location:popform.php');
?>