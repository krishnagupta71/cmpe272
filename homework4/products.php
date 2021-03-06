<!DOCTYPE html>
<html>

<head>
    <?php require "../head.php" ?>
    <title>Homework 2</title>
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

                </ul>
            </div>
        </div>
    </nav>
    <main>
        <div class="px-4 py-5 my-5 text-center">
            <h1 class="display-5 fw-bold">Our Products</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Shop our high-quality whey protein powders, shakes, and blends for supplements designed to support the growth and maintenance of your muscle mass.</p>
            </div>
            
        </div>
        <hr>
    </main>
</body>

</html>