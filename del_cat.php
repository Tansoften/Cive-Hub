<!DOCTYPE html>
<html>
<head>
	<title>delete category</title>
	<style>
		label{
			float: left;
		}
		body{
			background: #138086;
			padding: 80px;
		}
		#myForm{
			display: block;
			border: 1px solid black;
			background: white;
			width: 40%	;
			height: 100px;
			border-radius: 20px;
			padding: 30px;
		}
		input{
			float: right;
		}
		.cat_name{
			width: 300px;
		}
		.cat_desc{
			width: 300px;
			//height: 100px;
		}
		h1{color: #ffffff;}
	}


	</style>
</head>
<body>	<center>
		
		<h1>Delete Category</h1>
		<div id="myForm">
		<form name="my_orderform" method="POST" action="remove_cat.php">
			<label>ID Number </label><input class="cat_name" type="text" name="cat_ID" autofocus required placeholder="eg. Cat__001"><br><br>
			<label>Category Description </label><input class="cat_desc" type="text" name="cat_desc" placeholder="Category Description" required disabled><br><br>
				<input type="submit" name="del" value="Delete Category" autofocus style="background: #138086;color: white;border-radius: 5px;font-family: serif; font-style: bold;">
				
				
		</form>

	</div>
	</center>
</body>
</html>