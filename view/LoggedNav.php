<?php require "../controller/dashboard-fetch.php"; ?>

<!doctype html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/all.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/sharp-solid.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/sharp-regular.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/sharp-light.css">

    <link rel="stylesheet" href="../styles/loggedNav.css">
    <title></title>

</head>

<body>
    <div class="main">
        <nav>
            <a href="./Home.php"><div class="logo"><img src="../assets/logo.webp" alt=""></div></a>
            <div class="profile">
                <?php
                if ($result) {
                    $row = $result->fetch_assoc();
                    echo "<p id='admin-name'>" . $row['name'] . "</p>";
                }
                ?>
                <div class="profile-img"></div>
                <div class="dropdown" onclick="dropDownHandler()">
                    <i class="fa-sharp fa-solid fa-caret-up" id="drop-icon"></i>
                </div>
                <div class="drop-profile" id="my-dropdown" hidden>
                    <ul>
                        <a href="Dashboard.php?successful=1">
                            <li><i class="fa-duotone fa-house"></i> Home</li>
                        </a>
                        <a href="Dashboard-board.php">

                            <li><i class="fa-duotone fa-gauge"></i> Dashboard</li>
                        </a>
                        <a href="../view/Setting.php">
                            <li><i class="fa-duotone fa-gear"></i> Setting</li>
                        </a>
                        <a href="../controller/logout.php">

                            <li> <i class="fa-duotone fa-arrow-right-from-bracket"></i> Logout</li>
                        </a>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <script src="../public/JS/Navbar.js"></script>
</body>

</html>