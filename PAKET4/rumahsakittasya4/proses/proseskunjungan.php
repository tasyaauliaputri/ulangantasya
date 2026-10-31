
<?php
include __DIR__ . "/../koneksi.php";

$proses = isset($_GET['proses']) ? $_GET['proses'] : '';

if ($proses == 'insert') {
    $idpasien = $_POST['idpasien'];
    $tanggal  = $_POST['tanggal'];
    $keluhan  = $_POST['keluhan'];
    $biaya    = $_POST['biaya'];

    mysqli_query($koneksi, "INSERT INTO kunjungan SET
        idpasien='$idpasien',
        tanggal='$tanggal',
        keluhan='$keluhan',
        biaya='$biaya'
    ");

    header("Location: ../index.php?page=kunjungan");
    exit;
}

elseif ($proses == 'update') {
    $idkunjungan = $_POST['idkunjungan'];
    $idpasien    = $_POST['idpasien'];
    $tanggal     = $_POST['tanggal'];
    $keluhan     = $_POST['keluhan'];
    $biaya       = $_POST['biaya'];

    mysqli_query($koneksi, "UPDATE kunjungan SET
        idpasien='$idpasien',
        tanggal='$tanggal',
        keluhan='$keluhan',
        biaya='$biaya'
        WHERE idkunjungan='$idkunjungan'
    ");

    header("Location: ../index.php?page=kunjungan");
    exit;
}

elseif ($proses == 'hapus') {
    $idkunjungan = $_GET['id'];

    mysqli_query($koneksi, "DELETE FROM kunjungan
        WHERE idkunjungan='$idkunjungan'
    ");

    header("Location: ../index.php?page=kunjungan");
    exit;
}
?>
