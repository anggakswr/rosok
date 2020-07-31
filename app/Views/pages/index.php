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

<!-- Barang 1 -->
<h2 class="mt-3">Botol Plastik</h2>
<div class="row">
    <div class="col-6 col-md-3 col-lg-2 mt-3">
        <div class="card">
            <div class="foto-kecil" style="background-image: url('/img/uploads/barang/besi1.png');"></div>
            <div class="card-body">
                <p class="card-text">Botol Plastik Murah</p>
                <p class="card-subtitle text-success">Rp 50.000,00</p>
                <p class="card-subtitle text-muted">Kota Semarang</p>
            </div>
        </div>
    </div>
    <div class="col-6 col-md-3 col-lg-2 mt-3">
        <div class="card">
            <div class="foto-kecil" style="background-image: url('/img/uploads/barang/besi2.png');"></div>
            <div class="card-body">
                <p class="card-text">Botol Plastik Murah</p>
                <p class="card-subtitle text-success">Rp 50.000,00</p>
                <p class="card-subtitle text-muted">Kota Semarang</p>
            </div>
        </div>
    </div>
    <div class="col-6 col-md-3 col-lg-2 mt-3">
        <div class="card">
            <div class="foto-kecil" style="background-image: url('/img/uploads/barang/besi3.png');"></div>
            <div class="card-body">
                <p class="card-text">Botol Plastik Murah</p>
                <p class="card-subtitle text-success">Rp 50.000,00</p>
                <p class="card-subtitle text-muted">Kota Semarang</p>
            </div>
        </div>
    </div>
    <div class="col-6 col-md-3 col-lg-2 mt-3">
        <div class="card">
            <div class="foto-kecil" style="background-image: url('/img/uploads/barang/besi4.png');"></div>
            <div class="card-body">
                <p class="card-text">Botol Plastik Murah</p>
                <p class="card-subtitle text-success">Rp 50.000,00</p>
                <p class="card-subtitle text-muted">Kota Semarang</p>
            </div>
        </div>
    </div>
    <div class="col-6 col-md-3 col-lg-2 mt-3">
        <div class="card">
            <div class="foto-kecil" style="background-image: url('/img/uploads/barang/besi5.png');"></div>
            <div class="card-body">
                <p class="card-text">Botol Plastik Murah</p>
                <p class="card-subtitle text-success">Rp 50.000,00</p>
                <p class="card-subtitle text-muted">Kota Semarang</p>
            </div>
        </div>
    </div>
    <div class="col-6 col-md-3 col-lg-2 mt-3">
        <div class="card">
            <div class="foto-kecil" style="background-image: url('/img/uploads/barang/panjang1.jpg');"></div>
            <div class="card-body">
                <p class="card-text">Botol Plastik Murah</p>
                <p class="card-subtitle text-success">Rp 50.000,00</p>
                <p class="card-subtitle text-muted">Kota Semarang</p>
            </div>
        </div>
    </div>
</div>
<!-- End Barang 1 -->
<?= $this->endSection(); ?>