<?php
session_start();

$_SESSION = array();

session_destroy();

header("Location: ../components/Home.php");
exit();
