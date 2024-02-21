<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Update info to database
    header("Location: ../components/Dashboard-board.php?booked=1");
    exit();
}
