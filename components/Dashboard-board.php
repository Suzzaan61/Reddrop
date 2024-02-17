<?php require "../components/LoggedNav.php" ;
session_start();
if(!isset($_SESSION['userid'])){
    header("Location: ../components/Home.php");
    exit();
}
?>
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
               <a href="../Modules/Donate.php?successful=1"><button class="button-main">Donate</button></a> 
            </div>
            <div class="request cards">
                <i class="fa-duotone fa-truck-droplet"></i>
                <a href="../Modules/Donate.php"><button class="button-main">Request</button></a> 
            </div>
            <div class="compatibality-table cards">
                <i class="fa-duotone fa-table"></i>
                <a href="../Modules/Donate.php"><button class="button-main">Compatibality</button></a> 
            </div>
            <div class="records cards">
                <i class="fa-duotone fa-books"></i>
                <a href="../Modules/Donate.php"><button class="button-main">Records</button></a> 
            </div>
            <div class="events cards">
                <i class="fa-duotone fa-calendar-days"></i>
                <a href="../Modules/Donate.php"><button class="button-main">Events</button></a> 
            </div>
        </div>
    </div>
</body>

</html>

<?php
if (isset($_SESSION['userid']) && $_SESSION['userid'] >= 0) {
    echo "<style>.profile-img {
            display: inline-block;
        }
        .dropdown{
            display: inline-block;
        }
        .register{
            display: none;
        }
        
        <style>";
}
require "../Modules/Footer.php"
?>