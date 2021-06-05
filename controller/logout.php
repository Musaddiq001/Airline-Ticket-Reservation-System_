<?php
session_start();
unset($_SESSION["valid"]);
session_destroy();
header("Location:../view/login.php");
?>