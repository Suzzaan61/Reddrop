<?php
require "../php-config/connection.php";
    $userId = $_SESSION['userid'];
    $sql = "SELECT `DONATION_ID`,`USER`, `DONATION_CENTER`, `BLOOD_GROUP`, `DRUG_TAKEN`, `EXISTING_DISEASE`, `CONTACT_NUMBER`, `DONATION_DATE` , DATE(LAST_BOOKED_TIME) AS LAST_BOOKED_TIME FROM donation WHERE USER = '$userId'";

    $done = $conn->query($sql);
    $donationData = $done->fetch_assoc();



