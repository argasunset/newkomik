<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container mt-5 col-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            LOGIN USER
        </div>
        <div class="card-body">
            <form action= "" method="POST">
                <?php if (session()->getFlashdata('error')) { ?>
                    <div class="alert alert-danger">
                        <?php session()->getFlashdata('error') ?>
                    </div>
                <?php } ?>
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
                    <div class="links"> <a href="">Belum Punya Akun? -></a><a href="/register">Register</a></div> 
                    <div class="mb-3">
                        <input type="submit" name="login" class="btn btn-primary" value="LOGIN">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?= $this->endSection(); ?>