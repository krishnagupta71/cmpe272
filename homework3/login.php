<?php
session_start();
if (isset($_POST["login"]) && !empty($_POST["userName"]) && !empty($_POST["inputPassword"])) {
    // echo password_hash($_POST["inputPassword"], CRYPT_BLOWFISH);
    $userfile = fopen("../txt/creds.txt", "r");

    // echo $_POST["userName"];
    // echo password_hash($_POST["inputPassword"], CRYPT_BLOWFISH);

    while (($line = fgets($userfile)) !== false) {
        $line = rtrim($line, "\r\n");
        $user = explode(",", $line);

        if ($_POST["userName"] == $user[0]  && password_verify($_POST["inputPassword"], $user[1])) {
            $_SESSION["user"] = $_POST["userName"];
            echo "here";
            echo $_SESSION["user"];
            fclose($userfile);
            header("location: users.php");
            exit;
        }
    }
}
header("location: users.php");
