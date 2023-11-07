<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header bg-secondary text-white">
                    Form Tambah Data Pegawai
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                    <input type="hidden" name="id_siswa" value="">
                        <div class="form-group">
                            <label for="nama_pegawai">nama pegawai</label>
                            <input type="text" name="nama_pegawai" class="form-control" id="nama_pegawai" value="">
                            <small class="form-text text-danger"><?= form_error('nama_pegawai'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir_pegawai">tanggal lahir</label>
                            <input type="date" name="tanggal_lahir_pegawai" class="form-control" id="tanggal_lahir_pegawai" value="">
                            <small class="form-text text-danger"><?= form_error('tanggal_lahir_pegawai'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tempat_lahir_pegawai">tempat lahir</label>
                            <input type="text" name="tempat_lahir_pegawai" class="form-control" id="tempat_lahir_pegawai" value="">
                            <small class="form-text text-danger"><?= form_error('tempat_lahir_pegawai'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="agama_pegawai">agama pegawai</label>
                            <input type="text" name="agama_pegawai" class="form-control" id="agama_pegawai" value="">
                            <small class="form-text text-danger"><?= form_error('agama_pegawai'); ?></small>
                        </div><div class="form-group">
                            <label for="status_pegawai"> status </label>
                            <input type="text" name="status_pegawai" class="form-control" id="status_pegawai" value="">
                            <small class="form-text text-danger"><?= form_error('status_pegawai'); ?></small>
                        </div>
                        <a href="<?= base_url(); ?>jurusan" class="btn btn-danger"><i class="fa-solid fa-angles-left">Cancel</i></a>
                        <button type="submit" name="edit" class="btn btn-primary float-right">Confirm</button>
                    </form>
                </div>
            </div><br>

        </div>
    </div>
</div>