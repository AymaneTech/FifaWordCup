<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "worldcup";

$connect = mysqli_connect($host, $username, $password, $dbname);
if (mysqli_connect_errno()) {
    echo "Failed to connect to db: " . mysqli_connect_error();
    exit();
}
