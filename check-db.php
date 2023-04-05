<?php
include "config.php";

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM user WHERE email='$email'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $row = mysqli_fetch_array($result);
    if($row['password']==$password) {
        echo "Anda berhasil login.";
    }else{
        echo "Email atau Password salah!";
    }
}else{
    echo "Email tidak terdaftar!";
}
?>