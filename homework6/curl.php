<?php require "dbconnect.php" ?>
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
                        <a class="nav-link " href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.php">Products</a>
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
                        <a class="nav-link active" href="curl.php">Curl</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <div class="container">
            <div class="row my-2">
                <div class="col-5">
                    <p class="text-center fs-4 lh-1">Users from MuscleTron</p>
                    <hr>
                    <table class="table">
                        <tr>
                            <th>Users</th>
                        </tr>
                        <?php
                        $sql = "SELECT * FROM user";
                        $result = $conn->query($sql);
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>";
                            echo $row["firstName"] . " " . $row["lastName"];
                            echo "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </table>
                </div>
                <div class="col-2"></div>
                <div class="col-5">
                    <p class="text-center fs-4 lh-1">Users from FlyWithUs</p>
                    <p>http://www.siddharthsircar.live/cmpe272submissions/assignments/homework2/flywithus/company-users.php
                    </p>
                    <hr>
                    <table class="table">
                        <tr>
                            <th>Users</th>
                        </tr>
                        <?php
                        $curl_handle = curl_init();
                        curl_setopt($curl_handle, CURLOPT_URL, "http://www.siddharthsircar.live/cmpe272submissions/assignments/homework2/flywithus/company-users.php");
                        curl_setopt($curl_handle, CURLOPT_HEADER, 0);
                        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
                        $contents = curl_exec($curl_handle);
                        curl_close($curl_handle);


                        $users = preg_split('/<br[^>]*>/i', $contents);


                        foreach ($users as $user) {
                            echo "<tr>";
                            echo "<td>";
                            echo $user;
                            echo "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </table>
                </div>

            </div>

        </div>
    </main>
</body>

</html>