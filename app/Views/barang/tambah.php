<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!-- Tambah Barang -->
<div class="row justify-content-md-center">
    <div class="col-lg-4">
        <h2 class="mt-5 mb-3">Tambah Barang</h2>
        <form action="/barang/save" method="post">
            <?= csrf_field(); ?>

            <div class="form-group">
                <label for="foto[0]">Foto Barang</label>
                <div class="row form-barang justify-content-around">
                    <!-- preview gambar yg akan diupload -->
                    <?php for ($i = 0; $i < 5; $i++) : ?>
                        <div class="col-2 foto-kecil" style="background-image: url('/img/icon/plus.png');"></div>
                    <?php endfor; ?>
                </div>
                <?php for ($i = 0; $i < 5; $i++) : ?>
                    <input type="file" name="foto[<?= $i; ?>]" class="hidden">
                    <?php if ($validation->hasError("foto[$i]")) : ?>
                        <small id="nama" class="form-text text-danger">
                            <?= $validation->getError("foto[$i]"); ?>
                        </small>
                    <?php endif; ?>
                <?php endfor; ?>
            </div>

            <div class="form-group">
                <label for="nama">Nama Barang</label>
                <input type="text" class="form-control form-control-sm" id="nama" name="nama" value="<?= old('nama'); ?>">
                <?php if ($validation->hasError('nama')) : ?>
                    <small id="nama" class="form-text text-danger">
                        <?= $validation->getError('nama'); ?>
                    </small>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="kategori">Kategori</label>
                <select class="js-example-basic-multiple" name="kategori" style="width: 100%" id="kategori">
                    <option value="" disabled selected>-- Pilih kategori --</option>
                    <?php foreach ($kategori as $k) : ?>
                        <option value="<?= $k['kategori']; ?>"><?= $k['kategori']; ?></option>
                    <?php endforeach; ?>
                </select>
                <?php if ($validation->hasError('kategori')) : ?>
                    <small id="kategori" class="form-text text-danger">
                        <?= $validation->getError('kategori'); ?>
                    </small>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi"><?= old('deskripsi'); ?></textarea>
                <?php if ($validation->hasError('deskripsi')) : ?>
                    <small id="deskripsi" class="form-text text-danger">
                        <?= $validation->getError('deskripsi'); ?>
                    </small>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="harga">Harga <small class="text-secondary">(Rp)</small></label>
                <input type="text" class="form-control form-control-sm" id="harga" name="harga" value="<?= old('harga'); ?>">
                <?php if ($validation->hasError('harga')) : ?>
                    <small id="harga" class="form-text text-danger">
                        <?= $validation->getError('harga'); ?>
                    </small>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="berat">Berat <small class="text-secondary">(gram)</small></label>
                <input type="text" class="form-control form-control-sm" id="berat" name="berat" value="<?= old('berat'); ?>">
                <?php if ($validation->hasError('berat')) : ?>
                    <small id="berat" class="form-text text-danger">
                        <?= $validation->getError('berat'); ?>
                    </small>
                <?php endif; ?>
            </div>

            <button type="submit" class="btn btn-sm btn-primary mr-2">Tambah barang</button>
            <a href="/barang">Kembali ke daftar barang</a>
        </form>
    </div>
</div>
<!-- End Tambah Barang -->
<?= $this->endSection(); ?>