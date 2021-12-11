<?php
$dbhost = "cmpe-272.ci6br9aurtlu.us-east-2.rds.amazonaws.com";
$dbuser = "admin";
$dbpass = "cmpe272sjsu";
$dbname = "marketplace";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
