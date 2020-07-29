<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<h3 class="text-center mt3 mb3">
    <?= $error; ?>
</h3>

<?php helper('text'); ?>

<!-- Barang Random -->
<h2 class="mt5">Barang rekomendasi lain :</h2>
<div class="product">
    <?php foreach ($barang as $b) : ?>
        <a class="product-item" href="/barang/<?= $b['slug']; ?>">
            <div class="gambar-kecil" style="background-image: url('/img/uploads/barang/<?= $b['foto']; ?>');"> </div>
            <h4><?= character_limiter($b['nama'], 20); ?></h4>
            <p class="green">Rp <?= $b['harga']; ?>,-</p>
            <p class="grey">Kota Semarang</p>
        </a>
    <?php endforeach; ?>
</div>
<!-- End Barang Random -->
<?= $this->endSection(); ?>