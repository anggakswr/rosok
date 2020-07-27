<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<link rel="stylesheet" href="/css/select2.min.css">
<link rel="stylesheet" href="/css/login.css">

<!-- Daftar -->
<form action="" method="post" class="login">
    <?= csrf_field(); ?>

    <h3>Daftar</h3>

    <input type="text" name="username" placeholder="Masukkan username" autofocus value="<?= old('username'); ?>" />
    <?php if ($validation->hasError('username')) : ?>
        <div class="error-flash">
            <?= $validation->getError('username'); ?>
        </div>
    <?php endif; ?>

    <select class="js-example-basic-multiple" name="lokasi" style="width: 100%">
        <option value="" disabled selected>-- Pilih Lokasi --</option>
        <?php foreach ($lokasi as $l) : ?>
            <option value="<?= $l['nama']; ?>"><?= $l['nama']; ?></option>
        <?php endforeach; ?>
    </select>
    <?php if ($validation->hasError('lokasi')) : ?>
        <div class="error-flash">
            <?= $validation->getError('lokasi'); ?>
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
    <a href="/users">Kembali ke halaman login</a>
</form>
<!-- End Daftar -->

<script src="/js/jquery-3.5.1.min.js"></script>
<script src="/js/select2.min.js"></script>
<script>
    // inisialisasi select2
    $(document).ready(function() {
        $(".js-example-basic-multiple").select2();
    });
</script>
<?= $this->endSection(); ?>