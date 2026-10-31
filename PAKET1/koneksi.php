<?php
$koneksi = mysqli_connect ("localhost", "root", "", "rumahsakittasya");
if (!$koneksi) {
    die ("koneksigagal: " . mysqli_connect_error());

}
?>