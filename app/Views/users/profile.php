<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<link rel="stylesheet" href="/css/select2.min.css">
<link rel="stylesheet" href="/css/login.css">
<?php if (session()->getFlashdata('pesan')) : ?>
    <div class="notif">
        <div class="green"><?= session()->getFlashdata('pesan'); ?></div>
    </div>
<?php endif; ?>

<!-- Daftar -->
<form action="" method="post" class="login" enctype="multipart/form-data">
    <?= csrf_field(); ?>

    <h3>Edit Profile</h3>

    <div class="gambar-kecil inline-block" style="background-image: url('/img/uploads/user/<?= $user['foto']; ?>');"></div>

    <input type="file" name="foto">
    <?php if ($validation->hasError("foto")) : ?>
        <div class="error-flash">
            <?= $validation->getError("foto"); ?>
        </div>
    <?php endif; ?>

    <input type="text" name="username" placeholder="Masukkan username" autofocus value="<?= old('username', $user['username']); ?>" />
    <?php if ($validation->hasError('username')) : ?>
        <div class="error-flash">
            <?= $validation->getError('username'); ?>
        </div>
    <?php endif; ?>

    <select class="js-example-basic-multiple" name="lokasi" style="width: 100%">
        <option value="<?= old('lokasi', $user['lokasi']); ?>"><?= old('lokasi', $user['lokasi']); ?></option>
        <?php foreach ($lokasi as $l) : ?>
            <?php if ($user['lokasi'] !== $l['nama']) : ?>
                <option value="<?= $l['nama']; ?>"><?= $l['nama']; ?></option>
            <?php endif; ?>
        <?php endforeach; ?>
    </select>
    <?php if ($validation->hasError('lokasi')) : ?>
        <div class="error-flash">
            <?= $validation->getError('lokasi'); ?>
        </div>
    <?php endif; ?>

    <input type="text" readonly disabled placeholder="Masukkan email" value="<?= $user['email']; ?>" />
    <input type="password" name="password" placeholder="Masukkan password" />
    <?php if ($validation->hasError('password')) : ?>
        <div class="error-flash">
            <?= $validation->getError('password'); ?>
        </div>
    <?php endif; ?>

    <input type="password" name="password2" placeholder="Masukkan password lagi" />
    <?php if ($validation->hasError('password2')) : ?>
        <div class="error-flash">
            <?= $validation->getError('password2'); ?>
        </div>
    <?php endif; ?>

    <button type="submit">Update</button>
</form>
<!-- End Daftar -->

<!-- Notifikasi -->
<script>

</script>
<script src="/js/jquery-3.5.1.min.js"></script>
<script src="/js/select2.min.js"></script>
<script>
    // memuncul notifikasi
    const divMuncul = document.querySelector(".notif");
    if (divMuncul) {
        divMuncul.classList.add("muncul");

        setInterval(() => {
            divMuncul.classList.remove("muncul");
        }, 5000);
    }

    // inisialisasi select2
    $(document).ready(function() {
        $(".js-example-basic-multiple").select2();
    });

    // tangkap elemen
    const imgPreview = document.querySelector('.gambar-kecil');
    const inputFoto = document.querySelector('input[type=file]');

    // ganti image preview dg image yg mau diupload
    inputFoto.onchange = function() {
        const fileFoto = new FileReader();

        // jika file foto di load, maka imgPreview akan berubah
        fileFoto.onload = function(e) {
            imgPreview.style.backgroundImage = 'url(' + e.target.result + ')';
        }

        // ini code dr mozilla
        if (inputFoto.files[0]) {
            fileFoto.readAsDataURL(inputFoto.files[0]);
        }
    }

    // jika tombol plus diklik, maka gambar akan muncul
    imgPreview.onclick = function() {
        inputFoto.click();
    }
</script>
<!-- End Notifikasi -->
<?= $this->endSection(); ?>