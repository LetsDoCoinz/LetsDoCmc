<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

    <title>LetsDoCmc - Currencies</title>
    <link rel="shortcut icon" type="image/png" href="/img/logo.png"/>
    <link rel="shortcut icon" type="image/png" href="/img/logo.png"/>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Bootstrap core CSS-->
<!--  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

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
      <li class="nav-item active">
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


          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Coins:</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                  <tr>
                    <th>Pair Name</th>
                    <th>Price</th>
                    <th>Change 24H</th>
                    <th>Volume 24H BTC</th>
                    <th>Volume 24H USD</th>
                    <th>Best Bid</th>
                    <th>Best Ask</th>
                  </tr>
                  </thead>
                  <tfoot>
                  <tr>
                    <th>Pair Name</th>
                    <th>Price</th>
                    <th>Change 24H</th>
                    <th>Volume 24H BTC</th>
                    <th>Volume 24H USD</th>
                    <th>Best Bid</th>
                    <th>Best Ask</th>
                  </tr>
                  </tfoot>
                  <tbody>

                  <?php
//                  $m = new Memcached();
//                  $m->addServer('localhost', 11211);
//                  $ticker = $m->get('ticker');
                 // $ticker = file_get_contents('http://api.letsdocoinz.com/ticker');
                  $ticker = file_get_contents('http://api.letsdocoinz.bitxpro.com/ticker');


                  if(!empty($ticker)){
                      $ticker = json_decode($ticker,1);
                      //print_r($ticker[0]);

                      $btc_price = file_get_contents('https://api.coindesk.com/v1/bpi/currentprice/BTC.json');
                      $btc_price = json_decode($btc_price);
                      //print_r($btc_price->bpi->USD->rate_float);

                      $html = '';
                      foreach ($ticker as $pair){

                          if($pair['cur2_id'] == 1){
                              $pair['volume_btc'] = $pair['volume']*$pair['last'];
                              $pair['volume_usd'] = $pair['volume_btc']*$btc_price->bpi->USD->rate_float;
                          } else {
                              continue;
                              $pair['volume_btc'] = '?';
                              $pair['volume_usd'] = '?';
                          }

                          $html.= '<tr>';
                          $coin_name = substr($pair['symbol'],0,-4);
                          $html.= '<td><a href="coin/'.$coin_name.'">'.$coin_name.'</a></td>';
                          $html.= '<td>'.$pair['last'].'</td>';
                          $html.= '<td>'.$pair['change'].'</td>';
                          $html.= '<td>'.$pair['volume_btc'].'</td>';
                          $html.= '<td>'.$pair['volume_usd'].'</td>';
                          $html.= '<td>'.$pair['ask'].'</td>';
                          $html.= '<td>'.$pair['bid'].'</td>';
                          $html.= '</tr>';
                      }
                      echo $html;
                  } else {
                      echo '<tr><td>Error</td></tr>';
                  }
                  ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated now at <?php echo date('Y-m-d H:i:s'); ?></div>
          </div>

          <!-- Area Chart -->
<!--          <div class="card border-0 shadow mb-4">-->
<!--            <div class="card-header border-0 py-3 d-flex flex-row align-items-center justify-content-between">-->
<!--              <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>-->
              <!-- Card Header Dropdown -->
<!--              <div class="dropdown no-arrow">-->
<!--                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--                  <i class="fas fa-ellipsis-v fa-sm fa-fw mx-1 text-gray-400"></i>-->
<!--                </a>-->
<!---->
<!--                <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in" aria-labelledby="dropdownMenuLink">-->
<!--                  <div class="dropdown-header">Dropdown Header:</div>-->
<!--                  <a class="dropdown-item" href="#">Action</a>-->
<!--                  <a class="dropdown-item" href="#">Another action</a>-->
<!--                  <div class="dropdown-divider"></div>-->
<!--                  <a class="dropdown-item" href="#">Something else here</a>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
<!--            <div class="card-body">-->
<!--              <div class="chart-area">-->
<!--                <canvas id="myAreaChart"></canvas>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->



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
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>


</body>

</html>
