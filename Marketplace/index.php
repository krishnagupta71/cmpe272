<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("location: loginPage.php");
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
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
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
    <main role="main">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../assets/image1.jpg" class="d-block w-100" alt="..." style="height: 35rem;">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="bg-light text-dark">Best in Class Whey Protien</h5>
                            <p>Premium whey packed with 21g of protein per serving, for the everyday protein you need
                                from a quality source.</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="../assets/image3.jpg" class="d-block w-100" alt="..." style="height: 35rem;">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="bg-light text-dark">USE CODE - OCTSALE</h5>
                            <p>Delivered within 5-8 working days. Hawaii and Alaska may take up to 14 days</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <hr>
        <div class="container">
            <div class="row my-2">
                <div class="col-7">
                    <p class="text-start fs-1 lh-1">Protein Bars and Protein Shakes</p>
                    <p class="text-start fs-6">For maximum muscle growth, protein requirements of strength training
                        athletes are higher than sedentary individuals and may be higher yet in individuals who are
                        lean, training hard, and in a caloric deficit (for example bodybuilders dieting for a
                        competition). While you can consume a high protein diet through food alone, addition of protein
                        bars and protein powder shakes can be an easy and convenient way to meet your increased protein
                        needs.</p>
                </div>
                <div class="col-5">
                    <img src="../assets/protienBar.jpeg" class="d-block w-100" alt="..." style="height: 25rem; width: 25rem">
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row my-2">
                <div class="col-5">
                    <img src="../assets/creatine.jpg" class="d-block w-100" alt="..." style="height: 25rem; width: 25rem">
                </div>
                <div class="col-7">
                    <p class="text-start fs-1 lh-1">Creatine Monohydrate</p>
                    <p class="text-start fs-6">The International Society of Sports Nutrition has called creatine
                        monohydrate the most ergogenic and safe supplement legally available. This is based upon
                        numerous studies which have found increases in muscle size and strength when creatine
                        monohydrate is added to a resistance training program, without any adverse health effects</p>
                </div>
            </div>
            <hr>
            <div class="container">
                <div class="row my-2">
                    <div class="col-7">
                        <p class="text-start fs-1 lh-1">Caffeine</p>
                        <p class="text-start fs-6">Caffeine is commonly consumed as a pre-workout stimulant. Consumption
                            of caffeine has been shown to increase muscular power, endurance, and exercise performance
                            in athletes in a tired or sleep-deprived state supporting the use of caffeine pre-workout to
                            improve performance.</p>
                    </div>
                    <div class="col-5">
                        <img src="../assets/coffee.png" class="d-block w-100" alt="..." style="height: 25rem; width: 25rem">
                    </div>
                </div>
            </div>

    </main>

</body>

</html>