<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!-- Filter -->
<form action="" method="post">
    <?= csrf_field(); ?>
    <div class="form-row">
        <div class="col-6 col-md-3 col-lg-2 mt-3">
            <input type="text" class="form-control form-control-sm" placeholder="Cari barang dagangan" name="keyword">
        </div>
        <div class="col-6 col-md-3 col-lg-2 mt-3">
            <input type="text" class="form-control form-control-sm" placeholder="Harga maksimal">
        </div>
        <div class="col-6 col-md-3 col-lg-2 mt-3">
            <input type="text" class="form-control form-control-sm" placeholder="Harga minimum">
        </div>
        <div class="col-6 col-md-3 col-lg-2 mt-3">
            <select class="custom-select custom-select-sm">
                <option selected>-- Pilih kategori --</option>
                <option value="Botol Plastik">Botol Plastik</option>
                <option value="Besi Kiloan">Besi Kiloan</option>
                <option value="Kardus">Kardus</option>
            </select>
        </div>
        <div class="col-6 col-md-3 col-lg-2 mt-3">
            <select class="custom-select custom-select-sm">
                <option selected>-- Urutkan --</option>
                <option value="Harga rendah ke tinggi">Harga rendah ke tinggi</option>
                <option value="Harga tinggi ke rendah">Harga tinggi ke rendah</option>
                <option value="Paling banyak suka">Paling banyak suka</option>
                <option value="Terbaru">Terbaru</option>
            </select>
        </div>
        <div class="col-6 col-md-3 col-lg-2 mt-3">
            <button class="btn btn-sm btn-outline-primary" type="submit">Cari</button>
        </div>
    </div>
</form>
<!-- End Filter -->

<!-- Table Barang -->
<table class="table table-hover mt-5">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Foto</th>
            <th scope="col">Nama</th>
            <th scope="col" class="nomobile">Harga</th>
            <th scope="col" class="nomobile">Dilihat</th>
            <th scope="col" class="nomobile">Suka</th>
            <th scope="col">Atur</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($barang as $b) : ?>
            <tr>
                <th scope="row">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    </div>
                </th>
                <td>
                    <a href="/barang/<?= $b['slug']; ?>">
                        <div class="foto-kecil" style="background-image: url('/img/uploads/barang/<?= $b['foto']; ?>');"></div>
                    </a>
                </td>
                <td><?= $b['nama']; ?></td>
                <td class="nomobile">Rp <?= number_format($b['harga'], 2, ',', '.'); ?></td>
                <td class="nomobile">200x</td>
                <td class="nomobile">20 suka</td>
                <td>
                    <a href="/barang/<?= $b['slug']; ?>" class="btn btn-sm btn-primary">Lihat</a>
                    <a href="/barang/edit/<?= $b['slug']; ?>" class="btn btn-sm btn-secondary">Edit</a>
                    <form action="/barang/<?= $b['id']; ?>" method="post" class="d-inline">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<!-- End Table Barang -->

<!-- jika users blm menjual barang apapun -->
<?php if (empty($barang)) : ?>
    <h3 class="text-secondary text-center mt-3">Belum ada barang yang dijual.</h3>
<?php endif; ?>

<?= $pager->links('barang', 'barang_pagination'); ?>
<?= $this->endSection(); ?>