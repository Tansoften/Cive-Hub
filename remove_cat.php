<?php 
	session_start();
		include 'insertOrSelect.php';
		$insertToDb = new InsertToDb();
		$insertToDb->setdb('civehubdb');
		$cat_ID = $_POST['cat_ID'];
		
		//select from database to see if Categorty Id provided is found
		$sql1 = "SELECT catID FROM category where catID = '".$cat_ID."'";
		$result1=$insertToDb->deleteData($sql1);

		//if Category id is found then delete it else echo category not 
		if ($result1 == true) {
			$sql = "DELETE FROM category where catID = '".$cat_ID."'";
			$insertToDb->deleteData($sql1);
			echo "Deleted succufull";
		}
		else{
			echo "ID not found";
		}
	// 	$result=$insertToDb->deleteData($sql);
	// if ($result) {
	// 	echo "Category is deleted";
	// 	//header("Refresh:0.5; url=/civeHub/category.php");
	// }
	// else
	// 	echo "Category not deleted"



	?>