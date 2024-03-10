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
        if(password_verify($password, $row['password'])) {
            unset($_COOKIE['admin_id']);
            $log_userid = $row['userId'];
            $_SESSION['userid'] = $log_userid;
             setcookie("user_id", $log_userid, time() + (7 * 24 * 60 * 60), "/");

            header("Location: ../view/Dashboard.php?successful=1");
            exit();
        } else {
            header("Location: ../view/login.php?error=1");
            exit();
        }
    } else {
        $adminSql = "SELECT * FROM admin WHERE A_EMAIL = '$email'";
        $password = $_POST['password'];
        $adminData = $conn->query($adminSql);
        if (mysqli_num_rows($adminData) > 0){
            $adminRow = $adminData->fetch_assoc();
            $adminPass = $adminRow['A_PASSWORD'];
            if(password_verify($password, $adminPass)){
                unset($_COOKIE['user_id']);
                $log_userid = $adminRow['A_ID'];
                $_SESSION['adminId'] = $log_userid;
                setcookie("admin_id", $log_userid, time() + (7 * 24 * 60 * 60), "/");

                header("Location: ../../admin/views/admin-panel.php?successful=1");
                exit();
            }
            header("Location: ../view/login.php?error=1");
            exit();
        }
        header("Location: ../view/login.php?notfound=1");
        exit();
    }
} else {
    header("Location: ../view/login.php");
    exit();
}
