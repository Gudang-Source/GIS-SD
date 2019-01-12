<!DOCTYPE html>
<html>

<!-- Mirrored from assets/andrewreifman.com/se7en/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Jan 2019 15:04:02 GMT -->
<head>
  <title>
    Geographic Information System
  </title>

  <link rel="icon" type="image/png" sizes="16x16" href="logo.png">

  <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700" media="all" rel="stylesheet" type="text/css" /><link href="assets/andrewreifman.com/se7en/stylesheets/bootstrap.min.css" media="all" rel="stylesheet" type="text/css" /><link href="assets/andrewreifman.com/se7en/stylesheets/font-awesome.min.css" media="all" rel="stylesheet" type="text/css" /><link href="assets/andrewreifman.com/se7en/stylesheets/hightop-font.css" media="all" rel="stylesheet" type="text/css" /><link href="assets/andrewreifman.com/se7en/stylesheets/isotope.css" media="all" rel="stylesheet" type="text/css" /><link href="assets/andrewreifman.com/se7en/stylesheets/jquery.fancybox.css" media="all" rel="stylesheet" type="text/css" /><link href="assets/andrewreifman.com/se7en/stylesheets/fullcalendar.css" media="all" rel="stylesheet" type="text/css" /><link href="assets/andrewreifman.com/se7en/stylesheets/wizard.css" media="all" rel="stylesheet" type="text/css" /><link href="assets/andrewreifman.com/se7en/stylesheets/select2.css" media="all" rel="stylesheet" type="text/css" /><link href="assets/andrewreifman.com/se7en/stylesheets/morris.css" media="all" rel="stylesheet" type="text/css" /><link href="assets/andrewreifman.com/se7en/stylesheets/datatables.css" media="all" rel="stylesheet" type="text/css" /><link href="assets/andrewreifman.com/se7en/stylesheets/datepicker.css" media="all" rel="stylesheet" type="text/css" /><link href="assets/andrewreifman.com/se7en/stylesheets/timepicker.css" media="all" rel="stylesheet" type="text/css" /><link href="assets/andrewreifman.com/se7en/stylesheets/colorpicker.css" media="all" rel="stylesheet" type="text/css" /><link href="assets/andrewreifman.com/se7en/stylesheets/bootstrap-switch.css" media="all" rel="stylesheet" type="text/css" /><link href="assets/andrewreifman.com/se7en/stylesheets/bootstrap-editable.css" media="all" rel="stylesheet" type="text/css" /><link href="assets/andrewreifman.com/se7en/stylesheets/daterange-picker.css" media="all" rel="stylesheet" type="text/css" /><link href="assets/andrewreifman.com/se7en/stylesheets/typeahead.css" media="all" rel="stylesheet" type="text/css" /><link href="assets/andrewreifman.com/se7en/stylesheets/summernote.css" media="all" rel="stylesheet" type="text/css" /><link href="assets/andrewreifman.com/se7en/stylesheets/ladda-themeless.min.css" media="all" rel="stylesheet" type="text/css" /><link href="assets/andrewreifman.com/se7en/stylesheets/social-buttons.css" media="all" rel="stylesheet" type="text/css" /><link href="assets/andrewreifman.com/se7en/stylesheets/jquery.fileupload-ui.css" media="screen" rel="stylesheet" type="text/css" /><link href="assets/andrewreifman.com/se7en/stylesheets/dropzone.css" media="screen" rel="stylesheet" type="text/css" /><link href="assets/andrewreifman.com/se7en/stylesheets/nestable.css" media="screen" rel="stylesheet" type="text/css" /><link href="assets/andrewreifman.com/se7en/stylesheets/pygments.css" media="all" rel="stylesheet" type="text/css" /><link href="assets/andrewreifman.com/se7en/stylesheets/style.css" media="all" rel="stylesheet" type="text/css" /><link href="assets/andrewreifman.com/se7en/stylesheets/color/green.css" media="all" rel="alternate stylesheet" title="green-theme" type="text/css" /><link href="assets/andrewreifman.com/se7en/stylesheets/color/orange.css" media="all" rel="alternate stylesheet" title="orange-theme" type="text/css" /><link href="assets/andrewreifman.com/se7en/stylesheets/color/magenta.css" media="all" rel="alternate stylesheet" title="magenta-theme" type="text/css" /><link href="assets/andrewreifman.com/se7en/stylesheets/color/gray.css" media="all" rel="alternate stylesheet" title="gray-theme" type="text/css" /><script src="assets/code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script><script src="assets/code.jquery.com/ui/1.10.3/jquery-ui.js" type="text/javascript"></script><script src="assets/andrewreifman.com/se7en/javascripts/bootstrap.min.js" type="text/javascript"></script><script src="assets/andrewreifman.com/se7en/javascripts/raphael.min.js" type="text/javascript"></script><script src="assets/andrewreifman.com/se7en/javascripts/selectivizr-min.js" type="text/javascript"></script><script src="assets/andrewreifman.com/se7en/javascripts/jquery.mousewheel.js" type="text/javascript"></script><script src="assets/andrewreifman.com/se7en/javascripts/jquery.vmap.min.js" type="text/javascript"></script><script src="assets/andrewreifman.com/se7en/javascripts/jquery.vmap.sampledata.js" type="text/javascript"></script><script src="assets/andrewreifman.com/se7en/javascripts/jquery.vmap.world.js" type="text/javascript"></script><script src="assets/andrewreifman.com/se7en/javascripts/jquery.bootstrap.wizard.js" type="text/javascript"></script><script src="assets/andrewreifman.com/se7en/javascripts/fullcalendar.min.js" type="text/javascript"></script><script src="assets/andrewreifman.com/se7en/javascripts/gcal.js" type="text/javascript"></script><script src="assets/andrewreifman.com/se7en/javascripts/jquery.dataTables.min.js" type="text/javascript"></script><script src="assets/andrewreifman.com/se7en/javascripts/datatable-editable.js" type="text/javascript"></script><script src="assets/andrewreifman.com/se7en/javascripts/jquery.easy-pie-chart.js" type="text/javascript"></script><script src="assets/andrewreifman.com/se7en/javascripts/excanvas.min.js" type="text/javascript"></script><script src="assets/andrewreifman.com/se7en/javascripts/jquery.isotope.min.js" type="text/javascript"></script><script src="assets/andrewreifman.com/se7en/javascripts/isotope_extras.js" type="text/javascript"></script><script src="assets/andrewreifman.com/se7en/javascripts/modernizr.custom.js" type="text/javascript"></script><script src="assets/andrewreifman.com/se7en/javascripts/jquery.fancybox.pack.js" type="text/javascript"></script><script src="assets/andrewreifman.com/se7en/javascripts/select2.js" type="text/javascript"></script><script src="assets/andrewreifman.com/se7en/javascripts/styleswitcher.js" type="text/javascript"></script><script src="assets/andrewreifman.com/se7en/javascripts/wysiwyg.js" type="text/javascript"></script><script src="assets/andrewreifman.com/se7en/javascripts/typeahead.js" type="text/javascript"></script><script src="assets/andrewreifman.com/se7en/javascripts/summernote.min.js" type="text/javascript"></script><script src="assets/andrewreifman.com/se7en/javascripts/jquery.inputmask.min.js" type="text/javascript"></script><script src="assets/andrewreifman.com/se7en/javascripts/jquery.validate.js" type="text/javascript"></script><script src="assets/andrewreifman.com/se7en/javascripts/bootstrap-fileupload.js" type="text/javascript"></script><script src="assets/andrewreifman.com/se7en/javascripts/bootstrap-datepicker.js" type="text/javascript"></script><script src="assets/andrewreifman.com/se7en/javascripts/bootstrap-timepicker.js" type="text/javascript"></script><script src="assets/andrewreifman.com/se7en/javascripts/bootstrap-colorpicker.js" type="text/javascript"></script><script src="assets/andrewreifman.com/se7en/javascripts/bootstrap-switch.min.js" type="text/javascript"></script><script src="assets/andrewreifman.com/se7en/javascripts/typeahead.js" type="text/javascript"></script><script src="assets/andrewreifman.com/se7en/javascripts/spin.min.js" type="text/javascript"></script><script src="assets/andrewreifman.com/se7en/javascripts/ladda.min.js" type="text/javascript"></script><script src="assets/andrewreifman.com/se7en/javascripts/moment.js" type="text/javascript"></script><script src="assets/andrewreifman.com/se7en/javascripts/mockjax.js" type="text/javascript"></script><script src="assets/andrewreifman.com/se7en/javascripts/bootstrap-editable.min.js" type="text/javascript"></script><script src="assets/andrewreifman.com/se7en/javascripts/xeditable-demo-mock.js" type="text/javascript"></script><script src="assets/andrewreifman.com/se7en/javascripts/xeditable-demo.js" type="text/javascript"></script><script src="assets/andrewreifman.com/se7en/javascripts/address.js" type="text/javascript"></script><script src="assets/andrewreifman.com/se7en/javascripts/daterange-picker.js" type="text/javascript"></script><script src="assets/andrewreifman.com/se7en/javascripts/date.js" type="text/javascript"></script><script src="assets/andrewreifman.com/se7en/javascripts/morris.min.js" type="text/javascript"></script><script src="assets/andrewreifman.com/se7en/javascripts/skycons.js" type="text/javascript"></script><script src="assets/andrewreifman.com/se7en/javascripts/fitvids.js" type="text/javascript"></script><script src="assets/andrewreifman.com/se7en/javascripts/jquery.sparkline.min.js" type="text/javascript"></script><script src="assets/andrewreifman.com/se7en/javascripts/dropzone.js" type="text/javascript"></script><script src="assets/andrewreifman.com/se7en/javascripts/jquery.nestable.js" type="text/javascript"></script><script src="assets/andrewreifman.com/se7en/javascripts/main.js" type="text/javascript"></script><script src="assets/andrewreifman.com/se7en/javascripts/respond.js" type="text/javascript"></script>
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin=""/>
  <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA==" crossorigin=""></script>
</head>
<body class="page-header-fixed bg-1">
  <div class="modal-shiftfix">
    <!-- Navigation -->
    <div class="navbar navbar-fixed-top scroll-hide">
      <div class="container-fluid top-bar">
        <div class="pull-right">
          <a class="logo" href="home.php">PEKANBARU</a>
        </div>
        <button class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="logo" href="home.php">GIS-SD</a>
        <form  action="home.php" method="get" class="navbar-form form-inline col-lg-2 hidden-xs">
          <input class="form-control" placeholder="Search" type="text" name ="key">
        </form>
      </div>
      <div class="container-fluid main-nav clearfix">
        <div class="nav-collapse">
          <ul class="nav">
            <li>
              <a class="current" href="home.php"><span aria-hidden="true" class="hightop-home"></span>Peta Sekolah</a>
            </li>
            
            <li class="dropdown"><a data-toggle="dropdown" href="#">
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