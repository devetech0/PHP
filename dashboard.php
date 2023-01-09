
<?php

// Allow the config
define('__CONFIG__', true);
// Require the config
require_once "inc/config.php"; 

Page::ForceLogin();

$User = new User($_SESSION['user_id']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>dashboard</title>
</head>
<body>
    <div class="home-title">
       <p>  Welcome, You Are Now A Member </p>
    </div>
</body>
</html>
