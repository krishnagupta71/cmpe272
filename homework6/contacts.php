<!DOCTYPE html>
<html>

<head>
    <?php require "../head.php" ?>
    <title>Homework 6</title>
    <?php ob_start(); ?>
</head>
<?php
$myfile = fopen("../txt/contacts.txt", "r") or die("Unable to open file!");
$contactText = fread($myfile, filesize("../txt/contacts.txt"));
fclose($myfile);
$contactInfoArray = explode("\n", $contactText);
$name = $contactInfoArray[0];
$phone = $contactInfoArray[1];
$email = $contactInfoArray[2];
$linkedIn = explode("LinkedIn: ", $contactInfoArray[3])[1];
$github = explode("Github: ", $contactInfoArray[4])[1];

?>

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
                        <a class="nav-link" href="products.php">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="news.php">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="contacts.php">Contacts</a>
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

    <div class="container">
        <div class="row my-2">
            <div class="col-2"></div>
            <div class="col-10">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Contact us</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Contact data coming from contacts.txt</h6>

                        <p class="card-text"><?= $name ?></p>
                        <p class="card-text"><?= $phone ?></p>
                        <p class="card-text"><?= $email ?></p>
                        <a href="<?= $linkedIn ?>" class="card-link" target="_blank">LinkenIn</a>
                        <a href="<?= $github ?>" class="card-link" target="_blank">Github</a>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</body>

</html>