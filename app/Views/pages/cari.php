<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!-- Filter -->
<form class="mt-3" action="" method="get">
    <?php $request = \Config\Services::request(); ?>
    <div class="form-row">
        <div class="col-6 col-md-3 col-lg-2 mt-3">
            <input type="text" class="form-control form-control-sm" placeholder="Cari barang rosok" name="rosok" value="<?= $request->getGet('rosok'); ?>">
        </div>
        <div class="col-6 col-md-3 col-lg-2 mt-3">
            <input type="text" class="form-control form-control-sm" placeholder="Harga maksimal" name="hargaMaks" value="<?= $request->getGet('hargaMaks'); ?>">
        </div>
        <div class="col-6 col-md-3 col-lg-2 mt-3">
            <input type="text" class="form-control form-control-sm" placeholder="Harga minimum" name="hargaMin" value="<?= $request->getGet('hargaMin'); ?>">
        </div>
        <div class="col-6 col-md-3 col-lg-2 mt-3">
            <select class="custom-select custom-select-sm" name="kategori">
                <?php if ($request->getGet('kategori')) : ?>
                    <option value="<?= $request->getGet('kategori'); ?>">
                        <?= $request->getGet('kategori'); ?>
                    </option>
                    <option value="">-- Kategori --</option>
                <?php else : ?>
                    <option value="">-- Kategori --</option>
                <?php endif; ?>

                <?php foreach ($kategori as $k) : ?>
                    <?php if ($k['kategori'] != $request->getGet('kategori')) : ?>
                        <option value="<?= $k['kategori']; ?>"><?= $k['kategori']; ?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="col-6 col-md-3 col-lg-2 mt-3">
            <select class="custom-select custom-select-sm" name="urutkan">
                <?php if ($request->getGet('urutkan')) : ?>
                    <option value="<?= $request->getGet('urutkan'); ?>">
                        <?= $request->getGet('urutkan'); ?>
                    </option>
                    <option value="">-- Urutkan --</option>
                <?php else : ?>
                    <option value="">-- Urutkan --</option>
                <?php endif; ?>
                <option value="Harga rendah ke tinggi">Harga rendah ke tinggi</option>
                <option value="Harga tinggi ke rendah">Harga tinggi ke rendah</option>
                <option value="Paling banyak suka">Paling banyak suka</option>
                <option value="">Terbaru</option>
            </select>
        </div>
        <div class="col-6 col-md-3 col-lg-2 mt-3">
            <button class="btn btn-sm btn-outline-primary" type="submit">Cari</button>
        </div>
    </div>
</form>
<!-- End Filter -->

<!-- Hasil Pencarian-->
<h3 class="mt-3">
    <?php
    $kategori = ($request->getGet('kategori')) ? ' dari kategori ' . $request->getGet('kategori') : '';
    if ($request->getGet('rosok')) {
        echo 'Menampilkan pencarian ' . $request->getGet('rosok') . $kategori;
    }
    ?>
</h3>

<!-- Jika Barang Tidak Ada -->
<?php if (empty($barang)) : ?>
    <div class="row">
        <div class="col">
            <h4 class="text-secondary">Barang tidak ada.</h4>
        </div>
    </div>
<?php endif; ?>
<!-- End Jika Barang Tidak Ada -->

<?php helper('text'); ?>

<div class="row">
    <?php foreach ($barang as $b) : ?>
        <div class="col-6 col-md-3 col-lg-2 mt-3">
            <a href="/barang/<?= $b['slug']; ?>" class="card text-decoration-none">
                <div class="foto-kecil" style="background-image: url('/img/uploads/barang/<?= $b['foto']; ?>');"></div>
                <div class="card-body">
                    <p class="card-text">
                        <strong>
                            <?= character_limiter($b['nama'], 20); ?>
                        </strong>
                    </p>
                    <p class="card-subtitle text-success">
                        Rp <?= number_format($b['harga'], 2, ',', '.'); ?>
                    </p>
                    <p class="card-subtitle text-muted">
                        Kota Semarang
                    </p>
                </div>
            </a>
        </div>
    <?php endforeach; ?>
</div>

<?= $pager->links('barang', 'barang_pagination'); ?>

<!-- End Hasil Pencarian-->
<?= $this->endSection(); ?>