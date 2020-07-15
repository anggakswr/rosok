<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<link rel="stylesheet" href="/css/select2.min.css" />
<link rel="stylesheet" href="/css/create.css" />

<h1>Tambah Barang</h1>

<form action="/barang/save" method="post" class="tambah-barang mt3" enctype="multipart/form-data">
    <?= csrf_field(); ?>

    <div class="flex">
        <label for="foto[0]">Foto Barang</label>
        <div class="flex">
            <div>
                <!-- preview gambar yg akan diupload -->
                <?php for ($i = 0; $i < 5; $i++) : ?>
                    <img src="/img/icon/plus.png" width="100px" height="100px" class="mb1 pointer">
                    <span class="close">&times;</span>
                <?php endfor; ?>
            </div>
            <?php for ($i = 0; $i < 5; $i++) : ?>
                <input type="file" name="foto[<?= $i; ?>]" class="hidden">
                <?php if ($validation->hasError("foto[$i]")) : ?>
                    <div class="error-flash">
                        <?= $validation->getError("foto[$i]"); ?>
                    </div>
                <?php endif; ?>
            <?php endfor; ?>
        </div>
    </div>

    <div class="flex mt3">
        <label for="nama">Nama Barang</label>
        <div class="flex">
            <input type="text" name="nama" placeholder="Masukkan nama barang" autofocus value="<?= old('nama'); ?>" />
            <?php if ($validation->hasError('nama')) : ?>
                <div class="error-flash">
                    <?= $validation->getError('nama'); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="flex mt3">
        <label for="kategori">Kategori</label>
        <select class="js-example-basic-multiple" name="kategori">
            <option value="" disabled selected>-- Pilih Kategori --</option>
            <?php foreach ($kategori as $k) : ?>
                <option value="<?= $k['kategori']; ?>"><?= $k['kategori']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="flex mt3">
        <label for="deskripsi">Deskripsi</label>
        <textarea type="text" name="deskripsi" placeholder="Deskripsi"><?= old('deskripsi'); ?></textarea>
    </div>

    <div class="flex mt3">
        <label for="harga">Harga</label>
        <input type="text" name="harga" placeholder="Harga" value="<?= old('harga'); ?>" />
    </div>

    <div class="flex mt3">
        <label for="berat">Berat</label>
        <input type="text" name="berat" placeholder="Berat" class="mr1" value="<?= old('berat'); ?>" />gram
    </div>

    <div class="flex mt3">
        <button type="submit" class="mr1">Tambah barang</button>
        <a href="/barang">Kembali ke daftar barang</a>
    </div>

</form>

<script src="/js/jquery-3.5.1.min.js"></script>
<script src="/js/select2.min.js"></script>
<script src="/js/create.js"></script>
<?= $this->endSection(); ?>