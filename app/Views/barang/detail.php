<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!-- Link SEO -->
<p class="grey">
    <a href="./index.html">Rosok</a>
    &raquo;
    <a href="">Botol</a>
    &raquo;
    Botol Aqua Bekas 1kg
</p>
<!-- End Link SEO -->

<!-- Product Header -->
<div class="product-header mt3">
    <div class="foto-product-detail">
        <!-- gambar besar -->
        <div class="gambar-besar" style="background-image: url('/img/uploads/barang/<?= $barang['foto']; ?>');"></div>
        <!-- end gambar besar -->

        <!-- gambar kecil2 -->
        <div class="flex mt1">
            <?php if (isset($foto[1]['foto'])) : ?>
                <?php foreach ($foto as $f) : ?>
                    <div class="gambar-kecil" style="background-image: url('/img/uploads/barang/<?= $f['foto']; ?>');"></div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <!-- end gambar kecil2 -->
    </div>

    <div class="nama-product-detail">
        <h2><?= $barang['nama']; ?></h2>
        <h2 class="green">Rp <?= $barang['harga']; ?>,-</h2>
        <h3 class="grey">
            Kota Semarang <span class="middot">&middot;</span>
            1 kg <span class="middot">&middot;</span>
            <span class="maroon">120 suka</span>
        </h3>
        <div class="tombol">
            <a href="" class="btn-success">&#128222; Hubungi penjual</a>
            <a href="" class="btn-danger">Sukai barang</a>
            <a class="btn-secondary">Share</a>
        </div>
    </div>

    <!-- Profil Toko -->
    <div class="profil-toko">
        <div class="foto-profil ml1">
            <img src="./img/botol.png" alt="pengepul-botol-plastik" width="80px">
        </div>
        <div class="nama-profil">
            <p class="mb1">angga98w</p>
            <p class="grey mb1">Kota Semarang</p>
        </div>
        <a href="" class="btn-danger">Kunjungi penjual</a>
        <a class="btn-danger">Sukai penjual</a>
        <p class="maroon">50 suka</p>
    </div>
    <!-- End Profil Toko -->
</div>
<!-- End Product Header -->

<div class="deskripsi">
    <h2 class="mb1">Deskripsi barang</h2>
    <?= $barang['deskripsi']; ?>
</div>

<?php helper('text'); ?>

<!-- Slider Produk dari Penjual -->
<h2 class="mt5">Barang dari Kategori <?= $barang['kategori']; ?></h2>
<div class="product">
    <?php foreach ($barangKategori as $b) : ?>
        <a class="product-item" href="/barang/<?= $b['slug']; ?>">
            <div class="gambar-kecil" style="background-image: url('/img/uploads/barang/<?= $b['foto']; ?>');"> </div>
            <h4><?= character_limiter($b['nama'], 20); ?></h4>
            <p class="green">Rp <?= $b['harga']; ?>,-</p>
            <p class="grey">Kota Semarang</p>
        </a>
    <?php endforeach; ?>
</div>
<!-- End Slider Produk dari Penjual -->

<script>
    const fotoProduct = document.querySelector('.foto-product-detail');
    const gambarBesar = document.querySelector('.gambar-besar');

    fotoProduct.addEventListener('click', function(e) {
        if (e.target.className == 'gambar-kecil') {
            gambarBesar.style.backgroundImage = e.target.style.backgroundImage;
        }
    });
</script>
<?= $this->endSection(); ?>