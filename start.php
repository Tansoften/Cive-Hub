<!DOCTYPE html>
<html>
<head>
	<title>simple php</title>
</head>
<body>
		<?php	
			$path = substr($_SERVER['PHP_SELF'], 1);
			//echo "$path";
			session_start();
			// $_SESSION['role'] = 'Admi';
			// $_SESSION['UserID'] = '001';
			session_destroy();
			echo "session statrted";
		?><br>
		
</body>
</html>