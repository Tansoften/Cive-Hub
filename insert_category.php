<?php 	session_start();
		include 'insertOrSelect.php';
		$insertToDb = new InsertToDb();
		$insertToDb->setdb('civehubdb');
		$catdesc = $_POST['cat_desc'];
		$catname = $_POST['cat_name'];
		$cat_ID;
		$sqlCheck = "SELECT catID FROM category";
		$check=$insertToDb->insertValues($sqlCheck);
		if(mysqli_num_rows($check)>0)
		{	$temp = " ";
			while($rows = mysqli_fetch_assoc($check))
			{
					$temp = $rows['catID'];
			}
			$temp = substr($temp, 6);
			$temp = $temp +1;
			$catID ="Cat_00".$temp;
		}
		else
		{
			$catID = "Cat_001";
		}
		$user_ID = $_SESSION['UserID'];
		$sql = "INSERT INTO category(CatID,catName,catDesc,userID) VALUES('$catID','$catname','$catdesc','$user_ID')";
		$result=$insertToDb->insertValues($sql);
	if ($result) {
		//echo "$catname category is added";
		header("Refresh:0.5; url=/civehub/views/partials/category.php");
	}
	else
		echo "$catname category is not added";
?>