<?php
	include '../../includes/connection.php';
	session_start();
	if(isset($_GET['catID']))
	{
		$catID = $_GET['catID'];
		$catName = $_GET['catName'];
		$_SESSION['catID'] = $_GET['catID'];
		$_SESSION['catName'] = $_GET['catName'];
	}
	else
	{
		$catName = $_SESSION['catName'];
		$catID = $_SESSION['catID'];
	}

	//create object of the connection class
	$database = new Database();
	$sql = "SELECT *FROM room where catID = '".$catID."'";

	$result = $database -> results($sql);
	if ($result) {
		//echo "connection successfully";
	}
	else
	{
		echo "failed to connect";
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>civeHub | category | <?php echo "$catName"; ?></title>
	<link rel="stylesheet" type="text/css" href="/civeHub/css/category_room.css">
	<link rel="stylesheet" href="/civehub/css/navbar.css">
	<link rel="stylesheet" href="/civehub/css/index.css">
	<?php 
      
  if(!(isset($_SESSION['UserID'])))
  {
    //navigate to the login page
    header("Refresh:0.001;url=/civehub/login.php");
  }
     ?>

     <style type="text/css">
     	#addrooms:hover{
     		background-color: yellow; 
     		cursor: pointer;
     	}

     	#addrooms{
     		margin: 0px;
     		padding: 10px;
     		text-align: center;
     		position: absolute;
     		top: 5%;
     		left: 38%;
     		border-radius: 20px;
     		background-color: rgb(71, 248, 248); 
     	}
     </style>
	
	<script type="text/javascript" src='../../js/styles.js' ?>'></script>
</head>
<body id="body-pd">
		<?php //require '../partials/side_nav.php'?>
        <?php// require '../partials/footer.php'?>
		<?php  require '../../navbar.php' ;   ?>
      <center><h1 style="color: #fff;"><?php echo "$catName"."  "."Rooms"; ?></h1></center>  
     <a href="/civehub/add_room.php" style="width: 8%;float: right;cursor: pointer; height: 5%; border-radius: 10%; display: block;background: cyan; ">Add Room</a><br>
     	<!-- <div id="addRoomsForm" style="border: 2px solid white; border-radius: 10px;z-index: 1;position: absolute; top: 13%; left: 38%; height: 55%;width: 29%; background-color: #138086;">
     		<div id="addRoomsFormTop" style="width: 100%; height: 12%; position: absolute; top: 0px; left: 0%;">
     			<span onclick="changeAddRoomsForm()" id="addrooms">Add Rooms</span>
     		</div>

     		<div id="addRoomsFormBody" style="position: absolute; bottom: 0px; width: 100%; height: 85%;">
     			<form method="get" action="<?php $_SERVER['PHP_SELF'] ?>">
     				<label id="roomNameLabel">Name:</label><input type="text" name="roomName" value="" autofocus /><br/><br/>
     				<label>Description:</label><textarea style="resize: none; width: 70%" rows="3" cols="100" name="roomDescription" placeholder="Walete wote..."></textarea>
     			</form>
     		</div>
     	</div> -->	
        <div  id="category">
        	<ul>
					<?php
						if (mysqli_num_rows($result) > 0)
						{

							while($row = mysqli_fetch_assoc($result)) 
							{
								$count_desc = strlen($row['roomDesc']);
								#echo "$count_desc";
								if($count_desc >140)
								{
									$des = substr($row['roomDesc'], 0,140)." ...........";
								}
								else
								{
									$des = $row['roomDesc'];
								}


							?><a href="/civehub/views/partials/roomMessages.php?roomID=<?php echo $row['roomID'];?>&roomTitle=<?php echo $row['roomTitle'];?> ">
							<li class="cat_list">
							<img src="../../images/avatar-10.jpg" id="cat-profile">
							<aside class="cat_box">
							<label class="cat_title"><?php echo $row['roomTitle'];  ?></label><br>
							<span class="cat_desc"><?php echo $des;  ?></span>
							</aside>
					</li></a>		
							<?php
						}
						}
						else
						{
							?>
								<center><h1>No any Room in this category</h1></center>
							<?php
						}

					?>
					

				</ul>

        	</div>


<footer style="position: absolute; bottom: 0px; width: 94.4%;">
    <div> 
    <h3>CiveHub.</h3>
   </div>
   <p>All rights are reserved.   Developed and Designed by Group six SE   
   <h1>BrainShakers</h1></p>

</footer>					
</body>
</html>