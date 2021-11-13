<?php require "dbconnect.php" ?>

<?php
$sql = "SELECT * FROM user";
$result = $conn->query($sql) or die($conn->error);

while ($row = $result->fetch_assoc()) {
    echo $row["firstName"] . " " . $row["lastName"];
    echo "<br>";
}
?>