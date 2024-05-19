<?php
$valid_username = "g231210080@sakarya.edu.tr";
$valid_password = "g231210080";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);

    if (empty($username) || empty($password)) {
        header("Location: login.php?error=empty");
        exit();
    } else {
        if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
            header("Location: login.php?error=invalidemail");
            exit();
        } else {
            if ($username === $valid_username && $password === $valid_password) {
                echo "Hoşgeldiniz $username";
                exit();
            } else {
                header("Location: login.php?error=invalidcredentials");
                exit();
            }
        }
    }
} else {
    header("Location: login.php");
    exit();
}
