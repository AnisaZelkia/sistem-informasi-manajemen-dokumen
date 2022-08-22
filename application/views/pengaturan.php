<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="row page-title-header mb-0">
	<div class="col-12">
		<div class="page-header">
			<h3 class="page-title">Pengaturan Situs</h3>
			<div class="quick-link-wrapper d-md-flex flex-md-wrap">
				<div class="quick-links">
					<?php if (isset($_SESSION['akses_modul']['pengaturan']) && $_SESSION['akses_modul']['pengaturan'] == 'on') : ?>

					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="card">

	<div class="card-body">
		<form id="Form" class="form-horizontal" data-toggle="validator" action="<?= site_url('/pengaturan/edit'); ?>" method="post" enctype="multipart/form-data">
			<input type="hidden" name="id" id="id" value="<?= $setting->id_pengaturan ?>">
			<div class="form-group">
				<label class="control-label" for="site_title">Site Title</label>
				<div class="">
					<input type="text" class="form-control" id="site_title" name="site_title" value="<?= $setting->site_title ?>" />
				</div>
			</div>
			<div class="form-group">
				<label class="control-label" for="site_nama">Nama</label>
				<div class="">
					<input type="text" class="form-control" id="site_nama" name="site_nama" value="<?= $setting->site_nama ?>" />
				</div>
			</div>

			<button type="submit" class="btn btn-primary">Simpan</button>
		</form>
	</div>
</div>