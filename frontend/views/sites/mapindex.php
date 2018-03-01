<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?=$s[2]?></title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        .caret{
            position:absolute;
            left:90%;
            top:45%;
        }
        #map{
            height:600px;
        }
        body{
            padding-top:70px;
            height:100%;
        }
    </style>


<script type="text/javascript">

</script>
<script>
var WGS84_to_GCJ02 = function() {}

WGS84_to_GCJ02.prototype.a = 6378245.0;
WGS84_to_GCJ02.prototype.ee = 0.00669342162296594323;
WGS84_to_GCJ02.prototype.transform = function(wgLat, wgLon) {

    if (this.outOfChina(wgLat, wgLon)) {
        return [wgLat, wgLon];
    }

    dLat = this.transformLat(wgLon - 105.0, wgLat - 35.0);
    dLon = this.transformLon(wgLon - 105.0, wgLat - 35.0);
    radLat = wgLat / 180.0 * Math.PI;
    magic = Math.sin(radLat);
    magic = 1 - this.ee * magic * magic;
    sqrtMagic = Math.sqrt(magic);
    dLat = (dLat * 180.0) / ((this.a * (1 - this.ee)) / (magic * sqrtMagic) * Math.PI);
    dLon = (dLon * 180.0) / (this.a / sqrtMagic * Math.cos(radLat) * Math.PI);
    mgLat = wgLat + dLat;
    mgLon = wgLon + dLon;

    return [mgLat, mgLon];

};

WGS84_to_GCJ02.prototype.outOfChina = function(lat, lon) {

    if (lon < 72.004 || lon > 137.8347)
        return true;
    if (lat < 0.8293 || lat > 55.8271)
        return true;

    return false;

};

WGS84_to_GCJ02.prototype.transformLat = function(x, y) {

    var ret = -100.0 + 2.0 * x + 3.0 * y + 0.2 * y * y + 0.1 * x * y + 0.2 * Math.sqrt(Math.abs(x));
    ret += (20.0 * Math.sin(6.0 * x * Math.PI) + 20.0 * Math.sin(2.0 * x * Math.PI)) * 2.0 / 3.0;
    ret += (20.0 * Math.sin(y * Math.PI) + 40.0 * Math.sin(y / 3.0 * Math.PI)) * 2.0 / 3.0;
    ret += (160.0 * Math.sin(y / 12.0 * Math.PI) + 320 * Math.sin(y * Math.PI / 30.0)) * 2.0 / 3.0;

    return ret;

};

WGS84_to_GCJ02.prototype.transformLon = function(x, y) {

    var ret = 300.0 + x + 2.0 * y + 0.1 * x * x + 0.1 * x * y + 0.1 * Math.sqrt(Math.abs(x));
    ret += (20.0 * Math.sin(6.0 * x * Math.PI) + 20.0 * Math.sin(2.0 * x * Math.PI)) * 2.0 / 3.0;
    ret += (20.0 * Math.sin(x * Math.PI) + 40.0 * Math.sin(x / 3.0 * Math.PI)) * 2.0 / 3.0;
    ret += (150.0 * Math.sin(x / 12.0 * Math.PI) + 300.0 * Math.sin(x / 30.0 * Math.PI)) * 2.0 / 3.0;

    return ret;

}; 
function searchLocation(lat, lng,name){
    var latlng=new WGS84_to_GCJ02().transform(lat,lng);
    var center = new google.maps.LatLng(latlng[0], latlng[1]);
    //alert(latlng[0]);
    //alert(latlng[1]);
    // using global variable:
    map.panTo(center);
    marker.setPosition(center);
    marker.title=name;
    }
function initMap() {
    var latlng=new WGS84_to_GCJ02().transform(<?=$s[0]?>,<?=$s[1]?>);
    map = new google.maps.Map(document.getElementById('map'), {
    zoom: 18,
        streetViewControl:false,
        scaleControl:true,
        center: {lat:latlng[0], lng:latlng[1]},
        mapTypeId: 'satellite'
        });
          marker = new google.maps.Marker({
          position: {lat:latlng[0], lng:latlng[1]},
              title:<?="'".$s[2]."'"?>,
              map: map
        });
      }
    </script>
  </head>
  <body>
<?php /*$this->context->layout=false;*/ ?>


 
                <div id="map" class="col-md-12">
                </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
 <script async defer
    src="http://ditu.google.cn/maps/api/js?key=AIzaSyD1LV24PFgzFOE4wUtFDi3dLYSfk0117Ms&callback=initMap">
    //src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1LV24PFgzFOE4wUtFDi3dLYSfk0117Ms&callback=initMap"
    </script>
  </body>
</html>
