<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="row page-title-header mb-0">
	<div class="col-12">
		<div class="page-header">
			<h3 class="page-title">Edit Peminjaman</h3>
		</div>
	</div>
</div>

<div class="card">
	<div class="card-header py-3">
		<a href="<?php echo base_url('/sirkulasi'); ?>">
			<i class="fa fa-arrow-left"></i>&ensp;Kembali
		</a>
	</div>
	<div class="card-body">
		<form class="form-horizontal" data-toggle="validator" action="<?php echo site_url('/sirkulasi/update'); ?>" method="post" enctype="multipart/form-data">

			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<div class="form-group">
				<label class="control-label" for="noarsip">Nomor Arsip</label>
				<input type="text" value="<?php echo $noarsip ?>" id="snoarsip" name="noarsip" class="form-control disabled xhr" placeholder="Ketikan 3 huruf/angka pertama kode arsip atau klasifikasi arsip" data-xhr="<?php echo site_url('/sirkulasi/xhr_arsip'); ?>" autocomplete="off" readonly required />
			</div>

			<div class="form-group">
				<label class="control-label" for="username_peminjam">Username Peminjam</label>
				<input type="text" value="<?php echo $username_peminjam ?>" id="username_peminjam" name="username_peminjam" class="form-control xhr" placeholder="Ketikan 3 huruf pertama username yang akan meminjam" data-xhr="<?php echo site_url('/sirkulasi/xhr_user'); ?>" autocomplete="off" required />
			</div>

			<div class="form-group">
				<label class="control-label" for="keperluan">Alasan keperluan peminjaman</label>
				<textarea id="keperluan" name="keperluan" class="form-control" row="3" required><?php echo $keperluan; ?></textarea>
			</div>

			<div class="form-group">
				<label class="control-label" for="tgl_pinjam">Tanggal Peminjaman</label>
				<div class="input-group">
					<input id="tgl_pinjam" name="tgl_pinjam" class="form-control input-md" type="text" value="<?php print $tgl_pinjam; ?>" required>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label" for="tgl_haruskembali">Tanggal Harus Kembali</label>
				<div class="input-group">
					<input id="tgl_haruskembali" name="tgl_haruskembali" class="form-control input-md" value="<?php print $tgl_haruskembali; ?>" type="text" required>
					<span class="input-group-addon input-group-append border-left">
						<span class="mdi mdi-calendar input-group-text"></span>
					</span>
				</div>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-success btn-lg"><i class="fa fa-save"></i> Simpan</button>
			</div>

		</form>
	</div>
</div>