<?php include 'template/header.php' ?>
<body class="page-header-fixed bg-1">
  <div class="modal-shiftfix">
    <!-- Navigation -->
    <div class="navbar navbar-fixed-top scroll-hide">
      <div class="container-fluid top-bar">
        <div class="pull-right">
          <a class="logo" href="home.php">PEKANBARU</a>
        </div>
        <button class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="logo" href="home.php">GIS-SD</a>
        <form  class="navbar-form form-inline col-lg-2 hidden-xs">
          <input class="form-control" placeholder="Search" type="text">
        </form>
      </div>
      <div class="container-fluid main-nav clearfix">
        <div class="nav-collapse">
          <ul class="nav">
            <li>
              <a href="home.php"><span aria-hidden="true" class="hightop-home"></span>Peta Sekolah</a>
            </li>
            
            <li><a class="current" href="tambah.php">
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
                <div class="icon visitors"></div>
                <!-- Tampilkan jumlah yang Swasta lok-->
              </div>
              <div class="text">
                Sekolah Negeri
              </div>
            </div>
            <div class="col-md-3">
              <div class="number">
                <div class="icon money"></div>
                <!-- Tampilkan jumlah yang Negri lok-->
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
<br>
<!-- Peta -->
<div class="grid-structure">
  <div class="row">
  	<div class="col-md-3">
  		
  	</div>
    <div class="col-md-6">
      <div class="widget-container fluid-height">
      	<center><h3>Tambah Titik Sekolah</h3></center>
      	<br>
      	<form action="tambah.php" method="post" enctype="multipart/form-data" class="form-horizontal">
          <div class="form-group">
            <label class="control-label col-md-2">Nama Sekolah</label>
            <div class="col-md-9">
              <input class="form-control" type="text" name="nama_sekolah">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-2">Alamat</label>
            <div class="col-md-9">
              <textarea class="form-control" rows="3" name ="alamat"></textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-2">Koordinat X</label>
            <div class="col-md-9">
              <input class="form-control" type="text" name ="x">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-2">Koordinat Y</label>
            <div class="col-md-9">
              <input class="form-control" type="text" name ="y">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-2">Jenis Sekolah</label>
            <div class="col-md-9">
              <select class="select2able" name ="jenis"><option value="Swasta">Swasta</option><option value="Negeri">Negeri</option></select>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-2">Foto Sekolah</label>
            <div class="col-md-4">
              <div class="fileupload fileupload-new" data-provides="fileupload">
                <div class="fileupload-new img-thumbnail" style="width: 200px; height: 150px;">
                  <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image">
                </div>
                <div class="fileupload-preview fileupload-exists img-thumbnail" style="width: 200px; max-height: 150px"></div>
                <div>
                  <span class="btn btn-default btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" name="file"></span><a class="btn btn-default fileupload-exists" data-dismiss="fileupload" href="#">Remove</a>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="form-group">
            <label class="control-label col-md-9"></label>
            <div class="col-md-2">
            	<input class="btn btn-primary ladda-button progress-demo" data-style="expand-right" type="submit" name="insert" value="Tambahkan Data" onclick="insertRow()">
            </div>
          </div>
      </form>
      </div>
    </div>
    <div class="col-md-3">
  		
  	</div>
  </div>
</div>
<br>
<!-- End Peta -->
<?php include 'template/footer.php' ?>
<script>
  function insertRow(){
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
    if(isset($_POST['nama_sekolah']) && isset($_POST['alamat']) && isset($_POST['x']) && isset($_POST['y']) && isset($_POST['jenis'])) {
    $nama_sekolah = $_POST['nama_sekolah'];
    $alamat = $_POST['alamat'];
    $x = $_POST['x'];
    $y = $_POST['y'];
    $jenis = $_POST['jenis'];

    $ekstensi_diperbolehkan = array('png','jpg');
      $nama = $_FILES['file']['name'];
      $xi = explode('.', $nama);
      $ekstensi = strtolower(end($xi));
      $ukuran = $_FILES['file']['size'];
      $file_tmp = $_FILES['file']['tmp_name'];  
 
      if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        if($ukuran < 3044070){      
          move_uploaded_file($file_tmp, 'foto/'.$nama);
          $sql = "INSERT INTO sekolah (nama_sekolah, alamat, x, y, jenis, foto) VALUES ('$nama_sekolah', '$alamat', '$x', '$y', '$jenis', '$nama')";
          if ($conn->query($sql) === TRUE) {
              echo 'FILE BERHASIL DI UPLOAD';
          } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
          }
        }else{
          echo 'UKURAN FILE TERLALU BESAR';
        }
      }else{
        echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
      }

    $conn->close();
  }
  ?>
  }

</script>