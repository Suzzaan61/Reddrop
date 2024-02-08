<?php
require "../PhpConfig/connection.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve user input from the login form
    $email = $_POST['email'];
    $password = $_POST['password'];
    $save = $_POST['save'];

    echo  $email."<br>".$password."<br>".$save;

}