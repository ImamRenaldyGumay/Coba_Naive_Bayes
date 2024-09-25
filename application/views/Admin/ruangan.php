
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header mb-0">
                <h1 class="font-weight-bold">Data Ruangan</h1>
            </div>
            <div class="card-body">
                <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahRuanganModal">Tambah Data</button>
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Ruangan</th>
                        <th>Kapasitas</th>
                        <th>Fasilitas</th>
                        <th>Lokasi</th>
                        <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1;?>
                    <?php foreach ($ruangan as $r): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $r->nama_ruangan ?></td>
                            <td><?= $r->kapasitas ?></td>
                            <td><?= $r->fasilitas ?></td>
                            <td><?= $r->lokasi ?></td>
                            <td>
                                <button class="btn btn-primary">Detail</button>
                                <button class="btn btn-warning" onclick="editRuangan('<?= $r->id; ?>')" data-toggle="modal" data-target="#editRuanganModal">Edit</button>
                                <button class="btn btn-danger btn-delete" data-id="<?= $r->id?>">Hapus</button>
                            </td>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No.</th>
                    <th>Nama Ruangan</th>
                    <th>Kapasitas</th>
                    <th>Fasilitas</th>
                    <th>Lokasi</th>
                    <th>Aksi</th>
                  </tr>
                  </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- Start Model Tambah Ruangan -->
<div class="modal fade" data-backdrop="static" id="tambahRuanganModal" tabindex="-1" aria-labelledby="tambahRuanganLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahRuanganLabel">Tambah Ruangan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= site_url('TambahRuang') ?>" method="post">
        <div class="modal-body">
          <div class="form-group">
            <label for="nama_ruangan">Nama Ruangan</label>
            <input type="text" class="form-control" id="nama_ruangan" name="nama_ruangan" required>
          </div>
          <div class="form-group">
            <label for="kapasitas">Kapasitas</label>
            <input type="text" class="form-control" id="kapasitas" name="kapasitas" required>
          </div>
          <div class="form-group">
            <label for="fasilitas">Fasilitas</label>
            <input type="text" class="form-control" id="fasilitas" name="fasilitas" required>
          </div>
          <div class="form-group">
            <label for="lokasi">Lokasi</label>
            <input type="text" class="form-control" id="lokasi" name="lokasi" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- End Model Tambah Ruangan -->
 
<!-- Start Edit Ruangan -->
<div class="modal fade" id="editRuanganModal" tabindex="-1" aria-labelledby="editRuanganLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editRuanganLabel">Edit Ruangan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="editRuanganForm" action="" method="post"> <!-- URL akan di-set secara dinamis dengan JS -->
        <div class="modal-body">
          <input type="hidden" id="edit_id" name="id"> <!-- ID ruangan yang akan di-edit -->
          <div class="form-group">
            <label for="edit_nama_ruangan">Nama Ruangan</label>
            <input type="text" class="form-control" id="edit_nama_ruangan" name="nama_ruangan" required>
          </div>
          <div class="form-group">
            <label for="edit_lokasi">Lokasi</label>
            <input type="text" class="form-control" id="edit_lokasi" name="lokasi" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- End Edit Ruangan -->
<!-- /.content-wrapper -->
<?php if ($this->session->flashdata('message')): ?>
    <script>
        Swal.fire({
            icon: 'success',
            title: '<?= $this->session->flashdata('message'); ?>',
            showConfirmButton: false,
            timer: 1500
        });
    </script>
<?php endif; ?>