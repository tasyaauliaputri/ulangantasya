<?php
$koneksi = mysqli_connect("localhost", "root", "", "rumahsakittasya");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>