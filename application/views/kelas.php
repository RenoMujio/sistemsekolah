<div class="card">
  <div class="card-header">
  <a href="<?= base_url('kelas/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>TAMBAH KELAS</a>
    <h3 align="center">DATA KELAS</h3>
  </div>

  <?php if ($this->session->flashdata('flash')): ?>

<div class="row mt-3 mb-3">
  <div class="col-md-6">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      Data Kelas<strong> Berhasil </strong>
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
          <th>id keahlian</th>
          <th>kode kelas</th>
          <th>kelas</th>
          <th>wali kelas</th>
          <th>Action</th>
        </tr>
      </thead>
      <?php $no = 1;
      foreach ($kelas as $kl): ?>
        <tbody>
          <tr>
            <td>
              <?= $no++ ?>
            </td>

            <td>
              <?= $kl['id_keahlian'] ?>
            </td>
            <td>
              <?= $kl['kode_kelas'] ?>
            </td>
            <td>
              <?= $kl['nama_kelas'] ?>
            </td>
            <td>
              <?= $kl['wali_kelas'] ?>
            </td>
            <td>
              <a href="<?= base_url('kelas/edit/') ?><?= $kl['id_kelas'];?>" class="btn btn-warning btn-sm"><i class="fas fa-edit">edit</i></a>
              <a href="<?= base_url('kelas/hapus/') ?><?= $kl['id_kelas'];?>" class="btn btn-danger btn-sm"><i class="fas fa-hapus">hapus</i></a>
            </td>
          </tr>
        </tbody>
      <?php endforeach; ?>
    </table>
  </div>
  </div>
</div>