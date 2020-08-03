<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!-- Carousel -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/img/slide/slide1.jpeg" class="d-block w-100" alt="pengepul-rosok">
        </div>
        <div class="carousel-item">
            <img src="/img/slide/slide2.jpeg" class="d-block w-100" alt="daur-ulang">
        </div>
        <div class="carousel-item">
            <img src="/img/slide/slide3.jpeg" class="d-block w-100" alt="jual-beli-sampah">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- End Carousel -->

<!-- Kategori -->
<h2 class="mt-3">Kategori</h2>
<div class="row mt-3 mb-5 justify-content-around kategori text-center">
    <a class="col-2 bg-primary rounded-pill text-light text-decoration-none" href="/cari?kategori=Botol+Plastik">
        Botol Plastik
    </a>
    <a class="col-2 bg-secondary rounded-pill text-light text-decoration-none" href="/cari?kategori=Beso+Kiloan">
        Besi Kiloan
    </a>
    <a class="col-2 bg-success rounded-pill text-light text-decoration-none" href="/cari?kategori=Kardus+Indomie">
        Kardus Indomie
    </a>
    <a class="col-2 bg-danger rounded-pill text-light text-decoration-none" href="/cari?kategori=Kain+Perca">
        Kain Perca
    </a>
</div>
<!-- End Kategori -->

<?php helper('text'); ?>

<!-- Kategori 1 -->
<h2 class="mt-3">Botol Plastik</h2>
<div class="row">
    <?php foreach ($botol as $b) : ?>
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
<!-- End Kategori 1 -->

<!-- Kategori 2 -->
<h2 class="mt-3">Kardus Indomie</h2>
<div class="row">
    <?php foreach ($kardus as $k) : ?>
        <div class="col-6 col-md-3 col-lg-2 mt-3">
            <a href="/barang/<?= $k['slug']; ?>" class="card text-decoration-none">
                <div class="foto-kecil" style="background-image: url('/img/uploads/barang/<?= $k['foto']; ?>');"></div>
                <div class="card-body">
                    <p class="card-text">
                        <strong>
                            <?= character_limiter($k['nama'], 20); ?>
                        </strong>
                    </p>
                    <p class="card-subtitle text-success">
                        Rp <?= number_format($k['harga'], 2, ',', '.'); ?>
                    </p>
                    <p class="card-subtitle text-muted">
                        Kota Semarang
                    </p>
                </div>
            </a>
        </div>
    <?php endforeach; ?>
</div>
<!-- End Kategori 2 -->

<!-- Kategori 3 -->
<h2 class="mt-3">Besi Kiloan</h2>
<div class="row">
    <?php foreach ($besi as $be) : ?>
        <div class="col-6 col-md-3 col-lg-2 mt-3">
            <a href="/barang/<?= $be['slug']; ?>" class="card text-decoration-none">
                <div class="foto-kecil" style="background-image: url('/img/uploads/barang/<?= $be['foto']; ?>');"></div>
                <div class="card-body">
                    <p class="card-text">
                        <strong>
                            <?= character_limiter($be['nama'], 20); ?>
                        </strong>
                    </p>
                    <p class="card-subtitle text-success">
                        Rp <?= number_format($be['harga'], 2, ',', '.'); ?>
                    </p>
                    <p class="card-subtitle text-muted">
                        Kota Semarang
                    </p>
                </div>
            </a>
        </div>
    <?php endforeach; ?>
</div>
<!-- End Kategori 3 -->

<!-- Kategori 4 -->
<h2 class="mt-3">Kain Perca</h2>
<div class="row">
    <?php foreach ($kain as $ka) : ?>
        <div class="col-6 col-md-3 col-lg-2 mt-3">
            <a href="/barang/<?= $ka['slug']; ?>" class="card text-decoration-none">
                <div class="foto-kecil" style="background-image: url('/img/uploads/barang/<?= $ka['foto']; ?>');"></div>
                <div class="card-body">
                    <p class="card-text">
                        <strong>
                            <?= character_limiter($ka['nama'], 20); ?>
                        </strong>
                    </p>
                    <p class="card-subtitle text-success">
                        Rp <?= number_format($ka['harga'], 2, ',', '.'); ?>
                    </p>
                    <p class="card-subtitle text-muted">
                        Kota Semarang
                    </p>
                </div>
            </a>
        </div>
    <?php endforeach; ?>
</div>
<!-- End Kategori 4 -->
<?= $this->endSection(); ?>