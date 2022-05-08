<?php
	$id=$_GET['userID'];
	include('connection.php');
	mysqli_query($conn,"delete from `users` where userID='$id'");
	header('location:popform.php');
?>