<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistema Cef</title>
  <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/css/font-awesome.min.css" rel="stylesheet">
  <link href="/assets/css/datepicker3.css" rel="stylesheet">
  <link href="/assets/css/styles.css" rel="stylesheet">
  
  <!--Custom Font-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span></button>
        <a class="navbar-brand" ><span></span>Sistema Cef / Cuidado de Enfermería Familiar</a>
        
      </div>
    </div><!-- /.container-fluid -->
  </nav>
  <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
      
      <div class="profile-usertitle">
        <div class="profile-usertitle-name">{{ auth()->user()->name }}</div>
        <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
      </div>
      <div class="clear"></div>
    </div>
    <div class="divider"></div>
   
    <ul class="nav menu">
      <?php $id_user = auth()->id() ?>
      <li ><a href="{{ url('/iniciodatos' , [$id_user ])}}"><em class="fa fa-dashboard">&nbsp;</em> REGISTRAR FAMILIA</a></li>
      <li><a href="{{ url('/Familia' , [$id_user ])}}"><em class="fa fa-calendar">&nbsp;</em>FAMILIAS</a></li>
    </ul>
  </div><!--/.sidebar-->
    
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    
    
    <div class="container">
    <div class="row">
      <div class="col-sm-11">
          @yield('content')
      </div>
    </div><!--/.row-->
    </div>
    
    
   
    
    
  </div>  <!--/.main-->
  
  <script src="/assets/js/jquery-1.11.1.min.js"></script>
  <script src="/assets/js/bootstrap.min.js"></script>
  <script src="/assets/js/chart.min.js"></script>
  <script src="/assets/js/chart-data.js"></script>
  <script src="/assets/js/easypiechart.js"></script>
  <script src="/assets/js/easypiechart-data.js"></script>
  <script src="/assets/js/bootstrap-datepicker.js"></script>
  <script src="/assets/js/custom.js"></script>
  <script>
    window.onload = function () {
  var chart1 = document.getElementById("line-chart").getContext("2d");
  window.myLine = new Chart(chart1).Line(lineChartData, {
  responsive: true,
  scaleLineColor: "rgba(0,0,0,.2)",
  scaleGridLineColor: "rgba(0,0,0,.05)",
  scaleFontColor: "#c5c7cc"
  });
};
  </script>
    
</body>
</html>
