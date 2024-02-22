<?php


$request = $_SERVER['REQUEST_URI'];
$router = str_replace('/redrop','', $request);
$viewDir = '/views/';


switch ($router){
    case "/":
        if (isset($_COOKIE['userId']) >= 0 && !isset($_GET['successful'])) {
            header("Location: ./views/Home.php?successful=1");
            exit();
        } else{
            header("Location: ./views/Home.php");
            exit();
        }


    case "/login":
        header("Location: ./views/login.php");
        exit();

    case "/process_login":
        header("Location: ./controller/process_login.php");
        break;
}
//
//switch ($router) {
//    case '':
//    case '/':
//        require __DIR__."/public/styles/Home.css";
//        require __DIR__ . $viewDir . 'Home.php';
//        exit();
//        break;
//
//    case '/login':
//        require __DIR__ . $viewDir . 'login.php';
//        break;
//
//    case '/register':
//        require __DIR__ . $viewDir . 'register.php';
//        break;
//    case '/dashboard':
//        require __DIR__ . $viewDir . 'Dashboard.php';
//        break;
//
//
//    default:
//        http_response_code(404);
//        require __DIR__ . $viewDir . '404.php';
//}


