
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
              <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahModal"><i class="fas fa-plus"></i>Tambah Data <?= $title ?></button>
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama Instruktur</th>
                    <th>Email</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1;?>
                  <?php foreach ($instruktur as $i): ?>
                      <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $i['nama'] ?></td>
                        <td><?= $i['email'] ?></td>
                        <td><?= $i['keterangan']?></td>
                        <td>
                          <!-- <button class="btn btn-primary" data-toggle="modal" data-target="#dialog1">Detail</button> -->
                          <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#Edit<?= $i['id']?>"><i class="fas fa-pencil-alt"></i>Edit</button>
                          <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#Delete<?= $i['id']?>"><i class="fas fa-trash"></i>Hapus</button>
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
<!-- Start Tambah Modal -->
  <div class="modal fade" data-backdrop="static" id="tambahModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tambah <?= $title ?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?= site_url('TambahInstruktur') ?>" method="post">
          <div class="modal-body">
            <div class="form-group">
              <label for="nama">Nama Instruktur</label>
              <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
              <label for="keterangan">Keterangan</label>
              <input type="text" class="form-control" id="keterangan" name="keterangan" required>
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
<!-- End Tambah Modal -->
<!-- Start Edit Modal -->
  <?php foreach ($instruktur as $i) : ?>
    <div class="modal fade" id="Edit<?= $i['id']?>">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Edit Data <?= $title ?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form id="editPegawai" action="<?= base_url('EditInstruktur/'.$i['id'])?>" method="post">
            <div class="modal-body">
                <input type="hidden" id="edit_id" name="id">
                <div class="form-group">
                    <label for="id">Id</label>
                    <input type="text" class="form-control" id="id" name="id" value="<?= $i['id']?>" readonly>
                </div>
                <div class="form-group">
                    <label for="nama">Nama Instruktur</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $i['nama']?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Instruktur</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?= $i['email']?>" required>
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan Instruktur</label>
                    <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= $i['keterangan']?>" required>
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
<!-- End Edit Modal -->
<!-- Start Delete Modal -->
    <div class="modal fade" data-backdrop="static" id="Delete<?= $i['id']?>">
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
                <a href="<?= base_url('DeleteInstruktur/'.$i['id']) ?>" class="btn btn-danger">Hapus</a>
                </div>
            </form>
            </div>
        </div>
    </div>
<!-- End Delete Modal -->
<!-- /.content-wrapper -->
