<?php if(!defined('__CONFIG__')) {
    exit('You do not have a config file');
   }

   if(!isset ($_SESSION)){
     session_start();
   }

   error_reporting(-1);
	ini_set('display_errors', 'On');
	


// include the db file
    require_once "classes/db.php";
    require_once "function.php";
    require_once "classes/filter.php";

    $con = DB::getConnection();
?>