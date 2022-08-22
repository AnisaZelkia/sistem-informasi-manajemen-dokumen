<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="row page-title-header mb-0">
  <div class="col-12">
    <div class="page-header">
      <h3 class="page-title">Master Pencipta Arsip</h3>
      <div class="quick-link-wrapper d-md-flex flex-md-wrap">
        <div class="quick-links">
          <?php if (isset($_SESSION['akses_modul']['pencipta']) && $_SESSION['akses_modul']['pencipta'] == 'on') : ?>
            <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#addpenc"><i class="fa fa-plus"></i> Tambah Data Baru</a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="card">
  <div class="card-header py-3">
    <a href="<?php echo base_url('/home'); ?>">
      <i class="fa fa-arrow-left"></i>&ensp;Kembali
    </a>
  </div>

  <div class="card-body">
    <div class="row">
      <div class="col-md-12" id="divtabelpenc">
        <div class="table-responsive">
          <table class="table table-bordered" name="vpenc" id="vpenc">
            <thead>
              <th class="width-sm">No</th>
              <th>Nama Pencipta</th>
              <th class="width-sm"></th>
              <th class="width-sm"></th>
            </thead>
            <?php
            if (isset($penc)) {
              $no = 1;
              foreach ($penc as $u) {
                echo "<tr>";
                echo "<td>" . $no . "</td>";
                echo "<td>" . $u['nama_pencipta'] . "</td>";
                echo "<td align=\"center\"><a data-toggle=\"modal\" data-target=\"#editpenc\" class='edpenc text-primary' href='#' id='" . $u['id'] . "' title=\"Edit\"><i class=\"fa fa-edit fa-lg\"></i></a></td>";
                echo "<td align=\"center\"><a data-toggle=\"modal\" data-target=\"#delpenc\" class='delpenc text-danger' href='#' id='" . $u['id'] . "' title=\"Delete\"><i class=\"fa fa-trash fa-lg\"></i></a></td>";
                echo "</tr>";
                $no++;
              }
            }
            ?>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="addpenc">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header py-3">
        <h4 class="modal-title">Tambah Pencipta Arsip</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="faddpenc" class="form-horizontal" role="form" method="post" action="<?php echo site_url("/admin/addpenc"); ?>">
          <div class="form-group">
            <label class="col-sm-2 control-label" for="nama">Nama</label>
            <div class="col-sm-10">
              <input type="text" class="form-control form-control-lg" id="nama" name="nama" />
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary" id="addpencgo">Simpan</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade" id="editpenc">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header py-3">
        <h4 class="modal-title">Edit Pencipta Arsip</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="fedpenc" class="form-horizontal" role="form" method="post" action="<?php echo site_url("/admin/edpenc"); ?>">
          <input type="hidden" name="id" id="edidpenc" value="">
          <div class="form-group">
            <label class="col-sm-2 control-label" for="nama">Nama</label>
            <div class="col-sm-10">
              <input type="text" class="form-control form-control-lg" id="enama" name="nama" />
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary" id="editpencgo">Simpan</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="delpenc">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header py-3">
        <h4 class="modal-title">Delete Pencipta Arsip</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="fdelpenc" class="form-horizontal" role="form" method="post" action="<?php echo site_url("/admin/delpenc"); ?>">
          <h4 class="modal-title">Yakin ingin Hapus data ini?</h4>
          <input type="hidden" name="id" id="delidpenc" value="">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="delpencgo">Hapus</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->