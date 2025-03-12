<?php
    include("database.php")
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <section class="info">

        <div class="main-bar">
            <div class="personal-info">
                <h1 class="topic">Personal Information</h1> <br>

                <div class="form"> 
                <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">

                <fieldset id="personal-info"></fieldset>

                    <label for="initial-name"> Full name: <br>
                        <input type="text" id="initial-name" name="initial-name">
                    </label>

                    <label for="DOB"> Date of Birth: <br>
                        <input type="date" id="DOB" name="DOB">
                    </label>

                    <label for="contact"> Contact Number: <br>
                        <input type="text" id="contact" name="contact">
                    </label>

                    <label for="email"> Email Address: <br>
                        <input type="email" id="email" name="email">
                    </label>

                    <label for="current-address"> Current Address: <br>
                        <input type="text" id="current-address" name="current-address">
                    </label>
                    
                    <label for="permanent-address"> Permanent Address: <br>
                        <input type="text" id="permanent-address" name="permanent-address">
                    </label>

                    <div class="form-row">

                    <label>Gender: </label> <br>

                    <div class="gender-radio">
                    
                        <input type="radio" id="male" name="gender" value="Male"> <label for="male">Male 
                    </label> 
                    
                        <input type="radio" id="female" name="gender" value="Female"><label for="female" > Female
                    </label> 
                    </div>
                </div>

                <input type="submit" value="done" name="Done" />

                </form>

            </div>
        </div>
    </div>
    </section>
</body>
</html>




<?php

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