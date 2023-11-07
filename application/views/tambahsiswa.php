<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header bg-secondary text-white">
                    Form Tambah Data Siswa
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                    <input type="hidden" name="id_siswa" value="">
                        <div class="form-group">
                            <label for="nama_siswa">nama siswa</label>
                            <input type="text" name="nama_siswa" class="form-control" id="nama_siswa" value="">
                            <small class="form-text text-danger"><?= form_error('nama_siswa'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jk">jenis kelamin</label>
                            <input type="text" name="jk" class="form-control" id="jk" value="">
                            <small class="form-text text-danger"><?= form_error('jk'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="no_induk">no induk</label>
                            <input type="kelas" name="no_induk" class="form-control" id="no_induk" value="">
                            <small class="form-text text-danger"><?= form_error('no_induk'); ?></small>
                        </div><div class="form-group">
                            <label for="tempat_lahir">tempat lahir</label>
                            <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" value="">
                            <small class="form-text text-danger"><?= form_error('tempat_lahir'); ?></small>
                        </div>
                        <a href="<?= base_url(); ?>siswa$siswa" class="btn btn-danger"><i class="fa-solid fa-angles-left">Cancel</i></a>
                        <button type="submit" name="submit" class="btn btn-primary float-right">Confirm</button>
                    </form>
                </div>
            </div><br>

        </div>
    </div>
</div>