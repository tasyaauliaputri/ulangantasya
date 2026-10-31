<?php
session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username'");
$data = mysqli_fetch_assoc($query);

if ($data && password_verify($password, $data['password'])) {
    $_SESSION['login'] = true;
    $_SESSION['iduser'] = $data['iduser'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['namauser'] = $data['namauser'];
    $_SESSION['level'] = $data['level'];

    header("Location: ../index.php");
    exit;
} else {
    header("Location: ../index.php?page=login&pesan=gagal");
    exit;
}
?>