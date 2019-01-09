<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

    <title>LetsDoCmc - Currency <?php echo $coin; ?></title>
    <link rel="shortcut icon" type="image/png" href="/img/logo.png"/>
    <link rel="shortcut icon" type="image/png" href="/img/logo.png"/>

  <!-- Custom fonts for this template-->
  <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Bootstrap core CSS-->
<!--  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->

  <!-- Page level plugin CSS-->
  <link href="/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">LetsDoCMC <sup>0.1</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Dashboards Accordion Menu -->
      <li class="nav-item">
        <a class="nav-link" href="/">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Dashboards</span></a>
      </li>



      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Menu
      </div>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="/coins">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Coins</span></a>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="/exchanges">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Exchanges</span></a>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Topbar Search -->
          <form class="d-none d-md-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 w-100">
            <div class="input-group">
              <!--<input type="text" class="form-control border-0 bg-light" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" style="font-size: 0.85rem;">-->
              <!--<div class="input-group-append">-->
                <!--<button class="btn btn-primary" type="button">-->
                  <!--<i class="fas fa-search fa-sm"></i>-->
                <!--</button>-->
              <!--</div>-->
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav mr-auto ml-md-auto">

            <!-- Nav Item - Alerts -->
            <!--<li class="nav-item dropdown no-arrow mx-1">-->
              <!--<a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                <!--<i class="fas fa-bell fa-fw"></i>-->
                <!--&lt;!&ndash; Counter - Alerts &ndash;&gt;-->
                <!--<span class="badge badge-danger badge-counter">9+</span>-->
              <!--</a>-->
              <!--&lt;!&ndash; Dropdown - Alerts &ndash;&gt;-->
              <!--<div class="dropdown-menu dropdown-menu-right border-0 shadow animated&#45;&#45;grow-in" aria-labelledby="alertsDropdown">-->
                <!--<a class="dropdown-item" href="#">Action</a>-->
                <!--<a class="dropdown-item" href="#">Another action</a>-->
                <!--<div class="dropdown-divider"></div>-->
                <!--<a class="dropdown-item" href="#">Something else here</a>-->
              <!--</div>-->
            <!--</li>-->

            <!-- Nav Item - Messages -->
            <!--<li class="nav-item dropdown no-arrow mx-1">-->
              <!--<a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                <!--<i class="fas fa-envelope fa-fw"></i>-->
                <!--&lt;!&ndash; Counter - Messages &ndash;&gt;-->
                <!--<span class="badge badge-danger badge-counter">7</span>-->
              <!--</a>-->
              <!--&lt;!&ndash; Dropdown - Messages &ndash;&gt;-->
              <!--<div class="dropdown-menu dropdown-menu-right border-0 shadow animated&#45;&#45;grow-in" aria-labelledby="messagesDropdown">-->
                <!--<a class="dropdown-item" href="#">Action</a>-->
                <!--<a class="dropdown-item" href="#">Another action</a>-->
                <!--<div class="dropdown-divider"></div>-->
                <!--<a class="dropdown-item" href="#">Something else here</a>-->
              <!--</div>-->
            <!--</li>-->

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none">
            <i class="fa fa-bars"></i>
          </button>

        </nav>
        <!-- End of Topbar -->

        <div class="container-fluid">


            <!-- Area Chart Example-->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-chart-area"></i>
                    <?php echo $coin; ?> Price
                </div>
                <div class="card-body">
                    <canvas id="myAreaChart" width="100%" height="200"></canvas>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at <?php echo date('Y-m-d H:i:s'); ?></div>
            </div>

            <div class="row">
                <div class="col-lg-8">
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fas fa-chart-bar"></i>
                            <?php echo $coin; ?> Volume</div>
                        <div class="card-body">
                            <canvas id="myBarChart" width="100%" height="50"></canvas>
                        </div>
                        <div class="card-footer small text-muted">Updated yesterday at <?php echo date('Y-m-d H:i:s'); ?></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fas fa-chart-pie"></i>
                            <?php echo $coin; ?> Volume/Total Volume</div>
                        <div class="card-body">
                            <canvas id="myPieChart" width="100%" height="100"></canvas>
                        </div>
                        <div class="card-footer small text-muted">Updated yesterday at <?php echo date('Y-m-d H:i:s'); ?></div>
                    </div>
                </div>
            </div>
            <!-- End Area Chart Example-->





        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
              <span>Copyright &copy; LetsDoCmc 2018</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="/vendor/jquery/jquery.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="/js/sb-admin-2.js"></script>

  <!-- Page level plugins -->
  <script src="/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
<!--  <script src="js/demo/chart-area-demo.js"></script>-->

  <!-- Page level plugin JavaScript-->
  <script src="/vendor/datatables/jquery.dataTables.js"></script>
  <script src="/vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Demo scripts for this page-->
  <script src="/js/demo/datatables-demo.js"></script>

  <?php

  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  //$exchanges = json_decode(file_get_contents('../data/exchanges.json'));
  $key = $coin.'-BTC';
  $coins_graph = file_get_contents(__DIR__.'/../data/coin_graph_'.$key.'.json');
  if($coins_graph){
      $coins_graph = json_decode($coins_graph);
  } else {
      $coins_graph = json_decode(json_encode([]));
  }

  $exchanges_chart = json_decode(file_get_contents('../data/exchanges_volume_graph.json'));


  //  $coins_stats = file_get_contents(__DIR__.'/../data/coins_stats.json');
//  if($coins_stats){
//      $coins_stats = json_decode($coins_stats);
//  } else {
//      $coins_stats = json_decode(json_encode([]));
//  }

//  print_r($coins_stats);
//  die;


  ?>

  <script>

      var coin_chart = JSON.parse('<?php echo json_encode($coins_graph) ?>');

      //console.log(coin_chart);

      // Area Chart Example
      var ctx = document.getElementById("myAreaChart");

      var data = {
          labels : [],
          datasets : [],
      };

      var data_sub = [];
      var backgroundColor = [];

      $.each(coin_chart, function(index, value) {
          //console.log(value);
          data.labels.push(index);
          data_sub.push(value.price);
          //backgroundColor.push(value.color);
      });

      var datasets_arr = {
          data: data_sub,
          label: "Earnings",
          lineTension: 0.3,
          backgroundColor: "rgba(78, 115, 223, 0.05)",
          borderColor: "rgba(78, 115, 223, 1)",
          pointRadius: 3,
          pointBackgroundColor: "rgba(78, 115, 223, 1)",
          pointBorderColor: "rgba(78, 115, 223, 1)",
          pointHoverRadius: 3,
          pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
          pointHoverBorderColor: "rgba(78, 115, 223, 1)",
          pointHitRadius: 10,
          pointBorderWidth: 2,
      };

      data.datasets.push(datasets_arr);
      //console.log(data);


      var myLineChart = new Chart(ctx, {
          type: 'line',
          data: data,
          options: {
              maintainAspectRatio: false,
              layout: {
                  padding: {
                      left: 0,
                      right: 25,
                      top: 25,
                      bottom: 25
                  }
              },
              scales: {
                  xAxes: [{
                      time: {
                          unit: 'date'
                      },
                      gridLines: {
                          display: false,
                          drawBorder: false
                      },
                      ticks: {
                          maxTicksLimit: 7
                      }
                  }],
                  yAxes: [{
                      ticks: {
                          maxTicksLimit: 5,
                          padding: 10,
                          // Include a dollar sign in the ticks
                          // callback: function(value, index, values) {
                          //     return '$' + number_format(value);
                          // }
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
                  backgroundColor: "rgb(255,255,255)",
                  bodyFontColor: "#858796",
                  titleMarginBottom: 10,
                  titleFontColor: '#6e707e',
                  titleFontSize: 14,
                  borderColor: '#dddfeb',
                  borderWidth: 1,
                  xPadding: 15,
                  yPadding: 15,
                  displayColors: false,
                  intersect: false,
                  mode: 'index',
                  caretPadding: 10,
                  // callbacks: {
                  //     label: function(tooltipItem, chart) {
                  //         var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                  //         return datasetLabel + ': $' + number_format(tooltipItem.yLabel);
                  //     }
                  // }
              }
          }
      });



      // Bar Chart Example
      var ctx = document.getElementById("myBarChart");

      data = {
          labels : [],
          datasets : [],
      };

      data_sub = [];
      backgroundColor = [];

      $.each(coin_chart, function(index, value) {
          //console.log(value);
          data.labels.push(index);
          data_sub.push(value.usd);
          //backgroundColor.push(value.color);
      });



      datasets_arr = {
          data: data_sub,
          label: "Revenue",
          backgroundColor: "rgba(2,117,216,1)",
          borderColor: "rgba(2,117,216,1)",
      };

      data.datasets.push(datasets_arr);
      //console.log(data);

      var myLineChart = new Chart(ctx, {
          type: 'bar',
          data: data,
          options: {
              scales: {
                  xAxes: [{
                      time: {
                          unit: 'month'
                      },
                      gridLines: {
                          display: false
                      },
                      ticks: {
                          maxTicksLimit: 7
                      }
                  }],
                  yAxes: [{
                      ticks: {
                          min: 0,
                          // max: 15000,
                          // maxTicksLimit: 5
                      },
                      gridLines: {
                          display: true
                      }
                  }],
              },
              legend: {
                  display: false
              }
          }
      });



      // Pie Chart Example

      //console.log(coin_chart);
      var exchanges_chart = JSON.parse('<?php echo json_encode($exchanges_chart) ?>');
      //console.log(exchanges_chart);

      //var coin_chart_len = coin_chart.length();
      //var coin_chart_last_key = Object.keys(exchanges_chart)[Object.keys(exchanges_chart).length-1];

      //console.log(coin_chart_last_key);

      //var coin_chart_last = exchanges_chart.pop();
      //console.log(coin_chart_last);




      var ctx1 = document.getElementById("myPieChart");

      data = {
          labels : [],
          datasets : [],
      };
      data_sub = [];
      backgroundColor = [];

      //console.log(.coin_chart_last_key

      coin_chart_last = coin_chart[Object.keys(coin_chart)[Object.keys(coin_chart).length - 1]];
      //console.log(coin_chart_last);

      exchanges_chart_last = exchanges_chart[Object.keys(exchanges_chart)[Object.keys(exchanges_chart).length - 1]];
      //console.log(exchanges_chart_last);

      data.labels.push('<?php echo $coin; ?>');
      data_sub.push(coin_chart_last.usd);
      backgroundColor.push('green');

      data.labels.push('Others');
      data_sub.push(exchanges_chart_last.usd - coin_chart_last.usd);
      backgroundColor.push('gray');


      // $.each(exchanges, function(index, value) {
      //     //console.log(value);
      //     data.labels.push(index);
      //     data_sub.push(value.volume_btc_total);
      //     backgroundColor.push(value.color);
      // });

      var datasets_arr = {
          data: data_sub,
          backgroundColor: backgroundColor,
      };

      data.datasets.push(datasets_arr);
      // console.log(data);
      var myPieChart = new Chart(ctx1, {
          type: 'pie',
          data: data,
      });


  </script>



</body>

</html>
