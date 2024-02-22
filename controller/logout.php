<?php
session_start();

$_SESSION = array();

session_destroy();

header("Location: ../views/Home.php");
exit();
