<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<footer class="footer">
  <div class="container-fluid clearfix">
    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © <?php echo date('Y'); ?> <a href="https://www.itshop.id" target="_blank">Bappelitbangda Prov.Sulsel</a>. All rights reserved.</span>
    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">  <i class="mdi mdi-heart text-danger"></i>
    </span>
  </div>
</footer>
</div>
<!-- content-wrapper ends -->
</div>
<!-- main-panel ends -->

</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->

<!-- endinject -->
<!-- Plugin js for this page -->
<script src="<?php echo base_url('/assets/staradmin/src/assets/vendors/datatables.net/jquery.dataTables.js') ?>"></script>
<script src="<?php echo base_url('/assets/staradmin/src/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js') ?>"></script>
<script src="<?php echo base_url('/assets/staradmin/src/assets/vendors/datatables.net-fixedcolumns/dataTables.fixedColumns.min.js') ?>"></script>
<script src="<?php echo base_url('/assets/staradmin/src/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') ?>"></script>
<script src="<?php echo base_url('/assets/staradmin/src/assets/vendors/select2/select2.min.js') ?>"></script>
<script src="<?php echo base_url('/assets/staradmin/src/assets/vendors/dropify/dropify.min.js') ?>"></script>
<script src="<?php echo base_url('/assets/staradmin/src/assets/vendors/jquery-validation/jquery.validate.min.js') ?>"></script>
<script src="<?php echo base_url('/assets/staradmin/src/assets/vendors/icheck/icheck.min.js') ?>"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="<?php echo base_url('/assets/staradmin/src/assets/js/shared/off-canvas.js') ?>"></script>
<script src="<?php echo base_url('/assets/staradmin/src/assets/js/shared/hoverable-collapse.js') ?>"></script>
<script src="<?php echo base_url('/assets/staradmin/src/assets/js/shared/misc.js') ?>"></script>
<script src="<?php echo base_url('/assets/staradmin/src/assets/js/shared/settings.js') ?>"></script>
<script src="<?php echo base_url('/assets/staradmin/src/assets/js/shared/todolist.js') ?>"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="<?php echo base_url('/assets/staradmin/src/assets/js/shared/data-table.js') ?>"></script>
<script src="<?php echo base_url('/assets/staradmin/src/assets/js/shared/formpickers.js') ?>"></script>
<script src="<?php echo base_url('/assets/staradmin/src/assets/js/shared/select2.js') ?>"></script>
<script src="<?php echo base_url('/assets/staradmin/src/assets/js/shared/dropify.js') ?>"></script>
<script src="<?php echo base_url('/assets/staradmin/src/assets/js/shared/iCheck.js') ?>"></script>
<script src="<?php echo base_url('/public/js/jquery.form.min.js') ?>"></script>
<script src="<?php echo base_url('/public/js/jquery.auto-complete.min.js') ?>"></script>
<script src="<?php echo base_url('/public/js/custom.js') ?>"></script>
<script src="<?php echo base_url('/public/js/validation.js') ?>"></script>
<!-- End custom js for this page -->
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

</body>

</html>