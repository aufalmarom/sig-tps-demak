@extends('dashboard')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800">Recap Datas</h1>
</div>



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
                <hr>Berdasarkan hasil pemilihan umum DPD 2019 didapat grafik seperti gambar diatas dimana suara terbanyak diperoleh Drs.H.Muhtar Lutfi, MM dengan total 5235.
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

@section('script')
<script>
  
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
