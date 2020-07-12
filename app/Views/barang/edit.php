<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<link rel="stylesheet" href="/css/select2.min.css" />

<h1>Edit Barang</h1>

<form action="/barang/update/<?= $barang['id']; ?>" method="post" class="tambah-barang mt3" enctype="multipart/form-data">
    <?= csrf_field(); ?>
    <input type="hidden" name="slug" value="<?= $barang['slug']; ?>">

    <div class="flex">
        <label for="foto">Foto Barang</label>
        <div class="flex">
            <!-- preview gambar yg akan diupload -->
            <img src="/img/uploads/barang/foto.jpg" width="100px" class="mb1">
            <input type="file" name="foto" onchange="previewImg()">
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
            <input type="text" name="nama" placeholder="Masukkan nama barang" autofocus value="<?= (old('nama')) ? old('nama') : $barang['nama']; ?>" />
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
        <textarea type="text" name="deskripsi" placeholder="Deskripsi"><?= (old('deskripsi')) ? old('deskripsi') : $barang['deskripsi']; ?></textarea>
    </div>

    <div class="flex mt3">
        <label for="harga">Harga</label>
        <input type="text" name="harga" placeholder="Harga" value="<?= (old('harga')) ? old('harga') : $barang['harga']; ?>" />
    </div>

    <div class="flex mt3">
        <label for="berat">Berat</label>
        <input type="text" name="berat" placeholder="Berat" class="mr1" value="<?= (old('berat')) ? old('berat') : $barang['berat']; ?>" />gram
    </div>

    <div class="flex mt3">
        <button type="submit" class="mr1">Edit barang</button>
        <a href="/barang">Kembali ke daftar barang</a>
    </div>

</form>

<script src="/js/jquery-3.5.1.min.js"></script>
<script src="/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $(".js-example-basic-multiple").select2();
    });

    // ganti image preview dg image yg mau diupload
    function previewImg() {
        const imgPreview = document.getElementsByClassName('mb1')[0];
        const inputFoto = document.querySelector("input[type=file]");
        const fileFoto = new FileReader();
        fileFoto.readAsDataURL(inputFoto.files[0]);
        fileFoto.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }
</script>

<?= $this->endSection(); ?>