<?php
$koneksi = mysqli_connect("localhost", "root", "", "rumahsakittasya3");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>