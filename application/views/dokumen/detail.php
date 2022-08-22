<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title><?php if (isset($title)) {
            echo $title . " - ";
          } ?><?= $set->site_title ?></title>
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
  <script src="<?php echo base_url('/assets/staradmin/src/assets/vendors/sweetalert2/sweetalert2.all.min.js') ?>"></script>
  <!-- endinject -->
  <link href="<?php echo base_url('/public/logo.png') ?>" rel="icon" type="image/x-icon" />

</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">


      <div class="card">

        <div class="card-body">
          <?php if ($kode == "2") { ?>

            <div class="container-fluid page-body-wrapper full-page-wrapper">
              <div class="content-wrapper d-flex align-items-center text-center error-page bg-info">
                <div class="row flex-grow">
                  <div class="col-lg-7 mx-auto text-white">
                    <div class="row align-items-center d-flex flex-row">
                      <div class="col-lg-6 text-lg-right pr-lg-4">
                        <h1 class="display-1 mb-0">ERR</h1>
                      </div>
                      <div class="col-lg-6 error-page-divider text-lg-left pl-lg-4">
                        <h2>MAAF!</h2>
                        <h3 class="font-weight-light">Dokumen bersifat Privat!</h3>
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
          <?php } else { ?>
            <h3 class="text-center mb-0">Sistem Arsip Dokumen</h3>
            <h2 class="text-center font-weight-bold mb-3">Dokumen untuk Publik</h2>

            <!-- Form Name -->
            <div class="row">
              <div class="col-md-9">
                <!-- 1st column -->

                <div class="view-group row">
                  <label class="col-md-3 control-label" for="namadokumen">Nama Dokumen</label>
                  <label class="col-md-9">: <?php echo $nama_dokumen; ?></label>
                </div>

                <div class="view-group row">
                  <label class="col-md-3 control-label" for="noarsip">Nomor Arsip</label>
                  <label class="col-md-9">: <?php echo $noarsip; ?></label>
                </div>

                <div class="view-group row">
                  <label class="col-md-3 control-label" for="uraian">Uraian</label>
                  <label class="col-md-9">: <?php echo $uraian; ?></label>
                </div>

                <div class="view-group row">
                  <label class="col-md-3 control-label" for="tanggal">Tanggal</label>
                  <label class="col-md-9">: <?php echo date_indo($tanggal, 'd F Y');
                                            //if($f=='sudah') {
                                            //echo "<br />&nbsp;<div class=\"badge badge-warning text-dark\">Retensi expired: ".date_format(date_create($b),'d-M-Y')."</div>";
                                            //}else {
                                            //echo "<br />&nbsp;<div class=\"badge badge-warning text-dark\">Retensi tgl: ".date_format(date_create($b),'d-M-Y')."</div>";
                                            //}
                                            ?>
                  </label>
                </div>

                <div class="view-group row">
                  <label class="col-md-3 control-label" for="pencipta">Pencipta</label>
                  <label class="col-md-9">: <?php echo $nama_pencipta; ?></label>
                </div>

                <div class="view-group row">
                  <label class="col-md-3 control-label" for="unitpengolah">Unit Pengolah</label>
                  <label class="col-md-9">: <?php echo $nama_pengolah; ?></label>
                </div>

                <div class="view-group row">
                  <label class="col-md-3 control-label" for="kode">Kode Klasifikasi</label>
                  <label class="col-md-9">: <?php echo $nama_kode . " - " . $nama; ?></label>
                </div>

                <div class="view-group row">
                  <label class="col-md-3 control-label" for="lokasi">Lokasi Arsip</label>
                  <label class="col-md-9">: <?php echo $nama_lokasi; ?></label>
                </div>

                <div class="view-group row">
                  <label class="col-md-3 control-label" for="media">Jenis Media</label>
                  <label class="col-md-9">: <?php echo $nama_media; ?></label>
                </div>

                <div class="view-group row">
                  <label class="col-md-3 control-label" for="ket">Ket. Keaslian</label>
                  <label class="col-md-9">: <?php echo strtoupper($ket); ?></label>
                </div>

                <div class="view-group row">
                  <label class="col-md-3 control-label" for="jumlah">Jumlah</label>
                  <label class="col-md-9">: <?php echo $jumlah; ?></label>
                </div>

                <div class="view-group row">
                  <label class="col-md-3 control-label" for="nobox">Nomor Box</label>
                  <label class="col-md-9">: <?php echo $nobox; ?></label>
                </div>

                <!--<div class="view-group row">
	<label class="col-md-3 control-label" for="user">Nama penginput</label>
	<label class="col-md-9">: <span class="badge badge-primary"><i class="fa fa-user"></i> <?php echo $username; ?></span></label>
</div>-->

              </div><!-- /1st column -->

              <div class="col-md-3">

                <div>
                  <div>QR Code</div>
                  <img src="<?= base_url('public/images/' . $idarsip . '.png') ?>" width="150" alt="">
                </div>

              </div><!-- 2nd column -->

            </div><!-- /.row -->

            <hr />
            <p class="">Dokumen ini adalah Benar dan Tercatat dalam database, untuk memastikan bahwa dokumen tersebut benar, pastikan bahwa URL dalam browser anda adalah <?= base_url() ?> dan bentuk fisik dokumen sama seperti gambar di bawah ini</p>
            <hr />

            <div class="row">
              <div class="col-md-12">

                <h4>File Preview <span class="float-right"><i class="fa fa-download"></i> File: <?php echo ($file == "" ? "" : "<a href='" . base_url('files/' . $file) . "' target='_blank'>" . $file . "</a>"); ?></span>
                </h4>


                <iframe id="pdf-js-viewer" src="<?= base_url() ?>/vendor/pdfjs/web/viewer.html?file=<?php echo base_url('files/' . $file); ?>" title="webviewer" width="100%" frameborder="0" scrolling="yes" style="display:block; width:100%; height:100vh;">

              </div>
            </div><!-- /.row -->

        </div><!-- card-body -->

      <?php } ?>

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