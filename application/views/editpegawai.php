<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header bg-secondary text-white">
                    Form Edit Data Pegawai
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                    <input type="hidden" name="id_pegawai" value="<?= $pegawai['id_pegawai']; ?>">
                        <div class="form-group">
                            <label for="nama_pegawai">Nama Pegawai</label>
                            <input type="Text" name="nama_pegawai" class="form-control" id="nama_pegawai" value="<?= $pegawai['nama_pegawai']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama_pegawai'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir_pegawai">tanggal lahir</label>
                            <input type="date" name="tanggal_lahir_pegawai" class="form-control" id="tanggal_lahir_pegawai" value="<?= $pegawai['tanggal_lahir_pegawai']; ?>">
                            <small class="form-text text-danger"><?= form_error('tanggal_lahir_pegawai'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tempat_lahir_pegawai">tempat lahir</label>
                            <input type="text" name="tempat_lahir_pegawai" class="form-control" id="tempat_lahir_pegawai" value="<?= $pegawai['tempat_lahir_pegawai']; ?>">
                            <small class="form-text text-danger"><?= form_error('tempat_lahir_pegawai'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="agama_pegawai">agama</label>
                            <input type="text" name="agama_pegawai" class="form-control" id="agama_pegawai" value="<?= $pegawai['agama_pegawai']; ?>">
                            <small class="form-text text-danger"><?= form_error('agama_pegawai'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="status_pegawai">status</label>
                            <input type="text" name="status_pegawai" class="form-control" id="status_pegawai" value="<?= $pegawai['status_pegawai']; ?>">
                            <small class="form-text text-danger"><?= form_error('status_pegawai'); ?></small>
                        </div>
                        <a href="<?= base_url(); ?>pegawai" class="btn btn-danger"><i class="fa-solid fa-angles-left">Cancel</i></a>
                        <button type="submit" name="edit" class="btn btn-primary float-right">Confirm</button>
                    </form>
                </div>
            </div><br>

        </div>
    </div>
</div>