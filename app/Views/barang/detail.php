<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!-- Link SEO -->
<div class="row mt-3">
    <div class="col">
        <a href="/" class="text-decoration-none">Rosok</a>
        &raquo;
        <a href="http://localhost:8080/cari?kategori=<?= $barang['kategori']; ?>" class="text-decoration-none"><?= $barang['kategori']; ?></a>
        &raquo;
        <a class="text-muted"><?= $barang['nama']; ?></a>
    </div>
</div>
<!-- End Link SEO -->

<!-- Barang Header -->
<div class="row">
    <!-- Foto Barang -->
    <div class="col-12 col-md-5 col-lg-4 mt-3 foto-detail-barang">
        <div class="row barang-header">
            <div class="foto-besar" style="background-image: url('/img/uploads/barang/<?= $barang['foto']; ?>');">
            </div>
        </div>
        <div class="row barang-header">
            <?php if (isset($foto[1]['foto'])) : ?>
                <?php foreach ($foto as $f) : ?>
                    <div class="col-2 foto-kecil" style="background-image: url('/img/uploads/barang/<?= $f['foto']; ?>');"></div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
    <!-- End Foto Barang -->

    <div class="col mt-3">
        <!-- Info Barang -->
        <h3><?= $barang['nama']; ?></h3>
        <h3 class="text-success text-monospace">
            Rp <?= number_format($barang['harga'], 2, ',', '.'); ?>
        </h3>
        <div class="row">
            <div class="col-6 col-md-6 col-lg-3">
                <div class="row">
                    <div class="col">
                        <a class="text-muted">Berat</a>
                        <p class="font-weight-bold text-monospace">
                            <?= $barang['berat']; ?> GRAM
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-6 col-lg-3">
                <div class="col">
                    <a class="text-muted">Dikirim dari</a>
                    <p class="font-weight-bold text-monospace">
                        <?= $user['lokasi']; ?>
                    </p>
                </div>
            </div>
        </div>
        <!-- End Info Barang -->

        <!-- Interaksi Barang -->
        <div class="row">
            <div class="col">
                <a href="#" class="btn btn-sm btn-success">Hubungi penjual</a>
                <a href="#" class="btn btn-sm btn-secondary">Share</a>
                <?php if (isset($cekSukaBarang)) : ?>
                    <form action="/barang/unsukaBarang/<?= $cekSukaBarang['id']; ?>" method="post" class="d-inline">
                        <?= csrf_field(); ?>
                        <button type="submit" class="btn btn-sm btn-danger">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-hand-thumbs-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16v-1c.563 0 .901-.272 1.066-.56a.865.865 0 0 0 .121-.416c0-.12-.035-.165-.04-.17l-.354-.354.353-.354c.202-.201.407-.511.505-.804.104-.312.043-.441-.005-.488l-.353-.354.353-.354c.043-.042.105-.14.154-.315.048-.167.075-.37.075-.581 0-.211-.027-.414-.075-.581-.05-.174-.111-.273-.154-.315L12.793 9l.353-.354c.353-.352.373-.713.267-1.02-.122-.35-.396-.593-.571-.652-.653-.217-1.447-.224-2.11-.164a8.907 8.907 0 0 0-1.094.171l-.014.003-.003.001a.5.5 0 0 1-.595-.643 8.34 8.34 0 0 0 .145-4.726c-.03-.111-.128-.215-.288-.255l-.262-.065c-.306-.077-.642.156-.667.518-.075 1.082-.239 2.15-.482 2.85-.174.502-.603 1.268-1.238 1.977-.637.712-1.519 1.41-2.614 1.708-.394.108-.62.396-.62.65v4.002c0 .26.22.515.553.55 1.293.137 1.936.53 2.491.868l.04.025c.27.164.495.296.776.393.277.095.63.163 1.14.163h3.5v1H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z" />
                            </svg>
                            <?= $jumlahSukaBarang; ?> Batal suka barang
                        </button>
                    </form>
                <?php else : ?>
                    <form action="/barang/sukaBarang/<?= $barang['id']; ?>" method="post" class="d-inline">
                        <?= csrf_field(); ?>
                        <button type="submit" class="btn btn-sm btn-danger">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-hand-thumbs-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16v-1c.563 0 .901-.272 1.066-.56a.865.865 0 0 0 .121-.416c0-.12-.035-.165-.04-.17l-.354-.354.353-.354c.202-.201.407-.511.505-.804.104-.312.043-.441-.005-.488l-.353-.354.353-.354c.043-.042.105-.14.154-.315.048-.167.075-.37.075-.581 0-.211-.027-.414-.075-.581-.05-.174-.111-.273-.154-.315L12.793 9l.353-.354c.353-.352.373-.713.267-1.02-.122-.35-.396-.593-.571-.652-.653-.217-1.447-.224-2.11-.164a8.907 8.907 0 0 0-1.094.171l-.014.003-.003.001a.5.5 0 0 1-.595-.643 8.34 8.34 0 0 0 .145-4.726c-.03-.111-.128-.215-.288-.255l-.262-.065c-.306-.077-.642.156-.667.518-.075 1.082-.239 2.15-.482 2.85-.174.502-.603 1.268-1.238 1.977-.637.712-1.519 1.41-2.614 1.708-.394.108-.62.396-.62.65v4.002c0 .26.22.515.553.55 1.293.137 1.936.53 2.491.868l.04.025c.27.164.495.296.776.393.277.095.63.163 1.14.163h3.5v1H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z" />
                            </svg>
                            <?= $jumlahSukaBarang; ?> Sukai Barang
                        </button>
                    </form>
                <?php endif; ?>
            </div>
        </div>
        <!-- End Interaksi Barang -->

        <!-- Profil Penjual -->
        <div class="media border mt-3">
            <img src="/img/uploads/user/<?= $user['foto']; ?>" alt="<?= $user['username']; ?>" width="80px" class="p-2">
            <div class="media-body">
                <div class="col">
                    <a class="font-weight-bold"><?= $user['username']; ?></a>
                    <p class="text-muted text-monospace"><?= $user['lokasi']; ?></p>
                </div>
                <div class="col mb-2">
                    <a href="/user/<?= $user['username']; ?>" class="btn btn-sm btn-danger">
                        Kunjungi penjual
                    </a>
                    <a href="#" class="btn btn-sm btn-secondary">Ulasan penjual</a>

                    <?php if (isset($cekSukaUser)) : ?>
                        <form action="/users/unsukaPenjual/<?= $cekSukaUser['id']; ?>" method="post" class="d-inline">
                            <?= csrf_field(); ?>
                            <button type="submit" class="btn btn-sm btn-danger">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-hand-thumbs-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16v-1c.563 0 .901-.272 1.066-.56a.865.865 0 0 0 .121-.416c0-.12-.035-.165-.04-.17l-.354-.354.353-.354c.202-.201.407-.511.505-.804.104-.312.043-.441-.005-.488l-.353-.354.353-.354c.043-.042.105-.14.154-.315.048-.167.075-.37.075-.581 0-.211-.027-.414-.075-.581-.05-.174-.111-.273-.154-.315L12.793 9l.353-.354c.353-.352.373-.713.267-1.02-.122-.35-.396-.593-.571-.652-.653-.217-1.447-.224-2.11-.164a8.907 8.907 0 0 0-1.094.171l-.014.003-.003.001a.5.5 0 0 1-.595-.643 8.34 8.34 0 0 0 .145-4.726c-.03-.111-.128-.215-.288-.255l-.262-.065c-.306-.077-.642.156-.667.518-.075 1.082-.239 2.15-.482 2.85-.174.502-.603 1.268-1.238 1.977-.637.712-1.519 1.41-2.614 1.708-.394.108-.62.396-.62.65v4.002c0 .26.22.515.553.55 1.293.137 1.936.53 2.491.868l.04.025c.27.164.495.296.776.393.277.095.63.163 1.14.163h3.5v1H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z" />
                                </svg>
                                <?= $jumlahSukaUser; ?> Batal suka User
                            </button>
                        </form>
                    <?php else : ?>
                        <form action="/users/sukaPenjual/<?= $user['id']; ?>" method="post" class="d-inline">
                            <?= csrf_field(); ?>
                            <button type="submit" class="btn btn-sm btn-danger">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-hand-thumbs-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16v-1c.563 0 .901-.272 1.066-.56a.865.865 0 0 0 .121-.416c0-.12-.035-.165-.04-.17l-.354-.354.353-.354c.202-.201.407-.511.505-.804.104-.312.043-.441-.005-.488l-.353-.354.353-.354c.043-.042.105-.14.154-.315.048-.167.075-.37.075-.581 0-.211-.027-.414-.075-.581-.05-.174-.111-.273-.154-.315L12.793 9l.353-.354c.353-.352.373-.713.267-1.02-.122-.35-.396-.593-.571-.652-.653-.217-1.447-.224-2.11-.164a8.907 8.907 0 0 0-1.094.171l-.014.003-.003.001a.5.5 0 0 1-.595-.643 8.34 8.34 0 0 0 .145-4.726c-.03-.111-.128-.215-.288-.255l-.262-.065c-.306-.077-.642.156-.667.518-.075 1.082-.239 2.15-.482 2.85-.174.502-.603 1.268-1.238 1.977-.637.712-1.519 1.41-2.614 1.708-.394.108-.62.396-.62.65v4.002c0 .26.22.515.553.55 1.293.137 1.936.53 2.491.868l.04.025c.27.164.495.296.776.393.277.095.63.163 1.14.163h3.5v1H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z" />
                                </svg>
                                <?= $jumlahSukaUser; ?> Sukai User
                            </button>
                        </form>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!-- End Profil Penjual -->
    </div>
</div>
<!-- Barang Header -->

<!-- Barang Body -->
<div class="card mt-3">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="#deskripsi" id="deskripsi">Deskripsi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-muted" href="#">Ulasan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-muted" href="#">Diskusi</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <!-- <h5 class="card-title">Special title treatment</h5> -->
        <p class="card-text"><?= $barang['deskripsi']; ?></p>
    </div>
</div>
<!-- End Barang Body -->

<?php helper('text'); ?>

<!-- Barang Footer -->
<h3 class="mt-5">Barang dari Kategori <?= $barang['kategori']; ?></h3>
<div class="row">
    <?php foreach ($barangKategori as $b) : ?>
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
                    <p class="card-subtitle text-muted">KOTA SEMARANG</p>
                </div>
            </a>
        </div>
    <?php endforeach; ?>
</div>
<!-- End Barang Footer -->

<script>
    // jika foto kecil diklik, jadilah besar
    const fotoDetail = document.querySelector('.foto-detail-barang');
    const fotoBesar = document.querySelector('.foto-besar');

    fotoDetail.addEventListener('click', function(e) {
        if (e.target.className == 'foto-kecil') {
            fotoBesar.style.backgroundImage = e.target.style.backgroundImage;
        }
    });
</script>
<?= $this->endSection(); ?>