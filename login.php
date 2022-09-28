<?php 
   define('__CONFIG__',true);
   require_once "inc/config.php"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<body>
  <div class="w3-container w3-teal">
     <h2>Login Form</h2>
  </div>

  <form class="w3-container w3-login" method="post" action="" >
     <label class="w3-text-teal"><b>Email</b></label>
     <input class="w3-input w3-border w3-light-grey" style="width: 40%;" type="email" name="email" required placeholder="login@email.com">

     <label class="w3-text-teal"><b>Password</b></label>
     <input class="w3-input w3-border w3-light-grey" style="width: 40%;" type="password" name="password" required placeholder="Password"> 

     <button class="w3-btn w3-blue-grey w3-pt-6" type="submit">Login</button>

     <div class="w3-panel w3-red  w3-error" style="width:29%;  display:none;"></div>


  </form>

    
  
  <?php require "inc/footer.php"; ?>    
  
</body>
</html> 