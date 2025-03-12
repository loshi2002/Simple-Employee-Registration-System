<?php

include("database.php");


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $initialName = $_POST["initial-name"] ; 
    $DOB = $_POST["DOB"] ;
    $contact = $_POST["contact"] ;
    $email = $_POST["email"] ;
    $currentAddress = $_POST["current-address"] ; 
    $permanentAddress = $_POST["permanent-address"] ; 
    $gender = $_POST["gender"] ;


    $sql = "INSERT INTO personal_info (FullName, DOB, ContactNo, Email, CurrentAddress, PermanentAddress, Gender) VALUES ( '$initialName', '$DOB', '$contact', '$email', '$currentAddress', '$permanentAddress', '$gender')";
 
    try{
        mysqli_query($conn, $sql);
        echo "New user is registered";
    }
    catch(mysqli_sql_exception){
        echo "Could not register user";
    }
    


    mysqli_close($conn); 
}


?>