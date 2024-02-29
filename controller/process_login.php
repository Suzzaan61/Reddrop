<?php
require "../php-config/connection.php";
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if (mysqli_num_rows($result) > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $log_userid = $row['userId'];

            if ($row['adminId'] != null) {
                $_SESSION['adminId'] = $row['adminId'];
                header("Location: ../admin/views/admin-panel.php?successful=1");
                exit();
            } else {
                $_SESSION['userid'] = $log_userid;
            }

            // setcookie("user_id", $log_, time() + (7 * 24 * 60 * 60), "/");
            header("Location: ../view/Dashboard.php?successful=1");
            exit();
        } else {
            header("Location: ../view/login.php?error=1");
        }
    } else {
        header("Location: ../view/login.php?notfound=1");
    }
} else {
    header("Location: ../view/login.php");
    exit();
}
