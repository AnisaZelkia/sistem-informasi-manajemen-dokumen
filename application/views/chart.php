<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="row page-title-header mb-0">
  <div class="col-12">
    <div class="page-header">
      <h2 class="page-title">Grafik Chart</h2>

    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
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

  <div class="col-md-12 grid-margin stretch-card">
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
        label: cData.label[1,2,3,4,5,6,7,8,9,10,11,12],
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
        display: false,
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