<?php require "dbconnect.php" ?>
<?php
$productId = $_GET['id'];
$sql = "SELECT * FROM product WHERE id = " . $productId;
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    $image = "../assets/" . $row["image"] . ".jpg";
    if ($row["marketplace"] == "manasa") {
        $image =  $row["image"];
    }
    $price = $row["price"];
    $desc = $row["desc"];
    $name = $row["name"];
    $id = $row["id"];
    $rating = $row["rating"];
    $visited = intval($row["visited"]) + 1;

    $sql = "UPDATE product SET visited = " . $visited . " WHERE id = '" . $productId . "'";
    $result = $conn->query($sql);
    break;
}



//Fetch Reviews
$sql = "SELECT * FROM reviews WHERE productId = " . $productId;
$reviews = $conn->query($sql);
?>
<!DOCTYPE html>
<html>

<head>
    <?php require "../head.php" ?>
    <title>Enterprise Software Platforms</title>
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
                    <button style="margin-left:70vw;" type="submit" class="btn btn-outline-light">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <main>
        <div class="container">
            <div class="row my-2 row justify-content-evenly">
                <div class="col-4 my-2">
                    <?php
                    echo '<img src=' . $image . ' class="d-block w-100" alt="..." style="height: 25rem; width: 25rem">';
                    ?>

                </div>
                <div class="col-8 my-2">
                    <?php
                    echo '<h3>' . $name . '</h3>
                    <p>' . $desc . '</p>
                    <p>Price: ' . $price . '</p>';
                    ?>

                    <form class="form-signin" method="post" action="AddReview.php">
                        <h1 class="h3 mb-3 font-weight-normal">Add Review</h1>
                        <label for="rating">Select a Rating (1-5)</label>
                        <select name="rating" class="form-control" id="rating">
                            <option value=1>1</option>
                            <option value=2>2</option>
                            <option value=3>3</option>
                            <option value=4>4</option>
                            <option value=5>5</option>
                        </select>
                        <?php echo '<input type="text" name="id" class="form-control" value="' . $productId . '" hidden>' ?>
                        <input type="text" name="review" class="form-control" placeholder="Write a review" required>
                        <button class="btn btn-lg btn-primary btn-block my-2" type="submit" name="addReview" value="addReview">Add Review</button>
                    </form>
                </div>
            </div>
            <br>
            <div class="row my-2 row justify-content-evenly">
                <table class="table">
                    <tr>
                        <th>Ratings</th>
                        <th>Reviews</th>
                    </tr>
                    <?php

                    if (!$reviews) {
                        echo "No Reviews Found";
                    } else {
                        while ($row = $reviews->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>";
                            echo $row["rating"];
                            echo "</td>";
                            echo "<td>";
                            echo $row["review"];
                            echo "</td>";
                            echo "</tr>";
                        }
                    }

                    ?>
                </table>
            </div>

        </div>
    </main>
</body>



</html>