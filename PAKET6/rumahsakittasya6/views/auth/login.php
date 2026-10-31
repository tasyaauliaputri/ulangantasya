<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow">
                <div class="card-header text-center bg-primary text-white">
                    <h4>Login Rumah Sakit Tasya6</h4>
                </div>

                <div class="card-body">
                    <?php if (isset($_GET['pesan']) && $_GET['pesan'] == 'gagal') { ?>
                        <div class="alert alert-danger">
                            Username atau password salah!
                        </div>
                    <?php } ?>

                    <form action="proses/proseslogin.php" method="POST">
                        <div class="mb-3">
                            <label>Username</label>
                            <input type="text" name="username"
                                class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Password</label>
                            <input type="password" name="password"
                                class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            Login
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>