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
      	<form action="#" class="form-horizontal">
          <div class="form-group">
            <label class="control-label col-md-2">Nama Sekolah</label>
            <div class="col-md-9">
              <input class="form-control" placeholder="Text" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-2">Alamat</label>
            <div class="col-md-9">
              <textarea class="form-control" rows="3"></textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-2">Koordinat X</label>
            <div class="col-md-9">
              <input class="form-control" placeholder="Text" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-2">Koordinat Y</label>
            <div class="col-md-9">
              <input class="form-control" placeholder="Text" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-2">Jenis Sekolah</label>
            <div class="col-md-9">
              <select class="select2able"><option value="Category 1">Swasta</option><option value="Category 2">Negeri</option></select>
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
                  <span class="btn btn-default btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file"></span><a class="btn btn-default fileupload-exists" data-dismiss="fileupload" href="#">Remove</a>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <center>
          <button class="btn btn-danger ladda-button progress-demo" data-style="expand-right"><span class="ladda-label">Tambahkan Data</span></button>
          </center>
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