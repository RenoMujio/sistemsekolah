<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header bg-secondary text-white">
                    Form Edit Data Pegawai
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                    <input type="hidden" name="id_keahlian" value="<?= $jurusan['id_keahlian']; ?>">
                        <div class="form-group">
                            <label for="id_kelas">id kelas</label>
                            <input type="Text" name="id_kelas" class="form-control" id="id_kelas" value="<?= $jurusan['id_kelas']; ?>">
                            <small class="form-text text-danger"><?= form_error('id_kelas'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama_keahlian">keahlian</label>
                            <input type="text" name="nama_keahlian" class="form-control" id="nama_keahlian" value="<?= $jurusan['nama_keahlian']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama_keahlian'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="kaproli">kaproli</label>
                            <input type="text" name="kaproli" class="form-control" id="kaproli" value="<?= $jurusan['kaproli']; ?>">
                            <small class="form-text text-danger"><?= form_error('kaproli'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">deskripsi</label>
                            <input type="text" name="deskripsi" class="form-control" id="deskripsi" value="<?= $jurusan['deskripsi']; ?>">
                            <small class="form-text text-danger"><?= form_error('deskripsi'); ?></small>
                        </div>
                        <a href="<?= base_url(); ?>pegawai" class="btn btn-danger"><i class="fa-solid fa-angles-left">Cancel</i></a>
                        <button type="submit" name="edit" class="btn btn-primary float-right">Confirm</button>
                    </form>
                </div>
            </div><br>

        </div>
    </div>
</div>