<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Geographic Information System For Garbage Dump</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
   folder instead of downloading all of them to reduce the load. -->
   <link rel="stylesheet" href="assets/dist/css/skins/_all-skins.min.css">
   <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin=""/>
   <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA==" crossorigin=""></script>
   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- Google Font -->
<link rel="stylesheet"
href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<header class="main-header">
  <!-- Logo -->
  <a href="#" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini" style="font-size: 14px;"><b>TPS</b></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg" style="font-size: 14px;"><b>T</b>empat <b>P</b>embuangan <b>S</b>ampah</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">

      </ul>
    </div>
  </nav>
</header>

<?php 
$attributes = array('file' => 'home');
?>

<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <!-- search form -->
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">Navigasi</li>
      <li>
        <a href="index.php">
          <i class="fa fa-trash"></i><span>Semua Jenis</span>
        </a>
      </li>
      <li>
        <a href="sampah_umum.php">
          <i class="fa fa-trash"></i><span>Sampah Umum</span>
        </a>
      </li>
      <li>
        <a href="sampah_liar.php">
          <i class="fa fa-trash"></i><span>Sampah Liar</span>
        </a>
      </li>
      <!-- <li class="treeview"">
        <a href="#">
          <i class="fa fa-users"></i> <span>Tempat Pembuangan Sampah</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-eye"></i>Sampah Umum</a></li>
          <li><a href="#"><i class="fa fa-plus"></i>Sampah Liar</a></li>
        </ul>
      </li> -->
    </ul>
  </section>
</aside>


<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <div class="content-wrapper">
      <section class="content">
        <div class="box box-default">
          <div class="box-body">
            <h3 align="center"><b>Titik Pembuangan Sampah Umum Di Pekanbaru</b></h3>
          </div>
          <div class="box-body">
            <form  action="index.php" method="get" class="pull-right mail-src-position">
              <div class="input-append">
                <input type="text" class="form-control " name ="alamat" placeholder="Cari Berdasarkan Jalan">
              </div>
            </form>
          </div>
          <div class="box-body">
            <div id="mapid" style="width: 100%; height: 500px;"></div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </section>
      <!-- /.content -->
    </div> 
    <!-- /.content-wrapper -->

    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b><?php echo date("d-M-Y") ?></b>
      </div>
      <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
      reserved.
    </footer>

    <!-- Control Sidebar -->
    <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
   immediately after the control sidebar -->
   <div class="control-sidebar-bg"></div>
 </div>
 <!-- ./wrapper -->
 <!-- jQuery 3 -->
 <script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
 <!-- Bootstrap 3.3.7 -->
 <script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
 <!-- DataTables -->
 <script src="assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
 <script src="assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
 <!-- SlimScroll -->
 <script src="assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
 <!-- FastClick -->
 <script src="assets/bower_components/fastclick/lib/fastclick.js"></script>
 <!-- AdminLTE App -->
 <script src="assets/dist/js/adminlte.min.js"></script>
 <!-- AdminLTE for demo purposes -->
 <script src="assets/dist/js/demo.js"></script>
 <script>
  <?php
    //edit ini
  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = '';
  $dbname = 'db_sd';
    //sampai sini
  $bool = false;
  $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname); 

  if(! $conn ) {
    die('Could not connect: ' . mysqli_error());
  }

    //edit disini *sampah(nama table)
  $sql = 'SELECT * FROM sekolah group by jenis order by jenis';
  $result_filter = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result_filter) > 0) {
    while($row = mysqli_fetch_assoc($result_filter)) { ?>
      var <?php echo $row["jenis"]; ?> = L.layerGroup();
    <?php }
  } else {
    echo "0 results";
  }

  ?>

  <?php    
  if(isset($_GET['alamat'])){
    $alamat = $_GET['alamat'];
    $sql = "SELECT * FROM sekolah where alamat like '%$alamat%'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) < 1) {
      $sql = 'SELECT * FROM sekolah';
      $result = mysqli_query($conn, $sql);
      $bool = true;
    }
  }
  else{
    $sql = 'SELECT * FROM sekolah';
    $result = mysqli_query($conn, $sql);
  }

  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
               //echo "Name: " . $row["name"]. "<br>";
     echo 'L.marker(['.$row["y"].', '.$row["x"].']).bindPopup("<b><h4>'.$row["nama_sekolah"].'</b></h4>'.$row["alamat"].'<br>Sekolah '.$row["jenis"].'<br><br><img src='.$row["foto"].' width=273 height=220> ").addTo('.$row["jenis"].');';
   }
 } else {
  echo "0 results";
}
?>

var mbAttr = 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
mbUrl = 'https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';

var grayscale   = L.tileLayer(mbUrl, {id: 'mapbox.light', attribution: mbAttr}),
streets  = L.tileLayer(mbUrl, {id: 'mapbox.streets',   attribution: mbAttr});

var map = L.map('mapid', {
  center: [0.507068,101.447777],
  zoom: 12,
  layers: [streets, 
  <?php
  if($bool){

  }
  else{
    $sql = 'SELECT * FROM sekolah group by jenis order by jenis';
    $result_filter = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result_filter)) { ?>
      <?php echo $row["jenis"]; ?>,
    <?php }
  } 
  ?>
  ]
});

var baseLayers = {
  "Grayscale": grayscale,
  "Streets": streets
};

var overlays = {
  <?php 
  $sql = 'SELECT * FROM sekolah group by jenis order by jenis';
  $result_filter = mysqli_query($conn, $sql);
  while($row = mysqli_fetch_assoc($result_filter)) { ?>
    "<?php echo ucfirst(str_replace("_"," ",$row["jenis"])) ?>": <?php echo $row["jenis"]; ?>,
  <?php } ?>
};

L.control.layers(baseLayers, overlays).addTo(map);

var popup = L.popup();

function onMapClick(e) {
  popup
  .setLatLng(e.latlng)
  .setContent("You clicked the map at " + e.latlng.toString())
  .openOn(mymap);
}

var baseLayers = {
  "Grayscale": grayscale,
  "Streets": streets
};

L.control.layers(baseLayers, overlays).addTo(mymap);
mymap.on('click', onMapClick);

</script>
</body>
</html>