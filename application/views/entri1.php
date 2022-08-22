<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="row page-title-header mb-0">
	<div class="col-12">
		<div class="page-header">
			<h3 class="page-title">Entri Arsip Baru</h3>
		</div>
	</div>
</div>
<div class="card">

	<div class="card-header py-3">
		<a href="<?php echo base_url('/home/search'); ?>">
			<i class="fa fa-arrow-left"></i>&ensp;Kembali
		</a>
	</div>

	<div class="card-body">
		<form id="entriForm" class="form-horizontal" action="<?php echo site_url('/admin/gentr'); ?>" method="post" enctype="multipart/form-data">
			<!-- Form Name -->
			<div class="row">
				<div class="col-md-6">
					<!-- 1st column -->

					<div class="form-group">
						<label class="col-md-4 control-label" for="noarsip">Nomor Arsip</label>
						<div class="col-md-12">
							<input id="noarsip" name="noarsip" class="form-control" type="text" required>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label" for="nama_dokumen">Nama Dokumen</label>
						<div class="col-md-12">
							<input id="nama_dokumen" name="nama_dokumen" class="form-control" type="text" required>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label" for="tanggal">Tanggal Penciptaan</label>
						<div class="col-md-12">
							<input id="tanggal" name="tanggal" class="form-control" type="text" placeholder="yyyy-mm-dd" autocomplete="off" required>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label" for="pencipta">Pencipta Arsip</label>
						<div class="col-md-12">
							<select id="pencipta" name="pencipta" class="form-control">
								<option value="">Pilih</option>
								<?php
								if (isset($pencipta)) {
									foreach ($pencipta as $k) {
										echo "<option value='" . $k['id'] . "' >" . $k['nama_pencipta'] . "</option>";
									}
								}
								?>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label" for="unitpengolah">Unit Pengolah</label>
						<div class="col-md-12">
							<select id="unitpengolah" name="unitpengolah" class="form-control input-md">
								<option value="">Pilih</option>
								<?php
								if (isset($unitpengolah)) {
									foreach ($unitpengolah as $k) {
										echo "<option value='" . $k['id'] . "' >" . $k['nama_pengolah'] . "</option>";
									}
								}
								?>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label" for="kode">Kode Klasifikasi</label>
						<div class="col-md-12">
							<select id="kode" name="kode" class="form-control input-md">
								<option value="">Pilih</option>
								<?php
								if (isset($kode)) {
									foreach ($kode as $k) {
										echo "<option value='" . $k['id'] . "' >" . $k['nama'] . " - " . $k['kode'] . "</option>";
									}
								}
								?>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label" for="uraian">Uraian</label>
						<div class="col-md-12">
							<textarea id="uraian" name="uraian" class="form-control input-md" rows="3"></textarea>
						</div>
					</div>

				</div><!-- /1st column -->

				<div class="col-md-6">
					<!-- 2nd column -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="lokasi">Lokasi Arsip</label>
						<div class="col-md-12">
							<select id="lokasi" name="lokasi" class="form-control input-md">
								<option value="">Pilih</option>
								<?php
								if (isset($lokasi)) {
									foreach ($lokasi as $k) {
										echo "<option value='" . $k['id'] . "' >" . $k['nama_lokasi'] . "</option>";
									}
								}
								?>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label" for="media">Jenis Media</label>
						<div class="col-md-12">
							<select id="media" name="media" class="form-control input-md">
								<option value="">Pilih</option>
								<?php
								if (isset($media)) {
									foreach ($media as $k) {
										echo "<option value='" . $k['id'] . "' >" . $k['nama_media'] . "</option>";
									}
								}
								?>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label" for="ket">Keterangan Keaslian</label>
						<div class="col-md-12">
							<select class="form-control" name="ket" id="ket">
								<option value="asli" selected="selected">Asli</option>
								<option value="copy">Copy</option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label" for="jumlah">Jumlah</label>
						<div class="col-md-12">
							<input id="jumlah" name="jumlah" class="form-control input-md" type="text" value="1">
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label" for="nobox">Nomor Box</label>
						<div class="col-md-8">
							<input id="nobox" name="nobox" class="form-control input-md" type="text">
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label" for="nobox">File</label>
						<div class="col-md-12">
							<input type="file" name="file" class="dropify" required>
							<small class="form-text text-muted">Ukuran Maksimal <?php echo number_format(ceil(max_file_upload_in_bytes() / 1000)); ?> MB</small>
						</div>
					</div>

				</div><!-- /2nd column -->
			</div><!-- /.row -->

			<div class="form-group">
				<div class="col-md-12">
					<button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-save"></i> Simpan</button>
				</div>
			</div>
		</form>

	</div><!-- card body -->
</div> <!-- card -->

<?php
function return_bytes($val)
{
	$val = trim($val);
	$last = strtolower($val[strlen($val) - 1]);
	$val = (int)trim($val);
	switch ($last) {
		case 'g':
			$val *= 1024;
		case 'm':
			$val *= 1024;
		case 'k':
			$val *= 1024;
	}
	return $val;
}

function max_file_upload_in_bytes()
{
	//select maximum upload size
	$max_upload = return_bytes(ini_get('upload_max_filesize'));
	//select post limit
	$max_post = return_bytes(ini_get('post_max_size'));
	//select memory limit
	$memory_limit = return_bytes(ini_get('memory_limit'));
	// return the smallest of them, this defines the real limit
	return min($max_upload, $max_post, $memory_limit);
}
