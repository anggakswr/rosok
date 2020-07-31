<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">

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
                                Jere
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Tambah barang</a>
                                <a class="dropdown-item" href="#">Daftar barang</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Logout</a>
                            </div>
                        </li>
                        <!-- End Sudah Login -->
                    <?php else : ?>
                        <!-- Belum Login -->
                        <li class="nav-item">
                            <a class="nav-link" href="./login.html">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./daftar.html">Daftar</a>
                        </li>
                        <!-- End Belum Login -->
                    <?php endif; ?>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control form-control-sm mr-sm-2" type="search" placeholder="Cari barang rosok">
                    <button class="btn btn-sm btn-outline-primary my-2 my-sm-0" type="submit">Cari</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- End Nav -->

    <!-- Container -->
    <div class="container">
        <?= $this->renderSection('content'); ?>
    </div>

    <footer class="d-flex justify-content-between mt-5 p-5">
        <div>Copyright &copy; Rosok.com 2020. All rights reserved.</div>
        <div>
            <a href="#">Tentang</a> &middot;
            <a href="#">Kontak</a> &middot;
            <a href="#">Bantuan</a>
        </div>
    </footer>
    <!-- End Container -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/js/jquery-3.5.1.min.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="/js/bootstrap.min.js"></script>
</body>

</html>