<?php
session_start();
include "proses/koneksi.php";

$page = isset($_GET['page']) ? $_GET['page'] : 'login';

if (isset($_SESSION['login'])) {
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
} else {
    $page = 'login';
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Sakit Tasya6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php
if (isset($_SESSION['login'])) {
?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.php">Rumah Sakit Tasya6</a>
            <div class="navbar-nav ms-auto">
                <span class="nav-link text-white">
                    Selamat datang, <?= $_SESSION['namauser']; ?>
                </span>
                <a class="nav-link text-white" href="proses/logout.php">Logout</a>
            </div>
        </div>
    </nav>
<?php
}

switch ($page) {
    case 'login':
        include "views/Auth/login.php";
        break;

    case 'home':
        echo "<div class='container mt-5'>";
        echo "<h2>Selamat Datang di Aplikasi Rumah Sakit Tasya6</h2>";
        echo "<p>Silakan pilih menu yang tersedia.</p>";
        echo "</div>";
        break;

    default:
        echo "<div class='container mt-5'>";
        echo "<h4>Halaman tidak ditemukan.</h4>";
        echo "</div>";
        break;
}
?>

</body>
</html>