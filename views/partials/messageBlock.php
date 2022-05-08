<?php 
	session_start();
	$roomID = $_GET['roomID'];
	include '../../includes/connection.php';

  if(!(isset($_SESSION['UserID'])))
  {
    //navigate to the login page
    header("Refresh:0.001;url=/civehub/login.php");
  }

	$sqlmsg = "SELECT roommsg.userID,users.firstName,users.lasttName,roommsg.message,roommsg.attachments,roommsg.addedAt FROM roommsg,users where roommsg.roomID = '".$roomID."' and roommsg.userID = users.userID ORDER BY roommsg.addedAt";
	$database = new Database();
	$result = $database -> results($sqlmsg);
	if ($result) {
		//echo "connection successfully";
	}
	else
	{
		echo "failed to connect";
	}
	
	if (mysqli_num_rows($result) > 0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
				?>
					<span style=" display: block; padding: 10px; border: 1px solid black;width: 50%; border-radius: 20px; margin-top: 20px;
						<?php 
							if($row['userID'] == $_SESSION['UserID'])
							{
								?>
									background: darkorange;
									float: right;
								<?php 
							}
							else
							{
								?>
									background: skyblue;
									float: left;
								<?php 
							}
						?>
					">

						<?php ?>
							<label style="color:purple;text-decoration: underline;"><?php 
								$names = $row['firstName']."  ".$row['lasttName'];
								echo $names;
							?></label><br>
						<?php
							echo $row['message'];
							if(!(is_null($row['attachments'])) && !(empty($row['attachments'])))
							{	echo "<br/>";
								// echo $row['attachments'];
								//$_SESSION[$row['attachments']] = $row['attachments'];
								?>
									<br>
									<span>Attachment:</span><br/>
									<form method="get" action="../../view.php">
										<input style="width: 100%;" type="submit" name="submit" value="<?php echo $row['attachments']; ?>" onclick="<?php $_SESSION['previewFile'] = $row['attachments']; ?> this.form.target='_blank'; return true;" />
									</form>	
									
								<?php

							}
							?>
							<br>
								<label style="float: right;"><?php echo $row['addedAt']; ?></label>
									
						 
					</span>
				<?php
			}	
				
		}
		else
		{
				?>
					<span style="display: block;width: 50%; background: blue; border-radius: 30px; padding: 10px;">Be the first to start chat in this room</span>
				<?php
		}
	?>

