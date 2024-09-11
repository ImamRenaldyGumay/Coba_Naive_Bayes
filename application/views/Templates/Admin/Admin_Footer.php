
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
</body>

</html>