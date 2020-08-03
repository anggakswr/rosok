<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!-- Filter -->
<form class="mt-3" action="" method="post">
    <?php $request = \Config\Services::request(); ?>
    <div class="form-row">
        <div class="col-6 col-md-3 col-lg-2 mt-3">
            <input type="text" class="form-control form-control-sm" placeholder="Cari barang dagangan" name="keyword" value="<?= $request->getPost('keyword'); ?>">
        </div>
        <div class="col-6 col-md-3 col-lg-2 mt-3">
            <input type="text" class="form-control form-control-sm" placeholder="Harga maksimal" name="hargaMaks" value="<?= $request->getPost('hargaMaks'); ?>">
        </div>
        <div class="col-6 col-md-3 col-lg-2 mt-3">
            <input type="text" class="form-control form-control-sm" placeholder="Harga minimum" name="hargaMin" value="<?= $request->getPost('hargaMin'); ?>">
        </div>
        <div class="col-6 col-md-3 col-lg-2 mt-3">
            <select class="custom-select custom-select-sm" name="kategori">
                <?php if ($request->getPost('kategori')) : ?>
                    <option value="<?= $request->getPost('kategori'); ?>">
                        <?= $request->getPost('kategori'); ?>
                    </option>
                    <option value="">-- Kategori --</option>
                <?php else : ?>
                    <option value="">-- Kategori --</option>
                <?php endif; ?>

                <?php foreach ($kategori as $k) : ?>
                    <?php if ($k['kategori'] != $request->getPost('kategori')) : ?>
                        <option value="<?= $k['kategori']; ?>"><?= $k['kategori']; ?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="col-6 col-md-3 col-lg-2 mt-3">
            <select class="custom-select custom-select-sm" name="urutkan">
                <?php if ($request->getPost('urutkan')) : ?>
                    <option value="<?= $request->getPost('urutkan'); ?>">
                        <?= $request->getPost('urutkan'); ?>
                    </option>
                    <option value="">-- Urutkan --</option>
                <?php else : ?>
                    <option value="">-- Urutkan --</option>
                <?php endif; ?>
                <option value="Harga rendah ke tinggi">Harga rendah ke tinggi</option>
                <option value="Harga tinggi ke rendah">Harga tinggi ke rendah</option>
                <option value="Paling banyak suka">Paling banyak suka</option>
                <option value="">Terbaru</option>
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
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-sm btn-danger tombol-hapus" data-toggle="modal" data-target="#exampleModal" data-id="/barang/<?= $b['id']; ?>">
                        Hapus
                    </button>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="" method="post" class="form-hapus">
            <?= csrf_field(); ?>
            <input type="hidden" name="_method" value="DELETE">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Anda yakin ingin menghapus?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    const tombolHapus = document.querySelectorAll('.tombol-hapus');
    const formHapus = document.querySelector('.form-hapus');

    for (let i = 0; i < tombolHapus.length; i++) {
        tombolHapus[i].onclick = function() {
            formHapus.action = tombolHapus[i].dataset.id;
        }
    }
</script>
<?= $this->endSection(); ?>