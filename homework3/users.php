<?php
session_start();
if (!isset($_SESSION["user"])) {
    $showLogin = true;
} else {
    $showLogin = false;
}

?>

<!DOCTYPE html>
<html>

<head>
    <?php require "../head.php" ?>
    <title>Homework 2</title>

</head>


<body class="text-center">
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
                        <a class="nav-link" href="news.php">Contacts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="users.php">Users</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <main role="main">
        <?php if ($showLogin == 1) : ?>
            <div class="container">
                <div class="row my-5">
                    <div class="col-4"></div>
                    <div class="col-4">
                        <form class="form-signin" method="post" action="login.php">
                            <img class="mb-4" src="../assets/logo.png" alt="" width="72" height="72">
                            <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
                            <input type="text" name="userName" class="form-control" placeholder="Username" required autofocus="">
                            <input type="password" name="inputPassword" class="form-control my-2" placeholder="Password" required>
                            <button class="btn btn-lg btn-primary btn-block my-2" type="submit" name="login" value="login">Sign in</button>
                        </form>
                    </div>
                    <div class="col-4"></div>
                </div>
            </div>
        <?php else : ?>
            <div class="px-4 py-5 my-5 text-center">
                <div class="col-lg-6 mx-auto">
                    <p class="lead mb-4">Welcome, Admin</p>
                    <form action="logout.php">
                        <button class="btn btn-lg btn-primary btn-block my-2" type="submit" name="logout" value="logout">Logout</button>
                    </form>
                </div>
            </div>
            <div class="container">
                <div class="row my-1">
                    <div class="col-4"></div>
                    <div class="col-4">
                        <br />
                        <table class="table">
                            <tr>
                                <th>Users:</th>
                            </tr>
                            <?php
                            $userfile = fopen("../txt/creds.txt", "r");
                            while (($line = fgets($userfile)) !== false) {
                                $user = explode(",", $line);
                                echo "<tr><td>$user[0]</td></tr>";
                            }
                            fclose($userfile);
                            ?>
                        </table>
                    </div>
                    <div class="col-4"></div>

                </div>
            </div>
        <?php endif; ?>
    </main>
</body>

</html>