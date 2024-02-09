<?php
require "../PhpConfig/connection.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 
    $bloodType = $_POST['bloodType'];
    $address = $_POST['address'];
    $donorStatus = $_POST['donorStatus'];
    $contactNumber = $_POST['phone'];
    


    $sql = "INSERT INTO users ( `name`, `email`, `password`, `contactNumber`, `bloodType`, `address`, `donorStatus`)
            VALUES ('$name', '$email', '$password','$contactNumber', '$bloodType', '$address', '$donorStatus')";
    

    $registered = $conn -> query($sql);
    if($registered){
        header("Location: ../components/login.php?done=1");
    }else{
        header("Location: ../components/login.php?failed=1");
    }
} else {
    
    header("Location: ../components/register.php?unable=1");
    exit();
}