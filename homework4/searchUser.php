<?php require "dbconnect.php" ?>
<?php
session_start();
if (isset($_POST["searchUser"])) {
    $sql = "SELECT * FROM user WHERE";
    if (isset($_POST["name"]) and $_POST["name"] != "") {
        $sql = $sql . " firstName LIKE '%" . $_POST["name"] . "%' OR lastName LIKE '%" . $_POST["name"] . "%'";
    }
    // else {
    //     $sql = $sql . " firstName = '' OR lastName= ''";
    // }
    if (isset($_POST["email"]) and $_POST["email"] != "") {
        $sql = $sql . "OR email LIKE '%" . $_POST["email"] . "%'";
    }
    if (isset($_POST["phone"]) and $_POST["phone"] != "") {
        $sql = $sql . "OR homePhone LIKE'%" . $_POST["phone"] . "%' OR cellPhone LIKE '%" . $_POST["phone"] . "%';";
    }
    $result = $conn->query($sql);
} else {
    echo "here";
    $sql = "SELECT * FROM user";
    $result = $conn->query($sql);
}
$_SESSION["user"] = $result;
while ($row = $result->fetch_assoc()) {
    echo $row["firstName"];
}
// header("location: users.php");
