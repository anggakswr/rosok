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
        <?= csrf_field(); ?>
        <input type="text" placeholder="Cari barang dagangan" name="keyword" />
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
                <a href="/barang/<?= $b['slug']; ?>">
                    <div class="gambar-kecil" style="background-image: url('/img/uploads/barang/<?= $b['foto']; ?>');"></div>
                </a>
            </td>
            <td><?= $b['nama']; ?></td>
            <td>Rp <?= number_format($b['harga'], 2, ',', '.'); ?>,-</td>
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
</table>
<!-- End Table -->

<!-- jika users blm menjual barang apapun -->
<?php if (empty($barang)) : ?>
    <h3 class="grey text-center mt3">Belum ada barang yang dijual.</h3>
<?php endif; ?>

<?= $pager->links('barang', 'barang_pagination'); ?>

<!-- Notifikasi -->
<script>
    const divMuncul = document.querySelector(".notif");
    if (divMuncul) {
        divMuncul.classList.add("muncul");

        setInterval(() => {
            divMuncul.classList.remove("muncul");
        }, 5000);
    }
</script>
<!-- End Notifikasi -->
<?= $this->endSection(); ?>