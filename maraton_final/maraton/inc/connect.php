<?php

$databaseHost = '127.0.0.1';
$databaseName = 'maraton_db';
$databaseUsername = 'root';
$databasePassword = 'root';

$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

// kontrola spojenia
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
