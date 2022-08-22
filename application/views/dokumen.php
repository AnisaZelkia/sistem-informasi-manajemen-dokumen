<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="row page-title-header mb-0">
	<div class="col-12">
		<div class="page-header">
			<h3 class="page-title mb-0">Dokumen</h3>
			<div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
				<div class="quick-links ml-auto">
					<a href="#" role="button" data-toggle="modal" data-target="#advanced-search" aria-expanded="false" aria-controls="advanced-search" class="nav-link btn btn-secondary btn-sm mr-2"><i class="fa fa-search"></i> Pencarian Lanjut</a>
					<a class="nav-link btn btn-success btn-sm" href="<?php echo site_url('/home/dl') . ($_SERVER['QUERY_STRING'] ? '?' . $_SERVER['QUERY_STRING'] : '') ?>"><i class="fa fa-file-excel-o"></i> Ekspor ke Excel (XLS)</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="card">
	<div class="card-header py-3">
		Semua Data Dokumen
	</div>
	<!-- modal -->
	<div class="modal fade" id="advanced-search" tabindex="-1" role="dialog" aria-labelledby="advanced-search" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header py-3">
					<h4 class="modal-title">Pencarian Lanjut</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?php echo site_url('/home/search'); ?>" method="get" id="srcmain">
						<div class="row">
							<div class="col-md-4">
								<div class="form-group row">
									<label class="col-sm-3 col-form-label">Uraian</label>
									<div class="col-sm-9">
										<input id="uraian" name="uraian" class="form-control input-md" type="text" value="<?php echo $src['uraian'] ?>">
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group row">
									<label class="col-sm-3 col-form-label">No Arsip</label>
									<div class="col-sm-9">
										<input id="noarsip" name="noarsip" class="form-control input-md" type="text" value="<?php echo $src['noarsip'] ?>">
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group row">
									<label class="col-sm-3 col-form-label">Retensi</label>
									<div class="col-sm-9">
										<select class="form-control" name="retensi" id="retensi">
											<option value="all">Semua</option>
											<option value="sudah" <?php echo ($src['retensi'] == 'sudah' ? 'selected=selected' : ''); ?>>Sudah</option>
											<option value="belum" <?php echo ($src['retensi'] == 'belum' ? 'selected=selected' : ''); ?>>Belum</option>
										</select>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-4">

								<div class="form-group row">
									<label class="col-sm-3 col-form-label">Bagian</label>
									<div class="col-sm-9">
										<select class="form-control" name="penc" id="penc">
											<option value="all">Semua</option>
											<?php
											if (isset($penc)) {
												foreach ($penc as $p) {
													echo "<option value=\"" . $p['id'] . "\" " . ($src['penc'] == $p['id'] ? "selected=selected" : "") . ">" . " - " . $p['nama_pencipta'] . "</option>";
												}
											}
											?>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group row">
									<label class="col-sm-3 col-form-label">Unit</label>
									<div class="col-sm-9">
										<select class="form-control" name="peng" id="peng">
											<option value="all">Semua</option>
											<?php
											if (isset($peng)) {
												foreach ($peng as $p) {
													echo "<option value=\"" . $p['id'] . "\" " . ($src['peng'] == $p['id'] ? "selected=selected" : "") . ">" . " - " . $p['nama_pengolah'] . "</option>";
												}
											}
											?>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group row">
									<label class="col-sm-3 col-form-label">Lokasi</label>
									<div class="col-sm-9">
										<select class="form-control" name="lok" id="lok">
											<option value="all">Semua</option>
											<?php
											if (isset($lok)) {
												foreach ($lok as $p) {
													echo "<option value=\"" . $p['id'] . "\" " . ($src['lok'] == $p['id'] ? "selected=selected" : "") . ">" . " - " . $p['nama_lokasi'] . "</option>";
												}
											}
											?>
										</select>
									</div>
								</div>
							</div>

						</div>

						<div class="row">
							<div class="col-md-4">
								<div class="form-group row">
									<label class="col-sm-3 col-form-label">Tanggal</label>
									<div class="col-sm-9">
										<input id="tanggal" name="tanggal" class="form-control input-md" type="text" value="<?php echo $src['tanggal'] ?>">
									</div>
								</div>
							</div>

							<div class="col-md-4">
								<div class="form-group row">
									<label class="col-sm-3 col-form-label">Ket</label>
									<div class="col-sm-9">
										<select class="form-control" name="ket" id="ket">
											<option value="all">Semua</option>
											<option value="asli" <?php echo ($src['ket'] == 'asli' ? 'selected=selected' : ''); ?>>Asli</option>
											<option value="copy" <?php echo ($src['ket'] == 'copy' ? 'selected=selected' : ''); ?>>Copy</option>
										</select>
									</div>
								</div>
							</div>

							<div class="col-md-4">
								<div class="form-group row">
									<label class="col-sm-3 col-form-label">Kode</label>
									<div class="col-sm-9">
										<select class="form-control" name="kode" id="zkode">
											<option value="all">Semua</option>
											<?php
											if (isset($kode)) {
												foreach ($kode as $p) {
													echo "<option value=\"" . $p['kode'] . "\" " . ($src['kode'] == $p['kode'] ? "selected=selected" : "") . ">" . $p['kode'] . " - " . $p['nama'] . "</option>";
												}
											}
											?>
										</select>
									</div>
								</div>
							</div>

						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group row">
									<label class="col-sm-3 col-form-label">Media</label>
									<div class="col-sm-9">
										<select class="form-control" name="med" id="med">
											<option value="all">Semua</option>
											<?php
											if (isset($med)) {
												foreach ($med as $p) {
													echo "<option value=\"" . $p['id'] . "\" " . ($src['med'] == $p['id'] ? "selected=selected" : "") . ">" . " - " . $p['nama_media'] . "</option>";
												}
											}
											?>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group row">
									<label class="col-sm-3 col-form-label">No. Box</label>
									<div class="col-sm-9">
										<input id="nobox" name="nobox" class="form-control input-md" type="text" value="<?php echo $src['nobox'] ?>">
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<button class="btn btn-primary" type="submit" id="singlebutton" name="singlebutton"><i class="fa fa-search"></i> Cari</button>
								</div>
							</div>
						</div>

					</form>
				</div>
				<!-- ./modal body -->
				<!--<div class="modal-footer">
                           <button type="button" class="btn btn-success trigger-submit"><i class="fa fa-search"></i> Cari</button>
                            <button type="button" class="btn btn-light" data-dismiss="modal">Tutup</button>
                          </div>-->
			</div>
		</div>
	</div>
	<!-- ./modal -->

	<!-- Title -->

	<div class="card-body">

		<!--<?php
			//if ($this->session->flashdata('zz')) {
			//echo '<div class="alert alert-success" role="alert">' . $this->session->flashdata('zz') . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			//<span aria-hidden="true">&times;</span>
			//</button></div>';
			//}
			?>-->
		<!-- /.row -->
		<!-- Page Features -->
		<div class="table-responsive">
			<?php if (!empty($data)) { ?>
				<table id="order-listing2" class="table table-bordered table-hover" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>No.Arsip</th>
							<th>Nama Dokumen</th>
							<th>Tanggal</th>
							<th>User</th>
							<th>File</th>
							<th class="width-sm"></th>
							<th class="width-sm"></th>
							<th class="width-sm"></th>
							<th class="width-sm"></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($data as $a) {
							echo "<tr>";
							echo "<td>" . $a['noarsip'] . "</td>";
							echo "<td>" . $a['nama_dokumen'] . "</td>";
							echo "<td>" . $a['tanggal'] . "</td>";
							echo "<td align=\"center\"><span class=\"badge badge-primary\">" . $a['username'] . "</span></td>";
							if ($a['file'] == "") {
								echo "<td></td>";
							} else {
								echo "<td align=\"center\"><a href='" . base_url('files/' . $a['file']) . "' target='_blank'><i class='fa fa-file fa-lg' aria-hidden='true'></i></a></td>";
							}
							echo "<td align=\"center\"><a href='" . site_url('home/view/' . encrypt_url($a['id'])) . "' ><i class=\"fa fa-search fa-lg text-primary\"></i></a></td>";
							echo "<td align=\"center\"><a href=\"#arsip-" . encrypt_url($a['id']) . "\" data-toggle=\"modal\" data-target=\"#arsip-" . encrypt_url($a['id']) . "\"><i class='fa fa-qrcode fa-lg' aria-hidden='true'></i></a>
							<div class=\"modal fade\" id=\"arsip-" . encrypt_url($a['id']) . "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"arsipLabel\" aria-hidden=\"true\">
                      <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                          <div class=\"modal-header py-2\">
                            <h5 class=\"modal-title\" id=\"arsipLabel\">QR Code Untuk Publik</h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                              <span aria-hidden=\"true\">&times;</span>
                            </button>
                          </div>
                          <div class=\"modal-body\">
                            <img src=" . base_url('public/images/' . $a['idarsip'] . '.png') . " alt=\"\" style=\"width: 50%;min-width: 50%;height:50%;border-radius: 0;\">
							<div>
							<p>" . $a['nama_dokumen'] . "<br/>
							No. " . $a['noarsip'] . "</p>
							<a href=" . base_url('dokumen/detail/' . $a['idarsip'] . '') . " target=\"_blank\">Buka Link</a></div>
                          </div>
                          <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-light\" data-dismiss=\"modal\">Tutup</button>
                          </div>
                        </div>
                      </div>
                    </div>
							</td>";
							echo "<td align=\"center\">";
							if (isset($_SESSION['akses_modul']['entridata']) && $_SESSION['akses_modul']['entridata'] == 'on') {
								echo "<a href='" . site_url('/admin/vedit/' . encrypt_url($a['id'])) . "'><i class='fa fa-pencil fa-lg text-primary' aria-hidden='true'></i></a>";
							}
							echo "</td>";
							echo "<td align=\"center\">";
							if (isset($_SESSION['akses_modul']['entridata']) && $_SESSION['akses_modul']['entridata'] == 'on') {
								echo "<a class='deldata' id='" . $a['id'] . "' href='#' data-toggle=\"modal\" data-target=\"#deldata\"><i class=\"fa fa-trash fa-lg text-danger\"></i></a>";
							}
							echo "</td>";
							echo "</tr>";
						} ?>

					</tbody>
				</table>
			<?php
			} else { ?>
				<div class="text-center">
					<img class="img-fluid" src="<?= base_url('public/no-data.png') ?>" alt="Tidak ada Data">
				</div>
			<?php } ?>
		</div><!-- table responsive -->

		<div class="mt-2">
			<?php
			echo $pages;
			?>
		</div>
		<!-- /.row -->
	</div>
</div>

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
				<form id="fdeldata" class="form-horizontal" role="form" method="post" action="<?php echo site_url("/admin/del1"); ?>">
					<h4 class="modal-title">Yakin ingin Hapus Data ini?</h4>
					<input type="hidden" name="id" id="deliddata" value="">
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
				<button type="button" class="btn btn-primary" id="deldatago">Hapus</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script src="<?php echo base_url('/assets/staradmin/src/assets/vendors/chart.js/Chart.min.js') ?>"></script>
<script>
	$(function() {
		//get the bar chart canvas
		var cData = JSON.parse(`<?php echo $chart1_data; ?>`);
		console.log(cData);
		var ctx = $("#bar-chart1");

		//bar chart data
		var data = {
			labels: cData.label,
			datasets: [{
				label: cData.label,
				data: cData.data,
				backgroundColor: ChartColor[1],
				borderColor: ChartColor[1],
				borderWidth: 0
			}]
		};

		//options
		var options = {
			responsive: true,
			title: {
				display: true,
				position: "top",
				text: "Jumlah Arsip Per-Bulan",
				fontSize: 16,
				//fontColor: "#333"
			},
			legend: {
				display: true,
				position: "bottom",
				labels: {
					//fontColor: "#333",
					fontSize: 14
				}
			}
		};

		//create bar Chart class object
		var chart1 = new Chart(ctx, {
			type: "bar",
			data: data,
			options: options
		});

	});
</script>

<script>
	$(function() {
		//get the bar chart canvas
		var cData = JSON.parse(`<?php echo $chart2_data; ?>`);
		console.log(cData);
		var ctx = $("#bar-chart2");

		//bar chart data
		var data = {
			labels: cData.label,
			datasets: [{
				label: cData.label,
				data: cData.data,
				backgroundColor: ChartColor[2],
				borderColor: ChartColor[2],
				borderWidth: 0
			}]
		};

		//options
		var options = {
			responsive: true,
			title: {
				display: true,
				position: "top",
				text: "Jumlah Arsip Per-Lokasi",
				fontSize: 16,
				//fontColor: "#333"
			},
			legend: {
				display: true,
				position: "bottom",
				labels: {
					//fontColor: "#333",
					fontSize: 14
				}
			}
		};

		//create bar Chart class object
		var chart2 = new Chart(ctx, {
			type: "bar",
			data: data,
			options: options
		});

	});
</script>

<!--<script>
  $(function(){
      //get the bar chart canvas
      var cData = JSON.parse(`<?php //echo $chart3_data; 
								?>`);
      console.log(cData);
      var ctx = $("#bar-chart3");
 
      //bar chart data
      var data = {
        labels: cData.label,
        datasets: [
          {
            label: cData.label,
            data: cData.data,
			backgroundColor: ChartColor[3],
          	borderColor: ChartColor[3],
          	borderWidth: 0
          }
        ]
      };
 
      //options
      var options = {
        responsive: true,
        title: {
          display: true,
          position: "top",
          text: "Jumlah Peminjaman Per-Bulan",
          fontSize: 16,
          //fontColor: "#333"
        },
        legend: {
          display: true,
          position: "bottom",
          labels: {
            //fontColor: "#333",
            fontSize: 14
          }
        }
      };
 
      //create bar Chart class object
      var chart3 = new Chart(ctx, {
        type: "bar",
        data: data,
        options: options
      });
 
  });
</script>-->