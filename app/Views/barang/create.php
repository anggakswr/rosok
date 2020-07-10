<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<link rel="stylesheet" href="/css/select2.min.css" />
<h1>Tambah Barang</h1>

<form action="/barang/save" method="post" class="tambah-barang mt3" enctype="multipart/form-data">
    <?= csrf_field(); ?>

    <div class="flex">
        <label for="foto">Foto Barang</label>
        <div class="flex">
            <!-- preview gambar yg akan diupload -->
            <img src="/img/icon/plus.png" width="100px" class="mb1 pointer" onclick="klikImg()">
            <input type="file" name="foto" onchange="previewImg()" class="hidden">
            <?php if ($validation->hasError('foto')) : ?>
                <div class="error-flash">
                    <?= $validation->getError('foto'); ?>
                </div>
            <?php endif; ?>
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
            <option value="Botol Plastik">Botol Plastik</option>
            <option value="Besi Kiloan">Besi Kiloan</option>
            <option value="Kain Perca">Kain Perca</option>
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
<script>
    $(document).ready(function() {
        $(".js-example-basic-multiple").select2();
    });

    // deklarasi variabel
    const imgPreview = document.getElementsByClassName('mb1')[0];
    const inputFoto = document.querySelector("input[type=file]");
    const fileFoto = new FileReader();

    // ganti image preview dg image yg mau diupload
    function previewImg() {
        fileFoto.readAsDataURL(inputFoto.files[0]);
        fileFoto.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }

    // jika tombol plus diklik, maka gambar akan muncul
    function klikImg() {
        inputFoto.click();
    }
</script>
<?= $this->endSection(); ?>