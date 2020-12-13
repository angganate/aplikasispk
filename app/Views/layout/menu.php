<style>
    body {
        background-image: url('img/logo.jpg');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div id="wrapper">
                <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">PT Buana Sentosa Nusantara</a>
                    </div>

                    <!-- Top Menu Items -->
                    <ul class="nav navbar-right top-nav">
                        <li class=".">
                            <a href="/kriteria" class="." data-toggle="."><i class="fa fa-user"></i> Login</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-lg-12">

            <h1>VISI</h1>
            <p>
                <h3>Pemerataan produk untuk distribusi produk Mayora, menjadi perusahaan terbaik untuk dapat bersaing dengan kompetitor
            </p>
            </h3>
            <h1>MISI</h1>
            <h3>
                <p>1.Membuat produk Mayora menjadi besar</p>
                <p>2.Membuat profit lebih banyak agar perusahaan dapat berkembang</p>
                <p>3.Menerapkan standar operasional perusahaan yang efektif dan efisien</p>
            </h3>
            <br>
            <h1>Ingin Bergabung Bersama Kami ?</h1>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambahpelamar">Daftar Pelamar</button>
            <div id="tambahpelamar" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Daftar Lowongan</h4>
                        </div>
                        <form action="/lamaran/save" method="post" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="control-label" for="nik_pelamar">NIK Pelamar</label>
                                    <input type="number" name="nik_pelamar" class="form-control" id="nik_pelamar" required="required">
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="nama_pelamar">Nama Pelamar</label>
                                    <input type="text" name="nama_pelamar" class="form-control" id="nama_pelamar" required="required">
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="email_pelamar">Email Pelamar</label>
                                    <input type="email" name="email_pelamar" class="form-control" id="email_pelamar" required="required">
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="cv_pelamar">CV + KTP + NILAI (Dalam Format .RAR / .ZIP)</label>
                                    <small>Tidak Lengkap, Tidak Akan Lolos</small>
                                    <input type="file" name="cv_pelamar" class="form-control" id="cv_pelamar" required="required">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="reset" class="btn btn-danger">Reset</button>
                                <input type="submit" class="btn btn-success" name="tambahpelamar" value="Daftar!!">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <button class="btn btn-info" onclick="return confirm('Kaming Sun');">PENGUMUMAN</button>

        </div>
    </div>
</div>