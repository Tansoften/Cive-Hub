<?php
	session_start();
 	include '../../includes/connection.php';

  if(!(isset($_SESSION['UserID'])))
  {
    //navigate to the login page
    header("Refresh:0.001;url=/civehub/login.php");
  }
  	$roomID =$_GET['roomID']; 
 	$sendData = new Database();
	$userID =$_SESSION['UserID']; 
	$sqlSelect = "SELECT DISTINCT(roommsg.userID),firstName,lasttName FROM roommsg,users WHERE roommsg.userID =users.userID and roommsg.roomID= '".$roomID."'"; 
	$isAnyMember =$sendData->results($sqlSelect); 
	

				if (mysqli_num_rows($isAnyMember) > 0)
						{
								?>
									<ol>
								<?php
							while($row = mysqli_fetch_assoc($isAnyMember)) 
							{
									?>
										<li>
										 <?php 
										 	$names = $row['firstName']."  ".$row['lasttName'];
										 echo ($names);
										 ?>
										</li>
									<?php
							}
							?>
								</ol>
							<?php
						}
						else{
							?>
								<span>You will be the first one in this room</span>
							<?php
						}
	?>