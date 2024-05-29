<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container mt-5 col-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            REGISTER USER
        </div>
        <div class="card-body">
            <form action="<?= base_url('daftaruser/daftar') ?>" method="POST">
                <div class="mb-3">
                    <label for="inputUsername" class="form-label">
                        Fisrt Name
                    </label>
                    <input type="text" name="firstname" class="form-control" value="<?php echo session()->getFlashdata('firstname') ?>" id="inputFirstname" placeholder="Masukan First name.....">
                </div>
                <div class="mb-3">
                    <label for="inputUsername" class="form-label">
                        Last Name
                    </label>
                    <input type="text" name="lastname" class="form-control" value="<?php echo session()->getFlashdata('lastname') ?>" id="inputLastname" placeholder="Masukan Last name.....">
                </div>
                <div class="mb-3">
                    <label for="inputUsername" class="form-label">
                        email
                    </label>
                    <input type="text" name="email" class="form-control" value="<?php echo session()->getFlashdata('email') ?>" id="inputEmail" placeholder="Masukan Email.....">
                </div>
                <div class="mb-3">
                    <label for="inputUsername" class="form-label">
                        Username
                    </label>
                    <input type="text" name="username" class="form-control" value="<?php echo session()->getFlashdata('username') ?>" id="inputUsername" placeholder="Masukan Username.....">
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="inputPassword" class="form-label">
                            Password
                        </label>
                        <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Masukan Password.....">
                    </div>
                    <div class="links"> <a href="">Merasa Sudah Punya Akun? -></a><a href="/login/masuk">Log-in</a></div>
                    <div class="mb-3">
                        <input type="submit" name="login" class="btn btn-primary" value="LOGIN">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?= $this->endSection(); ?>