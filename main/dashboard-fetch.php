<?php
require "../PhpConfig/connection.php";
    if(isset($_COOKIE['userid']) && $_COOKIE['userid'] >= 0)
    {

        $userId = $_COOKIE['userid'];

        $sql = "SELECT * FROM `users` 
        WHERE `userId` = '$userId' ";

        $result = $conn -> query($sql);
    }else{
        $result = 0;
    }