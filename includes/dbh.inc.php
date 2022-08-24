<?php

// wamp
$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "biblelaw";
$port = "3308";

// atp
// $servername = "localhost";
// $dbUsername = "alltdjli_user";
// $dbPassword = "XKE#6aj^bkZ7";
// $dbName = "alltdjli_biblelaw";

$mysqli = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);
if (!$mysqli) {
    die("Connection Failed: " . mysqli_connect_error());
}

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}
