<?php
setcookie("userid",'-1', time() - 3600, "/");
header("Location: ../components/Home.php");