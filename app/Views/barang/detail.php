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
        <!-- bg img -->
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
            <a href="" class="btn-success">Hubungi penjual</a>
            <a href="" class="btn-danger">Sukai barang</a>
            <a class="btn-secondary">Share</a>
        </div>
    </div>

    <!-- Profil Toko -->
    <div class="profil-toko">
        <div class="foto-profil">
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

<div class="deskripsi mt5">
    <h1 class="mb1">Deskripsi barang</h1>
    <?= $barang['deskripsi']; ?>
</div>

<!-- Slider Produk dari angga98w -->
<h1 class="mt5">Botol Plastik Bekas</h1>
<div class="product-slider">
    <a class="product-item product-item1" href="./barang.html">
        <img src="./img/botol/botol1.png" alt="botol-aqua-bekas" />
        <h4>Botol Aqua Bekas 1kg</h4>
        <p class="green">Rp5.000,-</p>
        <p class="grey">Kota Semarang</p>
    </a>
    <a class="product-item product-item2" href="">
        <img src="./img/botol/botol2.png" alt="pot-bunga-dari-botol-bekas" />
        <h4>Pot Bunga Lucu</h4>
        <p class="green">Rp15.000,-</p>
        <p class="grey">Jakarta Barat</p>
    </a>
    <a class="product-item product-item3" href="">
        <img src="./img/botol/botol3.png" alt="wadah-parcel-murah" />
        <h4>Tempat Parcel Murah</h4>
        <p class="green">Rp25.000,-</p>
        <p class="grey">Papua Barat</p>
    </a>
    <a class="product-item product-item4" href="">
        <img src="./img/botol/botol4.png" alt="lampion-botol-plastik" />
        <h4>Lampion Botol Plastik</h4>
        <p class="green">Rp15.000,-</p>
        <p class="grey">Tangerang Selatan</p>
    </a>
    <a class="product-item product-item5" href="">
        <img src="./img/botol/botol5.png" alt="lampu-tutup-botol" />
        <h4>Lampu Tutup Botol</h4>
        <p class="green">Rp25.000,-</p>
        <p class="grey">Kab. Semarang</p>
    </a>
</div>
<!-- End Slider Produk dari angga98w -->

<!-- Slider dari Kategori Botol Plastik -->
<h1 class="mt5">Botol Plastik Bekas</h1>
<div class="product-slider">
    <a class="product-item product-item1" href="./barang.html">
        <img src="./img/botol/botol1.png" alt="botol-aqua-bekas" />
        <h4>Botol Aqua Bekas 1kg</h4>
        <p class="green">Rp5.000,-</p>
        <p class="grey">Kota Semarang</p>
    </a>
    <a class="product-item product-item2" href="">
        <img src="./img/botol/botol2.png" alt="pot-bunga-dari-botol-bekas" />
        <h4>Pot Bunga Lucu</h4>
        <p class="green">Rp15.000,-</p>
        <p class="grey">Jakarta Barat</p>
    </a>
    <a class="product-item product-item3" href="">
        <img src="./img/botol/botol3.png" alt="wadah-parcel-murah" />
        <h4>Tempat Parcel Murah</h4>
        <p class="green">Rp25.000,-</p>
        <p class="grey">Papua Barat</p>
    </a>
    <a class="product-item product-item4" href="">
        <img src="./img/botol/botol4.png" alt="lampion-botol-plastik" />
        <h4>Lampion Botol Plastik</h4>
        <p class="green">Rp15.000,-</p>
        <p class="grey">Tangerang Selatan</p>
    </a>
    <a class="product-item product-item5" href="">
        <img src="./img/botol/botol5.png" alt="lampu-tutup-botol" />
        <h4>Lampu Tutup Botol</h4>
        <p class="green">Rp25.000,-</p>
        <p class="grey">Kab. Semarang</p>
    </a>
</div>
<!-- End Slider dari Kategori Botol Plastik -->
<?= $this->endSection(); ?>