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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>
<body>
  <div class="w3-container w3-teal">
     <h2>Register Form</h2>
  </div>

  <form class=" w3-register" method="post">
     <label class><b>Email</b></label>
     <input class="w3-input w3-border w3-light-grey" style="width: 40%;" type="email" name="email" required='required' placeholder="reg@email.com">

     <label class="w3-text-teal" ><b>Password</b></label> 
     <input class="w3-input w3-border w3-light-grey" style="width: 40%;" type="password" name="password" required='required' placeholder="Password">

     <button class="w3-btn w3-blue-grey" type="submit" name="submit">Register</button>
     <div class="w3-panel w3-red  w3-error" style="width:29%; display:none;"></div>

  </form>

  <?php require_once "inc/footer.php" ?>

</body>
</html>