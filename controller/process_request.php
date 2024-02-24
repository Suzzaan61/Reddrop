<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Update info to database
    header("Location: ../view/Dashboard-board.php?request=1");
    exit();
}
