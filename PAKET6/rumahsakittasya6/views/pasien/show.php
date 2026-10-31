<?php
$id = (int) ($_GET['id'] ?? 0);

$query = mysqli_query($koneksi, "SELECT * FROM user WHERE iduser='$id'");
$user = mysqli_fetch_assoc($query);

if (!$user) {
    echo '<div class="alert alert-warning">Data user tidak ditemukan.</div>';
    echo '<a href="index.php?page=user" class="btn btn-secondary">Kembali</a>';
    return;
}
?>

<div class="row justify-content-center">
    <div class="col-md-8 col-lg-7">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Detail User</h5>
            </div>

            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th width="35%">ID User</th>
                        <td><?= htmlspecialchars($user['iduser']); ?></td>
                    </tr>
                    <tr>
                        <th>Nama User</th>
                        <td><?= htmlspecialchars($user['namauser']); ?></td>
                    </tr>
                    <tr>
                        <th>Username</th>
                        <td><?= htmlspecialchars($user['username']); ?></td>
                    </tr>
                </table>

                <a href="index.php?page=user" class="btn btn-secondary">
                    Kembali
                </a>

                <a href="index.php?page=edituser&id=<?= $user['iduser']; ?>"
                   class="btn btn-warning">
                    Edit
                </a>
            </div>
        </div>
    </div>
</div>