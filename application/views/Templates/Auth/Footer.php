
        <!-- SweetAlert Flash Data -->
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flashdata'); ?>"></div>
        <div class="flash-data-gagal" data-flashdata="<?= $this->session->flashdata('flashdata_gagal'); ?>"></div>
        <!-- Alert untuk pesan -->
         <script>
            const flashdata = $('.flash-data').data('flashdata');
            if (flashdata){
                Swal({
                    title:"Sukses",
                    text:"Data Berhasil" + flashdata,
                    type:"success"
                });
            }
            const flashGagal = $('.flash-data-gagal').data('flashdata');
            if (flashGagal) {
                Swal.fire({
                    title: 'Gagal',
                    text: 'Login Gagal',
                    icon: 'error'
                });
            }
         </script>
                
        <!-- jQuery -->
        <script src="<?= base_url('assets')?>/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="<?= base_url('assets')?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="<?= base_url('assets')?>/dist/js/adminlte.min.js"></script>
        
    </body>
</html>