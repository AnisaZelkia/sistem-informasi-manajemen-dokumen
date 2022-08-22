<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="row page-title-header mb-0">
	<div class="col-12">
		<div class="page-header">
			<h3 class="page-title">Data Sirkulasi (<?php echo number_format($jml); ?>)</h3>
			<div class="quick-link-wrapper d-md-flex flex-md-wrap">
				<div class="quick-links ">
					<?php if (isset($_SESSION['akses_modul']['sirkulasi']) && $_SESSION['akses_modul']['sirkulasi'] == 'on') : ?>
						<a class="btn btn-primary" href="<?php echo site_url('/sirkulasi/entr'); ?>"><i class="fa fa-plus"></i> Peminjaman Baru</a>
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
		<?php
		if ($this->session->flashdata('zz')) {
			echo '<div class="alert alert-success" role="alert">' . $this->session->flashdata('zz') . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	  </button></div>';
		}
		?>
		<!-- Page Features -->
		<div class="table-responsive">
			<table class="table table-bordered table-hover" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>No Arsip</th>
						<th>Peminjam</th>
						<th>Keperluan</th>
						<th>Tgl. Pinjam</th>
						<th>Tgl. Harus Kembali</th>
						<th>Tgl. Pengembalian</th>
						<?php if (isset($admin) && $admin && isset($_SESSION['akses_modul']['sirkulasi']) && $_SESSION['akses_modul']['sirkulasi'] == 'on') : ?>
							<th class="width-sm"></th>
							<th class="width-sm"></th>
						<?php endif; ?>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach ($data as $a) {
						echo "<tr>";
						echo "<td>" . $a['noarsip'] . "</td>";
						echo "<td>" . $a['username_peminjam'] . "</td>";
						echo "<td>" . $a['keperluan'] . "</td>";
						echo "<td>" . $a['tgl_pinjam'] . "</td>";
						echo "<td>" . $a['tgl_haruskembali'] . "</td>";
						echo "<td>";
						// hanya user admin bisa mengubah data sirkulasi
						if (isset($admin) && $admin && isset($_SESSION['akses_modul']['sirkulasi']) && $_SESSION['akses_modul']['sirkulasi'] == 'on') {
							if ($a['tgl_pengembalian'] == null) {
								echo "<a href='#' id='" . $a['id'] . "' data-toggle=\"modal\" data-target=\"#arsipkembali\" class='btn btn-primary kemdata' >Kembalikan</a>";
							} else {
								echo $a['tgl_pengembalian'];
							}
							echo "</td>";
							echo "<td align=\"center\">";
							echo "<a class=\"text-primary\" href='" . site_url('/sirkulasi/vedit/' . $a['id']) . "'><span class='fa fa-edit fa-lg' aria-hidden='true'></span></a>";
							echo "</td>";
							echo "<td align=\"center\">";
							echo "<a class='sdeldata text-danger' id='" . $a['id'] . "' href='#' data-toggle=\"modal\" data-target=\"#deldata\"><i class=\"fa fa-trash fa-lg\"></i></a>";
						}
						echo "</td>";
						echo "</tr>";
					}
					?>
				</tbody>
			</table>
		</div> <!-- table repsonsive -->
		<div class="mt-2">
			<?php
			echo $pages;
			?>
		</div>

	</div>
</div>
<!-- /.row -->

<div class="modal fade" id="deldata">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header py-3">
				<h4 class="modal-title">Hapus Data</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="fsdeldata" class="form-horizontal" role="form" method="post" action="<?php echo site_url("/sirkulasi/del"); ?>">
					<h4 class="modal-title">Yakin ingin Hapus Data ini?</h4>
					<input type="hidden" name="id" id="deliddata" value="">
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
				<button type="button" class="btn btn-primary" id="sdeldatago">Hapus</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- /.pengembalian arsip -->
<div class="modal fade" id="arsipkembali">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header py-3">
				<h4 class="modal-title">Kembalikan Arsip</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="fkemarsip" class="form-horizontal" role="form" method="post" action="<?php echo site_url("/sirkulasi/kembalikan"); ?>">
					<h4 class="modal-title">Yakin ingin kembalikan arsip ini?</h4>
					<input type="hidden" name="id" id="kemid" value="">
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
				<button type="button" class="btn btn-primary" id="kemarsipgo">Kembalikan</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->