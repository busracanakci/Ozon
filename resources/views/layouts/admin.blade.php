<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href='admin_css/assets/img/apple-icon.png' />
    <link rel="icon" type="image/png" href='admin_css/assets/img/favicon.png' />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Anadolu Ozon | Admin Paneli</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="{{asset('admin_css/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="{{asset('admin_css/assets/css/material-dashboard.css?v=1.2.0')}}" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{asset('admin_css/assets/css/demo.css')}}" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons" rel='stylesheet'>
</head>

<body>
  <div class="wrapper">
    @include("layouts.sidebar")
    <div class="main-panel">
      <nav class="navbar navbar-transparent navbar-absolute">
          <div class="container-fluid">
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">ANADOLU OZON</a>
              </div>
              <div class="collapse navbar-collapse">
                  <ul class="nav navbar-nav navbar-right">
                      <li>
                          
                          <a href="http://anadoluozon.com/" target="_blank"> Sİte Önİzleme  <i class="material-icons">dashboard</i> </a>
                              <p class="hidden-lg hidden-md">Dashboard</p>
                          </a>
                      </li>

                      <li>
                          <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                              <i class="material-icons">person</i>
                              <p class="hidden-lg hidden-md">Profile</p>
                          </a>
                      </li>
                  </ul>

              </div>
          </div>
      </nav>
      @yield('content')
      <div>
      <footer class="footer">
          <div class="container-fluid">
              <p class="copyright pull-right">
                  &copy;
                  <script>
                      document.write(new Date().getFullYear())
                  </script>
                  <a href="https://www.ozelanadoluhastanesi.com/">Özel Anadolu Hastanesi</a>, Tüm Hakları Saklıdır.</p>
          </div>
      </footer>
    </div>
    </div>
  </div>
  <script src="{{asset('admin_css/assets/js/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('admin_css/assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('admin_css/assets/js/material.min.js')}}" type="text/javascript"></script>
  <!--  Charts Plugin -->
  <script src="{{asset('admin_css/assets/js/chartist.min.js')}}"></script>
  <!--  Dynamic Elements plugin -->
  <script src="{{asset('admin_css/assets/js/arrive.min.js')}}"></script>
  <!--  PerfectScrollbar Library -->
  <script src="{{asset('admin_css/assets/js/perfect-scrollbar.jquery.min.js')}}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{asset('admin_css/assets/js/bootstrap-notify.js')}}"></script>
  <!--  Google Maps Plugin    -->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Material Dashboard javascript methods -->
  <script src="{{asset('admin_css/assets/js/material-dashboard.js?v=1.2.0')}}"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{asset('admin_css/assets/js/demo.js')}}"></script>
  <script type="text/javascript">
      $(document).ready(function() {

          // Javascript method's body can be found in assets/js/demos.js
          demo.initDashboardPageCharts();

      });
  </script>
</body>
</html>
