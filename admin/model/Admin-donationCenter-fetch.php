<?php
require "../php-config/connection.php";
$donationCenterSql= "SELECT * FROM donationcenter";

$done= $conn->query($donationCenterSql);
