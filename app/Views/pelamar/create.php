<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Formulir Pendaftaran</h2>
            <form action="/pelamar/save" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="form-group row">
                    <label for="nik_pelamar" class="col-sm-2 col-form-label">NIK Pelamar</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control <?= ($validation->hasError('nik_pelamar')) ? 'is-invalid' : ''; ?>" id="nik_pelamar" placeholder="Masukkan NIK" name="nik_pelamar" autofocus value="<?= old('nik_pelamar'); ?>">
                        <div class="invalid-feedback">
                            NIK Belum Diisi ~
                        </div>
                    </div>

                </div>
                <div class="form-group row">
                    <label for="nama_pelamar" class="col-sm-2 col-form-label">Nama Pelamar</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_pelamar" placeholder="Masukkan Nama Pelamar" name="nama_pelamar" value="<?= old('nama_pelamar'); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email_pelamar" class="col-sm-2 col-form-label">Email Pelamar</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email_pelamar" placeholder="Masukkan Email Pelamar" name="email_pelamar" value="<?= old('email_pelamar'); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="cv_pelamar" class="col-sm-2 col-form-label">Upload</label>
                    <div class="col-sm-10">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input <?= ($validation->hasError('cv_pelamar')) ? 'is-invalid' : ''; ?>" id="cv_pelamar" name="cv_pelamar">
                            <div class="invalid-feedback">
                                <?= $validation->getError('cv_pelamar'); ?>
                            </div>
                            <label class="custom-file-label" for="cv_pelamar">Upload CV - KTP - NILAI..</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Daftar </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>