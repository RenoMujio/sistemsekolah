<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header bg-secondary text-white">
                    Form Edit Data Pegawai
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                    <input type="hidden" name="id_kelas" value="<?= $kelas['id_kelas']; ?>">
                        <div class="form-group">
                            <label for="id_keahlian">id keahlian</label>
                            <input type="Text" name="id_keahlian" class="form-control" id="id_keahlian" value="<?= $kelas['id_keahlian']; ?>">
                            <small class="form-text text-danger"><?= form_error('id_keahlian'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="kode_kelas">kode kelas</label>
                            <input type="text" name="kode_kelas" class="form-control" id="kode_kelas" value="<?= $kelas['kode_kelas']; ?>">
                            <small class="form-text text-danger"><?= form_error('kode_kelas'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama_kelas">nama kelas</label>
                            <input type="text" name="nama_kelas" class="form-control" id="nama_kelas" value="<?= $kelas['nama_kelas']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama_kelas'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="wali_kelas">wali kelas</label>
                            <input type="text" name="wali_kelas" class="form-control" id="wali_kelas" value="<?= $kelas['wali_kelas']; ?>">
                            <small class="form-text text-danger"><?= form_error('wali_kelas'); ?></small>
                        </div>
                        <a href="<?= base_url(); ?>pegawai" class="btn btn-danger"><i class="fa-solid fa-angles-left">Cancel</i></a>
                        <button type="submit" name="edit" class="btn btn-primary float-right">Confirm</button>
                    </form>
                </div>
            </div><br>

        </div>
    </div>
</div>