<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <a href="/pelamar/create" class="btn btn-primary mt-3">Tambah Data Pelamar</a>
            <h1 class="mt-2">Daftar Pelamar</h1>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>


            <?php endif; ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">NIK Pelamar</th>
                        <th scope="col">Nama Pelamar</th>
                        <th scope="col">Email Pelamar</th>
                        <th scope="col">CV Pelamar</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($pelamar as $plr) : ?>
                        <tr>
                            <th scope="row"><?= $no++; ?></th>
                            <td><?= $plr['nik_pelamar']; ?></td>
                            <td><?= $plr['nama_pelamar']; ?></td>
                            <td><?= $plr['email_pelamar']; ?></td>
                            <td><?= $plr['cv_pelamar']; ?></td>
                            <td>
                                <a href="/pelamar/edit/<?= $plr['id']; ?>" class="btn btn-success">Edit</a>
                                <form action="/pelamar/<?= $plr['id']; ?>" method="post" class="d-inline">
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