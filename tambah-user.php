<?php
include "config.php";

$email = $_POST['email'];
$password = $_POST['password'];

$query = "INSERT INTO user(email, password) VALUES ('$email', '$password')";
$result = $conn->query($query);

if ($result) {
    echo "Data berhasil ditambahkan!";
}else{
    echo "Terjadi kesalahan!";
}
?>