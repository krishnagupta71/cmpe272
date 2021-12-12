<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("location: login.php");
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
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="marketplace.php">Marketplace</a>
                    </li>

                </ul>
                <form action="logout.php">
                    <button style="margin-left:70vw;" type="submit" class="btn btn-outline-light">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <main>
        <div class="px-4 py-5 my-5 text-center">
            <img class="d-block mx-auto mb-4" src="../assets/logo.png" alt="" width="72" height="57">
            <h1 class="display-5 fw-bold">About Us</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">We’re a leading sports nutrition brand, delivering a range of quality products including protein powder, vitamins and minerals, high-protein foods, snack alternatives, and performance clothing.Founded in 2004, Myprotein is based out of New York City and operates in over 70 countries through a diverse and dedicated team of staff, athletes, and active ambassadors.Every day we work to inspire people of all ages and genders to believe in their fitness potential, then fuel them to achieve it.</p>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="row my-2">
                <div class="col-7">
                    <p class="text-start fs-1 lh-1">What we do</p>
                    <p class="text-start fs-6">At Myprotein, our aim is to fuel the ambitions of people across the world — making the best in sports nutrition available to everyone, whatever their goal. We pride ourselves in providing a broad selection of products at exceptional value to power this, including a range of dietary needs including vegetarian, vegan, dairy-free and gluten-free, so any customer can enjoy the benefits of high-quality nutrition. We produce everything in-house, cutting our third-party costs to deliver great prices, and guaranteeing the greatest quality. We’ve invested strongly in state-of-the-art production facilities and advanced testing measures to make sure we deliver on purity promises, and can be sure that everything leaving our warehouse meets the highest standards.</p>
                </div>
                <div class="col-5">
                    <img src="../assets/aboutUs1.jpg" class="d-block w-100" alt="..." style="height: 25rem; width: 25rem">
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row my-2">
                <div class="col-5">
                    <img src="../assets/aboutUs2.jpg" class="d-block w-100" alt="..." style="height: 25rem; width: 25rem">
                </div>
                <div class="col-7">
                    <p class="text-start fs-1 lh-1">Sustainability and community</p>
                    <p class="text-start fs-6">Myprotein is passionate about fueling people’s potential regardless of gender, location or background. As a global business, we’re home to over 70 nationalities, and embrace this diversity.As Myprotein has continued to grow and diversify, so has our range and we now also specialize in a selection of plant-based and organic products. This vegan-friendly range has expanded to form one of our most-popular offerings. We now supply an extensive variety of products that contain zero animal substances, ensuring we play our part in improving general animal welfare and reducing toxic emissions.</p>
                </div>
            </div>
            <hr>
    </main>
</body>

</html>