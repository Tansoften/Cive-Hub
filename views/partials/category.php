<?php
	include '../../includes/connection.php';
	//create object of the connection class
	$database = new Database();
	$sql = "SELECT *FROM category";

	$result = $database -> results($sql);
	if ($result) {
		//echo "connection successfully";
	}
	else
	{
		echo "failed to connect";
	}

//C:/civeHub/views/partials/category.php
?>
<!DOCTYPE html>
<html>
<head>
	<title>civeHub | category</title>
	<link rel="stylesheet" type="text/css" href="/civehub/css/category_room.css">
	<link rel="stylesheet" href="civehub/css/navbar.css"> -->
	<link rel="stylesheet" href="/civehub/css/index.css">
	<?php 
      session_start();
  if(!(isset($_SESSION['UserID'])))
  {
    //navigate to the login page
    header("Refresh:0.001;url=/civehub/login.php");
  }
     ?>
	
</head>
<body id="body-pd">
		 <?php //require '../partials/side_nav.php'?>
        <?php //require '../partials/footer.php'?>  
		<?php  require '../../navbar.php' ;   ?>
      <center><h1 style="color: #fff;">Categories</h1></center>  

	    <div  id="category">
			<ul>
					<?php
						if (mysqli_num_rows($result) > 0)
						{

							while($row = mysqli_fetch_assoc($result)) 
							{
								$count_desc = strlen($row['catDesc']);
								#echo "$count_desc";
								if($count_desc >140)
								{
									$des = substr($row['catDesc'], 0,140)." ...........";
								}
								else
								{
									$des = $row['catDesc'];
								}


							?><a href="/civeHub/views/partials/room.php?catID=<?php echo $row['catID'] ;?>& catName=<?php echo $row['catName'];?> ">
							<li class="cat_list">
							<img src="../../images/avatar-10.jpg" id="cat-profile">
							<aside class="cat_box">
							<label class="cat_title"><?php echo $row['catName'];  ?></label><br>
							<span class="cat_desc"><?php echo $des;  ?></span>
							</aside>
					</li></a>		
							<?php
						}
						}
						else
							echo "<h1>No any Category</h1>"; 
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