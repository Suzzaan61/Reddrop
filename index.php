<?php

if (isset($_COOKIE['userId']) >= 0 && !isset($_GET['successful'])) {
    header("Location: {$_SERVER['REQUEST_URI']}?successful=1");
    exit();
} else{
    header("Location: ./components/Home.php");
    exit();
}

