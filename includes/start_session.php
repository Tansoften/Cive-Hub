    <?php 
      session_start();
  if(!(isset($_SESSION['UserID'])))
  {
    //navigate to the login page
    header("Refresh:0.001;url=/civehub/login.php");
  }//civehub/includes/start_session.php
     ?>