<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!-- Carousel -->
<div id="carouselExampleControls" class="carousel slide mt-3" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/img/slide/template(3).jpg" class="d-block w-100" alt="pengepul-rosok">
        </div>
        <div class="carousel-item">
            <img src="/img/slide/template(2).jpg" class="d-block w-100" alt="daur-ulang">
        </div>
        <div class="carousel-item">
            <img src="/img/slide/template(1).jpg" class="d-block w-100" alt="jual-beli-sampah">
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
<div class="row mb-5 justify-content-around kategori text-center">
    <a class="col-5 col-lg-2 mt-3 bg-primary rounded-pill text-light text-decoration-none" href="/cari?kategori=Botol+Plastik">
        Botol Plastik
    </a>
    <a class="col-5 col-lg-2 mt-3 bg-secondary rounded-pill text-light text-decoration-none" href="/cari?kategori=Besi+Kiloan">
        Besi Kiloan
    </a>
    <a class="col-5 col-lg-2 mt-3 bg-success rounded-pill text-light text-decoration-none" href="/cari?kategori=Kardus+Indomie">
        Kardus Indomie
    </a>
    <a class="col-5 col-lg-2 mt-3 bg-danger rounded-pill text-light text-decoration-none" href="/cari?kategori=Kain+Perca">
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

<script>
    const btnCari = document.querySelector('.btn-cari');
    const rosokCom = document.querySelector('.rosok-com');
    const navForm = document.querySelector('.navbar form');

    btnCari.onclick = function() {
        rosokCom.classList.toggle('d-none');
        navForm.classList.toggle('d-inline');
        if (rosokCom.className == 'navbar-brand rosok-com d-none') {
            btnCari.innerHTML = `
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left" fill="currentColor"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M5.854 4.646a.5.5 0 0 1 0 .708L3.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0z" />
            <path fill-rule="evenodd" d="M2.5 8a.5.5 0 0 1 .5-.5h10.5a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
        </svg>`;
        } else {
            btnCari.innerHTML = `
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
            <path fill-rule="evenodd"
                d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
        </svg>`;
        }
    }
</script>
<?= $this->endSection(); ?>