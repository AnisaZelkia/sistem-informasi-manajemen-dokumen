<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Login - <?= $set->site_title ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/staradmin/src/assets/vendors/font-awesome/css/font-awesome.min.css') ?>">
  <link type="text/css" rel="stylesheet" href="<?php echo base_url('/assets/staradmin/src/assets/vendors/mdi/css/materialdesignicons.min.css') ?>" />
  <link rel="stylesheet" href="<?php echo base_url('/assets/staradmin/src/assets/vendors/flag-icon-css/css/flag-icon.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/staradmin/src/assets/vendors/ti-icons/css/themify-icons.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/staradmin/src/assets/vendors/typicons/typicons.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/staradmin/src/assets/vendors/css/vendor.bundle.base.css') ?>">
  <link id="test" rel="stylesheet" href="<?php echo base_url('/assets/staradmin/src/assets/css/shared/style.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/css/style-switcher.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/staradmin/src/assets/vendors/sweetalert2/sweetalert2.min.css') ?>">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End Plugin css for this page -->
  <!-- inject:css -->
  <script src="<?php echo base_url('/assets/staradmin/src/assets/vendors/sweetalert2/sweetalert2.all.min.js') ?>"></script>
  <!-- endinject -->
  <link href="<?php echo base_url('/public/logo.png') ?>" rel="icon" type="image/x-icon" />
  <style>
    .form-control {
      font-size: .875em;
    }
  </style>
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">

      <div class="content-wrapper auth p-0 theme-two">
        <div class="row d-flex align-items-stretch">
          <div class="col-md-4 banner-section d-none d-md-flex align-items-stretch justify-content-center">
            <div class="slide-content" style="background: url('<?= site_url('public/' . $set->site_background) ?>') no-repeat center center;background-size: cover; "> </div>
          </div>

          <div class="col-12 col-md-8 h-100 card">
            <div class="auto-form-wrapper d-flex align-items-center justify-content-center flex-column">
              <div class="nav-get-started">

                <div class="nav-link theme-switch-wrapper">
                  <label class="theme-switch" for="checkbox">
                    <input type="checkbox" id="checkbox" />
                    <div class="slider round"></div>
                  </label>
                  <label style="margin-left: 8px;" title="Dark Theme"><i class="mdi mdi-brightness-6"></i> Dark Theme</label>
                </div>

              </div>

              <form id="login" role="form" method="post" action="<?php echo site_url('/home/gologin'); ?>" style="margin-top: -20px;">
                <h3 class="mr-auto">Selamat Datang di <?= $set->site_title ?></h3>
                <p class="mb-5 mr-auto">Masuk untuk memulai sesi Anda.</p>
                <?php
                if ($this->session->flashdata('erorlogin')) {
                  echo "<div <div class=\"alert alert-danger\" role=\"alert\"><h5><i class=\"fa fa-exclamation-triangle\"></i> Perhatian!</h5>" . $this->session->flashdata('erorlogin') . "</div>";
                }
                ?>
                <!--<input type="hidden" name="previous" value="<?php //echo (isset($previous)?$previous:"") 
                                                                ?>">-->
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="mdi mdi-account-outline"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" name="username" id="loginEmail" placeholder="username" autofocus>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="mdi mdi-lock-outline"></i>
                      </span>
                    </div>
                    <input type="password" class="form-control" name="password" id="loginPass" placeholder="sandi">
                  </div>
                </div>
                <div class="form-group">
                  <button class="btn btn-lg btn-primary submit-btn" type="submit">Login</button>
                </div>
                <div class="wrapper mt-5 text-gray">
                  <p class="footer-text">Copyright © <?= date('Y') ?>  </p>
                  <ul class="auth-footer text-gray">
                    <li>
                      <a href="#">Terms & Conditions</a>
                    </li>
                    <li>
                      <a href="#">Cookie Policy</a>
                    </li>
                  </ul>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?php echo base_url('/assets/staradmin/src/assets/vendors/js/vendor.bundle.base.js') ?>"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?php echo base_url('/assets/staradmin/src/assets/js/shared/off-canvas.js') ?>"></script>
  <script src="<?php echo base_url('/assets/staradmin/src/assets/js/shared/hoverable-collapse.js') ?>"></script>
  <script src="<?php echo base_url('/assets/staradmin/src/assets/js/shared/misc.js') ?>"></script>
  <script src="<?php echo base_url('/assets/staradmin/src/assets/js/shared/settings.js') ?>"></script>
  <script src="<?php echo base_url('/assets/staradmin/src/assets/js/shared/todolist.js') ?>"></script>
  <script>
    $(document).ready(function() {
      var checked = JSON.parse(localStorage.getItem("checkbox"));
      if (checked) {
        document.getElementById("checkbox").checked = checked;
        $("#test").attr("href", "<?php echo base_url('/assets/staradmin/src/assets/css/demo_3/style.css') ?>");
      }

      $('#checkbox').click(function() {
        if (this.checked) {
          var checkbox = document.getElementById("checkbox");
          localStorage.setItem("checkbox", checkbox.checked);
          $("#test").attr("href", "<?php echo base_url('/assets/staradmin/src/assets/css/demo_3/style.css') ?>");
        } else {
          $("#test").attr("href", "<?php echo base_url('/assets/staradmin/src/assets/css/shared/style.css') ?>");
          localStorage.removeItem('checkbox');
        }
      });
    });
  </script>
  <script>
    const Toast = Swal.mixin({
      toast: true,
      position: 'top',
      showConfirmButton: true,
      timer: 5000
    });
    <?php if ($message = $this->session->flashdata('success')) { ?>
      Toast.fire({
        icon: 'success',
        title: '<?php echo $message ?>.'
      })
    <?php } ?>
    <?php if ($message = $this->session->flashdata('error')) { ?>
      Toast.fire({
        icon: 'error',
        title: '<?php echo $message ?>.'
      })
    <?php } ?>
  </script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <!-- End custom js for this page -->
</body>

</html>