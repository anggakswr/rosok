<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!-- Slider & Kategori -->
<header>
    <!-- Slider -->
    <div class="slider">
        <!-- Kotak Navigasi -->
        <div class="slidernav">
            <label for="radio1"></label>
            <label for="radio2"></label>
            <label for="radio3"></label>
            <label for="radio4"></label>
            <label for="radio5"></label>
            <input type="radio" id="radio1" name="r" />
            <input type="radio" id="radio2" name="r" />
            <input type="radio" id="radio3" name="r" />
            <input type="radio" id="radio4" name="r" />
            <input type="radio" id="radio5" name="r" />
        </div>
        <!-- End Kotak Navigasi -->

        <!-- Gambar Slide -->
        <div class="slide">
            <div class="img1">
                <h1>Temukan pengepul <br> rosok di dekatmu.</h1>
                <img src="/img/slide/pengepul-rosok.png" alt="pengepul-rosok">
            </div>
            <div class="img2">
                <h1>Yuk, berkarya <br> lewat sampah.</h1>
                <img src="/img/slide/berkarya-sampah.png" alt="berkarya-lewat-sampah">
            </div>
            <div class="img3">
                <h1>Ubah sampah <br> jadi berkah.</h1>
                <img src="/img/slide/sampah-berkah.png" alt="sampah-jadi-berkah">
            </div>
            <div class="img4">
                <h1>Pilah sampah <br> dengan benar.</h1>
                <img src="/img/slide/pilah-sampah.png" alt="pilah-sampah">
            </div>
            <div class="img5">
                <h1>Daur ulang <br> untuk masa depan.</h1>
                <img src="/img/slide/daur-ulang.png" alt="daur-ulang">
            </div>
        </div>
        <!-- End Gambar Slide -->
    </div>
    <!-- End Slider -->

    <!-- Kategori -->
    <div class="kategori kategori1">
        <h4>Botol Plastik</h4>
        <p>Dari berbagai merk.</p>
        <a href="/kategori/Botol Plastik" class="btn-primary mt5">Beli sekarang</a>
        <img src="./img/botol.png" alt="jual-botol-aqua" />
    </div>
    <div class="kategori kategori2">
        <h4>Kardus Indomie</h4>
        <p>Untuk packing, dll.</p>
        <a href="/kategori/Kardus" class="btn-warning mt5">Beli sekarang</a>
        <img src="./img/kardus.png" alt="jual-kardus-bekas" />
    </div>
    <div class="kategori kategori3">
        <h4>Besi Kiloan</h4>
        <p>Alat-alat besi bekas.</p>
        <a href="/kategori/Besi Kiloan" class="btn-secondary mt5">Beli sekarang</a>
        <img src="./img/besi.png" alt="jual-besi-bekas" />
    </div>
    <div class="kategori kategori4">
        <h4>Kain Perca</h4>
        <p>Bahan katun halus.</p>
        <a href="/kategori/Kain Perca" class="btn-danger mt5">Beli sekarang</a>
        <img src="./img/kain.png" alt="jual-kain-perca" />
    </div>
    <!-- End Kategori -->
</header>
<!-- End Slider & Kategori -->

<?php helper('text'); ?>

<!-- Slider Botol -->
<h2 class="mt5">Botol Plastik Bekas</h2>
<div class="product">
    <?php foreach ($botol as $b) : ?>
        <a class="product-item" href="/barang/<?= $b['slug']; ?>">
            <div class="gambar-kecil" style="background-image: url('/img/uploads/barang/<?= $b['foto']; ?>');"></div>
            <h4><?= character_limiter($b['nama'], 20); ?></h4>
            <p class="green">Rp <?= number_format($b['harga'], 2, ',', '.'); ?></p>
            <p class="grey">Kota Semarang</p>
        </a>
    <?php endforeach; ?>
</div>
<!-- End Slider Botol -->

<!-- Slider Kardus -->
<h2 class="mt5">Kardus Indomie</h2>
<div class="product">
    <?php foreach ($kardus as $k) : ?>
        <a class="product-item" href="/barang/<?= $k['slug']; ?>">
            <div class="gambar-kecil" style="background-image: url('/img/uploads/barang/<?= $k['foto']; ?>');"></div>
            <h4><?= character_limiter($k['nama'], 20); ?></h4>
            <p class="green">Rp <?= number_format($k['harga'], 2, ',', '.'); ?></p>
            <p class="grey">Kota Semarang</p>
        </a>
    <?php endforeach; ?>
</div>
<!-- End Slider Kardus -->

<!-- Slider Besi -->
<h2 class="mt5">Besi Kiloan</h2>
<div class="product">
    <?php foreach ($besi as $bes) : ?>
        <a class="product-item" href="/barang/<?= $bes['slug']; ?>">
            <div class="gambar-kecil" style="background-image: url('/img/uploads/barang/<?= $bes['foto']; ?>');"></div>
            <h4><?= character_limiter($bes['nama'], 20); ?></h4>
            <p class="green">Rp <?= number_format($bes['harga'], 2, ',', '.'); ?></p>
            <p class="grey">Kota Semarang</p>
        </a>
    <?php endforeach; ?>
</div>
<!-- End Slider Besi -->

<!-- Slider Kain -->
<h2 class="mt5">Kain Perca</h2>
<div class="product">
    <?php foreach ($kain as $ka) : ?>
        <a class="product-item" href="/barang/<?= $ka['slug']; ?>">
            <div class="gambar-kecil" style="background-image: url('/img/uploads/barang/<?= $ka['foto']; ?>');"></div>
            <h4><?= character_limiter($ka['nama'], 20); ?></h4>
            <p class="green">Rp <?= number_format($ka['harga'], 2, ',', '.'); ?></p>
            <p class="grey">Kota Semarang</p>
        </a>
    <?php endforeach; ?>
</div>
<!-- End Slider Kain -->

<script src="/js/index.js"></script>
<?= $this->endSection(); ?>