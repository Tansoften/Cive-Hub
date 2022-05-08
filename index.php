<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cive Hub</title>
    <?php 
      session_start();
  if(!(isset($_SESSION['UserID'])))
  {
    //navigate to the login page
    header("Refresh:0.001;url=/civehub/login.php");
  }
     ?>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="/civehub/css/index.css">
</head>
<body id="body-pd">
  <?php include_once('navbar.php') ?> 

    <!-- <div class="header"> -->
      <div class="banner">
      <div class="img ">
        <img src="image/img1.png">
        </div>
      <div class="app-text">   
      <!-- <p>Its about intaracting and sharing of different knowledge with different people</p> -->
           <h1> CIVE HUB COMMUNITY</h1>
           
         </div>
    
        
       
    </div>    
</div> 

 <div class="detail">
    <div>
     <img src="image/baseline_category_black_18dp.png" style="padding-left: 100px;">
     <h3 style="padding-left: 60px;">Choose category <br> your interested with <br> for different enjoyment</h3>
    </div>

    <div style="padding-left: 70px;">
     <img src="image/baseline_meeting_room_black_48dp.png" style="padding-left: 100px;">
    <h3>create unlimited rooms for communicate with others<br> have more fun more knowledge <br>more skills from fellows</h3>
    </div>
    <div style="padding-left: 50px;" >
     <h3 style="padding-left: 60px;"> Show your skills and share with others<br><h1 style="color:#41b3a3; font-size:70px;">GET UP AND SHOW  US <br>WHAT YOU GOT <h1></h3>
    </div>
</div>

<footer>
    <div> 
    <h3>CiveHub.</h3>
   </div>
   <p>All rights are reserved.   Developed and Designed by Group six SE   
   <h1>BrainShakers</h1></p>

</footer>		

</body>
<script type="text/javascript">
  function destroy_session() {
      <?php 
        // session_start();
        // session_destroy();
      ?>
    }
  
</script>
</html>