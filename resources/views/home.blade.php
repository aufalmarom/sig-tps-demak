@extends('dashboard')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>

<!-- Count -->

<div class="row justify-content-center">
    <div class="col-xl-9 col-md-9 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Suara Pilpres Terbanyak: {{$presiden_terbanyak->paslon}}</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$presiden_terbanyak->suara}} Suara</div>
            </div>
            <div class="col-auto">
                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
<div class="row">
    <!-- Pending Requests Card Example -->
    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Suara Terbanyak - Pileg DPD : {{$dpd_terbanyak->caleg}}</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$suara_dpd}} Suara</div>
            </div>
            <div class="col-auto">
                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
            </div>
        </div>
        </div>
    </div>

    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Suara Terbanyak - Pileg DPR RI : {{$dpr_ri_terbanyak->partai}}</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$suara_dpr_ri}} Suara</div>
            </div>
            <div class="col-auto">
                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
<div class="row">
    <!-- Pending Requests Card Example -->
    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Suara Terbanyak - Pileg DPRD Provinsi : {{$dprd_provinsi_terbanyak->partai}}</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$suara_dprd_provinsi}} Suara</div>
            </div>
            <div class="col-auto">
                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
            </div>
        </div>
        </div>
    </div>

    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Suara Terbanyak - Pileg DPRD Kabupaten/Kota : {{$dprd_kab_terbanyak->partai}}</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$suara_dprd_kab}} Suara</div>
            </div>
            <div class="col-auto">
                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>

<!-- End Count -->

<!-- Pie Chart -->

<div class="row justify-content-center">
    <div class="col-xl-9 col-lg-9">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Pemilihan Umum Presiden</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
            <div class="chart-pie pt-4">
                <div class="chartjs-size-monitor">
                    <div class="chartjs-size-monitor-expand">
                        <div class="">
                        </div>
                    </div>
                    <div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                <canvas id="pie-pilpres" width="285" height="253" class="chartjs-render-monitor" style="display: block; width: 285px; height: 253px;"></canvas>
            </div>
            <hr>Berdasarkan hasil Pemilihan Umum Presiden 2019 didapat grafik seperti gambar di atas. Paslon nomor urut 1 mendapat suara tertinggi dengan presentase 71,83%.
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-6 col-lg-6">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Pemilihan Legislatif - DPD</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
            <div class="chart-pie pt-4">
                <div class="chartjs-size-monitor">
                    <div class="chartjs-size-monitor-expand">
                        <div class="">
                        </div>
                    </div>
                    <div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                <canvas id="pie-pileg-dpd" width="285" height="253" class="chartjs-render-monitor" style="display: block; width: 285px; height: 253px;"></canvas>
            </div>
            <hr>Berdasarkan hasil Pemilihan Umum DPD 2019 didapat grafik seperti gambar di atas. Calon Legislatig dengan suara terbanyak diperoleh Drs. H. Muhtar Lutfi, MM dengan presentase 16,71%.
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-6">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Pemilihan Legislatif DPR RI</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
            <div class="chart-pie pt-4">
                <div class="chartjs-size-monitor">
                    <div class="chartjs-size-monitor-expand">
                        <div class="">
                        </div>
                    </div>
                    <div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                <canvas id="pie-pileg-dprri" width="285" height="253" class="chartjs-render-monitor" style="display: block; width: 285px; height: 253px;"></canvas>
            </div>
            <hr>Berdasarkan hasil Pemilihan Umum DPR RI 2019 didapat grafik seperti gambar di atas. Parti dengan suara terbanyak diperoleh Partai Demokrasi Indonesia Perjuangan (PDIP) dengan presentase  24,27%.
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-6 col-lg-6">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Pemilihan Legislatif - DPRD Provinsi </h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
            <div class="chart-pie pt-4">
                <div class="chartjs-size-monitor">
                    <div class="chartjs-size-monitor-expand">
                        <div class="">
                        </div>
                    </div>
                    <div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                <canvas id="pie-pileg-dprdprovinsi" width="285" height="253" class="chartjs-render-monitor" style="display: block; width: 285px; height: 253px;"></canvas>
            </div>
            <hr>Berdasarkan hasil Pemilihan Umum DPRD Provinsi Jawa Tengah  2019 didapat grafik seperti gambar di atas. Partai dengan suara terbanyak diperoleh Partai Kebangkitan Bangsa (PKB) dengan presentase 20,03%.
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-6">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Pemilihan Legislatif - DPRD Kabupaten/Kota</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
            <div class="chart-pie pt-4">
                <div class="chartjs-size-monitor">
                    <div class="chartjs-size-monitor-expand">
                        <div class="">
                        </div>
                    </div>
                    <div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                <canvas id="pie-pileg-dprdkab" width="285" height="253" class="chartjs-render-monitor" style="display: block; width: 285px; height: 253px;"></canvas>
            </div>
            <hr>Berdasarkan hasil Pemilihan Umum DPRD Kabupaten Demak 2019 didapat grafik seperti gambar diatas. Partai dengan suara terbanyak diperoleh Partai Demokrasi Indonesia Perjuangan (PDIP) dengan presentase 20,54%.
            </div>
        </div>
    </div>
</div>

<!-- End Pie Chart -->

<!-- Bar Chart -->

<div class="row">
    <div class="col-lg-12 col-xl-12 col-md-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Pemilihan Umum Presiden</h6>
            </div>
            <div class="card-body">
                <div class="chart-bar">
                <canvas id="presiden"></canvas>
                </div>
                <hr>Berdasarkan hasil pemilihan umum presiden 2019 didapat grafik seperti gambar diatas dimana paslon nomor urut 1 mendapat suara tertiggi dengan total suara 32111.
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-xl-12 col-md-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Pemilihan Legislatif DPD</h6>
            </div>
            <div class="card-body">
                <div class="chart-bar">
                <canvas id="dpd"></canvas>
                </div>
                <hr>Berdasarkan hasil pemilihan umum DPD 2019 didapat grafik seperti gambar diatas dimana suara terbanyak diperoleh Drs.H.Muhtar Lutfi, MM dengan total 5235.
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-xl-12 col-md-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Pemilihan Legislatif DPR RI</h6>
            </div>
            <div class="card-body">
                <div class="chart-bar">
                <canvas id="dprri"></canvas>
                </div>
                <hr>Berdasarkan hasil Pemilihan Umum DPR RI 2019 didapat grafik seperti gambar diatas. Partai dengan suara terbanyak diperoleh Partai Demokrasi Indonesia Perjuangan (PDIP) dengan total suara 7603.
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-xl-12 col-md-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Pemilihan Legislatif DPRD Provinsi</h6>
            </div>
            <div class="card-body">
                <div class="chart-bar">
                <canvas id="dprdprovinsi"></canvas>
                </div>
                <hr>Berdasarkan hasil Pemilihan Umum DPRD Provinsi Jawa Tengah 2019 didapat grafik seperti gambar diatas. Partai dengan suara terbanyak diperoleh Partai Kebangkitan Bangsa (PKB) dengan total suara 6273.
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-xl-12 col-md-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Pemilihan Legislatif DPRD Kabupaten/Kota</h6>
            </div>
            <div class="card-body">
                <div class="chart-bar">
                <canvas id="dprdkab"></canvas>
                </div>
                <hr>Berdasarkan hasil Pemilihan Umum DPRD Kabupaten Demak 2019 didapat grafik seperti gambar diatas. Partai dengan suara terbanyak diperoleh Partai Demokrasi Indonesia Perjuangan (PDIP) dengan total suara 6432.
            </div>
        </div>
    </div>
</div>

<!-- End Bar Chart -->

<!-- Maps -->

<div class="row">
    <div class="col-xl-12 col-lg-12">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Data Maps</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <iframe width="100%" height="520" frameborder="0" src="https://rizqiur.carto.com/builder/e7ab25ea-af82-4422-9f03-890f560a5dae/embed" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>
        </div>
    </div>
    </div>
</div>

<!-- End Maps -->

@section('script')
<script>
    // Set new default font family and font color to mimic Bootstrap's default styling
      Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
      Chart.defaults.global.defaultFontColor = '#858796';
  
      // Pie Chart Pilpres
      var ctx = document.getElementById("pie-pilpres");
      var myPieChart = new Chart(ctx, {
      type: 'doughnut',
      data: {
          labels: [<?php 
          foreach($data_suara_presiden as $item){echo '"'.$item->paslon.'",';}?>],
          datasets: [{
          data: [<?php 
          foreach($data_suara_presiden as $item){echo '"'.strval(round($item->suara/$sum_suara_presiden, 2)).'",';}?>],
          backgroundColor: ['#c62828', '#64B5F6'],
          hoverBackgroundColor: ['#b71c1c', '#1565C0'],
          hoverBorderColor: "rgba(234, 236, 244, 1)",
  
      }],
      },
      options: {
          maintainAspectRatio: false,
          tooltips: {
          backgroundColor: "rgb(255,255,255)",
          bodyFontColor: "#858796",
          borderColor: '#dddfeb',
          borderWidth: 1,
          xPadding: 15,
          yPadding: 15,
          displayColors: false,
          caretPadding: 10,
          },
          legend: {
          display: false,
          
          },
          cutoutPercentage: 80,
      },
      });
  
      // Pie Chart Pileg DPD
      var ctx = document.getElementById("pie-pileg-dpd");
      var myPieChart = new Chart(ctx, {
      type: 'doughnut',
      data: {
          labels: [<?php foreach($data_suara_dpd as $data){ echo '"'.$data->caleg.'",';} ?>],
          datasets: [{
          data: [<?php foreach($data_suara_dpd as $data){ echo '"'.round($data->suara/$sum_suara_dpd, 2).'",';} ?>],
          backgroundColor: ['#ef5350', '#EC407A', '#AB47BC', '#7E57C2', '#7986CB', '#64B5F6', '#4FC3F7', '#4DD0E1', '#4DB6AC', '#81C784', '#AED581', '#DCE775', '#FFF176', '#FFD54F', '#FFB74D', '#FF8A65', '#A1887F', '#E0E0E0', '#90A4AE', '#FF6E40'],
          hoverBackgroundColor: ['#c62828', '#AD1457', '#6A1B9A', '#4527A0', '#283593', '#1565C0', '#0277BD', '#00838F', '#00695C', '#2E7D32', '#558B2F', '#9E9D24', '#F9A825', '#FF8F00', '#EF6C00', '#D84315', '#4E342E', '#424242', '#37474F', '#FF3D00'],
          hoverBorderColor: "rgba(234, 236, 244, 1)",
          }],
      },
      options: {
          maintainAspectRatio: false,
          tooltips: {
          backgroundColor: "rgb(255,255,255)",
          bodyFontColor: "#858796",
          borderColor: '#dddfeb',
          borderWidth: 1,
          xPadding: 15,
          yPadding: 15,
          displayColors: false,
          caretPadding: 10,
          },
          legend: {
          display: false
          },
          cutoutPercentage: 80,
      },
      });
  
      // Pie Chart Pileg DPR RI
      var ctx = document.getElementById("pie-pileg-dprri");
      var myPieChart = new Chart(ctx, {
      type: 'doughnut',
      data: {
          labels: [<?php foreach($data_suara_dpr_ri as $data){ echo '"'.$data->partai.'",';} ?>],
          datasets: [{
          data: [<?php foreach($data_suara_dpr_ri as $data){ echo '"'.round($data->suara/$sum_suara_dpd, 2).'",';} ?>],
          backgroundColor: ['#ef5350', '#EC407A', '#AB47BC', '#7E57C2', '#7986CB', '#64B5F6', '#4FC3F7', '#4DD0E1', '#4DB6AC', '#81C784', '#AED581', '#DCE775', '#FFF176', '#FFD54F', '#FFB74D', '#FF8A65'],
          hoverBackgroundColor: ['#c62828', '#AD1457', '#6A1B9A', '#4527A0', '#283593', '#1565C0', '#0277BD', '#00838F', '#00695C', '#2E7D32', '#558B2F', '#9E9D24', '#F9A825', '#FF8F00', '#EF6C00', '#D84315'],
          hoverBorderColor: "rgba(234, 236, 244, 1)",
          }],
      },
      options: {
          maintainAspectRatio: false,
          tooltips: {
          backgroundColor: "rgb(255,255,255)",
          bodyFontColor: "#858796",
          borderColor: '#dddfeb',
          borderWidth: 1,
          xPadding: 15,
          yPadding: 15,
          displayColors: false,
          caretPadding: 10,
          },
          legend: {
          display: false
          },
          cutoutPercentage: 80,
      },
      });
  
      // Pie Chart Pileg DPRD Provinsi
      var ctx = document.getElementById("pie-pileg-dprdprovinsi");
      var myPieChart = new Chart(ctx, {
      type: 'doughnut',
      data: {
          labels: [<?php foreach($data_suara_dprd_provinsi as $data){ echo '"'.$data->partai.'",';} ?>],
          datasets: [{
          data: [<?php foreach($data_suara_dprd_provinsi as $data){ echo '"'.round($data->suara/$sum_suara_dpd, 2).'",';} ?>],
          backgroundColor: ['#ef5350', '#EC407A', '#AB47BC', '#7E57C2', '#7986CB', '#64B5F6', '#4FC3F7', '#4DD0E1', '#4DB6AC', '#81C784', '#AED581', '#DCE775', '#FFF176', '#FFD54F', '#FFB74D', '#FF8A65'],
          hoverBackgroundColor: ['#c62828', '#AD1457', '#6A1B9A', '#4527A0', '#283593', '#1565C0', '#0277BD', '#00838F', '#00695C', '#2E7D32', '#558B2F', '#9E9D24', '#F9A825', '#FF8F00', '#EF6C00', '#D84315'],
          hoverBorderColor: "rgba(234, 236, 244, 1)",
          }],
      },
      options: {
          maintainAspectRatio: false,
          tooltips: {
          backgroundColor: "rgb(255,255,255)",
          bodyFontColor: "#858796",
          borderColor: '#dddfeb',
          borderWidth: 1,
          xPadding: 15,
          yPadding: 15,
          displayColors: false,
          caretPadding: 10,
          },
          legend: {
          display: false
          },
          cutoutPercentage: 80,
      },
      });
  
      // Pie Chart Pileg DPRD Kabupaten
      var ctx = document.getElementById("pie-pileg-dprdkab");
      var myPieChart = new Chart(ctx, {
      type: 'doughnut',
      data: {
          labels: [<?php foreach($data_suara_dprd_kab as $data){ echo '"'.$data->partai.'",';} ?>],
          datasets: [{
          data: [<?php foreach($data_suara_dprd_kab as $data){ echo '"'.round($data->suara/$sum_suara_dpd, 2).'",';} ?>],
          backgroundColor: ['#ef5350', '#EC407A', '#AB47BC', '#7E57C2', '#7986CB', '#64B5F6', '#4FC3F7', '#4DD0E1', '#4DB6AC', '#81C784', '#AED581', '#DCE775', '#FFF176', '#FFD54F', '#FFB74D', '#FF8A65'],
          hoverBackgroundColor: ['#c62828', '#AD1457', '#6A1B9A', '#4527A0', '#283593', '#1565C0', '#0277BD', '#00838F', '#00695C', '#2E7D32', '#558B2F', '#9E9D24', '#F9A825', '#FF8F00', '#EF6C00', '#D84315'],
          hoverBorderColor: "rgba(234, 236, 244, 1)",
          }],
      },
      options: {
          maintainAspectRatio: false,
          tooltips: {
              backgroundColor: "rgb(255,255,255)",
              bodyFontColor: "#858796",
              borderColor: '#dddfeb',
              borderWidth: 1,
              xPadding: 15,
              yPadding: 15,
              displayColors: false,
              caretPadding: 10,
          },
          legend: {
          display: false
          },
          cutoutPercentage: 80,
      },
      });
  
      // Set new default font family and font color to mimic Bootstrap's default styling
  Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
  Chart.defaults.global.defaultFontColor = '#858796';
  
  function number_format(number, decimals, dec_point, thousands_sep) {
    // *     example: number_format(1234.56, 2, ',', ' ');
    // *     return: '1 234,56'
    number = (number + '').replace(',', '').replace(' ', '');
    var n = !isFinite(+number) ? 0 : +number,
      prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
      sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
      dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
      s = '',
      toFixedFix = function(n, prec) {
        var k = Math.pow(10, prec);
        return '' + Math.round(n * k) / k;
      };
    // Fix for IE parseFloat(0.55).toFixed(0) = 0;
    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
    if (s[0].length > 3) {
      s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || '').length < prec) {
      s[1] = s[1] || '';
      s[1] += new Array(prec - s[1].length + 1).join('0');
    }
    return s.join(dec);
  }
  
  // Bar Chart Presiden
  var ctx = document.getElementById("presiden");
  var myBarChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: [<?php 
          foreach($data_suara_presiden as $item){echo '"'.$item->paslon.'",';}?>],
      datasets: [{
        label: "Suara",
        backgroundColor: "#4e73df",
        hoverBackgroundColor: "#2e59d9",
        borderColor: "#4e73df",
        data: [<?php 
          foreach($data_suara_presiden as $item){echo '"'.$item->suara.'",';}?>],
      }],
    },
    options: {
      maintainAspectRatio: false,
      layout: {
        padding: {
          left: 10,
          right: 25,
          top: 25,
          bottom: 0
        }
      },
      scales: {
        xAxes: [{
          time: {
            unit: 'month'
          },
          gridLines: {
            display: false,
            drawBorder: false
          },
          ticks: {
            maxTicksLimit: 6
          },
          maxBarThickness: 25,
        }],
        yAxes: [{
          ticks: {
            min: 0,
            max: 40000,
            maxTicksLimit: 5,
            padding: 10,
            // Include a dollar sign in the ticks
            callback: function(value, index, values) {
              return number_format(value);
            }
          },
          gridLines: {
            color: "rgb(234, 236, 244)",
            zeroLineColor: "rgb(234, 236, 244)",
            drawBorder: false,
            borderDash: [2],
            zeroLineBorderDash: [2]
          }
        }],
      },
      legend: {
        display: false
      },
      tooltips: {
        titleMarginBottom: 10,
        titleFontColor: '#6e707e',
        titleFontSize: 14,
        backgroundColor: "rgb(255,255,255)",
        bodyFontColor: "#858796",
        borderColor: '#dddfeb',
        borderWidth: 1,
        xPadding: 15,
        yPadding: 15,
        displayColors: false,
        caretPadding: 10,
        callbacks: {
          label: function(tooltipItem, chart) {
            var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
            return datasetLabel + ': ' + number_format(tooltipItem.yLabel);
          }
        }
      },
    }
  });
  
  // Bar Chart DPD
  var ctx = document.getElementById("dpd");
  var myBarChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [<?php 
          foreach($data_suara_dpd as $item){echo '"'.$item->caleg.'",';}?>],
      datasets: [{
        label: "Suara",
        backgroundColor: "#4e73df",
        hoverBackgroundColor: "#2e59d9",
        borderColor: "#4e73df",
        data: [<?php 
          foreach($data_suara_dpd as $item){echo '"'.$item->suara.'",';}?>],
      }],
    },
    options: {
      maintainAspectRatio: false,
      layout: {
        padding: {
          left: 10,
          right: 25,
          top: 25,
          bottom: 0
        }
      },
      scales: {
        xAxes: [{
          time: {
            unit: 'month'
          },
          gridLines: {
            display: false,
            drawBorder: false
          },
          ticks: {
            maxTicksLimit: 20
          },
          maxBarThickness: 25,
        }],
        yAxes: [{
          ticks: {
            min: 0,
            max: 6000,
            maxTicksLimit: 5,
            padding: 10,
            // Include a dollar sign in the ticks
            callback: function(value, index, values) {
              return number_format(value);
            }
          },
          gridLines: {
            color: "rgb(234, 236, 244)",
            zeroLineColor: "rgb(234, 236, 244)",
            drawBorder: false,
            borderDash: [2],
            zeroLineBorderDash: [2]
          }
        }],
      },
      legend: {
        display: false
      },
      tooltips: {
        titleMarginBottom: 10,
        titleFontColor: '#6e707e',
        titleFontSize: 14,
        backgroundColor: "rgb(255,255,255)",
        bodyFontColor: "#858796",
        borderColor: '#dddfeb',
        borderWidth: 1,
        xPadding: 90,
        yPadding: 15,
        displayColors: false,
        caretPadding: 10,
        callbacks: {
          label: function(tooltipItem, chart) {
            var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
            return datasetLabel + ': ' + number_format(tooltipItem.yLabel);
          }
        }
      },
    }
  });
  
  // Bar Chart DPR RI
  var ctx = document.getElementById("dprri");
  var myBarChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: [<?php 
          foreach($data_suara_dpr_ri as $item){echo '"'.$item->partai.'",';}?>],
      datasets: [{
        label: "Suara",
        backgroundColor: "#4e73df",
        hoverBackgroundColor: "#2e59d9",
        borderColor: "#4e73df",
        data: [<?php 
          foreach($data_suara_dpr_ri as $item){echo '"'.$item->suara.'",';}?>],
      }],
    },
    options: {
      maintainAspectRatio: false,
      layout: {
        padding: {
          left: 10,
          right: 25,
          top: 25,
          bottom: 0
        }
      },
      scales: {
        xAxes: [{
          time: {
            unit: 'month'
          },
          gridLines: {
            display: false,
            drawBorder: false
          },
          ticks: {
            maxTicksLimit: 16
          },
          maxBarThickness: 25,
        }],
        yAxes: [{
          ticks: {
            min: 0,
            max: 8000,
            maxTicksLimit: 5,
            padding: 10,
            // Include a dollar sign in the ticks
            callback: function(value, index, values) {
              return number_format(value);
            }
          },
          gridLines: {
            color: "rgb(234, 236, 244)",
            zeroLineColor: "rgb(234, 236, 244)",
            drawBorder: false,
            borderDash: [2],
            zeroLineBorderDash: [2]
          }
        }],
      },
      legend: {
        display: false
      },
      tooltips: {
        titleMarginBottom: 10,
        titleFontColor: '#6e707e',
        titleFontSize: 14,
        backgroundColor: "rgb(255,255,255)",
        bodyFontColor: "#858796",
        borderColor: '#dddfeb',
        borderWidth: 1,
        xPadding: 15,
        yPadding: 15,
        displayColors: false,
        caretPadding: 10,
        callbacks: {
          label: function(tooltipItem, chart) {
            var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
            return datasetLabel + ': ' + number_format(tooltipItem.yLabel);
          }
        }
      },
    }
  });
  
  // Bar Chart DPRD Provinsi
  var ctx = document.getElementById("dprdprovinsi");
  var myBarChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: [<?php 
          foreach($data_suara_dprd_provinsi as $item){echo '"'.$item->partai.'",';}?>],
      datasets: [{
        label: "Suara",
        backgroundColor: "#4e73df",
        hoverBackgroundColor: "#2e59d9",
        borderColor: "#4e73df",
        data: [<?php 
          foreach($data_suara_dprd_provinsi as $item){echo '"'.$item->suara.'",';}?>],
      }],
    },
    options: {
      maintainAspectRatio: false,
      layout: {
        padding: {
          left: 10,
          right: 25,
          top: 25,
          bottom: 0
        }
      },
      scales: {
        xAxes: [{
          time: {
            unit: 'month'
          },
          gridLines: {
            display: false,
            drawBorder: false
          },
          ticks: {
            maxTicksLimit: 20
          },
          maxBarThickness: 25,
        }],
        yAxes: [{
          ticks: {
            min: 0,
            max: 8000,
            maxTicksLimit: 5,
            padding: 10,
            // Include a dollar sign in the ticks
            callback: function(value, index, values) {
              return number_format(value);
            }
          },
          gridLines: {
            color: "rgb(234, 236, 244)",
            zeroLineColor: "rgb(234, 236, 244)",
            drawBorder: false,
            borderDash: [2],
            zeroLineBorderDash: [2]
          }
        }],
      },
      legend: {
        display: false
      },
      tooltips: {
        titleMarginBottom: 10,
        titleFontColor: '#6e707e',
        titleFontSize: 14,
        backgroundColor: "rgb(255,255,255)",
        bodyFontColor: "#858796",
        borderColor: '#dddfeb',
        borderWidth: 1,
        xPadding: 15,
        yPadding: 15,
        displayColors: false,
        caretPadding: 10,
        callbacks: {
          label: function(tooltipItem, chart) {
            var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
            return datasetLabel + ': ' + number_format(tooltipItem.yLabel);
          }
        }
      },
    }
  });
  
  // Bar Chart DPRD Kabupaten
  var ctx = document.getElementById("dprdkab");
  var myBarChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: [<?php 
          foreach($data_suara_dprd_kab as $item){echo '"'.$item->partai.'",';}?>],
      datasets: [{
        label: "Suara",
        backgroundColor: "#4e73df",
        hoverBackgroundColor: "#2e59d9",
        borderColor: "#4e73df",
        data: [<?php 
          foreach($data_suara_dprd_kab as $item){echo '"'.$item->suara.'",';}?>],
      }],
    },
    options: {
      maintainAspectRatio: false,
      layout: {
        padding: {
          left: 10,
          right: 25,
          top: 25,
          bottom: 0
        }
      },
      scales: {
        xAxes: [{
          time: {
            unit: 'month'
          },
          gridLines: {
            display: false,
            drawBorder: false
          },
          ticks: {
            maxTicksLimit: 20
          },
          maxBarThickness: 25,
        }],
        yAxes: [{
          ticks: {
            min: 0,
            max: 8000,
            maxTicksLimit: 5,
            padding: 10,
            // Include a dollar sign in the ticks
            callback: function(value, index, values) {
              return number_format(value);
            }
          },
          gridLines: {
            color: "rgb(234, 236, 244)",
            zeroLineColor: "rgb(234, 236, 244)",
            drawBorder: false,
            borderDash: [2],
            zeroLineBorderDash: [2]
          }
        }],
      },
      legend: {
        display: false
      },
      tooltips: {
        titleMarginBottom: 10,
        titleFontColor: '#6e707e',
        titleFontSize: 14,
        backgroundColor: "rgb(255,255,255)",
        bodyFontColor: "#858796",
        borderColor: '#dddfeb',
        borderWidth: 1,
        xPadding: 15,
        yPadding: 15,
        displayColors: false,
        caretPadding: 10,
        callbacks: {
          label: function(tooltipItem, chart) {
            var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
            return datasetLabel + ': ' + number_format(tooltipItem.yLabel);
          }
        }
      },
    }
  });
  
  
    </script>


@endsection
@endsection
