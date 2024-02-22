<?php
require "../php-config/connection.php";
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $password = $_POST['password'];
    if (isset($_POST['save'])) {
        $save = $_POST['save'];
    } else {
        $save = 0;
    }

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if (mysqli_num_rows($result) > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $log_userid = $row['userId'];

            $_SESSION['userid'] = $log_userid;


            // setcookie("user_id", $log_, time() + (7 * 24 * 60 * 60), "/");
            header("Location: ./views/Dashboard.php?successful=1");
            exit();
        } else {
            header("Location:   /views/login.php?error=1");
        }
    } else {
        header("Location: /views/login.php?notfound=1");
    }
} else {
    header("Location: ../views/login.php");
    exit();
}
