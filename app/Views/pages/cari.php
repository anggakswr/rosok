<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="flex nav2">
    <!-- Tentukan Harga -->
    <form action="" method="get">
        <?= csrf_field(); ?>
        <input type="text" name="harga-maksimum" placeholder="Harga maksimum">
        <input type="text" name="harga-minimum" placeholder="Harga minimum">
    </form>
    <!-- End Tentukan Harga -->

    <!-- Tombols -->
    <div>
        <button>Lokasi &darr;</button>
        <button>Kategori &darr;</button>
        <button>Urutkan harga &darr;</button>
        <button>Urutkan popularitas &darr;</button>
    </div>
    <!-- End Tombols -->
</div>

<!-- Hasil Pencarian-->
<h2 class="mt5">
    Hasil pencarian untuk "<?= (isset($cari)) ? $cari : $title; ?>"
</h2>

<?php helper('text'); ?>

<div class="product">
    <?php foreach ($barang as $b) : ?>
        <a class="product-item" href="/barang/<?= $b['slug']; ?>">
            <div class="gambar-kecil" style="background-image: url('/img/uploads/barang/<?= $b['foto']; ?>');"></div>
            <h4><?= character_limiter($b['nama'], 20); ?></h4>
            <p class="green">Rp <?= number_format($b['harga'], 2, ',', '.'); ?>,-</p>
            <p class="grey">Kota Semarang</p>
        </a>
    <?php endforeach; ?>
</div>

<?= $pager->links('barang', 'barang_pagination'); ?>

<!-- End Hasil Pencarian-->
<?= $this->endSection(); ?>