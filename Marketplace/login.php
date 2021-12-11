<?php require "dbconnect.php" ?>
<?php
session_start();
if (isset($_POST["login"]) && !empty($_POST["email"]) && !empty($_POST["password"])) {
    $sql = "SELECT * FROM user WHERE email = '" . $_POST["email"] . "' and password = '" . $_POST["password"] . "'";
    // echo $sql;
    $result = $conn->query($sql);
    // echo $result->fetch_array()[0];
    if ($result) {
        // echo "Correct Password";
        $_SESSION["user"] = $_POST["email"];
        header("location: index.php");
    } else {
        // echo "Incorrect Password";
        header("location: loginPage.php");
    }
}
// header("location: loginPage.php");
