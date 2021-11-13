<?php require "dbconnect.php" ?>
<?php
$showLastVisited = FALSE;
if (isset($_COOKIE["lastSeenProds"])) {
    $showLastVisited = TRUE;
    $products = explode(",", $_COOKIE["lastSeenProds"]);
    print_r($products);
    $last5Products = array_slice($products, -5);
    // print_r(array_values($last5Products));
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
                        <a class="nav-link active" href="#">Products</a>
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
        <div class="px-4 py-2 my-5 text-center">
            <h1 class="display-5 fw-bold">Our Products</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Shop our high-quality whey protein powders, shakes, and blends for supplements
                    designed to support the growth and maintenance of your muscle mass.</p>
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
                                            <button class="btn btn-primary" name="id" value=' . $id . '>Buy Now</a>
                                    </div>
                                </div>
                            </div>';
                    }
                    ?>
                </div>
            <?php endif; ?>

            <div class="row my-2">
                <h5 class="display-7">All Products</h5>
                <hr>
                <?php
                $sql = "SELECT * FROM product";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                    $image = "../assets/" . $row["image"] . ".jpg";
                    $price = $row["price"];
                    $desc = $row["desc"];
                    $name = $row["name"];
                    $id = $row["id"];
                    echo '<div class="col-3 my-2">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src=' . $image . '>
                                    <div class="card-body">
                                        <h5 class="card-title">' . $name . '</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">Price: ' . $price . '</h6>
                                        <p class="card-text">
                                            ' . $desc . '
                                        </p>
                                        <form class="form-signin" method="post" action="showProduct.php">
                                            <button class="btn btn-primary" name="id" value=' . $id . '>Buy Now</a>
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