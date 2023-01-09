
<?php
# PHP FOR A LOGIN/REGISTRATION SYSTEM

# This constant below is made because it enables access to the CONFIG file else the config file won't run 
 define('__CONFIG__',true);

 
 if($_SERVER['REQUEST_METHOD'] == 'POST' or 1==1 ){
    # Always return in json format 
    #header('Content-Type: application/json');

    $email =  Filter::String( $_POST['email'] );

    $return = [];

    
    $findUser = $con->prepare("SELECT user from userss WHERE email = LOWER(:email) LIMIT 1 ");
    $findUser->bindParam(':email', $email, PDO::PARAM_STR);
    $findUser->execute();

    # Check if the user exit already

    if($findUser->rowCount() == 1){
      # user exist
      $return['error'] = 'You already have an account';
      $return['is_logged_in'] = false;
   }

   else{
      #user doesn't exist 
      
      $passphrase = password_hash($_POST['password'], PASSWORD_DEFAULT);


      $addUser = $con->prepare("INSERT INTO userss (email,passphrase) VALUES (LOWER(:email),:passphrase)");  
      $addUser->bindParam(':email', $email, PDO::PARAM_STR);
      $addUser->bindParam(':passphrase', $passphrase, PDO::PARAM_STR);
      $addUser->execute();
      
      
      $user = $con->lastInsertId();
      $_SESSION['user'] = (int) $user;

     $return['redirect'] = 'dashboard.php?message=welcome';
     $return['is_logged_in'] = true;
   
   }
   echo json_encode($return, JSON_PRETTY_PRINT); exit;

}

else{
   // Die. Kill the script. 
   exit('Invalid URL');
  }
?>