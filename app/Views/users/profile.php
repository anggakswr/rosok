<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!-- Edit Profil -->
<div class="row justify-content-md-center">
    <div class="col-lg-4">
        <h2 class="mt-5 mb-3">Edit Profil</h2>
        <form action="" method="post">
            <?= csrf_field(); ?>

            <div class="form-group foto-kecil foto-profil" style="background-image: url('/img/uploads/user/<?= $user['foto']; ?>');"></div>

            <div class="form-group">
                <label for="foto">Pilih foto</label>
                <input type="file" class="form-control-file" id="foto" name="foto">
                <?php if ($validation->hasError("foto")) : ?>
                    <small id="foto" class="form-text text-danger">
                        <?= $validation->getError("foto"); ?>
                    </small>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="username">Username</label>
                <input type="email" class="form-control form-control-sm" id="username" name="username" value="<?= old('username', $user['username']); ?>">
                <?php if ($validation->hasError("username")) : ?>
                    <small id="username" class="form-text text-danger">
                        <?= $validation->getError("username"); ?>
                    </small>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="lokasi">Lokasi</label>
                <select class="js-example-basic-multiple" name="lokasi" style="width: 100%">
                    <option value="<?= old('lokasi', $user['lokasi']); ?>">
                        <?= old('lokasi', $user['lokasi']); ?>
                    </option>
                    <?php foreach ($lokasi as $l) : ?>
                        <?php if ($user['lokasi'] !== $l['nama']) : ?>
                            <option value="<?= $l['nama']; ?>"><?= $l['nama']; ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
                <?php if ($validation->hasError("lokasi")) : ?>
                    <small id="lokasi" class="form-text text-danger">
                        <?= $validation->getError("lokasi"); ?>
                    </small>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control form-control-sm" id="email" disabled readonly value="<?= $user['email']; ?>">
                <?php if ($validation->hasError("email")) : ?>
                    <small id=" email" class="form-text text-danger">
                        <?= $validation->getError("email"); ?>
                    </small>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control form-control-sm" id="password" name="password">
                <?php if ($validation->hasError("password")) : ?>
                    <small id="password" class="form-text text-danger">
                        <?= $validation->getError("password"); ?>
                    </small>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="password2">Ulangi password</label>
                <input type="password2" class="form-control form-control-sm" id="password2" name="password2">
                <?php if ($validation->hasError("password2")) : ?>
                    <small id="password2" class="form-text text-danger">
                        <?= $validation->getError("password2"); ?>
                    </small>
                <?php endif; ?>
            </div>

            <button type="submit" class="btn btn-sm btn-primary mr-2">Edit</button>
        </form>
    </div>
</div>
<!-- End Edit Profil -->
<?= $this->endSection(); ?>