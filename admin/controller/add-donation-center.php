<?php
require "../php-config/connection.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_REQUEST['name'];
    $address = $_REQUEST['address'];
    $location = $_REQUEST['googleMapLink'];
    $contact = $_REQUEST['contact'];

    $sql = "INSERT INTO donationcenter(D_NAME, D_ADDRESS, D_LOCATION, D_CONTACT) VALUES ('$name', '$address', '$location', '$contact')";
    $done = $conn->query($sql);
    if ($done){
        header("Location: ../views/Donation-center.php?done=1");
        exit();
    }
    header("Location: ../views/Donation-center.php?done=0");
    exit();
}

