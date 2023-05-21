<?php
session_start();    // odhlásenie používateľa a presmerovanie na prihlasovaciu stránku
unset($_SESSION['login']);
session_destroy();
header("location:login.php"); //V tomto prípade používa header() na presmerovanie používateľa na stránku s názvom "login.php"
?>
