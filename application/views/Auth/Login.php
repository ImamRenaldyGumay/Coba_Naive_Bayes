<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body">
        <div class="text-center">
          <img class="img-fluid" style="width: 100px;" src="<?= base_url('assets/img/logo-pusri.png') ?>" alt="login-logo">
        </div>
        <div class="text-center">
          <h3 class="text-bold">SIPW</h3>
        </div>
        <p class="login-box-msg">Silahkan Login</p>
        <form action="<?= base_url("Login")?>" method="post">
          <div class="input-group mb-3">
            <input type="email" name="email" id="email" required class="form-control form-control-lg" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" id="password" required class="form-control form-control-lg" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- /.col -->
            <div class="col-12 mb-10">
              <button type="submit" class="btn btn-primary btn-block">Login</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <hr class="mt-3">

        <p class="mb-1">
          <a href="<?= base_url("Admin")?>">Registrasi</a>
        </p>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->
  

