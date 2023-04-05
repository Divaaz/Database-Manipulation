<?php

$email = $_POST['email'];
$password = $_POST['password'];

if ($email == "satu@gmail.com" && $password == "satu") {
    echo "Anda berhasil login.";
}else{
    echo "Email atau Password salah";
}
?>