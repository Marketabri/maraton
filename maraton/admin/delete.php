<!doctype html>
<?php
include('../inc/head.php');

include('adminHeader.php');

$id = $_GET['id'];

$result = mysqli_query($conn, "DELETE FROM runner WHERE id=$id");

header("Location: dashboard.php");
?>