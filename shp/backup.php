<!DOCTYPE>
<html>
<head>

  <title>tes</title>

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin=""/>
  <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA==" crossorigin=""></script>
</head>
<body>

  <div id="mapid" style="width: 1095px; height: 480px;"></div>



  <script>
    var cities = L.layerGroup();
    var sampah = L.layerGroup();

    L.marker([39.61, -105.02]).bindPopup('This is Littleton, CO.').addTo(cities),
    L.marker([39.74, -104.99]).bindPopup('This is Denver, CO.').addTo(cities),
    L.marker([39.73, -104.8]).bindPopup('This is Aurora, CO.').addTo(cities),
    L.marker([39.77, -105.23]).bindPopup('This is Golden, CO.').addTo(cities);
    <?php
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = 'lab320pcr';
    $dbname = 'db_gis';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);

    if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
    }
    $sql = 'SELECT * FROM sampah';
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        // echo "<h1>" . $row["jalan"]. "</h1>";
       echo 'L.marker(['.$row["y"].', '.$row["x"].']).bindPopup("<b><h4></b></h4>'.$row["jalan"].'<br><br><img src='.$row["gambar"].' width=273 height=220> ").addTo(sampah);';
     }
   } 
   else {
    echo "0 results";
  }
  mysqli_close($conn);
  ?>

  var mbAttr = 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
  '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
  'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
  mbUrl = 'https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';

  var grayscale   = L.tileLayer(mbUrl, {id: 'mapbox.light', attribution: mbAttr}),
  streets  = L.tileLayer(mbUrl, {id: 'mapbox.streets',   attribution: mbAttr});

  var map = L.map('mapid', {
    center: [0.507068,101.447777],
    zoom: 10,
    layers: [grayscale, cities]
  });

  var baseLayers = {
    "Grayscale": grayscale,
    "Streets": streets
  };

  var overlays = {
    "Cities": cities,
    "sampah": sampah  
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

  var overlays = {
    "Cities": mymap
  };

  L.control.layers(baseLayers, overlays).addTo(mymap);
  mymap.on('click', onMapClick);

</script>
</div>
</body>
</html>



