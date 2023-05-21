<!doctype html>
<?php
include('../inc/head.php'); //hlavička

include('adminHeader.php');

$id = $_GET['id'];  //Získava hodnotu parametrov s názvom "id" zo vstupného URL, GET metóda

$result = mysqli_query($conn, "DELETE FROM runner WHERE id=$id");   //Vytvára SQL dopyt na odstránenie riadku z tabuľky "runner"

header("Location: dashboard.php");
?>