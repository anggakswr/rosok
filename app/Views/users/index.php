<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<link rel="stylesheet" href="/css/login.css">
<?php if (session()->getFlashdata('pesan')) : ?>
    <div class="notif">
        <div><?= session()->getFlashdata('pesan'); ?></div>
    </div>
<?php endif; ?>

<!-- Login -->
<form action="" method="post" class="login">
    <h3>Login</h3>
    <input type="text" placeholder="Masukkan email">
    <input type="password" placeholder="Masukkan password">
    <button>Login</button>
    <a href="/users/daftar">Buat akun baru</a>
</form>
<!-- End Login -->

<!-- Notifikasi -->
<script>
    const divMuncul = document.querySelector(".notif");
    divMuncul.classList.add("muncul");

    setInterval(() => {
        divMuncul.classList.remove("muncul");
    }, 5000);
</script>
<!-- End Notifikasi -->
<?= $this->endSection(); ?>