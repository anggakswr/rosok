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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">Rosok.com</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <?php if (session()->get('isLoggedIn')) : ?>
                        <!-- Sudah Login -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php if (session()->get('foto') != null) : ?>
                                    <img src="/img/uploads/user/<?= session()->get('foto'); ?>" alt="<?= session()->get('username'); ?>" width="15px" class="rounded-circle mr-2">
                                <?php endif; ?>
                                <?= session()->get('username'); ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/barang/tambah">Tambah barang</a>
                                <a class="dropdown-item" href="/barang">Daftar barang</a>
                                <a class="dropdown-item" href="/users/profile">Edit Profil</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/users/logout">Logout</a>
                            </div>
                        </li>
                        <!-- End Sudah Login -->
                    <?php else : ?>
                        <!-- Belum Login -->
                        <li class="nav-item">
                            <a class="nav-link" href="/users/index">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/users/daftar">Daftar</a>
                        </li>
                        <!-- End Belum Login -->
                    <?php endif; ?>
                </ul>
                <form class="form-inline my-2 my-lg-0" action="/pages/cari" method="get">
                    <input class="form-control form-control-sm mr-sm-2" type="search" placeholder="Cari barang rosok" name="rosok">
                    <button class="btn btn-sm btn-outline-primary my-2 my-sm-0" type="submit">Cari</button>
                </form>
            </div>
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