<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title; ?> - Rosok.com</title>
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
</head>

<body>
    <!-- Nav -->
    <div class="nav">
        <!-- Logo Brand -->
        <a href="/">
            <img src="/img/rosok-logo.png" alt="rosok-logo" />
            <h1>Rosok.com</h1>
        </a>

        <!-- Kotak Pencarian -->
        <form action="cari" method="get">
            <input type="text" name="rosok" placeholder="Cari barang rosok" />
            <button type="submit">Cari</button>
        </form>

        <div>
            <?php if (session()->get('isLoggedIn')) : ?>
                <!-- Tombol Nama Akun -->
                <p class="btn-primary tombolnav">
                    &#128100; <?= session()->get('username'); ?>
                </p>
            <?php else : ?>
                <!-- Tombol Daftar -->
                <a href="/users" class="btn-primary">Login</a>
            <?php endif; ?>
            <div class="navmenu hidden">
                <a href="/barang/create">Tambah barang</a>
                <a href="/barang">Daftar barang</a>
                <a href="/">Pengaturan</a>
                <a href="/users/logout">Logout</a>
            </div>
        </div>
    </div>
    <!-- End Nav -->

    <!-- Container -->
    <div class="container">
        <?= $this->renderSection('content'); ?>
    </div>
    <!-- End Container -->

    <!-- Footer -->
    <footer class="mt5 flex">
        <p class="grey">Copyright 2020 &copy; Rosok.com</p>
        <p>
            <a href="/tentang">Tentang</a>
            &middot;
            <a href="/kontak">Kontak</a>
            &middot;
            <a href="/bantuan">Bantuan</a>
        </p>
    </footer>
    <!-- End Footer -->

    <!-- JS -->
    <script src="/js/script.js"></script>
    <!-- End JS -->
</body>

</html>