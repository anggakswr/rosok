<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<link rel="stylesheet" href="/css/login.css">
<?php if (session()->getFlashdata('pesan')) : ?>
    <div class="notif">
        <div><?= session()->getFlashdata('pesan'); ?></div>
    </div>
<?php endif; ?>

<!-- Daftar -->
<form action="" method="post" class="login">
    <h3>Profile</h3>
    <input type="text" name="username" placeholder="Masukkan username" autofocus value="<?= old('username', $user['username']); ?>" />
    <?php if ($validation->hasError('username')) : ?>
        <div class="error-flash">
            <?= $validation->getError('username'); ?>
        </div>
    <?php endif; ?>
    <input type="text" readonly placeholder="Masukkan email" value="<?= $user['email']; ?>" />
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
    const divMuncul = document.querySelector(".notif");
    divMuncul.classList.add("muncul");

    setInterval(() => {
        divMuncul.classList.remove("muncul");
    }, 5000);
</script>
<!-- End Notifikasi -->
<?= $this->endSection(); ?>