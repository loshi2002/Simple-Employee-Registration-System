<?php

    $db_server = "localhost";
    $db_user = "root";
    $db_password = "1234";
    $db_name = "employeedetails";
    $conn = "";

    try{
        $conn = mysqli_connect($db_server,  $db_user, $db_password, $db_name);
    }
    catch(mysqli_sql_exception){
        echo "You are not connected <br>";
    }
    
?>