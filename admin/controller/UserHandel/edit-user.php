<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $updateUserId = $_REQUEST['ID'];

    require_once "../../php-config/connection.php";
    $sql = "UPDATE";
    $done = $conn->query($sql);
    if ($done) {
        header("Location: ../../views/usermanagement.php?delete=1");
        exit();
    }
    header("Location: ../../views/usermanagement.php?delete=0");
    exit();
}

