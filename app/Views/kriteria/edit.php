<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Ubah Kriteria</h2>
            <form action="/kriteria/update/<?= $kriteria['id']; ?>" method="post">
                <?= csrf_field(); ?>
                <input type="hidden" name="id" value="<?= $kriteria['id']; ?>">
                <div class="form-group row">
                    <label for="spk_kriteria" class="col-sm-2 col-form-label">SPK</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('spk_kriteria')) ? 'is-invalid' : ''; ?>" id="spk_kriteria" placeholder="Masukkan SPK" name="spk_kriteria" autofocus value="<?= $kriteria['spk_kriteria']; ?>">
                        <div class="invalid-feedback">
                            SPK Belum Diisi
                        </div>
                    </div>

                </div>
                <div class="form-group row">
                    <label for="nama_kriteria" class="col-sm-2 col-form-label">Nama Kriteria</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_kriteria" placeholder="Masukkan Nama Kriteria" name="nama_kriteria" value="<?= $kriteria['nama_kriteria']; ?>">
                    </div>
                </div>
                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">Sifat Kriteria</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sifat_kriteria" id="sifat_kriteria" value="Benefit" checked>
                                <label class="form-check-label" for="sifat_kriteria">
                                    Benefit
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sifat_kriteria" id="sifat_kriteria" value="Cost">
                                <label class="form-check-label" for="sifat_kriteria">
                                    Cost
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <div class="form-group row">
                    <label for="bobot_kriteria" class="col-sm-2 col-form-label">Bobot Kriteria</label>
                    <div class="col-sm-10">
                        <input type="float" class="form-control" id="bobot_kriteria" placeholder="Masukkan Bobot Kriteria" name="bobot_kriteria" value="<?= $kriteria['bobot_kriteria']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Ubah Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>