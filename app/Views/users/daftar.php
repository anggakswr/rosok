<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<link rel="stylesheet" href="/css/login.css">

<!-- Daftar -->
<form action="" method="post" class="login">
    <h3>Daftar</h3>
    <input type="text" name="nama" placeholder="Masukkan nama" autofocus value="<?= old('nama'); ?>" />
    <?php if ($validation->hasError('nama')) : ?>
        <div class="error-flash">
            <?= $validation->getError('nama'); ?>
        </div>
    <?php endif; ?>
    <input type="text" name="email" placeholder="Masukkan email" value="<?= old('email'); ?>" />
    <?php if ($validation->hasError('email')) : ?>
        <div class="error-flash">
            <?= $validation->getError('email'); ?>
        </div>
    <?php endif; ?>
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
    <button type="submit">Daftar</button>
    <a href="/users/login">Kembali ke halaman login</a>
</form>
<!-- End Daftar -->
<?= $this->endSection(); ?>