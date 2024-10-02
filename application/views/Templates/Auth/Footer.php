
        <!-- SweetAlert Flash Data -->
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flashdata'); ?>"></div>
        <div class="flash-data-gagal" data-flashdata="<?= $this->session->flashdata('flashdata_gagal'); ?>"></div>
        <!-- Alert untuk pesan -->
        <script>
            function togglePassword() {
                var passwordField = document.getElementById("password");
                var eyeIcon = document.getElementById("eyeIcon");

                if (passwordField.type === "password") {
                passwordField.type = "text";
                eyeIcon.setAttribute("fill", "#000"); // Mengubah warna ikon saat aktif
                } else {
                passwordField.type = "password";
                eyeIcon.setAttribute("fill", "none"); // Kembali ke warna default
                }
            }
        </script>
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