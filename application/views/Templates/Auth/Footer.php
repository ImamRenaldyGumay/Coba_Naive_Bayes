
        <!-- SweetAlert2 Script -->
        <!-- <script>
            <?php if ($this->session->flashdata('success')): ?>
                Swal.fire({
                    title: 'Success!',
                    text: "<?php echo $this->session->flashdata('success'); ?>",
                    icon: 'success'
                });
            <?php endif; ?>

            <?php if ($this->session->flashdata('error')): ?>
                Swal.fire({
                    title: 'Error!',
                    text: "<?php echo $this->session->flashdata('error'); ?>",
                    icon: 'error'
                });
            <?php endif; ?>
        </script> -->
        <!-- Alert untuk pesan -->
        <?php if ($this->session->flashdata('success')): ?>
            <script>alert("<?php echo $this->session->flashdata('success'); ?>");</script>
        <?php endif; ?>

        <?php if ($this->session->flashdata('error')): ?>
            <script>alert("<?php echo $this->session->flashdata('error'); ?>");</script>
        <?php endif; ?>
        <!-- jQuery -->
        <script src="<?= base_url('assets')?>/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="<?= base_url('assets')?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="<?= base_url('assets')?>/dist/js/adminlte.min.js"></script>
    </body>
</html>