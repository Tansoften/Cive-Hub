
<!DOCTYPE html>
<html>
<head>
  <title>User Management</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/civehub/css/navbar.css">
<link rel="stylesheet" href="/civehub/css/index.css">
<link rel="stylesheet" href="/civehub/css/popform.css">
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
   <?php  require '../../../navbar.php'; ?>
<h1 style="text-align: center; color:#fff;">user management profile</h1>
<div id="category">
<div class="btndiv"  >
<button class="open-button" onclick="openForm()" style="position:relative;">add users</button>

</div>

  <!-- <input type="text" id="mySearch"  placeholder="Search.." title="Type in a category"><br> -->


<div class="tablediv" style="overflow-x:fixed; overflow-y: scroll;">
<!-- <input type="text" id="mySearch"  placeholder="Search.." title="Type in a category"> -->
  <table>

    <thead>
      <th>userID</th>
      <th>First Name</th>
      <th>Last Name</th>    
      <th>E-mail</th>
      <th>phone number</th>
      <th>Actions</th>
      
    </thead>
<tbody>
  <?php
        include('connection.php');
         
          $query=mysqli_query($conn,"select * from `users`");
          while($row=mysqli_fetch_array($query)){
            
          ?>

<tr>

              <td><?php echo $row['userID']; ?></td>
              <td><?php echo $row['firstName']; ?></td>
              <td><?php echo $row['lasttName']; ?></td>
              <td><?php echo $row['email']; ?></td>
              <td><?php echo $row['phone']; ?></td>
            
                <td class="float-right">
                    <a href="edit.php?userID=<?php echo $row['userID']; ?>"
                      style="text-decoration-line: none; color: white"><button type="button" class=" editbtn" style="color: white;border:none; border-collapse: collapse; border-radius: 9px; padding: 8px 25px 8px 25px;">EDIT</button></a>

                    


                   <a href="delete.php?userID=<?php echo $row['userID']; ?>" style="text-decoration-line: none; color: white"><button type="button" class="deletebtn" style="color: white; border:none; border-collapse: collapse; border-radius: 9px;">DELETE</button></a>
                  </td>
                
                
            
            </tr>
            </div>
            <?php
          }
        ?>

    </tbody>
  </table>
</div>


<div class="form-popup" id="myForm" style="position:fixed; margin-left:25%; top:15px;">
  <form action="insert.php" class="form-container" method="POST">
   
      <div class="modal-header">
      <h1 style="text-align: center; ">Add user</h1>
    </div>

      <label for="name"><b>first name</b></label>
    <input type="text" placeholder="Enter first name " name="fname" required>

    <label for="lastName"><b>last name</b></label>
    <input type="text" placeholder="Enter last name" name="lname" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>
    

     <label for="phone"><b>phone number</b></label>
    <input type="text" placeholder="Enter phone number" name="phone" required>

    <label>Gender</label>
          <input type="radio" id="male" name="gender" value="M">
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="F">
            <label for="female">Female</label><br>

    <button type="submit" class="btn save" style="text-align:center">Save</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>

    
  </form>

</div>
<div>
  

</div>



</div>















<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}


//for upload group of users
function openChooseFile() {
  document.getElementById("uploaduserfile").style.display = "block";
}

function closeChooseFile() {
  document.getElementById("uploaduserfile").style.display = "none";
}



//sidebar navigation

</script>

</body>
</html>
