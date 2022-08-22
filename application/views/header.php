<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php if (isset($title)) {
                echo $title . " - ";
            } ?><?= $set->site_title ?></title>

    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/staradmin/src/assets/vendors/font-awesome/css/font-awesome.min.css') ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('/assets/staradmin/src/assets/vendors/mdi/css/materialdesignicons.min.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('/assets/staradmin/src/assets/vendors/flag-icon-css/css/flag-icon.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/staradmin/src/assets/vendors/ti-icons/css/themify-icons.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/staradmin/src/assets/vendors/typicons/typicons.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/staradmin/src/assets/vendors/css/vendor.bundle.base.css') ?>">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/staradmin/src/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/staradmin/src/assets/vendors/datatables.net-fixedcolumns-bs4/fixedColumns.bootstrap4.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/staradmin/src/assets/vendors/select2/select2.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/staradmin/src/assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/staradmin/src/assets/vendors/icheck/all.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/staradmin/src/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/staradmin/src/assets/vendors/dropify/dropify.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/staradmin/src/assets/vendors/sweetalert2/sweetalert2.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/public/css/jquery.auto-complete.css') ?>" />
    <!-- End Plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/staradmin/src/assets/css/shared/style.css') ?>">
    <link id="test" rel="stylesheet" href="<?php echo base_url('/assets/staradmin/src/assets/css/demo_1/style.css') ?>">
    <script src="<?php echo base_url('/assets/staradmin/src/assets/vendors/js/vendor.bundle.base.js') ?>"></script>
    <script src="<?php echo base_url('/assets/staradmin/src/assets/vendors/sweetalert2/sweetalert2.all.min.js') ?>"></script>
    <!-- endinject -->
    <script>
        var base_url = '<?php echo base_url(); ?>';
        var site_url = '<?php echo site_url(); ?>';
    </script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="<?php echo base_url('/public/logo.png') ?>" rel="icon" />
    <style>
        .form-control {
            font-size: .875em;
        }
    </style>
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/style-switcher.css') ?>">
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
                    $("#test").attr("href", "<?php echo base_url('/assets/staradmin/src/assets/css/demo_1/style.css') ?>");
                    localStorage.removeItem('checkbox');
                }
            });
        });
    </script>
</head>

<body class="sidebar-icon-only">
    <div class="container-scroller">

        <!-- Navigation -->
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
                <a class="navbar-brand brand-logo text-light" href="<?php echo site_url('/home'); ?>">
                    ARSIP.DOK</a>
                    <a href="<?php echo site_url('/home'); ?>">
                    <img weight="83px" height="63px" src="<?php echo base_url('/public/logo.png') ?>"  /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>
                <ul class="navbar-nav d-none d-xl-inline-block">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('/home'); ?>">Home</a>
                    </li>

                </ul>

                <!-- SEARCH FORM -->
                <form class="ml-auto search-form d-none d-md-block" method="get" action="<?php echo site_url('/home/search'); ?>">
                    <div class="input-group">
                        <input name="katakunci" class="form-control" type="search" placeholder="nomor arsip/kata kunci uraian" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <div class="nav-link theme-switch-wrapper" style="margin-top: 8px">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox" />
                                <div class="slider round"></div>
                            </label>
                            <label style="margin-left: 8px;" title="Dark Theme"><i class="mdi mdi-brightness-6"></i></label>
                        </div>
                    </li>
                    <li class="nav-item dropdown  user-dropdown">
                        <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false"><?php echo $_SESSION['username']; ?></a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                            <div class="dropdown-header text-center">
                                <p class="mb-1 mt-3 font-weight-semibold"><?php echo $_SESSION['username']; ?></p>
                                <p class="font-weight-light text-muted mb-0"><?php echo $_SESSION['tipe']; ?></p>
                            </div>
                            <a class="dropdown-item" href="<?php echo site_url('pengaturan/profil'); ?>"><i class="dropdown-item-icon mdi mdi-account text-primary"></i>Profil</a>
                            <?php if ($_SESSION['tipe'] == 'admin') { ?>
                                <a class="dropdown-item" href="<?php echo site_url('pengaturan'); ?>"><i class="dropdown-item-icon mdi mdi-settings text-primary"></i>Pengaturan</a>
                            <?php } else { ?>
                            <?php } ?>
                            <a class="dropdown-item" href="<?php echo site_url('home/logout'); ?>"><i class="dropdown-item-icon mdi mdi-power text-primary"></i>Logout</a>
                        </div>
                    </li>
                </ul>

                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
            <!-- /.container -->
        </nav>

        <!-- page-body-wrapper -->
        <div class="container-fluid page-body-wrapper">

            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item nav-category">Main Menu</li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('/home'); ?>">
                            <i class="menu-icon mdi mdi-home"></i>
                            <span class="menu-title">Home</span>
                        </a>
                    </li>
                    <?php
                    echo '<li class="nav-item"><a class="nav-link" href="' . site_url('/home/search') . '"><i class="menu-icon mdi mdi-file-document-box-multiple"></i> <span class="menu-title">Manajemen Dokumen</span></a></li>';
                    ?>
                    <?php if (isset($_SESSION['akses_modul']['entridata']) && $_SESSION['akses_modul']['entridata'] == 'on') {
                        echo '<li class="nav-item"><a class="nav-link" href="' . site_url('/admin/entr') . '"><i class="menu-icon mdi mdi-file-document-box-plus"></i> <span class="menu-title">Entri Baru</span></a></li>';
                    }
                    ?>

                    <?php if (isset($_SESSION['akses_modul']['sirkulasi']) && $_SESSION['akses_modul']['sirkulasi'] == 'on') {
                        echo '<li class="nav-item"><a class="nav-link" href="' . site_url('/sirkulasi') . '"><i class="menu-icon mdi mdi-swap-horizontal-bold"></i> <span class="menu-title">Sirkulasi</span></a></li>';
                    } ?>
                    <?php
                    echo '<li class="nav-item"><a class="nav-link" href="' . site_url('/chart') . '"><i class="menu-icon mdi mdi-chart-bar"></i> <span class="menu-title">Grafik Chart</span></a></li>';
                    ?>
                    <?php
                    if ($_SESSION['menu_master']) {
                        echo '<li class="nav-item">
							<a class="nav-link" data-toggle="collapse" href="#data-master" aria-expanded="false" aria-controls="data-master">
                            <i class="menu-icon mdi mdi-wrench"></i>
                            <span class="menu-title">Data Master</span><i class="menu-arrow"></i></a>
                            <div class="collapse" id="data-master">
                            <ul class="nav flex-column sub-menu">';
                        if (isset($_SESSION['akses_modul']['user']) && $_SESSION['akses_modul']['user'] == 'on') {
                            echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"" . site_url('admin/vuser') . "\"><i class=\"fa fa-users\"></i>&nbsp; Pengguna</a></li>";
                        }
                        if (isset($_SESSION['akses_modul']['klasifikasi']) && $_SESSION['akses_modul']['klasifikasi'] == 'on') {
                            echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"" . site_url('admin/klas') . "\"><i class=\"fa fa-tag\"></i>&nbsp; Klasifikasi</a></li>";
                        }
                        if (isset($_SESSION['akses_modul']['pencipta']) && $_SESSION['akses_modul']['pencipta'] == 'on') {
                            echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"" . site_url('admin/penc') . "\"><i class=\"fa fa-home\"></i>&nbsp; Pencipta arsip</a></li>";
                        }
                        if (isset($_SESSION['akses_modul']['pengolah']) && $_SESSION['akses_modul']['pengolah'] == 'on') {
                            echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"" . site_url('admin/pengolah') . "\"><i class=\"fa fa-home\"></i>&nbsp; Unit Pengolah</a></li>";
                        }
                        if (isset($_SESSION['akses_modul']['lokasi']) && $_SESSION['akses_modul']['lokasi'] == 'on') {
                            echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"" . site_url('admin/lokasi') . "\"><i class=\"fa fa-map-marker\"></i>&nbsp; Lokasi</a></li>";
                        }
                        if (isset($_SESSION['akses_modul']['media']) && $_SESSION['akses_modul']['media'] == 'on') {
                            echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"" . site_url('admin/media') . "\"><i class=\"fa fa-film\"></i>&nbsp; Media</a></li>";
                        }
                        echo "</ul></div>
                        </li>";
                    }
                    ?>
                    <?php
                    ?>
                    <?php if (isset($_SESSION['akses_modul']['import']) && $_SESSION['akses_modul']['import'] == 'on') {
                        echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"" . site_url('admin/import') . "\"><i class=\"menu-icon mdi mdi-database-import\"></i> <span class=\"menu-title\">Import Data</span></a></li>";
                    }
                    ?>
                </ul>
            </nav>

            <!-- main-panel -->
            <div class="main-panel">
                <!-- content-wrapper -->
                <div class="content-wrapper">

                    <!-- SEARCH FORM -->
                    <form class="ml-auto search-form d-md-none d-lg-none d-xl-none d-sm-block mb-3" method="get" action="<?php echo site_url('/home/search'); ?>">
                        <div class="input-group">
                            <input name="katakunci" class="form-control" type="search" placeholder="nomor arsip/kata kunci uraian" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>