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
                <h1>Temukan pengepul sampah di dekatmu.</h1>
            </div>
            <div class="img2">
                <h1>Berkarya lewat sampah.</h1>
                <img src="/img/slide/2.png" alt="">
            </div>
            <div class="img3">
                <h1>Ubah sampah jadi berkah.</h1>
                <img src="/img/slide/3.png" alt="" width="400px">
            </div>
            <div class="img4">
                <h1>Pilah sampah dengan benar.</h1>
                <img src="/img/slide/1.png" alt="" width="150px" class="mt1">
            </div>
            <div class="img5">
                <h1>Daur ulang untuk masa depan.</h1>
                <img src="/img/slide/5.png" alt="" width="100px" class="mt1">
            </div>
        </div>
        <!-- End Gambar Slide -->
    </div>
    <!-- End Slider -->

    <!-- Kategori -->
    <div class="kategori kategori1">
        <h4>Botol Plastik</h4>
        <p>Dari berbagai merk.</p>
        <a href="" class="btn-primary mt5">Beli sekarang</a>
        <img src="./img/botol.png" alt="jual-botol-aqua" />
    </div>
    <div class="kategori kategori2">
        <h4>Kardus Indomie</h4>
        <p>Cocok untuk packing.</p>
        <a href="" class="btn-warning mt5">Beli sekarang</a>
        <img src="./img/kardus.png" alt="jual-kardus-bekas" />
    </div>
    <div class="kategori kategori3">
        <h4>Besi Kiloan</h4>
        <p>Alat-alat besi bekas.</p>
        <a href="" class="btn-secondary mt5">Beli sekarang</a>
        <img src="./img/besi.png" alt="jual-besi-bekas" />
    </div>
    <div class="kategori kategori4">
        <h4>Kain Perca</h4>
        <p>Bahan katun halus.</p>
        <a href="" class="btn-danger mt5">Beli sekarang</a>
        <img src="./img/kain.png" alt="jual-kain-perca" />
    </div>
    <!-- End Kategori -->
</header>
<!-- End Slider & Kategori -->

<!-- Slider Botol -->
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
<!-- End Slider Botol -->

<!-- Slider Kardus -->
<h1 class="mt5">Kardus Bekas</h1>
<div class="product-slider">
    <a class="product-item product-item1" href="">
        <img src="./img/kardus/kardus1.png" alt="rumah-kucing-kardus" />
        <h4>Rumah Kucing Kardus</h4>
        <p class="green">Rp25.000,-</p>
        <p class="grey">Kota Semarang</p>
    </a>
    <a class="product-item product-item2" href="">
        <img src="./img/kardus/kardus2.png" alt="karakter-mini-kardus" />
        <h4>Karakter Mini Kardus</h4>
        <p class="green">Rp15.000,-</p>
        <p class="grey">Jakarta Barat</p>
    </a>
    <a class="product-item product-item3" href="">
        <img src="./img/kardus/kardus3.png" alt="lampu-kardus-elegan" />
        <h4>Lampu Kardus Elegan</h4>
        <p class="green">Rp25.000,-</p>
        <p class="grey">Papua Barat</p>
    </a>
    <a class="product-item product-item4" href="">
        <img src="./img/kardus/kardus4.png" alt="gundam-kardus-mahal" />
        <h4>Gundam Kardus Mahal</h4>
        <p class="green">Rp500.000,-</p>
        <p class="grey">Tangerang Selatan</p>
    </a>
    <a class="product-item product-item5" href="">
        <img src="./img/kardus/kardus5.png" alt="kardus-bekas-indomie" />
        <h4>Kardus Bekas Indomie</h4>
        <p class="green">Rp10.000,-</p>
        <p class="grey">Kab. Semarang</p>
    </a>
</div>
<!-- End Slider Kardus -->

<!-- Slider Besi -->
<h1 class="mt5">Besi Bekas</h1>
<div class="product-slider">
    <a class="product-item product-item1" href="">
        <img src="./img/besi/besi1.png" alt="besi-kiloan-scrap" />
        <h4>Besi Kiloan Scrap</h4>
        <p class="green">Rp35.000,-</p>
        <p class="grey">Kota Semarang</p>
    </a>
    <a class="product-item product-item2" href="">
        <img src="./img/besi/besi2.png" alt="mur-baut-bekas" />
        <h4>Mur dan Baut Bekas</h4>
        <p class="green">Rp15.000,-</p>
        <p class="grey">Jakarta Barat</p>
    </a>
    <a class="product-item product-item3" href="">
        <img src="./img/besi/besi3.png" alt="miniatur-motor-besi" />
        <h4>Miniatur Motor</h4>
        <p class="green">Rp225.000,-</p>
        <p class="grey">Papua Barat</p>
    </a>
    <a class="product-item product-item4" href="">
        <img src="./img/besi/besi4.png" alt="sofa-drum-besi" />
        <h4>Sofa Drum Besi</h4>
        <p class="green">Rp115.000,-</p>
        <p class="grey">Tangerang Selatan</p>
    </a>
    <a class="product-item product-item5" href="">
        <img src="./img/besi/besi5.png" alt="besi-bekas-kiloan" />
        <h4>Paku Bekas Kiloan</h4>
        <p class="green">Rp25.000,-</p>
        <p class="grey">Kab. Semarang</p>
    </a>
</div>
<!-- End Slider Besi -->

<script src="/js/index.js"></script>
<?= $this->endSection(); ?>