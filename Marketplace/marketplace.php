<?php require "dbconnect.php" ?>
<?php

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
//Get Market Place
$market = "all";
if (isset($_GET['market'])) {
    $market =  $_GET['market'];
}
?>
<!DOCTYPE html>
<html>

<head>
    <?php require "../head.php" ?>
    <title>Marketplace</title>
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
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="marketplace.php">Marketplace</a>
                    </li>

                </ul>
                <form action="logout.php">
                    <button style="margin-left:60vw;" type="submit" class="btn btn-outline-light">Logout</button>
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
                    <a href="http://krishnagupta.live/cmpe272/homework6/" class="btn btn-info">MuscleTron (By Krishna
                        Gupta)</a>
                    <a href="http://www.siddharthsircar.live/cmpe272submissions/assignments/homework2/flywithus/" class="btn btn-info">FlyWithUs (By Siddharth
                        Sircar)</a>
                    <a href="https://php-tutorial-app.herokuapp.com" class="btn btn-info">Apparel Store (By Tanya
                        Gupta)</a>
                    <a href="http://manasabobba.live/site/site_final/" class="btn btn-info">Flora Aura (By Manasa
                        Bobba)</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="container">
            <!-- <?php if ($showLastVisited) : ?>
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
                                    <img style="height: 10vh" class="card-img-top" src=' . $image . '>
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
            <?php endif; ?> -->
            <div class="px-4 py-2 my-5 text-center">
                <h1 class="display-5 fw-bold">Our Products & Services</h1>
                <div class="col-lg-6 mx-auto">
                    <p class="lead mb-4">View products from all stores</p>
                </div>
                <div class="col">
                    <div style="display: flex; width: 100%; justify-content: space-around; margin-bottom: 25px;">
                        <p>Filter: </p>
                        <?php
                        if ($market == "all") {
                            echo '<a style="width: 170px" href="" class="btn btn-outline-info">Marketplace</a>';
                        } else {
                            echo '<a style="width: 170px" href="marketplace.php?market=all&order=' . $order . '" class="btn btn-info">Marketplace</a>';
                        }
                        if ($market == "krishna") {
                            echo '<a style="width: 170px" href="" class="btn btn-outline-info">MuscleTron</a>';
                        } else {
                            echo '<a style="width: 170px" href="marketplace.php?market=krishna&order=' . $order . '" class="btn btn-info">MuscleTron</a>';
                        }
                        if ($market == "siddharth") {
                            echo '<a style="width: 170px" href="" class="btn btn-outline-info">FlyWithUs</a>';
                        } else {
                            echo '<a style="width: 170px" href="marketplace.php?market=siddharth&order=' . $order . '" class="btn btn-info">FlyWithUs</a>';
                        }
                        if ($market == "tanya") {
                            echo '<a style="width: 170px" href="" class="btn btn-outline-info">Apparel Store</a>';
                        } else {
                            echo '<a style="width: 170px" href="marketplace.php?market=tanya&order=' . $order . '" class="btn btn-info">Apparel Store</a>';
                        }
                        if ($market == "manasa") {
                            echo '<a style="width: 170px" href="" class="btn btn-outline-info">Flora Aura</a>';
                        } else {
                            echo '<a style="width: 170px" href="marketplace.php?market=manasa&order=' . $order . '" class="btn btn-info">Flora Aura</a>';
                        }
                        ?>



                    </div>
                    <div style="display: flex; width: 100%; justify-content: space-around; margin: 0;">
                        <p>Sort: </p>
                        <?php
                        if ($order == "default") {
                            echo '<a style="width: 170px" href="" class="btn btn-outline-info">Top 5</a>';
                        } else {
                            echo '<a style="width: 170px" href="marketplace.php?order=default&market=' . $market . '" class="btn btn-info">Top 5</a>';
                        }
                        if ($order == "highToLow") {
                            echo '<a style="width: 170px" href="" class="btn btn-outline-info">Price: High - Low</a>';
                        } else {
                            echo '<a style="width: 170px" href="marketplace.php?order=highToLow&market=' . $market . '" class="btn btn-info">Price: High - Low</a>';
                        }
                        if ($order == "lowToHigh") {
                            echo '<a style="width: 170px" href="" class="btn btn-outline-info">Price: Low - High</a>';
                        } else {
                            echo '<a style="width: 170px" href="marketplace.php?order=lowToHigh&market=' . $market . '" class="btn btn-info">Price: Low - High</a>';
                        }
                        if ($order == "highRated") {
                            echo '<a style="width: 170px" href="" class="btn btn-outline-info">Highest Rated</a>';
                        } else {
                            echo '<a style="width: 170px" href="marketplace.php?order=rated&market=' . $market . '" class="btn btn-info">Highest Rated</a>';
                        }
                        if ($order == "lowRated") {
                            echo '<a style="width: 170px" href="" class="btn btn-outline-info">Lowest Rated</a>';
                        } else {
                            echo '<a style="width: 170px" href="marketplace.php?order=rated&market=' . $market . '" class="btn btn-info">Lowest Rated</a>';
                        }
                        ?>
                    </div>

                </div>
            </div>
            <h5 class="display-7">Products</h5>
            <hr>
            <div class="row">

                <?php
                $sql = "SELECT * FROM product";
                switch ($market) {
                    case "krishna":
                        $sql = $sql . " where marketplace = 'krishna' ";
                        break;
                    case "siddharth":
                        $sql = $sql . " where marketplace = 'siddharth' ";
                        break;
                    case "tanya":
                        $sql = $sql . " where marketplace = 'tanya' ";
                        break;
                    case "manasa":
                        $sql = $sql . " where marketplace = 'manasa' ";
                        break;
                }
                switch ($order) {
                    case "highToLow":
                        $sql = $sql . " order by price desc";
                        break;
                    case "lowToHigh":
                        $sql = $sql . " order by price";
                        break;
                    case "highRated":
                        $sql = $sql . " order by rating desc";
                        break;
                    case "lowRated":
                        $sql = $sql . " order by rating";
                        break;
                    case "default":
                        $sql = $sql . " order by visited desc LIMIT 5";
                        break;
                }

                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                    $image = "../assets/" . $row["image"] . ".jpg";
                    $market = $row["marketplace"];
                    if ($market == 'manasa') {
                        $image = $row["image"];
                    }
                    $price = $row["price"];
                    $desc = $row["desc"];
                    $name = $row["name"];
                    $id = $row["id"];
                    $rating = $row["rating"];

                    echo '<div class="col-3 my-2">
                                <div class="card" style="width: 18rem;">
                                    <img style="height: 25vh" class="card-img-top" src=' . $image . '>
                                    <div class="card-body">
                                        <h5 class="card-title">' . $name . '</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">Price: ' . $price . '</h6>
                                        <h6 class="card-subtitle mb-2 text-muted">Marketplace: ' . $market . '</h6>
                                        <h6 class="card-subtitle mb-2 text-muted">Rating: ' . $rating . '/5</h6>
                                        <p class="card-text">
                                            ' . $desc . '
                                        </p>
                                        <a href="showProduct.php?id=' . $id . '" class="btn btn-primary" name="id">Checkout</a>
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