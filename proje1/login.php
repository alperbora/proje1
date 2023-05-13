<?php
$email = $_POST["email"];
$password = $_POST["password"];
$valid_email = "id@sakarya.edu.tr";
$valid_password = "sifre";

if ($email == $valid_email && $password == $valid_password) {
    header("Location: ana_sayfa.html");
    exit();
} else {
    echo "Hatalı kullanıcı adı veya şifre. Lütfen tekrar deneyin.";
}
?>