<?php
$koneksi = mysqli_connect("localhost", "root", "", "rumahsakittasya5");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>