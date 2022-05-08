<?php 
session_start();
	$roomTitle;
	$roomID;
	if(isset($_GET['roomID']))
	{
		$roomID =$_GET['roomID'];
		$roomTitle = $_GET['roomTitle'];
		$_SESSION['roomID'] = $_GET['roomID'];
		$_SESSION['roomTitle'] = $_GET['roomTitle'];
	}
	else{
		$roomID = $_SESSION['roomID'];
		$roomTitle = $_SESSION['roomTitle'];
	}
	
 ?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo "$roomTitle"."  "."Messeges" ?></title>
	<?php 
      
  if(!(isset($_SESSION['UserID'])))
  {
    //navigate to the login page
    header("Refresh:0.001;url=/civehub/login.php");
  }
    ?>
	<link rel="stylesheet" href="/civehub/css/navbar.css">
	<link rel="stylesheet" href="/civehub/css/index.css">
	
	
	<style type="text/css">
		#message-block{
			
			background-color: #fff;
			margin-left: 20%;
			width: 50%;
			height: 400px; 
			overflow-y: scroll;
			border-radius: 30px;
			padding: 20px;
			margin-bottom: 0.5%;
		}
		.send-block{
			border-radius: 30px;
			width: 50%;
			left: 20%;
			height: 100px;
			right: 30%;
			position: relative;	
			/*background-color: red;*/
		}
		#members{
			background-color: #19abb3;
			display: block;
			overflow-y:scroll;
			width: 25%;
			height: 430px;
			float: right;
			margin-top: -430px;
			border-radius: 30px;
			padding: 5px;
		}
		
	</style>
</head>
<body onload="refreshMessages(),refreshMembers()" id="body-pd">
	<?php //require '../partials/side_nav.php'?>
        <?php //require '../partials/footer.php'?> 
        <?php  require '../../navbar.php' ;   ?>
		<center><h1><?php echo "$roomTitle"." "."Chats" ; ?> </h1></center>
	
		<div id="message-block">

		</div>
		<div id="members">
			<h1>Room Members</h1>
			<span id="list-members"></span>
		</div>
		<div class="send-block">
			<form method="post" action="sendMessage.php" enctype="multipart/form-data">
				<textarea  name="message" id="message" rows="4" cols="90" placeholder="Type your Message here" autofocus style="resize: none;width: 90%;margin-left:4%;"></textarea>
				<!-- <img src="../../images/send.png" style="float: right; width: 5%;height: 30%; color: #19334d; cursor:pointer;" id="send" onclick="sendMessage(),refreshMembers()" title="send"> -->

				<input type="submit" value="Send" name="send" style="float: right; position: absolute;top: 0px; width: 10%;height: 30%; color: #19334d; cursor:pointer;" id="send" title="send">

				<input type="file" name="file"  src="../../images/send.png" style="position: absolute; bottom: 30%; float: right; width: 100%;height: 30%; color: #19334d; cursor:pointer;" id="attach"  title="attach file">
			</form>				
		</div>
 
</body>
	<script>
		setInterval(refreshMessages,1000);
		var xhttp;  
		var roomID = <?php echo json_encode("$roomID") ?>; 
function refreshMessages() {
	refreshMembers();
	var block = document.querySelector('#message-block');
	block.scrollTop = block.scrollHeight-block.clientHeight;
  xhttp = new XMLHttpRequest();
   
  
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("message-block").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "messageBlock.php?roomID="+roomID, true);
  xhttp.send();
}
// function sendMessage()
// 	{
// 		var	msg = document.getElementById('message');
// 		var files = document.getElementById('attach');
// 		var fileName = files.file;
//   			var message = msg.value;
//   			msg.value = ""; 

//   			if(!(message == "") || !(files.files.length == 0)){
//   				var xhttp = new XMLHttpRequest();
 			 	
//   				xhttp.open("GET", "sendMessage.php?roomID="+roomID+"&message="+message"&fileName", true);
//   				xhttp.send();
//   			} else{
//   				alert("Type message or attach file...");
//   			}	
  			
  				
// 	}
	function refreshMembers() {
			var block = document.querySelector('#members');
			block.scrollTop = block.scrollHeight-block.clientHeight;
		 	 xhttp = new XMLHttpRequest();
		   
		  
		  	xhttp.onreadystatechange = function() {
		    	if (this.readyState == 4 && this.status == 200) {
		      	document.getElementById("list-members").innerHTML = this.responseText;
		    }
		  };
		  xhttp.open("GET", "roomMembers.php?roomID="+roomID, true);
		  xhttp.send();
}
</script>

</html>