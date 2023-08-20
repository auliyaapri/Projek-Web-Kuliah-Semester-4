<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title> Kopi Kila | <?= ucfirst($this->uri->segment(1)) ?></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicon -->
  <link href="<?= base_url() ?>assets/img/coffee-solid.png" rel="icon">
  <link rel="stylesheet" href="<?= base_url() ?>assets_login/fonts/icomoon/style.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets_login/css/owl.carousel.min.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= base_url() ?>assets_login/css/bootstrap.min.css">
  <!-- Style -->
  <link rel="stylesheet" href="<?= base_url() ?>assets_login/css/style.css">
</head>

<body>


  <div class="d-lg-flex half ">
    <div class="bg order-1 order-md-2" style="background-image: url('<?= base_url('assets_login/images/bg_register.jpg') ?>'); height: 100%; "></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-10 pt-4">
            <h3>Daftar to <strong>Kopi Kila</strong></h3>
            <form action="<?= base_url('Register/index') ?>" method="post" onsubmit="return validateForm()">
              <div class="form-group first">
                <label for="username">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama Anda" id="nama" autocomplete="off">
                <?php echo form_error('nama', '<div class="text-danger small mt-2">', '</div>'); ?>
              </div>
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Username Anda" id="username"autocomplete="off">
                <?php echo form_error('username', '<div class="text-danger small mt-2">', '</div>'); ?>
              </div>
              <div class="form-group first">
                <label for="username">Alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder="nama jalan blok, Rt/Rw, kecamatan" id="alamat" autocomplete="off">
                <?php echo form_error('alamat', '<div class="text-danger small mt-2">', '</div>'); ?>
              </div>
              <div class="form-group first">
                <label for="username">Email</label>
                <input type="text" name="email" class="form-control" placeholder="example@gmail.com" id="email" autocomplete="off">
                <?php echo form_error('email', '<div class="text-danger small mt-2">', '</div>'); ?>
              </div>
              <div class="form-group first">
                <label for="username">Nomor Handphone</label>
                <input type="text" name="nomor_hp" class="form-control" placeholder="Nomor Handphone" id="nomor_hp" autocomplete="off">
                <?php echo form_error('nomor_hp', '<div class="text-danger small mt-2">', '</div>'); ?>
              </div>
              <div class="form-group last mb-3">
                <label for="password">Masukkan Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password" id="password" autocomplete="off">
                <?php echo form_error('password', '<div class="text-danger small mt-2">', '</div>'); ?>
              </div>
              <div class="form-group last mb-3">
                <label for="password">Ulangi Password</label>
                <input type="password" name="password2" class="form-control" placeholder="Password" id="password2" autocomplete="off">
                <?php echo form_error('password2', '<div class="text-danger small mt-2">', '</div>'); ?>
              </div>
              <input type="submit" value="Daftar" class="btn btn-block btn-primary">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
<div class="modal" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="errorModalLabel">Kesalahan</h5>      
      </div>
      <div class="modal-body">
      <p>Username tidak boleh mengandung spasi.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>        
      </div>
    </div>
  </div>
</div>

  <script src="<?= base_url() ?>assets_login/js/jquery-3.3.1.min.js"></script>
  <script src="<?= base_url() ?>assets_login/js/popper.min.js"></script>
  <script src="<?= base_url() ?>assets_login/js/bootstrap.min.js"></script>
  <script src="<?= base_url() ?>assets_login/js/main.js"></script>
  <script src="<?= base_url() ?>assets_login/js/bootstrap.bundle.min.js"></script>  
  <script>
    function validateForm() {
      var username = document.getElementById("username").value;
      if (username.includes(" ")) {
        $('#errorModal').modal('show');
        return false;
      }
      return true;
    }
  </script>
</body>

</html>
