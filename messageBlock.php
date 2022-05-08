
<?php 
      session_start();
  if(!(isset($_SESSION['UserID'])))
  {
    //navigate to the login page
    header("Refresh:0.001;url=/civehub/login.php");
  }
    
	$roomID = $_GET['roomID'];
	include 'includes/connection.php';
	$sqlmsg = "SELECT *FROM roommsg where roomID = '".$roomID."'";
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
                            if ($row['userID'] == $_SESSION['UserID']) {
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
					" >
						<?php 
							echo $row['message'];;
						 ?>
					</span>
					<br><br>
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

