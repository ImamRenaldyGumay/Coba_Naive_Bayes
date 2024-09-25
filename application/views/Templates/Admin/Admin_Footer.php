
    <footer class="main-footer">
      
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- SweetAlert2 Script -->
    <!-- <script>
        <?php if ($this->session->flashdata('success')): ?>
            Swal.fire({
                title: 'Success!',
                text: "<?php echo $this->session->flashdata('success'); ?>",
                icon: 'success'
            });
        <?php endif; ?>
    </script> -->
    <?php if ($this->session->flashdata('success')): ?>
      <script>alert("<?php echo $this->session->flashdata('success'); ?>");</script>
    <?php endif; ?>
  <!-- jQuery -->
  <script src="<?= base_url('Assets/')?>plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url('Assets/')?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('Assets/')?>dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?= base_url('Assets/')?>dist/js/demo.js"></script>
  <!-- DataTables  & Plugins -->
    <script src="<?= base_url('Assets/')?>plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('Assets/')?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url('Assets/')?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url('Assets/')?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= base_url('Assets/')?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url('Assets/')?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url('Assets/')?>plugins/jszip/jszip.min.js"></script>
    <script src="<?= base_url('Assets/')?>plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?= base_url('Assets/')?>plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?= base_url('Assets/')?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url('Assets/')?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url('Assets/')?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        });
      });
    </script>
    <!-- Tambahkan SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
    // Event listener untuk tombol delete
    $(document).on('click', '.btn-delete', function() {
        var id = $(this).data('id');  // Ambil ID ruangan dari tombol

        Swal.fire({
            title: 'Yakin ingin menghapus?',
            text: "Data yang dihapus tidak bisa dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirect ke controller untuk delete
                window.location.href = '<?= base_url("Ruangan/delete/") ?>' + id;
            }
        });
    });
</script>
<script>
  function editRuangan(id) {
    // Mengambil data ruangan dari server dengan AJAX
    $.ajax({
        url: '<?= site_url('ruangan/getRuanganById/'); ?>' + id,  // Controller yang mengembalikan data ruangan
        method: 'GET',
        dataType: 'json',
        success: function(data) {
            // Isi data ke dalam form di modal
            $('#edit_id').val(data.id);
            $('#edit_nama_ruangan').val(data.nama_ruangan);
            $('#edit_lokasi').val(data.lokasi);

            // Set form action untuk edit ruangan
            $('#editRuanganForm').attr('action', '<?= site_url('ruangan/edit/'); ?>' + data.id);
        }
    });
}

</script>
</body>

</html>