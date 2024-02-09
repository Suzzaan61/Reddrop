<?php require "../components/LoggedNav.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../styles/Dashboard-board.css">

</head>

<body>
    <div class="hero flex-item-center">
        <div class="action-cards flex-item-center">
            <div class="donate cards">
                <i class="fa-duotone fa-droplet"></i>
                <button class="button-main">Donate</button>
            </div>
            <div class="request cards">
                <i class="fa-duotone fa-truck-droplet"></i>
                <button class="button-main">Request</button>
            </div>
            <div class="compatibality-table cards">
                <i class="fa-duotone fa-table"></i>
                <button class="button-main">Compatibality</button>
            </div>
            <div class="records cards">
                <i class="fa-duotone fa-books"></i>
                <button class="button-main">Records</button>
            </div>
            <div class="events cards">
                <i class="fa-duotone fa-calendar-days"></i>
                <button class="button-main">Events</button>
            </div>
        </div>
    </div>
</body>

</html>

<?php
if (isset($_COOKIE['userid']) && $_COOKIE['userid'] >= 0) {
    echo "<style>.profile-img {
            display: inline-block;
        }
        .dropdown{
            display: inline-block;
        }
        .register{
            display: none;
        }<style>";
}
?>