<?php require "dbconnect.php" ?>
<?php

$sql = "SELECT * FROM product WHERE id=" . $_POST["id"];
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    $image = "../assets/" . $row["image"] . ".jpg";
    $price = $row["price"];
    $desc = $row["desc"];
    $name = $row["name"];
    $id = $row["id"];
}

if (!isset($_COOKIE["lastSeenProds"])) {
    setcookie("lastSeenProds",  "" . $id, time() + (86400 * 30), "/"); // 86400 = 1 day
} else {
    $products = $_COOKIE["lastSeenProds"] . "," . $id;
    setcookie("lastSeenProds",  $products, time() + (86400 * 30), "/");
}

?>
<!DOCTYPE html>
<html>

<head>
    <?php require "../head.php" ?>
    <title>Enterprise Software Platforms</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../assets/logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                Muscletron
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="products.php">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="news.php">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacts.php">Contacts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="users.php">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="curl.php">Curl</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <main>
        <div class="container">
            <div class="row my-2 row justify-content-evenly">
                <div class="col-4 my-2">
                    <?php
                    echo '<img src=' . $image . ' class="d-block w-100" alt="..." style="height: 25rem; width: 25rem">';
                    ?>

                </div>
                <div class="col-8 my-2">
                    <?php
                    echo '<h3>' . $name . '</h3>
                    <p>' . $desc . '</p>
                    <p>Price: ' . $price . '</p>';
                    ?>

                </div>
            </div>

        </div>
    </main>
</body>



</html>