<?php require "dbconnect.php" ?>

<!DOCTYPE html>
<html>

<head>
    <?php require "../head.php" ?>
    <title>Homework 6</title>

</head>


<body class="text-center">
    <main role="main">
        <div class="container">
            <div class="row my-5">
                <div class="col-6">
                    <form class="form-signin" method="post" action="login.php">
                        <h1 class="h3 mb-3 font-weight-normal">Login</h1>
                        <input type="text" name="email" class="form-control" placeholder="Email" required autofocus="">
                        <input type="password" name="password" class="form-control" placeholder="Password" required autofocus="">
                        <button class="btn btn-lg btn-primary btn-block my-2" type="submit" name="login" value="login">Login</button>
                    </form>
                </div>
                <div class="col-6">
                    <form class="form-signin" method="post" action="register.php">
                        <h1 class="h3 mb-3 font-weight-normal">Register</h1>
                        <input type="text" name="firstName" class="form-control" placeholder="First Name" required autofocus="">
                        <input type="text" name="lastName" class="form-control" placeholder="Last Name" required autofocus="">
                        <input type="text" name="email" class="form-control" placeholder="Email" required autofocus="">
                        <input type="text" name="address" class="form-control" placeholder="Address" required autofocus="">
                        <input type="text" name="phone" class="form-control" placeholder="Phone" required autofocus="">
                        <input type="password" name="password" class="form-control" placeholder="Password" required autofocus="">
                        <button class="btn btn-lg btn-primary btn-block my-2" type="submit" name="register" value="register">Register</button>
                    </form>
                </div>

            </div>
        </div>

    </main>
</body>

</html>