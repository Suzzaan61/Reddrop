<?php
if (isset($_COOKIE['user_id'])){
    $remember = $_COOKIE['user_id'];
    $_SESSION['userid'] = $remember;
}

if (isset($_COOKIE['admin_id'])){
    $remember = $_COOKIE['admin_id'];
    $_SESSION['adminId'] = $remember;
}

if (isset($_SESSION['userid']) &&  $_SESSION['userid']>= 0 && !isset($_GET['successful'])) {
    header("Location: {$_SERVER['REQUEST_URI']}?successful=1");
    exit();
} else{
    header("Location: ./view/Home.php");
    exit();
}

