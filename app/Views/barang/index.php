<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<?php if (session()->getFlashdata('pesan')) : ?>
    <div class="notif">
        <div><?= session()->getFlashdata('pesan'); ?></div>
    </div>
<?php endif; ?>

<div class="flex">
    <!-- Kotak Pencarian -->
    <form action="" method="post">
        <input type="text" placeholder="Cari barang dagangan" />
        <button>Cari</button>
    </form>
    <!-- End Kotak Pencarian -->

    <!-- Tombols -->
    <div>
        <button>Kategori &darr;</button>
        <button>Urutkan &darr;</button>
        <a href="/barang/create" class="btn-primary">Tambah Barang</a>
        <a href="" class="btn-danger">Hapus Sekaligus</a>
    </div>
    <!-- End Tombols -->
</div>

<!-- Table -->
<table class="mt3">
    <tr>
        <th>#</th>
        <th>Foto</th>
        <th>Nama barang</th>
        <th>Harga</th>
        <th>Dilihat</th>
        <th>Atur</th>
    </tr>
    <?php foreach ($barang as $b) : ?>
        <tr>
            <td><input type="checkbox" name="" id="" /></td>
            <td>
                <img src="/img/uploads/barang/foto.jpg" alt="<?= $b['nama']; ?>" width="100px" />
            </td>
            <td><?= $b['nama']; ?></td>
            <td>Rp <?= $b['harga']; ?>,-</td>
            <td>205x</td>
            <td>
                <a href="/barang/<?= $b['slug']; ?>" class="btn-primary">Lihat</a>
                <a href="/barang/edit/<?= $b['slug']; ?>" class="btn-secondary">Edit</a>
                <form action="/barang/<?= $b['id']; ?>" method="post" class="inline">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
    <tr>
        <td><input type="checkbox" name="" id="" /></td>
        <td>
            <img src="./img/kain.png" alt="ipsum" />
        </td>
        <td>Ipsum</td>
        <td>Rp 20.000,-</td>
        <td>125x</td>
        <td>
            <a href="" class="btn-primary">Lihat</a>
            <a href="" class="btn-secondary">Edit</a>
            <a href="" class="btn-danger">Hapus</a>
        </td>
    </tr>
</table>
<!-- End Table -->

<!-- Notifikasi -->
<script>
    const divMuncul = document.querySelector(".notif");
    divMuncul.classList.add("muncul");

    setInterval(() => {
        divMuncul.classList.remove("muncul");
    }, 5000);
</script>
<!-- End Notifikasi -->
<?= $this->endSection(); ?>