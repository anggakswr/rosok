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
        <div class="nav-items">
            <!-- Logo Brand -->
            <a href="/">
                <img src="/img/rosok-logo.png" alt="rosok-logo" />
                <h1>Rosok.com</h1>
            </a>

            <!-- Kotak Pencarian -->
            <form action="/cari" method="get">
                <?= csrf_field(); ?>
                <input type="text" name="rosok" placeholder="Cari barang rosok" />
                <button type="submit">Cari</button>
            </form>

            <div>
                <?php if (session()->get('isLoggedIn')) : ?>
                    <!-- Tombol Nama Akun -->
                    <a class="btn-primary tombolnav">
                        <?php if (session()->get('foto') != null) : ?>
                            <img src="/img/uploads/user/<?= session()->get('foto'); ?>" alt="<?= session()->get('username'); ?>">
                        <?php endif; ?>
                        <?= session()->get('username'); ?>
                    </a>
                <?php else : ?>
                    <!-- Tombol Daftar -->
                    <a href="/users" class="btn-primary">Login</a>
                <?php endif; ?>
                <div class="navmenu hidden">
                    <a href="/barang/create">Tambah barang</a>
                    <a href="/barang">Daftar barang</a>
                    <a href="/users/profile">Edit Profile</a>
                    <a href="/users/logout">Logout</a>
                </div>
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
    <footer class="mt5">
        <div class="footer-items flex">
            <p class="grey">Copyright 2020 &copy; Rosok.com</p>
            <p>
                <a href="/tentang">Tentang</a>
                &middot;
                <a href="/kontak">Kontak</a>
                &middot;
                <a href="/bantuan">Bantuan</a>
            </p>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- JS -->
    <script src="/js/script.js"></script>
    <!-- End JS -->
</body>

</html>