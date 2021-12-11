<?php require "dbconnect.php" ?>
<?php

//Fetch last 5 visted
$showLastVisited = FALSE;
if (isset($_COOKIE["lastSeenProds"])) {
    $showLastVisited = TRUE;
    $products = explode(",", $_COOKIE["lastSeenProds"]);
    // print_r($products);
    $last5Products = array_slice($products, -5);
    // print_r(array_values($last5Products));
}

//Session Management
session_start();
if (!isset($_SESSION["user"])) {
    header("location: loginPage.php");
}
//Get Sorting Order
$order = "default";
if (isset($_GET['order'])) {
    $order =  $_GET['order'];
}
?>
<!DOCTYPE html>
<html>

<head>
    <?php require "../head.php" ?>
    <title>Homework 6</title>
    <?php ob_start(); ?>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../assets/logo1.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                MarketPlace
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="products.php">Marketplace</a>
                    </li>

                </ul>
                <form action="logout.php">
                    <button style="margin-left:70vw;" type="submit" class="btn btn-outline-light">Logout</button>
                </form>
            </div>
        </div>
    </nav>
    <main>
        <div class="px-4 py-2 my-5 text-center">
            <h1 class="display-5 fw-bold">Our Stores</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Shop across our various stores</p>
            </div>
            <div class="col">
                <div style="display: flex; width: 100%; justify-content: space-evenly; margin: 0;">
                    <a href="http://krishnagupta.live/cmpe272/homework6/" class="btn btn-info">MuscleTron (By Krishna Gupta)</a>
                    <a href="http://krishnagupta.live/cmpe272/homework6/" class="btn btn-info">FlyWithUs (By Siddharth Sircar)</a>
                    <a href="http://krishnagupta.live/cmpe272/homework6/" class="btn btn-info">Demo 1 (By Tanya Gupta)</a>
                    <a href="http://krishnagupta.live/cmpe272/homework6/" class="btn btn-info">Demo 2 (By Manasa Bobba)</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="container">
            <?php if ($showLastVisited) : ?>
                <div class="row my-2">
                    <h5 class="display-7">Recently Visited</h5>
                    <hr>
                    <?php
                    $sql = "SELECT * FROM product WHERE id IN (" . implode(',', $last5Products) . ")";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        $image = "../assets/" . $row["image"] . ".jpg";
                        $price = $row["price"];
                        $desc = $row["desc"];
                        $name = $row["name"];
                        $id = $row["id"];
                        echo '<div class="col-2 my-2 mx-3 px-2">
                                <div class="card" style="width: 15rem;">
                                    <img class="card-img-top" src=' . $image . '>
                                    <div class="card-body">
                                        <h5 class="card-title">' . $name . '</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">Price: ' . $price . '</h6>
                                        <p class="card-text">
                                            ' . $desc . '
                                        </p>
                                        <form class="form-signin" method="post" action="showProduct.php">
                                            <button class="btn btn-primary" name="id" value=' . $id . '>Checkout</a>
                                    </div>
                                </div>
                            </div>';
                    }
                    ?>
                </div>
            <?php endif; ?>

            <h5 class="display-7">All Products</h5>
            <hr>
            <div style="overflow-x: scroll; display: flex; flex-direction: row; scroll-behavior: auto;">

                <?php
                $sql = "SELECT * FROM product";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                    $image = "../assets/" . $row["image"] . ".jpg";
                    $price = $row["price"];
                    $desc = $row["desc"];
                    $name = $row["name"];
                    $id = $row["id"];
                    $market = $row["marketplace"];
                    echo '<div class="col-3 my-2">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src=' . $image . '>
                                    <div class="card-body">
                                        <h5 class="card-title">' . $name . '</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">Price: ' . $price . '</h6>
                                        <h6 class="card-subtitle mb-2 text-muted">Marketplace: ' . $market . '</h6>
                                        <p class="card-text">
                                            ' . $desc . '
                                        </p>
                                        <form class="form-signin" method="post" action="showProduct.php">
                                            <button class="btn btn-primary" name="id" value=' . $id . '>Checkout</button>
                                        </form>
                                    </div>
                                </div>
                            </div>';
                }
                ?>

            </div>
        </div>
    </main>
</body>

</html>