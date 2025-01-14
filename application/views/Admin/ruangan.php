
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Halaman Data <?= $title ?></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('Admin')?>">Dashboard</a></li>
            <li class="breadcrumb-item active">Data <?= $title ?></li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- <div class="card-header">
              
            </div> -->
            <div class="card-body">
              <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahRuanganModal"><i class="fas fa-plus"></i>Tambah Data <?= $title ?></button>
              <table id="example1" class="table table-bordered table-hover">
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
                        <td><?= $r['nama'] ?></td>
                        <td><?= $r['kapasitas'] ?></td>
                        <td><?= $r['fasilitas'] ?></td>
                        <td><?= $r['lokasi'] ?></td>
                        <td>
                          <!-- <button class="btn btn-primary" data-toggle="modal" data-target="#dialog1">Detail</button> -->
                          <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#editRuanganModal<?= $r['id']?>"><i class="fas fa-pencil-alt"></i>Edit</button>
                          <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#basic<?= $r['id']?>"><i class="fas fa-trash"></i>Hapus</button>
                        </td>
                      </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<!-- Start Model Tambah Ruangan -->
  <div class="modal fade" data-backdrop="static" id="tambahRuanganModal">
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
              <label for="nama">Nama Ruangan</label>
              <input type="text" class="form-control" id="nama" name="nama" required>
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
  <?php foreach ($ruangan as $r) : ?>
    <div class="modal fade" id="editRuanganModal<?= $r['id']?>">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Edit Data <?= $title ?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form id="editRuanganForm" action="<?= base_url('EditRuangan/'.$r['id'])?>" method="post">
            <div class="modal-body">
              <input type="hidden" id="edit_id" name="id">
              <div class="form-group">
                <label for="id">Id</label>
                <input type="text" class="form-control" id="id" name="id" value="<?= $r['id']?>" readonly>
              </div>
              <div class="form-group">
                <label for="nama">Nama Ruangan</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $r['nama']?>" required>
              </div>
              <div class="form-group">
                <label for="kapasitas">Kapasitas Ruangan</label>
                <input type="text" class="form-control" id="kapasitas" name="kapasitas" value="<?= $r['kapasitas']?>" required>
              </div>
              <div class="form-group">
                <label for="fasilitas">Fasilitas Ruangan</label>
                <input type="text" class="form-control" id="fasilitas" name="fasilitas" value="<?= $r['fasilitas']?>" required>
              </div>
              <div class="form-group">
                <label for="lokasi">Lokasi Ruangan</label>
                <input type="text" class="form-control" id="lokasi" name="lokasi" value="<?= $r['lokasi']?>" required>
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
  <?php endforeach ?>
<!-- End Edit Ruangan -->
<!-- Start Delete Modal -->
<div class="modal fade" data-backdrop="static" id="basic<?= $r['id']?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Delete Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete this item?
      </div>
      <form action="DeleteRuangan">
        <div class="modal-footer">
          <button data-dismiss="modal" type="button" class="btn btn-default">Cancel</button>
          <a href="<?= base_url('HapusRuangan/'.$r['id']) ?>" class="btn btn-danger">Hapus</a>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- End Delete Modal -->
<!-- /.content-wrapper -->
