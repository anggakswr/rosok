<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<link rel="stylesheet" href="/css/select2.min.css" />
<link rel="stylesheet" href="/css/create.css" />

<h1>Edit Barang</h1>

<form action="/barang/update/<?= $barang['id']; ?>" method="post" class="tambah-barang mt3" enctype="multipart/form-data">
    <?= csrf_field(); ?>
    <input type="hidden" name="slug" value="<?= $barang['slug']; ?>">

    <div class="flex">
        <label for="foto">Foto Barang</label>
        <div class="flex">
            <div>
                <!-- preview gambar yg akan diupload -->
                <?php for ($i = 0; $i < 5; $i++) : ?>
                    <div class="gambar-kecil inline-block" style="background-image: url('<?= (!empty($foto[$i]['foto'])) ? '/img/uploads/barang/' . $foto[$i]['foto'] : '/img/icon/plus.png' ?>');"></div>
                    <span class="close">&times;</span>
                <?php endfor; ?>
            </div>
            <?php for ($i = 0; $i < 5; $i++) : ?>
                <input type="file" name="foto[<?= $i; ?>]" class="hidden">
                <?php if ($validation->hasError("foto[$i]")) : ?>
                    <div class="error-flash">
                        <?= $validation->getError("foto[$i]"); ?>
                    </div>
                <?php endif; ?>
            <?php endfor; ?>
        </div>
    </div>

    <div class="flex mt3">
        <label for="nama">Nama Barang</label>
        <div class="flex">
            <input type="text" name="nama" placeholder="Masukkan nama barang" autofocus value="<?= (old('nama')) ? old('nama') : $barang['nama']; ?>" />
            <?php if ($validation->hasError('nama')) : ?>
                <div class="error-flash">
                    <?= $validation->getError('nama'); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>


    <div class="flex mt3">
        <label for="kategori">Kategori</label>
        <div class="flex">
            <select class="js-example-basic-multiple" name="kategori">
                <option value="<?= $barang['kategori']; ?>"><?= $barang['kategori']; ?></option>
                <?php foreach ($kategori as $k) : ?>
                    <?php if ($barang['kategori'] !== $k['kategori']) : ?>
                        <option value="<?= $k['kategori']; ?>"><?= $k['kategori']; ?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>
            <?php if ($validation->hasError('kategori')) : ?>
                <div class="error-flash">
                    <?= $validation->getError('kategori'); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="flex mt3">
        <label for="deskripsi">Deskripsi</label>
        <div class="flex">
            <textarea type="text" name="deskripsi" placeholder="Deskripsi"><?= (old('deskripsi')) ? old('deskripsi') : $barang['deskripsi']; ?></textarea>
            <?php if ($validation->hasError('deskripsi')) : ?>
                <div class="error-flash">
                    <?= $validation->getError('deskripsi'); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="flex mt3">
        <label for="harga">Harga</label>
        <div class="flex">
            <input type="text" name="harga" placeholder="Harga" value="<?= (old('harga')) ? old('harga') : $barang['harga']; ?>" />
            <?php if ($validation->hasError('harga')) : ?>
                <div class="error-flash">
                    <?= $validation->getError('harga'); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="flex mt3">
        <label for="berat">Berat <span class="grey">(gram)</span></label>
        <div class="flex">
            <input type="text" name="berat" placeholder="Berat" class="mr1" value="<?= (old('berat')) ? old('berat') : $barang['berat']; ?>" />
            <?php if ($validation->hasError('berat')) : ?>
                <div class="error-flash">
                    <?= $validation->getError('berat'); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="flex mt3">
        <button type="submit" class="mr1">Edit barang</button>
        <a href="/barang">Kembali ke daftar barang</a>
    </div>

</form>

<script src="/js/jquery-3.5.1.min.js"></script>
<script src="/js/select2.min.js"></script>
<script src="/js/create.js"></script>
<?= $this->endSection(); ?>