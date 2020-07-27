<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!-- Profil Toko -->
<div class="profil-toko">
    <div class="foto-profil ml1">
        <img src="/img/uploads/user/<?= $user['foto']; ?>" alt="<?= $user['username']; ?>" width="80px">
    </div>
    <div class="nama-profil">
        <p class="mb1"><?= $user['username']; ?></p>
        <p class="grey mb1"><?= $user['lokasi']; ?></p>
    </div>
    <a href="/users/<?= $user['username']; ?>" class="btn-danger">Kunjungi Penjual</a>
    <a class="btn-danger">Sukai Penjual</a>
    <a class="btn-danger">Ulasan Penjual</a>
    <a class="btn-danger">Statistik Penjual</a>
    <p class="maroon">50 suka</p>
</div>
<!-- End Profil Toko -->

<?php helper('text'); ?>

<!-- Slider Produk dari Penjual -->
<h2 class="mt5">Barang dari <?= $user['username']; ?></h2>
<div class="product">
    <?php foreach ($barang as $b) : ?>
        <a class="product-item" href="/barang/<?= $b['slug']; ?>">
            <div class="gambar-kecil" style="background-image: url('/img/uploads/barang/<?= $b['foto']; ?>');"> </div>
            <h4><?= character_limiter($b['nama'], 20); ?></h4>
            <p class="green">Rp <?= number_format($b['harga'], 2, ',', '.'); ?>,-</p>
            <p class="grey">Kota Semarang</p>
        </a>
    <?php endforeach; ?>
</div>
<!-- End Slider Produk dari Penjual -->

<?= $pager->links('barang', 'barang_pagination'); ?>
<?= $this->endSection(); ?>