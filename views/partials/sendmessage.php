<?php
	session_start();
	$roomID =$_SESSION['roomID'];
	$userID =$_SESSION['UserID'];
	include '../../includes/connection.php';
	require '../../uploadFile.php';
	$msg = $_POST['message'];
	$file = $_FILES['file']['name'];
	if(!($msg == "") || !($file == "")){
		$fileTransfer = new FileTransfer("file");
		$fileTransfer -> uploadFile();
		$sendData = new Database();
		$filename = $fileTransfer->fileName();
		echo "$filename";
		$sql = "INSERT INTO roommsg(attachments,userID,roomID,message) VALUES ('$filename','$userID','$roomID','$msg')";
		$isInserted = $sendData -> results($sql);
			if(!$isInserted)
			{
					echo "not inserted";
					echo "$filename<br>";
					echo "$roomID<br>";
					echo "$msg<br>";
					echo "$userID<br>";
			}

			else{
				
				header("Refresh:0.001;url=roomMessages.php");
			}




	} else {
		?><script type="text/javascript">
			alert("send atleast text or attach file");
		</script><?php
			header("Refresh:0.001;url=roomMessages.php");
		//echo ("<script><alert>Both are empty.</alert></script>");
	}

	function uploadFile(){

	}



?>