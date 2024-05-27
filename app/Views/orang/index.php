<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <!-- <a href="/komik/create" class="btn btn-primary mt-3">Tambah Data Komik</a> -->
      <h1 class="mt-2">Daftar Orang</h1>
      <!-- 
        <div class="alert alert-success" role="alert">
          <?= session()->getFlashdata('pesan'); ?>
        </div> -->
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($orang as $o) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><?= $o['nama']; ?></td>
              <td><?= $o['alamat']; ?></td>
              <td>
                <a href="" class="btn btn-success">Detail</a>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
      <?= $pager->links(); ?>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>