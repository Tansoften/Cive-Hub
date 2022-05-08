<?php
  session_start();
   require('connection.php');
   $username = $_POST['username'];
   $password = $_POST['password'];
  // $query = "select * from users where userID = '".$username."' and password='".$password."' limit 1";
   $query = "select users.userID,users.password,role.roleName from users,role where userID = '".$username."' and password='".$password."' and users.roleID = role.roleID  limit 1";
   $db = new Database();
   $dbResult = $db->results($query);  
   $page = "login.php";
   $message = "Incorrect username or password";

//    while($row = $dbResult->fetch_assoc()){
//     if($username == $row['userID'] && $password == $row['password']){
//         $page = "home.php";
//     }
//    }
        if(mysqli_num_rows($dbResult) === 1)
        {
          while($row = $dbResult->fetch_assoc()){
              $_SESSION['UserID'] = $row['userID'];
              $_SESSION['role'] = $row['roleName'];
              $page = "index.php";
          }
            
        }
   header("Refresh:0.001;".$page."?error=".$message);
?>