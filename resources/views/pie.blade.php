@extends('dashboard')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800">Recap Datas</h1>
</div>


<div class="row">
    <div class="col-xl-6 col-lg-6">
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
</div>

<div class="row">
    <div class="col-xl-4 col-lg-4">
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
    <div class="col-xl-4 col-lg-4">
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
    <div class="col-xl-4 col-lg-4">
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
  
    </script>


@endsection
@endsection
