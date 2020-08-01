<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!-- Edit Barang -->
<div class="row justify-content-md-center">
    <div class="col-lg-4">
        <h2 class="mt-5 mb-3">Edit Barang</h2>
        <form action="/barang//update/<?= $barang['id'] ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>

            <div class="form-group">
                <label for="foto[0]">Foto Barang</label>
                <div class="row form-barang justify-content-around">
                    <!-- preview gambar yg akan diupload -->
                    <?php for ($i = 0; $i < 5; $i++) : ?>
                        <div class="col-2 foto-kecil" style="background-image: url('<?= (!empty($foto[$i]['foto'])) ? '/img/uploads/barang/' . $foto[$i]['foto'] : '/img/icon/plus.png' ?>');"></div>
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
                <input type="text" class="form-control form-control-sm" id="nama" name="nama" value="<?= (old('nama')) ? old('nama') : $barang['nama']; ?>">
                <?php if ($validation->hasError('nama')) : ?>
                    <small id="nama" class="form-text text-danger">
                        <?= $validation->getError('nama'); ?>
                    </small>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="kategori">Kategori</label>
                <select class="js-example-basic-multiple" name="kategori" style="width: 100%" id="kategori">
                    <option value="<?= (old('kategori')) ? old('kategori') : $barang['kategori']; ?>">
                        <?= (old('kategori')) ? old('kategori') : $barang['kategori']; ?>
                    </option>
                    <?php foreach ($kategori as $k) : ?>
                        <?php if ($k['kategori'] !== $barang['kategori'] || $k['kategori'] !== old('kategori')) : ?>
                            <option value="<?= $k['kategori']; ?>"><?= $k['kategori']; ?></option>
                        <?php endif; ?>
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
                <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi"><?= (old('deskripsi')) ? old('deskripsi') : $barang['deskripsi']; ?></textarea>
                <?php if ($validation->hasError('deskripsi')) : ?>
                    <small id="deskripsi" class="form-text text-danger">
                        <?= $validation->getError('deskripsi'); ?>
                    </small>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="harga">Harga <small class="text-secondary">(Rp)</small></label>
                <input type="text" class="form-control form-control-sm" id="harga" name="harga" value="<?= (old('harga')) ? old('harga') : $barang['harga']; ?>">
                <?php if ($validation->hasError('harga')) : ?>
                    <small id="harga" class="form-text text-danger">
                        <?= $validation->getError('harga'); ?>
                    </small>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="berat">Berat <small class="text-secondary">(gram)</small></label>
                <input type="text" class="form-control form-control-sm" id="berat" name="berat" value="<?= (old('berat')) ? old('berat') : $barang['berat']; ?>">
                <?php if ($validation->hasError('berat')) : ?>
                    <small id="berat" class="form-text text-danger">
                        <?= $validation->getError('berat'); ?>
                    </small>
                <?php endif; ?>
            </div>

            <button type="submit" class="btn btn-sm btn-primary mr-2">Edit Barang</button>
            <a href="/barang">Kembali ke daftar barang</a>
        </form>
    </div>
</div>
<!-- End Edit Barang -->
<?= $this->endSection(); ?>