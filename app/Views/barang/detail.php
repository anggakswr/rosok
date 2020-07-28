<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<?php if (session()->getFlashdata('pesan')) : ?>
    <div class="notif">
        <div><?= session()->getFlashdata('pesan'); ?></div>
    </div>
<?php endif; ?>

<!-- Link SEO -->
<p class="grey">
    <a href="/">Rosok</a>
    &raquo;
    <a href="/kategori/<?= $barang['kategori']; ?>"><?= $barang['kategori']; ?></a>
    &raquo;
    <?= $barang['nama']; ?>
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
        <h2 class="green">Rp <?= number_format($barang['harga'], 2, ',', '.'); ?></h2>
        <h3 class="grey">
            <?= $user['lokasi']; ?> &middot; 1 kg
        </h3>
        <div class="tombol">
            <a href="" class="btn-success">Hubungi penjual</a>
            <a class="btn-secondary">Share</a>
            <form action="/barang/sukaBarang/<?= $barang['id']; ?>" method="post" class="inline">
                <?= csrf_field(); ?>
                <input type="hidden" name="slug" value="<?= $barang['slug']; ?>">
                <button type="submit" class="btn-danger">Sukai barang</button>
            </form>
            <span class="maroon">120 suka</span>
        </div>
    </div>

    <!-- Profil Toko -->
    <div class="profil-toko">
        <div class="foto-profil ml1">
            <img src="/img/uploads/user/<?= $user['foto']; ?>" alt="<?= $user['username']; ?>" width="80px">
        </div>
        <div class="nama-profil">
            <p class="mb1"><?= $user['username']; ?></p>
            <p class="grey mb1"><?= $user['lokasi']; ?></p>
        </div>
        <a href="/user/<?= $user['username']; ?>" class="btn-danger">Kunjungi penjual</a>
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
    // notifikasi
    const divMuncul = document.querySelector(".notif");
    if (divMuncul) {
        divMuncul.classList.add("muncul");

        setInterval(() => {
            divMuncul.classList.remove("muncul");
        }, 5000);
    }

    // jika gambar kecil diklik, jadilah besar
    const fotoProduct = document.querySelector('.foto-product-detail');
    const gambarBesar = document.querySelector('.gambar-besar');

    fotoProduct.addEventListener('click', function(e) {
        if (e.target.className == 'gambar-kecil') {
            gambarBesar.style.backgroundImage = e.target.style.backgroundImage;
        }
    });
</script>
<?= $this->endSection(); ?>