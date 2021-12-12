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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
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
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                    aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../assets/image1.jpg" class="d-block w-100" alt="..." style="height: 35rem;">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="bg-light text-dark">MuscleTron - Best in Class Whey Protien</h5>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="../assets/images/bg_3.jpg" class="d-block w-100" alt="..." style="height: 35rem;">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="bg-light text-dark">FlyWithUs - Find Travel Packages around the world</h5>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="../assets/apparelStoreBg.jfif" class="d-block w-100" alt="..." style="height: 35rem;">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="bg-light text-dark">Apparel Store</h5>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="https://www.gannett-cdn.com/presto/2020/09/10/USAT/636a3c3d-3b95-4f84-b492-e01b4b0794b4-Sunflower1.jpg"
                        class="d-block w-100" alt="..." style="height: 35rem;">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="bg-light text-dark">Flora Aura</h5>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <hr>
        <div class="container">
            <div class="row my-2">
                <div class="col-7">
                    <p class="text-start fs-1 lh-1">MuscleTron</p>
                    <p class="text-start fs-6">For maximum muscle growth, protein requirements of strength training
                        athletes are higher than sedentary individuals and may be higher yet in individuals who are
                        lean, training hard, and in a caloric deficit (for example bodybuilders dieting for a
                        competition). While you can consume a high protein diet through food alone, addition of protein
                        bars and protein powder shakes can be an easy and convenient way to meet your increased protein
                        needs.</p>
                </div>
                <div class="col-5">
                    <img src="../assets/protienBar.jpeg" class="d-block w-100" alt="..."
                        style="height: 25rem; width: 25rem">
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row my-2">
                <div class="col-5">
                    <img src="https://www.gannett-cdn.com/presto/2020/09/10/USAT/636a3c3d-3b95-4f84-b492-e01b4b0794b4-Sunflower1.jpg"
                        class="d-block w-100" alt="..." style="height: 25rem; width: 25rem">
                </div>
                <div class="col-7">
                    <p class="text-start fs-1 lh-1">Flora Aura </p>
                    <p class="text-start fs-6">For over 25 years, Flora Aurais helping you to celebrate your special
                        moments by delivering fresh flowers and fabulous gifts to your loved one s.
                        Ferns N Petals was established in 1994 and flower bouquet delivery was the first and only thing
                        that we were doing. From there on, FNP grew to what it is today including the current gifting
                        options that feature the choicest personalized gifts, cakes, chocolates along with artificial
                        flowers f resh cut flowers and flower basket. From just 1 flower shop in Delhi during 1994,
                        Ferns N Petals is now the largest florist chain with more than 300+ stores (and still counting)
                        across all the major cities and towns of India.
                        Along with the widest distribution network, our strong physical & onli ne presence makes us the
                        best choice to send flowers & gifts for deliveries across India and around the globe. The
                        remarkable distribution network of FNP and the sheer number of retail stores that we have, is
                        something no other online florist and gift delivery service in India can boast about and th is
                        is one of the biggest factors that differentiates us from the competition. We bank upon the
                        smiles of our 6 million happy customers with the quality.</p>
                </div>
            </div>
            <hr>
            <div class="container">
                <div class="row my-2">
                    <div class="col-7">
                        <p class="text-start fs-1 lh-1">FlyWithUs</p>
                        <p class="text-start fs-6">Far far away, behind the word mountains, far from the countries
                            Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove
                            right at the coast of the Semantics, a large language ocean. A small river named Duden flows
                            by their place and supplies it with the necessary regelialia. It is a paradisematic country,
                            in which roasted parts of sentences fly into your mouth.</p>
                    </div>
                    <div class="col-5">
                        <img src="../assets/images/bg_2.jpg" class="d-block w-100" alt="..."
                            style="height: 25rem; width: 25rem">
                    </div>
                </div>
            </div>

    </main>

</body>

</html>