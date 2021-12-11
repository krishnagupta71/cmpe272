<?php require "dbconnect.php" ?>
<?php

$sql = "INSERT INTO user (firstName,lastName,email,address,phone,password) VALUES ('" . $_POST["firstName"] . "', '" . $_POST["lastName"] . "', '" . $_POST["email"] . "', '" . $_POST["address"] . "', '" . $_POST["phone"] . "', '" . $_POST["password"] . "')";
$conn->query($sql);
$conn->close();
header("location: loginPage.php");

?>