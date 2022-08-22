<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="row page-title-header mb-2">
  <div class="col-12">
    <div class="page-header2">
      <h3 class="page-title">Dashboard</h3>
    </div>
  </div>
</div>
<div class="row">
  <?php if ($_SESSION['tipe'] == 'admin' || $_SESSION['tipe'] == 'operator') { ?>
    <div class="col-lg-4 col-md-3 col-sm-6 mb-3 stretch-card">
      <div class="card card-statistics bg-blue-gradient">
        <div class="card-body">
          <div class="clearfix">
            <div class="float-left">
              <i class="mdi mdi-file-document-box-multiple icon-lg"></i>
            </div>
            <div class="float-right">
              <h5 class="mb-0 text-right text-white"><a href="<?= base_url('/home/search') ?>" alt="Jumlah Dokumen" class="text-white">Jumlah Dokumen</a></h5>
              <div class="fluid-container">
                <h1 class="font-weight-medium text-right mb-0"><?php echo $countArsip->jumlah; ?></h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-3 col-sm-6 mb-3 stretch-card">
      <div class="card card-statistics bg-orange-gradient">
        <div class="card-body">
          <div class="clearfix">
            <div class="float-left">
              <i class="mdi mdi-swap-horizontal-bold icon-lg"></i>
            </div>
            <div class="float-right">
              <h5 class="mb-0 text-right text-white"><a href="<?= base_url('/sirkulasi') ?>" alt="Sirkulasi" class="text-white">Sirkulasi</a></h5>
              <div class="fluid-container">
                <h1 class="font-weight-medium text-right mb-0"><?php echo $countSirkulasi->jumlah; ?></h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-3 col-sm-6 mb-3 stretch-card">
      <div class="card card-statistics bg-green-gradient">
        <div class="card-body">
          <div class="clearfix">
            <div class="float-left">
              <i class="mdi mdi-account-multiple icon-lg"></i>
            </div>
            <div class="float-right">
              <h5 class="mb-0 text-right text-white"><a href="<?= base_url('/admin/vuser') ?>" alt="Pengguna" class="text-white">Pengguna</a></h5>
              <div class="fluid-container">
                <h1 class="font-weight-medium text-right mb-0"><?php echo $countUser->jumlah; ?></h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php } else { ?>
    <div class="col-md-6 mb-3 stretch-card">
      <div class="card card-statistics bg-blue-gradient">
        <div class="card-body">
          <div class="clearfix">
            <div class="float-left">
              <i class="mdi mdi-file-document-box-multiple icon-lg"></i>
            </div>
            <div class="float-right">
              <h5 class="mb-0 text-right text-white"><a href="<?= base_url('/home/search') ?>" alt="Jumlah Dokumen Anda" class="text-white">Dokumen Anda</a></h5>
              <div class="fluid-container">
                <h1 class="font-weight-medium text-right mb-0"><?php echo $countArsip->jumlah; ?></h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 mb-3 stretch-card">
      <div class="card card-statistics bg-orange-gradient">
        <div class="card-body">
          <div class="clearfix">
            <div class="float-left">
              <i class="mdi mdi-swap-horizontal-bold icon-lg"></i>
            </div>
            <div class="float-right">
              <h5 class="mb-0 text-right text-white"><a href="<?= base_url('/sirkulasi') ?>" alt="Sirkulasi" class="text-white">Sirkulasi Anda</a></h5>
              <div class="fluid-container">
                <h1 class="font-weight-medium text-right mb-0"><?php echo $countSirkulasi->jumlah; ?></h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
</div>

</div>

  <div class="row">
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="chart-container">
          <div class="bar-chart-container">
            <canvas id="bar-chart2"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>

 <div class="col-md-6 grid-margin stretch-card">
			<div class="card">
			<div class="card-body">

				<div class="chart-container">
				<div class="bar-chart-container">
				<canvas id="bar-chart3"></canvas>
				</div>
				</div>

			</div>
			</div>
		</div> 

</div>

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
        label: cData.label[ ["January", "February","March","April","May","June", "July","August","September","October","November","December"], 
        data: cData.data,
        backgroundColor: [ 
          'rgba(255, 206, 86, 0.4)',
          'rgba(75, 192, 192, 0.4)',
	'rgba(153, 102, 255, 0.4)',
	'rgba(255, 159, 64, 0.4)'],
  borderColor: [
 
	'rgba(75, 192, 192, 1)',
	'rgba(153, 102, 255, 1)',
	'rgba(255, 159, 64, 1)'
	],
        borderWidth: 0
      }]
    };

    //options
    var options = {
      responsive: true,
      title: {
        display: true,
        position: "top",
        text: "Jumlah Arsip Dokumen Per-Bulan",
        fontSize: 16,
        //fontColor: "#333"
      },
      legend: {
        display: false,
        position: "bottom",
        labels: {
        
          //fontColor: "#333",
          fontSize: 14
        
        } }
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
        label: cData.label[0,1,3],
         data: cData.data,
         backgroundColor: ['rgba(255, 99, 132, 0.4)',
	'rgba(54, 162, 235, 0.4)',
	'rgba(255, 206, 86, 0.4)',
	'rgba(75, 192, 192, 0.4)',
	'rgba(153, 102, 255, 0.4)',
	'rgba(255, 159, 64, 0.4)'],
  borderColor: [
	'rgba(255,99,132,1)',
	'rgba(54, 162, 235, 1)',
	'rgba(255, 206, 86, 1)',
	'rgba(75, 192, 192, 1)',
	'rgba(153, 102, 255, 1)',
	'rgba(255, 159, 64, 1)'
	],
        borderWidth: 0
      }]
    };

    //options
    var options = {
      maintainAspectRatio: true,
        responsive: true,
        legend: {
            position: 'top',
            display: false,
          
        },
        title: {
            position: 'top',
            display: true,
            text:'Jumlah Dokumen Per-Lokasi'
        },
        tooltips: {
            mode: 'index',
            intersect: true,
        },
        hover: {
            mode: 'nearest',
            intersect: true
        },
        scales: {
            xAxes: [{
                display: true,
                scaleLabel: {
                    display: true,
                    labelString: 'Lokasi'
                }
            }],
            yAxes: [{
                display: true,
                scaleLabel: {
                    display: true,
                    labelString: 'Jumlah Dokumen'
                }
            }]
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

 <script>
  $(function(){
      //get the bar chart canvas
      var cData = JSON.parse(`<?php  echo $chart3_data; ?>`);
      console.log(cData);
      var ctx = $("#bar-chart3");
 
      //bar chart data
      var data = {
        labels: cData.label,
        datasets: [
          {
            label: cData.label[0,1,3],
            data: cData.data,
            backgroundColor: [ 
 
	'rgba(75, 192, 192, 0.4)',
	'rgba(153, 102, 255, 0.4)',
	'rgba(255, 159, 64, 0.4)'],
  borderColor: [
	 
 
	'rgba(75, 192, 192, 1)',
	'rgba(153, 102, 255, 1)',
	'rgba(255, 159, 64, 1)'
	],
        borderWidth: 0
      }]
      };
 
      //options
      var options = {
      maintainAspectRatio: true,
        responsive: true,
        legend: {
            position: 'top',
            display: false,
          
        },
        title: {
            position: 'top',
            display: true,
            text:'Jumlah Dokumen Per-Kategori'
        },
        tooltips: {
            mode: 'index',
            intersect: true,
        },
        hover: {
            mode: 'nearest',
            intersect: true
        },
        scales: {
            xAxes: [{
                display: true,
                scaleLabel: {
                    display: true,
                    labelString: 'Kategori'
                }
            }],
            yAxes: [{
                display: true,
                scaleLabel: {
                    display: true,
                    labelString: 'Jumlah Dokumen'
                }
            }]
        }
   
    };
 
      //create bar Chart class object
      var chart3 = new Chart(ctx, {
        type: "bar",
        data: data,
        options: options
      });
 
  });
</script> 