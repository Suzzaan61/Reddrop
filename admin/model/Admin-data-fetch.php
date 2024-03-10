<?php
require "../php-config/connection.php";

$sql = "SELECT * FROM users";
$userData = $conn->query($sql);
//if ($userData->num_rows > 0){
//    while ($row=mysqli_fetch_assoc($userData)){
//        echo $row['name'];
//    }
//}
