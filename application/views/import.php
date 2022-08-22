<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="row page-title-header mb-0">
	<div class="col-12">
		<div class="page-header">
			<h3 class="page-title">Import Data</h3>
			<div class="quick-link-wrapper d-md-flex flex-md-wrap">
				<div class="quick-links">
					<a href="<?php echo site_url('/home/dl') ?>" class="btn btn-primary"><i class="fa fa-download"></i> Export Data</a>&nbsp;
					<a href="<?php echo base_url('/public/template_import.xlsx') ?>" class="btn btn-success"><i class="fa fa-file-excel-o"></i> File Template</a>
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
		<!--<?php
			//if ($this->session->flashdata('zz')) {
			//echo '<div class="alert alert-danger" role="alert">' . $this->session->flashdata('zz') . '</div>';
			//}
			?>-->

		<form id="import_data" action="<?php echo site_url('/admin/importdata') ?>" enctype="multipart/form-data" class="form-horizontal" method="post" role="form">
			<div class="form-group">
				<label for="up_file">Choose File:</label>
				<input type="file" class="form-control-file" name="up_file" id="up_file" required />
			</div>
			<br />
			<div class="form-group">
				<input type="submit" value="Upload" class="btn btn-primary btn-lg submit" />
			</div>
		</form>

	</div>
</div>