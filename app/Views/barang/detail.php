<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="tambah-barang">
    <h1>Detail Komik</h1>
    <div class="flex mt3">
        <label>Nama barang</label>
        <p class="grey"><?= $barang['nama']; ?></p>
    </div>
    <div class="flex mt3">
        <label>Kategori</label>
        <p class="grey"><?= $barang['kategori']; ?></p>
    </div>
    <div class="flex mt3">
        <label>Deskripsi</label>
        <p class="grey" style="width: 500px;"><?= $barang['deskripsi']; ?></p>
    </div>
    <div class="flex mt3">
        <label>Harga</label>
        <p class="grey"><?= $barang['harga']; ?></p>
    </div>

    <a href="/barang" class="mt5">Kembali ke daftar barang</a>
</div>
<?= $this->endSection(); ?>