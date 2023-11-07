<div class="card">
  <div class="card-header">
  <a href="<?= base_url('pegawai/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>TAMBAH PEGAWAI</a>
    <h3 align="center">DATA PEGAWAI</h3>
  </div>

  <?php if ($this->session->flashdata('flash')): ?>

    <div class="row mt-3 mb-3">
      <div class="col-md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          Data Pegawai<strong> Berhasil </strong>
          <?= $this->session->flashdata('flash'); ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

      </div>
    </div>
  <?php endif; ?>

  <!-- /.card-header -->
  <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
        <tr>
          <th>No</th>
          <th>Nama Pegawai</th>
          <th>tempat lahir</th>
          <th>tanggal lahir</th>
          <th>agama</th>
          <th>status</th>
          <th>Action</th>
        </tr>
      </thead>
      <?php $no = 1;
      foreach ($pegawai as $pg): ?>
        <tbody>
          <tr>
            <td>
              <?= $no++ ?>
            </td>
            <td>
              <?= $pg['nama_pegawai'] ?>
            </td>
            <td>
              <?= $pg['tempat_lahir_pegawai'] ?>
            </td>
            <td>
              <?= $pg['tanggal_lahir_pegawai'] ?>
            </td>
            <td>
              <?= $pg['agama_pegawai'] ?>
            </td>
            <td>
              <?= $pg['status_pegawai'] ?>
            </td>
            <td>
              <a href="<?= base_url('Pegawai/edit/') ?><?= $pg['id_pegawai'];?>" class="btn btn-warning btn-sm"><i class="fas fa-edit">edit</i></a>
              <a href="<?= base_url('pegawai/hapus/') ?><?= $pg['id_pegawai'];?>" class="btn btn-danger btn-sm"><i class="fas fa-hapus">hapus</i></a>
            </td>
          </tr>
        </tbody>
      <?php endforeach; ?>
    </table>
  </div>
</div>
</div>