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
    
    //echo $name . '<br>' . $email . '<br>' . $password . '<br>' . $bloodType . '<br>' . $address . '<br>' . $donorStatus . '<br>' . $contactNumber;


    $sql = "INSERT INTO users ( `name`, `email`, `password`, `phone`, `blood-Type`, `address`, `donor-Status`)
            VALUES ('$name', '$email', '$password','$contactNumber', '$bloodType', '$address', '$donorStatus')";
    

    $registered = $conn -> query($sql);
    if($conn){
        echo "refister successful";
    }else{
        echo "failed";
    }
}