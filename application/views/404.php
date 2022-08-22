<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title><?php if (isset($title)) {
            echo $title . " - ";
          } ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/staradmin/src/assets/vendors/font-awesome/css/font-awesome.min.css') ?>">
  <link type="text/css" rel="stylesheet" href="<?php echo base_url('/assets/staradmin/src/assets/vendors/mdi/css/materialdesignicons.min.css') ?>" />
  <link rel="stylesheet" href="<?php echo base_url('/assets/staradmin/src/assets/vendors/flag-icon-css/css/flag-icon.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/staradmin/src/assets/vendors/ti-icons/css/themify-icons.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/staradmin/src/assets/vendors/typicons/typicons.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/staradmin/src/assets/vendors/css/vendor.bundle.base.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/staradmin/src/assets/vendors/sweetalert2/sweetalert2.min.css') ?>">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End Plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/staradmin/src/assets/css/shared/style.css') ?>">
  <script src="<?php echo base_url('/assets/staradmin/src/assets/vendors/pdfobject/pdfobject.min.js') ?>"></script>
  <script src="<?php echo base_url('/assets/staradmin/src/assets/vendors/sweetalert2/sweetalert2.all.min.js') ?>"></script>
  <!-- endinject -->
  <link href="<?php echo base_url('/public/logo.png') ?>" rel="icon" type="image/x-icon" />
  <style>
    .pdfobject-container {
      width: 100%;
      height: 35rem;
      background: #333;
      border: solid 2px;
    }
  </style>
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center text-center error-page bg-primary">
        <div class="row flex-grow">
          <div class="col-lg-7 mx-auto text-white">
            <div class="row align-items-center d-flex flex-row">
              <div class="col-lg-6 text-lg-right pr-lg-4">
                <h1 class="display-1 mb-0">ERR</h1>
              </div>
              <div class="col-lg-6 error-page-divider text-lg-left pl-lg-4">
                <h2>SORRY!</h2>
                <h3 class="font-weight-light">The page you’re looking for was not found.</h3>
              </div>
            </div>
            <div class="row mt-5">
              <div class="col-12 text-center mt-xl-2">
                <a class="text-white font-weight-medium" href="../../index.html">Back to home</a>
              </div>
            </div>
            <div class="row mt-5">
              <div class="col-12 mt-xl-2">
                <p class="text-white font-weight-medium text-center">Copyright &copy; <?= date('Y') ?> All rights reserved.</p>
              </div>
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