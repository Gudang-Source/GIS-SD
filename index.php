<?php include 'template/header.php' ?>
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
  ?>
<body class="page-header-fixed bg-1">
  <div class="modal-shiftfix">
    <!-- Navigation -->
    <div class="navbar navbar-fixed-top scroll-hide">
      <div class="container-fluid top-bar">
        <div class="pull-right">
          <a class="logo" href="index.php">SEKOLAH DASAR NEGERI-SWASTA PEKANBARU</a>
        </div>
        <button class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="logo" href="index.php">GIS-SD</a>
        <form  class="navbar-form form-inline col-lg-2 hidden-xs">
          <input class="form-control" placeholder="Search" type="text">
        </form>
      </div>
      <div class="container-fluid main-nav clearfix">
        <div class="nav-collapse">
          <ul class="nav">
            <li>
              <a class="current" href="index.php"><span aria-hidden="true" class="hightop-home"></span>Peta Sekolah</a>
            </li>
            
            <li><a href="tambah.php">
              <span aria-hidden="true" class="hightop-forms"></span>Tambah Data</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Navigation -->
    <div class="container-fluid main-content">
      <!-- Statistics -->
      <div class="row">
        <div class="col-lg-12">
          <div class="widget-container stats-container">
            <div class="col-md-3">

            </div>
            <div class="col-md-3">
              <div class="number">
                <?php
                $sql = 'SELECT COUNT(id_sekolah) AS negeri FROM sekolah WHERE jenis="Negeri"';
                $result_filter = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result_filter) > 0) {
                  while($row = mysqli_fetch_assoc($result_filter)) { 
                    echo $row["negeri"];
                 }
                } else {
                  echo "0";
                }
                ?>
              </div>
              <div class="text">
                Sekolah Negeri
              </div>
            </div>
            <div class="col-md-3">
              <div class="number">
                <?php
                $sql = 'SELECT COUNT(id_sekolah) AS negeri FROM sekolah WHERE jenis="Swasta"';
                $result_filter = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result_filter) > 0) {
                  while($row = mysqli_fetch_assoc($result_filter)) { 
                    echo $row["negeri"];
                 }
                } else {
                  echo "0";
                }
                ?>
              </div>
              <div class="text">
                Sekolah Swasta
              </div>
            </div>
            <div class="col-md-3">
              
            </div>
          </div>
        </div>
      </div>
      <!-- End Statistics -->

<?php 
$attributes = array('file' => 'home');
?>
<div class="row">
  <form  action="index.php" method="get" class="navbar-form form-inline col-lg-2 hidden-xs">
          <p>Cari Berdasarkan : <input class="form-control" placeholder="Nama Sekolah atau Alamat" type="text" name ="key"></p>
        </form>
</div>
<!-- Peta -->
<div class="grid-structure">
  <div class="row">
    <div class="col-md-12">
      <div class="widget-container fluid-height">
        <div id="mapid" style="width: 100%; height: 600px;"></div>
      </div>
    </div>
  </div>
</div>
<br>
<!-- End Peta -->

<script>
<?php

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
  var greenIcon = L.icon({
    iconUrl: 'https://cdn0.iconfinder.com/data/icons/3D-House-png/256/School.png',
      iconSize:     [40, 40], // size of the icon
      iconAnchor:   [20, 20], // point of the icon which will correspond to marker's location
      popupAnchor:  [20, 0] // point from which the popup should open relative to the iconAnchor
    });
  
  <?php    
  if(isset($_GET['key'])){
    $key = $_GET['key'];
    $sql = "SELECT * FROM sekolah where nama_sekolah like '%$key%' OR alamat like '%$key%'";
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
     echo 'L.marker(['.$row["y"].', '.$row["x"].'], {icon: greenIcon}).bindPopup("<b><h4>'.$row["nama_sekolah"].'</b></h4>'.$row["alamat"].'<br>Jenis: Sekolah '.$row["jenis"].'<br><br><img src=foto/'.$row["foto"].' width=273 height=220> ").addTo('.$row["jenis"].');';
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

var overlays = {
  <?php 
  $sql = 'SELECT * FROM sekolah group by jenis order by jenis';
  $result_filter = mysqli_query($conn, $sql);
  while($row = mysqli_fetch_assoc($result_filter)) { ?>
    "<?php echo ucfirst(str_replace("_"," ",$row["jenis"])) ?>": <?php echo $row["jenis"]; ?>,
  <?php } ?>
};

L.control.layers(null, overlays, {collapsed:false}).addTo(map);
$(".leaflet-control-layers-overlays").prepend("<label>Jenis Seklolah</label>");

var baseLayers = {
  "Grayscale": grayscale,
  "Streets": streets
};

L.control.layers(baseLayers, null).addTo(map);

/*var overlays2 = {
  <?php 
  $sql = 'SELECT RIGHT(alamat, InStr(reverse(alamat), ",") - 1) AS kecamatan FROM sekolah GROUP BY kecamatan ORDER BY kecamatan';
  $result_filter = mysqli_query($conn, $sql);
  while($row = mysqli_fetch_assoc($result_filter)) { ?>
    "<?php echo ucfirst(str_replace("_"," ",$row["alamat"])) ?>": <?php echo $row["jenis"]; ?>,
  <?php } ?>
};

L.control.layers(null,overlays2,{collapsed:false}).addTo(map);*/

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
<?php include 'template/footer.php' ?>