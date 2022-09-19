<?php
  $image_file = "uploads/" . $_FILES['fileToUpload']['name'];
  $imageFileType = strtolower(pathinfo($image_file,PATHINFO_EXTENSION));
  $load = 1;
  $file =  $_FILES['fileToUpload']['name'];


// To check if file is an image or not
  if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $load = 1;
    } 
    else {
      echo "File is not an image.";
      $load = 0;
    }
  }


  // To check if file already exist
  if(file_exists("uploads/".$file)){
    echo '<br/>';
    echo "OOPS! This file already exist";
    $load = 0;
  }

  //  To make sure file is not greater then 500kb
  if($_FILES['fileToUpload']['size'] > 500000){
    echo '<br/>';
    echo "This file is too large";
    $load = 0;
  }

  // To make sure file is either JPEG, PNG, JPG, GIF

  if($imageFileType !="jpeg" && $imageFileType!="png" && $imageFileType!="jpg" && $imageFileType!="gif" ){
    echo '<br/>';
    echo "Sorry only JPEG,PNG,GIF,JPG files are allowed";
    $load = 0;
  }


  if ($load == 0){
    echo '<br/>';
    echo "Your file wasn't uploaded.";
  }
  else{
    echo '<br/>';
    $file =  $_FILES['fileToUpload']['name'];
    $temp =  $_FILES['fileToUpload']['tmp_name'];
    move_uploaded_file($temp,"uploads/".$file);
    echo "file uploaded to: uploads/" .$file;
    echo "<br/>";
    echo "File type:" . $_FILES['fileToUpload']['type'];
  }

?>