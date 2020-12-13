<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <a href="/kriteria/create" class="btn btn-primary mt-3">Tambah Kriteria</a>
            <h1 class="mt-2">Daftar Kriteria</h1>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>


            <?php endif; ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">SPK</th>
                        <th scope="col">Nama Kriteria</th>
                        <th scope="col">Sifat Kriteria</th>
                        <th scope="col">Bobot</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($kriteria as $krt) : ?>
                        <tr>
                            <th scope="row"><?= $no++; ?></th>
                            <td><?= $krt['spk_kriteria']; ?></td>
                            <td><?= $krt['nama_kriteria']; ?></td>
                            <td><?= $krt['sifat_kriteria']; ?></td>
                            <td><?= $krt['bobot_kriteria']; ?></td>
                            <td>
                                <a href="/kriteria/edit/<?= $krt['id']; ?>" class="btn btn-success">Edit</a>
                                <form action="/kriteria/<?= $krt['id']; ?>" method="post" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ga slur?');">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>



<?= $this->endSection(); ?>