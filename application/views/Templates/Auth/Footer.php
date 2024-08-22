<!-- Notifikasi Login -->
    <script>
        <?php if($this->session->flashdata('login_success')): ?>
            Swal.fire({
                icon: 'success',
                title: 'Login Berhasil',
                text: '<?php echo $this->session->flashdata('login_success'); ?>',
                showConfirmButton: false,
                timer: 1500
            });
        <?php endif; ?>

        <?php if($this->session->flashdata('login_failed')): ?>
            Swal.fire({
                icon: 'error',
                title: 'Login Gagal',
                text: '<?php echo $this->session->flashdata('login_failed'); ?>',
                showConfirmButton: false,
                timer: 1500
            });
        <?php endif; ?>
    </script>
<!-- jQuery -->
<script src="<?= base_url('assets')?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets')?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets')?>/dist/js/adminlte.min.js"></script>
</body>
</html>