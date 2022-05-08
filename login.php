<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <style>
        
       body {
           background-color:#138086;
           text-align: center;
          /* padding: 200px;*/
           overflow: hidden;
          /* background-image: linear-gradient(to right, #138086 , #534666);*/ 
       }
       .container{
           max-width: 440px;
           padding: 0 20px;
           margin: 170px auto;
       }
       .card {
           display: inline-block;
           background-color: #ffffff; 
           border-radius: 10px;
           margin: 5px;
          padding: 10px;
           width: 300px;
           height: 200px;
           text-align: center;
           font-family: lato;
          
       }
       .card h1{
           padding-bottom: 10px;
           padding: 1px;
           margin-top: 2px;
           margin-bottom: 20px;
           color: #164a41;
       }
       .input-group{
          margin: 20px;
       }
       .input-group input[type="text"],
       .input-group input[type="password"]{
           border: 0;
           border-bottom: 1px solid #164a41;
           width: 90%;
           font-size: 15px solid;
           font-family: lato;
           text-decoration: none;
       }
    
        .input-group input:focus{
            outline: none;
        }
       .btn{
           display: inline-block;
           border-radius: 20px;
           width: 200px;
           height: 35px;
           cursor: pointer;
           border: none;
           background-color:#164a41;
           color: #ffffff;
           font-family: lato;
       }
       
       .btn:hover{
           transform: scale(0.98);
       }
        .card form .btn input{
           border-radius: 20px;
           width: 200px;
           height: 35px;
           cursor: pointer;
           border: none;
           background-color:#164a41;
           color: #ffffff;
           
       }

      
    </style>
</head>

<body>
    <div class="container">
    <div class="card">
    <h1>CiveHub Login</h1>
    <form method="post" action="authentication.php">
<div class="input-group">
    <input type="text" name="username" placeholder="User Name" required>
</div>
<div class="input-group">
    <input type="password" name="password" placeholder="Password" required>
</div>
    <input type="submit" value="login" class="btn"><br/>
    <span>
    <?php 
                if(isset($_GET["error"]))
                {
                    echo $_GET["error"];
                }
        ?>
     </span>
    </form>
    </div>
    </div>
</body>

</html>