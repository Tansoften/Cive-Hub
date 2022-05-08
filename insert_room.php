<?php 	session_start();
		include 'insertOrSelect.php';
		include  'includes/connection.php';
		$insertToDb = new Database();
		$roomdesc = $_POST['room_desc'];
		$roomname = $_POST['room_name'];
		$catID = $_SESSION['catID'];
		$roomID;
		$sqlCheck = "SELECT roomID FROM room";
		$check=$insertToDb->results($sqlCheck);
		if(mysqli_num_rows($check)>0)
		{	$temp = " ";
			while($rows = mysqli_fetch_assoc($check))
			{
					$temp = $rows['roomID'];
			}
			$temp = substr($temp, 7);
			$temp = $temp +1;
			$roomID ="Room_00".$temp;
		}
		else
		{
			$roomID = "Room_001";
		}
		$user_ID = $_SESSION['UserID'];
		$sql = "INSERT INTO room(roomID,roomTitle,roomDesc,userID,catID) VALUES('$roomID','$roomname','$roomdesc','$user_ID','$catID')";
		//$sql = "INSERT INTO room (roomID,roomName,roomDesc,userID,catID) VALUES ('Room_003','Kule','haina nome','002', 'Cat_004')";
		$result=$insertToDb->results($sql);
	if ($result) {
		//echo "$catname category is added";
		header("Refresh:0.001; url=/civehub/views/partials/room.php");
	}
	else

		alert("failed to Add room to the $roomname");
		//echo "$catID";
?>