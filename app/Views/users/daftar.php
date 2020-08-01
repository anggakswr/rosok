<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!-- Daftar -->
<div class="row justify-content-md-center">
    <div class="col-lg-4">
        <h2 class="mt-5 mb-3">Daftar</h2>
        <form action="" method="post">
            <?= csrf_field(); ?>

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control form-control-sm" id="username" name="username" value="<?= old('username'); ?>" autofocus>
                <?php if ($validation->hasError('username')) : ?>
                    <small id="username" class="form-text text-danger">
                        <?= $validation->getError('username'); ?>
                    </small>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="lokasi">Lokasi</label>
                <select class="js-example-basic-multiple" name="lokasi" style="width: 100%" id="lokasi">
                    <option value="" disabled selected>-- Pilih Lokasi --</option>
                    <?php foreach ($lokasi as $l) : ?>
                        <option value="<?= $l['nama']; ?>"><?= $l['nama']; ?></option>
                    <?php endforeach; ?>
                </select>
                <?php if ($validation->hasError('lokasi')) : ?>
                    <small id="lokasi" class="form-text text-danger">
                        <?= $validation->getError('lokasi'); ?>
                    </small>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control form-control-sm" id="email" name="email" value="<?= old('email'); ?>">
                <?php if ($validation->hasError('email')) : ?>
                    <small id="email" class="form-text text-danger">
                        <?= $validation->getError('email'); ?>
                    </small>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control form-control-sm" id="password" name="password">
                <?php if ($validation->hasError('password')) : ?>
                    <small id="password" class="form-text text-danger">
                        <?= $validation->getError('password'); ?>
                    </small>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="password2">Ulangi password</label>
                <input type="password2" class="form-control form-control-sm" id="password2" name="password2">
                <?php if ($validation->hasError('password2')) : ?>
                    <small id="password2" class="form-text text-danger">
                        <?= $validation->getError('password2'); ?>
                    </small>
                <?php endif; ?>
            </div>

            <button type="submit" class="btn btn-sm btn-primary mr-2">Daftar</button>
            <a href="/users/index" class="text-decoration-none">Ke halaman login</a>
        </form>
    </div>
</div>
<!-- End Daftar -->
<?= $this->endSection(); ?>