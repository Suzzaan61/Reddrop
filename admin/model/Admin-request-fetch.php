<?php
require "../php-config/connection.php";



$sql ="SELECT * FROM requests r INNER JOIN users u ON r.USER_ID = u.userId";


$done = $conn->query($sql);
$donationData = $done->fetch_assoc();