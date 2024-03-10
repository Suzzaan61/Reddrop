<?php
require "../php-config/connection.php";



    $sql =" SELECT *
        FROM `donation` AS d INNER JOIN `users` AS u ON d.`USER` = u.`userId` INNER JOIN donationcenter AS d2 ON d.DONATION_CENTER = d2.D_ID";

    $done = $conn->query($sql);
    $donationData = $done->fetch_assoc();

//if ($done->num_rows >= 0){
//    while($donationData = $done->fetch_assoc()){
//
//    }
//}


