<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title> Kopi Kila | <?= ucfirst($this->uri->segment(2)) ?></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicon -->
  <link href="<?= base_url() ?>assets/img/coffee-solid.png" rel="icon">


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= base_url() ?>assets_login/css/bootstrap.min.css">

  <!-- Style -->
  <link rel="stylesheet" href="<?= base_url() ?>assets_login/css/style.css">

</head>

<body>


  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2 img-fluid" style="background-image: url('<?= base_url('assets_login/images/bg_register.jpg') ?>');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-10">
            <h3>Login to <strong>Kopi Kila</strong></h3>
            <?= $this->session->flashdata('salah_login'); ?>
            <form action="<?= base_url('auth/login') ?>" method="post">
              <div class="form-group first">
                <label for="username">Username</label>

                <input type="text" name="username" class="form-control" placeholder="Your Username" id="username" autocomplete="off">
                <?php echo form_error('username', '<div class="text-danger small mt-2">', '</div>'); ?>
              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Your Password" id="password">
                <?php echo form_error('password', '<div class="text-danger small mt-2">', '</div>'); ?>
              </div>

              <div class="d-flex mb-5 align-items-center">
                <span class="ml-auto"><a href="<?= base_url('register') ?>">Daftar Akun</a></span>
              </div>

              <input type="submit" value="Log In" class="btn btn-block btn-primary">

            </form>
          </div>
        </div>
      </div>
    </div>


  </div>



  <script src="<?= base_url() ?>assets_login/js/jquery-3.3.1.min.js"></script>
  <script src="<?= base_url() ?>assets_login/js/popper.min.js"></script>
  <script src="<?= base_url() ?>assets_login/js/bootstrap.min.js"></script>
  <script src="<?= base_url() ?>assets_login/js/main.js"></script>
</body>

</html>