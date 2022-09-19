<?php
    $con = mysqli_connect("Server", "User ID","Password","Table Name");
    if(!$con){
        $msg = "Could not connect to the database. <br/>";
        $msg .= "Error number:". mysqli_connect_errno();
        $msg .= "Error:" . mysqli_connect_error();
        die($msg);

    }

    echo "You are connected to our database";
    echo mysqli_get_host_info($con);
    mysqli_close($con);

?>