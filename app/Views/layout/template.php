<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/select2.min.css">

    <title><?= $title; ?> - Rosok.com | Jual Beli Barang Rosok se-Indonesia</title>
</head>

<body>
    <!-- Nav -->
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <?php if (session()->get('isLoggedIn')) : ?>
                <!-- Kalau sudah login -->
                <div class="dropdown">
                    <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php if (session()->get('foto') != null) : ?>
                            <!-- jika ad foto, tampilkan -->
                            <div class="foto-kecil d-inline-block" style="background-image: url('/img/uploads/user/<?= session()->get('foto'); ?>');"></div>
                        <?php endif; ?>
                        <?= session()->get('username'); ?>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="/barang/tambah">Tambah barang</a>
                        <a class="dropdown-item" href="/barang">Daftar barang</a>
                        <a class="dropdown-item" href="/users/profile">Edit Profil</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/users/logout">Logout</a>
                    </div>
                    <button class="btn btn-sm btn-outline-primary btn-cari">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
                            <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                        </svg>
                    </button>
                </div>
            <?php else : ?>
                <!-- Kalau belum login -->
                <div>
                    <a class="navbar-brand" href="/users">Login</a>
                    <a class="navbar-brand" href="/users/daftar">Daftar</a>
                </div>
            <?php endif; ?>

            <!-- Pencarian -->
            <form class="form-inline" action="/pages/cari" method="get">
                <div class="input-group">
                    <input type="text" class="form-control form-control-sm" placeholder="Cari rosok" name="rosok">
                    <div class="input-group-append">
                        <button class="btn btn-sm btn-outline-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>

            <!-- Brand -->
            <a class="navbar-brand rosok-com" href="/">Rosok.com</a>
        </div>
    </nav>
    <!-- End Nav -->

    <!-- Container -->
    <div class="container">
        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')) : ?>
            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                <?= session()->getFlashdata('error'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>

        <?= $this->renderSection('content'); ?>

        <footer class="d-flex justify-content-between mt-5 p-2">
            <div>Copyright &copy; Rosok.com 2020. All rights reserved.</div>
            <div>
                <a href="/tentang">Tentang</a> &middot;
                <a href="/kontak">Kontak</a> &middot;
                <a href="/bantuan">Bantuan</a>
            </div>
        </footer>
    </div>

    <!-- End Container -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/js/jquery-3.5.1.min.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="/js/bootstrap.min.js"></script>
    <?php if (
        uri_string() == 'users/daftar'
        || uri_string() == 'users/profile'
        || uri_string() == 'barang/tambah'
        || uri_string() == 'barang/edit'
    ) : ?>
        <script src="/js/select2.min.js"></script>
        <script src="/js/select2.js"></script>
    <?php endif; ?>

    <?php if (uri_string() == 'users/profile') : ?>
        <script src="/js/profile.js"></script>
    <?php endif; ?>

    <?php if (uri_string() == 'barang/tambah' || uri_string() == 'barang/edit') : ?>
        <script src="/js/tambah.js"></script>
    <?php endif; ?>
</body>

</html>