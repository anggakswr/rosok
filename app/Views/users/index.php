<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!-- Login -->
<div class="row justify-content-md-center">
    <div class="col-lg-4">
        <h2 class="mt-5 mb-3">Login</h2>
        <form action="" method="post">
            <?= csrf_field(); ?>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control form-control-sm" id="email" name="email" value="<?= old('email'); ?>">
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

            <button type="submit" class="btn btn-sm btn-primary mr-2">Login</button>
            <a href="/users/daftar" class="text-decoration-none">Daftar akun baru</a>
        </form>
    </div>
</div>
<!-- End Login -->
<?= $this->endSection(); ?>