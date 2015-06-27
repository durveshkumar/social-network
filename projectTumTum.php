<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<link href="/static/images/ttt_favicon.png" rel='icon' type='image/png'>

<title>Tum Tum Tracker | IIT Bombay</title>

<link href="/static/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<link href="/static/css/styles.css" rel="stylesheet" type="text/css" />
<link href="/static/css/front.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="/static/font-awesome/css/font-awesome.min.css">

<script src="/static/js/jquery.min.js"></script>
<script src="/static/js/bootstrap.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=true" type="text/javascript"></script>


<style>
.logoText{
	left:17%;
}
@media (max-width: 1300px) {
	.logoText{
		left:19%;
	}
	.idlebuses{
		margin-left:70px;
	}
	.onoffswitch{
		margin-left:320px;
	}
}
@media (max-width: 1100px) {
	.logoText{
		left:20%;
	}
	.idlebuses{
		margin-left:30px;
		font-size:12px; 
	}
	.onoffswitch{
		margin-left:276px;
	}
}
@media (max-width: 1000px) {
	.logoText{
		left:22%;
	}
	.lastUpdatedText{
	margin-bottom:0;
	}
}
@media (max-width: 800px) {
	.logoText{
		left:25%;
	}
}


@media (min-width: 1500px) {
	.logoText{
		font-size:67px;
	}
	.tag1,.tag2,.tag3{
	font-size:20px;
	padding-left:8px;
	padding-right:8px;
	}
	.tag0{
		font-size:15px;
		height:35px;
		right:244px;
	}
	.phones{
	right:266px;
	height:35px;
	}
	.tag1{
	right:174px;
	}
	.tag2{
		right:93px;
	}
	.tag3{
		right: 10px;
	}
}

@media (min-width: 1600px) {
	.logoText{
		font-size:81px;
	}
	.tag1,.tag2,.tag3{
	font-size:24px;
	padding-left:10px;
	padding-right:10px;
	}
	.tag0{
		font-size:17px;
		height:41px;
		right:297px;
	}
	.phones{
	right:320px;
	height:41px;
	}
	.phones a {
	margin-top:8px;
	height:25px;
	}
	.phones a img{
	width:25px;
	}
	.tag1{
	right:211px;
	}
	.tag2{
		right:115px;
	}
	.tag3{
		right: 12px;
	}
}
@media (min-width: 1900px) {
	.logoText{
		font-size:92px;
	}
}
@media (min-width: 2100px) {
	.logoText{
		font-size:112px;
	}
}


@media only screen 
and (min-device-width : 1400px) 
and (max-device-width : 2400px) 
and (orientation : landscape) {

	.routelabel, .label-highlited{
		padding:3px 14px 3px 30px;
		margin:0px 3px 0px 3px;
		height:37px !important;
		width:75% !important;
	}
	
	.routelabel p, .label-highlited p{
		font-size: 24px;
		width:140px;
	}
	.routelabel .route , .label-highlited .route{
		font-size: 18px;
		width:85px;
	} 
	
	.routelabel .buses, .label-highlited .buses{
		font-size: 18px;
		width:77px;
	}
	#map {
		width:74%;
	}
	#lastupdate{
		font-size:18px;
		left: 25px;
		height:30px;
	}
	.idlebuses{
		font-size:16px;
		margin-left:60px;
	}
	.onoffswitch{
		margin-left:400px;
		margin-top:-40px;
	}
	.labelhr{
	margin-top:14px;
	}
	.credit_ar{
		width:77px;
	}
	.credit_py{
		width:70px;
	}
	.credit_xb{
		width:63px;
	}
	#credits{
		width:252px;
	}
	#credits ul{
		height:63px;
	}
	.logo-link{
		width:191px;
		height:191px;
	}
}

</style>

<script>
var result = {"server_time": "2015-06-15 12:06:18", "markers": [{"full": 0, "description": "SOM-YP-H1-H12", "course_class": "arr-wwn", "route": "Night Bus", "idle_time": "I'm dead", "display": 0, "discrete": 0, "idle": 1, "lastupdated_time": "06:00:00", "lwidth": "180px", "lat": "19.13434", "lng": "72.909898", "speed": "19km/hr", "id": "4", "rid": "16"}, {"full": 0, "description": "DT-SOM-H8-H12", "course_class": "arr-ess", "route": "Lakeside", "idle_time": "I'm dead", "display": 0, "discrete": 0, "idle": 1, "lastupdated_time": "16:13:32", "lwidth": "180px", "lat": "19.132286", "lng": "72.915026", "speed": "13km/hr", "id": "14", "rid": "6"}, {"full": 0, "description": "H12-H8-SOM-MG", "course_class": "", "route": "Hostels", "idle_time": "I'm dead", "display": 0, "discrete": 0, "idle": 1, "lastupdated_time": "06:00:00", "lwidth": "180px", "lat": "0.0", "lng": "0.0", "speed": "48km/hr", "id": "9", "rid": "4"}, {"full": 0, "description": "H12-H8-SOM-MG", "course_class": "", "route": "Hostels", "idle_time": "I'm dead", "display": 0, "discrete": 0, "idle": 1, "lastupdated_time": "06:00:00", "lwidth": "180px", "lat": "0.0", "lng": "0.0", "speed": "48km/hr", "id": "11", "rid": "4"}, {"full": 0, "description": "H12-H8-SOM-MG", "course_class": "arr-ne", "route": "Hostels", "idle_time": "I'm dead", "display": 0, "discrete": 1, "idle": 1, "lastupdated_time": "07:30:19", "lwidth": "180px", "lat": "19.129836", "lng": "72.918783", "speed": "&nbsp;&nbsp;0km/hr", "id": "12", "rid": "4"}, {"full": 0, "description": "H12-H8-SOM-MG", "course_class": "", "route": "Hostels", "idle_time": "I'm dead", "display": 0, "discrete": 0, "idle": 1, "lastupdated_time": "06:00:00", "lwidth": "180px", "lat": "0.0", "lng": "0.0", "speed": "48km/hr", "id": "13", "rid": "4"}, {"full": 0, "description": "H12-H8-SOM-MG", "course_class": "arr-nee", "route": "Hostels", "idle_time": "I'm dead", "display": 0, "discrete": 0, "idle": 1, "lastupdated_time": "16:13:47", "lwidth": "180px", "lat": "19.131663", "lng": "72.914746", "speed": "&nbsp;&nbsp;0km/hr", "id": "15", "rid": "4"}, {"full": 0, "description": "H12-H8-SOM-MG", "course_class": "arr-ww", "route": "Hostels", "idle_time": "I'm dead", "display": 0, "discrete": 1, "idle": 1, "lastupdated_time": "07:30:25", "lwidth": "180px", "lat": "19.131343", "lng": "72.914742", "speed": "&nbsp;&nbsp;0km/hr", "id": "17", "rid": "4"}, {"full": 0, "description": "H12-H8-SOM-MG", "course_class": "arr-ee", "route": "Hostels", "idle_time": "I'm dead", "display": 0, "discrete": 1, "idle": 1, "lastupdated_time": "07:30:32", "lwidth": "180px", "lat": "19.133848", "lng": "72.910436", "speed": "&nbsp;&nbsp;0km/hr", "id": "18", "rid": "4"}, {"full": 0, "description": "H12-H8-SOM-MG", "course_class": "", "route": "Hostels", "idle_time": "I'm dead", "display": 0, "discrete": 0, "idle": 1, "lastupdated_time": "06:00:00", "lwidth": "180px", "lat": "0.0", "lng": "0.0", "speed": "48km/hr", "id": "19", "rid": "4"}, {"full": 0, "description": "H12-H8-SOM-MG", "course_class": "arr-sw", "route": "Hostels", "idle_time": "I'm dead", "display": 0, "discrete": 1, "idle": 1, "lastupdated_time": "07:30:38", "lwidth": "180px", "lat": "19.133384", "lng": "72.910241", "speed": "&nbsp;&nbsp;0km/hr", "id": "20", "rid": "4"}, {"full": 0, "description": "H12-H8-SOM-MG", "course_class": "arr-wn", "route": "Hostels", "idle_time": "I'm dead", "display": 0, "discrete": 0, "idle": 1, "lastupdated_time": "12:03:04", "lwidth": "180px", "lat": "19.133388", "lng": "72.910526", "speed": "&nbsp;&nbsp;0km/hr", "id": "21", "rid": "4"}, {"full": 0, "description": "H12-H8-SOM-MG", "course_class": "arr-ww", "route": "Hostels", "idle_time": "I'm dead", "display": 0, "discrete": 1, "idle": 1, "lastupdated_time": "07:30:52", "lwidth": "180px", "lat": "19.133997", "lng": "72.911031", "speed": "&nbsp;&nbsp;8km/hr", "id": "23", "rid": "4"}, {"full": 0, "description": "H12-H8-SOM-MG", "course_class": "", "route": "Hostels", "idle_time": "I'm dead", "display": 0, "discrete": 0, "idle": 1, "lastupdated_time": "06:00:00", "lwidth": "180px", "lat": "0.0", "lng": "0.0", "speed": "48km/hr", "id": "24", "rid": "4"}, {"full": 0, "description": "H12-H1-SOM-MG", "course_class": "arr-sww", "route": "Hostels", "idle_time": "I'm dead", "display": 0, "discrete": 1, "idle": 1, "lastupdated_time": "07:30:05", "lwidth": "180px", "lat": "19.133675", "lng": "72.910613", "speed": "&nbsp;&nbsp;0km/hr", "id": "7", "rid": "5"}, {"full": 0, "description": "H12-H1-SOM-MG", "course_class": "arr-ne", "route": "Hostels", "idle_time": "I'm dead", "display": 0, "discrete": 1, "idle": 1, "lastupdated_time": "07:30:12", "lwidth": "180px", "lat": "19.133827", "lng": "72.910476", "speed": "&nbsp;&nbsp;0km/hr", "id": "8", "rid": "5"}, {"full": 0, "description": "H12-H1-SOM-MG", "course_class": "arr-nee", "route": "Hostels", "idle_time": "I'm dead", "display": 0, "discrete": 0, "idle": 1, "lastupdated_time": "20:17:25", "lwidth": "180px", "lat": "19.132203", "lng": "72.914954", "speed": "&nbsp;&nbsp;0km/hr", "id": "10", "rid": "5"}, {"full": 0, "description": "SOM-H8-H12", "course_class": "arr-ee", "route": "H12/SOM", "idle_time": "I'm dead", "display": 0, "discrete": 0, "idle": 1, "lastupdated_time": "20:17:10", "lwidth": "175px", "lat": "19.125963", "lng": "72.916412", "speed": "&nbsp;&nbsp;0km/hr", "id": "3", "rid": "8"}, {"full": 0, "description": "SOM-H8-H12", "course_class": "", "route": "H12/SOM", "idle_time": "I'm dead", "display": 0, "discrete": 0, "idle": 1, "lastupdated_time": "20:17:28", "lwidth": "175px", "lat": "19.13112", "lng": "72.91492", "speed": "15km/hr", "id": "6", "rid": "8"}, {"full": 0, "description": "SOM-H1-H5-SOM", "course_class": "arr-nne", "route": "H5/SOM", "idle_time": "I'm dead", "display": 0, "discrete": 1, "idle": 1, "lastupdated_time": "07:30:45", "lwidth": "180px", "lat": "19.133717", "lng": "72.910361", "speed": "&nbsp;&nbsp;0km/hr", "id": "22", "rid": "10"}, {"full": 0, "description": "H15-SOM-MG", "course_class": "", "route": "H15/MG", "idle_time": "I'm dead", "display": 0, "discrete": 0, "idle": 1, "lastupdated_time": "06:00:00", "lwidth": "175px", "lat": "19.11592", "lng": "72.92577", "speed": "45km/hr", "id": "2", "rid": "12"}, {"full": 0, "description": "QIP-YP-SOM-Lib", "course_class": "", "route": "QIP", "idle_time": "I'm dead", "display": 0, "discrete": 0, "idle": 1, "lastupdated_time": "06:00:00", "lwidth": "180px", "lat": "0.0", "lng": "0.0", "speed": "48km/hr", "id": "16", "rid": "14"}], "title": "IIT Bombay TumTumTracker JSON file"}
var initialized_first = false;
var show_idle_buses = false;

var is_full_hd = false;

if(window.outerWidth > 1400)
	is_full_hd = true;

</script>

</head>

<body>
<div id="header">
	<img class="logo" src="/static/images/ttt.png" />
	<a href="/"><div class="logo-link"></div></a>
	<a class="logoText" href="/">TumTumTracker</a>
	<a class="tag0" id="mobile-logo"><i class="fa fa-mobile fa-2x"></i></a>
	<a class="tag1" href="/about/">About</a>
	<a class="tag2" href="/gallery/">Gallery</a>
	<a class="tag3" href="/contact/">Contact</a>
	<div class="phones" id="phone-div">
		<a target="_blank" href="https://play.google.com/store/apps/details?id=in.co.praveenkumar.tumtumtracker&hl=en"><img src="/static/images/mandroid.png" width="20px" ></a>
		<a target="_blank" href="http://www.windowsphone.com/en-us/store/app/tum-tum-tracker/b98812f8-23f8-4d4a-81fd-f15c55529bc0"><img src="/static/images/mwindows.png" width="20px" ></a>
	</div>
</div>

<div id="map"></div>

<div id="infoPanel">
  <div id="markersInfo" >
	
	<p class="lastUpdatedText" id="lastupdate"> Lastupdate: 2015-06-15 12:06:18</p>
	<p class="idlebuses hidden-xs hidden-sm" >Idle Buses:</p>
    <div class="onoffswitch hidden-xs hidden-sm">
		<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch">
		<label class="onoffswitch-label" for="myonoffswitch">
			<span class="onoffswitch-inner"></span>
			<span class="onoffswitch-switch"></span>
		</label>
	</div>
	<hr class="labelhr" style="width:92%;margin-top:5px;margin-left:15px;">
	
	<div id="label-container">
		
	</div>
	
	<div id="all" style="display:none;">


	</div>
  </div>
  
  <div id="credits">
  <p></p>
  <ul class="list-unstyled hidden-xs hidden-sm">
	<li><a href="https://www.python.org/"><img class="credit_py" src="/static/images/credits/python.png" width="50px"></a></li>
	<li style="margin-left:0;"><a href="http://arduino.cc/"><img class="credit_ar" src="/static/images/credits/arduino.png" width="55px"></a></li>
	<li style="margin-left:0;"><a href="http://www.digi.com/xbee/"><img class="credit_xb" src="/static/images/credits/xbee.png" width="45px"></a></li>
  </ul>
  </div>
</div>

<div style="display: none" id="hideAll">&nbsp;</div>

<noscript>
<b>JavaScript must be enabled in order for you to use Google Maps.</b> However, it seems JavaScript is either disabled or not supported by your browser. 
      To view Google Maps, enable JavaScript by changing your browser options, and then 
      try again.
</noscript>

<script type="text/javascript"> 
  
google.maps.visualRefresh = true;
var map;
var marker;
var red = new google.maps.MarkerImage("/static/images/red.png", null, null, new google.maps.Point(16, 16), new google.maps.Size(32, 32));
var green = new google.maps.MarkerImage("/static/images/green.png", null, null, new google.maps.Point(16, 16), new google.maps.Size(32, 32));
var idleb = new google.maps.MarkerImage("/static/images/idle.png", null, null, new google.maps.Point(16, 16), new google.maps.Size(32, 32));

var red_full = new google.maps.MarkerImage("/static/images/red.png", null, null, new google.maps.Point(20,20), new google.maps.Size(40, 40));
var green_full = new google.maps.MarkerImage("/static/images/green.png", null, null, new google.maps.Point(20,20), new google.maps.Size(40, 40));
var idleb_full = new google.maps.MarkerImage("/static/images/idle.png", null, null, new google.maps.Point(20,20), new google.maps.Size(40, 40));




 var mygIcon ={
  url: 'red.png',
  size: new google.maps.Size(20, 32),
    // The origin for this image is 0,0.
    origin: new google.maps.Point(0,0),
    // The anchor for this image is the base of the flagpole at 0,32.
    anchor: new google.maps.Point(0, 32)
 };
function initialize() {
  var mapOptions = {
    zoom: 16,
    center: new google.maps.LatLng(19.131612,72.913573),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  map = new google.maps.Map(document.getElementById('map'),
      mapOptions);
    

  


  // var newIcon = MapIconMaker.createMarkerIcon({width: 20, height: 34, primaryColor: "#0000FF", cornercolor:"#0000FF"});

var isize=new google.maps.Size(32, 32);

         
           

}


  
google.maps.event.addDomListener(window, 'load', initialize);

var markerarray = [];
var idle =0;

function createMarker(mapttt,point,name,html,full,idle) {
   
   if(is_full_hd == false)
   {
	   if(full==0 && idle ==0){
		var marker = new google.maps.Marker({
		  position:point,
		  map:mapttt,
		  title: name,
		  icon: green,
		  anchor: new google.maps.Point(16, 16)
		});
	  }
	  else if(full==0 && idle ==1){
		var marker = new google.maps.Marker({
		  position:point,
		  map:mapttt,
		  title: name,
		  icon: idleb,
		  anchor: new google.maps.Point(16, 16)
		});
	  }
	  else if(full==1 && idle ==1){
		var marker = new google.maps.Marker({
		  position:point,
		  map:mapttt,
		  title: name,
		  icon: idleb,
		  anchor: new google.maps.Point(16, 16)
		}); 
	  }
	   else{
		var marker = new google.maps.Marker({
		  position:point,
		  map:mapttt,
		  title: name,
		  icon: red,
		  anchor: new google.maps.Point(16, 16)
		}); 
	  }
  }
  else{
	if(full==0 && idle ==0){
		var marker = new google.maps.Marker({
		  position:point,
		  map:mapttt,
		  title: name,
		  icon: green_full,
		  anchor: new google.maps.Point(16, 16)
		});
	  }
	  else if(full==0 && idle ==1){
		var marker = new google.maps.Marker({
		  position:point,
		  map:mapttt,
		  title: name,
		  icon: idleb_full,
		  anchor: new google.maps.Point(16, 16)
		});
	  }
	  else if(full==1 && idle ==1){
		var marker = new google.maps.Marker({
		  position:point,
		  map:mapttt,
		  title: name,
		  icon: idleb_full,
		  anchor: new google.maps.Point(16, 16)
		}); 
	  }
	   else{
		var marker = new google.maps.Marker({
		  position:point,
		  map:mapttt,
		  title: name,
		  icon: red_full,
		  anchor: new google.maps.Point(16, 16)
		}); 
	  }
  }
  //

  marker.info=new google.maps.InfoWindow({
    content:html
  });
  
  marker.listener = google.maps.event.addListener(marker, "click", function() {
          marker.info.open(map,marker);
		  window.setTimeout(move_latlongs, 50);
        });
        return marker;
      }
       

</script>

<script>
var lats= new Array();
var lngs= new Array();
var des= new Array();

var data_downloaded=false;

$( document ).ready(function() {
	document.getElementById("hideAll").style.display = "none"; 
	window.setTimeout(initialize_latlongs, 500);
});

function download_json(){
	$.getJSON( "/jsonweb").done(function( data ) {
		window.result = data;
		move_latlongs();
		window.setTimeout(download_json, 4000);
	});	
}

function download_initialize(){
	alert(result.server_time);
}

var marker_list = [];
var bus_is_idle = [];
var bus_count_list = [];
var bus_code_list = [];
var ubus_count_list = [];

var bus_name_list = [];


function initialize_latlongs(){
	var j,html,label,point=0,full;
	window.marker_list.length = result.markers.length;
	
	window.bus_name_list = []
	window.bus_count_list = []
	window.bus_code_list = []
	
	for(j=0; j<result.markers.length; ++j){
	
		if(result.markers[j].display==1 || show_idle_buses==true)
		{
			if(bus_name_list[result.markers[j].rid]==null ||bus_name_list[result.markers[j].rid]==undefined){		
				window.bus_name_list[result.markers[j].rid] = result.markers[j].route;
				var div = parseInt(result.markers[j].rid,10);
				if(div%2==0){
					div=(Math.floor(div/2)).toString();
					window.bus_code_list[result.markers[j].rid] = div+"A";
				}
				else{
					div=(Math.floor(div/2)).toString();
					window.bus_code_list[result.markers[j].rid] = div+"B";
				}
				window.bus_count_list[result.markers[j].rid]=1;
			}
			else{
				window.bus_count_list[result.markers[j].rid]+=1;
			}
		}
	
		window.idle=0;
		if(result.markers[j].display==0){
			window.idle = 1;
			if(show_idle_buses==false){
				if(marker_list[j]!=null)
				marker_list[j].setMap(null);
				continue;
			}
		}
		
		if(selected_label != "0"){
			if((result.markers[j].rid+"bus")!= selected_label){
				if(marker_list[j]!=null)
				marker_list[j].setMap(null);
				continue;
			}
		}
		if(marker_list[j] != undefined){
			marker_list[j].setMap(map);
			continue;
		}
		
		full=0;
		if(full==1 && result.markers[j].idle == 1){
			html = "<b id='"+result.markers[j].id+"mark' class='markerTitle' style='width:"+result.markers[j].lwidth+";'>"+result.markers[j].route+"<span>"+result.markers[j].description+"</span></b><hr class='markerhr'><b id='"+result.markers[j].id+"marklast' class='lastUpdatedHeading'><span style='margin:0;' id ='"+result.markers[j].id+"markspeed'>"+result.markers[j].speed+"</span><span><i id='"+result.markers[j].id+"markarr' class='fa fa-long-arrow-up "+result.markers[j].course_class+"'></i></span><span class='timel' id='"+result.markers[j].id+"marktime'>"+result.markers[j].lastupdated_time+"</span><span class='stopl' title='Bus Idle' id='"+result.markers[j].id+"markidle'>"+result.markers[j].idle_time+"</span></b>";
			window.bus_is_idle[j]=true;
		}
		else if(full==0 && result.markers[j].idle == 1){
			html = "<b id='"+result.markers[j].id+"mark' class='markerTitle' style='width:"+result.markers[j].lwidth+";'>"+result.markers[j].route+"<span>"+result.markers[j].description+"</span></b><hr class='markerhr'><b id='"+result.markers[j].id+"marklast' class='lastUpdatedHeading'><span style='margin:0;' id ='"+result.markers[j].id+"markspeed'>"+result.markers[j].speed+"</span><span><i id='"+result.markers[j].id+"markarr' class='fa fa-long-arrow-up "+result.markers[j].course_class+"'></i></span><span class='timel' id='"+result.markers[j].id+"marktime'>"+result.markers[j].lastupdated_time+"</span><span class='stopl' title='Bus Idle' id='"+result.markers[j].id+"markidle'>"+result.markers[j].idle_time+"</span></b>";
			window.bus_is_idle[j]=true;
		}
		else if(full==1 && result.markers[j].idle == 0){
			html = "<b id='"+result.markers[j].id+"mark' class='markerTitle' style='width:"+result.markers[j].lwidth+";'>"+result.markers[j].route+"<span>"+result.markers[j].description+"</span></b><hr class='markerhr'><b id='"+result.markers[j].id+"marklast' class='lastUpdatedHeading'><span style='margin:0;' id ='"+result.markers[j].id+"markspeed'>"+result.markers[j].speed+"</span><span><i id='"+result.markers[j].id+"markarr' class='fa fa-long-arrow-up "+result.markers[j].course_class+"'></i></span><span class='timel' id='"+result.markers[j].id+"marktime' >"+result.markers[j].lastupdated_time+"</span></b>";
			window.bus_is_idle[j]=false;
		}
		else{
			html = "<b id='"+result.markers[j].id+"mark' class='markerTitle' style='width:"+result.markers[j].lwidth+";'>"+result.markers[j].route+"<span>"+result.markers[j].description+"</span></b><hr class='markerhr'><b id='"+result.markers[j].id+"marklast' class='lastUpdatedHeading'><span style='margin:0;' id ='"+result.markers[j].id+"markspeed'>"+result.markers[j].speed+"</span></span><span><i id='"+result.markers[j].id+"markarr' class='fa fa-long-arrow-up "+result.markers[j].course_class+"'></i></span><span class='timel' id='"+result.markers[j].id+"marktime'>"+result.markers[j].lastupdated_time+"</span></b>";
			window.bus_is_idle[j]=false;
		}
		
		label=result.markers[j].description;
		point = new google.maps.LatLng(result.markers[j].lat,result.markers[j].lng);
		marker = createMarker(map,point,label,html,full,idle);
		window.marker_list[j]=marker;
	}
	
	update_rpanel();
	
	if(initialized_first == false){
		window.initialized_first = true;
		window.setTimeout(download_json, 3500);
	}
}

function update_rpanel(){
	
	for (var keys=0; keys<=25; ++keys) {
		var key = keys.toString();
		var temp_string = "";
		var t_string = "";
		if(bus_name_list[key]!=null ||bus_name_list[key]!=undefined){
			temp_string=key+"bus";
			if(document.getElementById(temp_string) !== null)
			{
				temp_string = "#"+key+"busnum";
				if(bus_count_list[key]==1)
					t_string = "&nbsp;"+bus_count_list[key].toString()+" Bus";
				else if(bus_count_list[key]>1 && bus_count_list[key]<10)
					t_string = "&nbsp;"+bus_count_list[key].toString()+" Buses";
				else
					t_string = bus_count_list[key].toString()+" Buses";
				$(temp_string).html(t_string);
			}
			else{
				if(bus_count_list[key]>10)
				temp_string='<div class="routelabel" id="'+key+'bus"> <p>'+bus_name_list[key]+'</p><p class="route hidden-xs hidden-sm">'+bus_code_list[key]+' Route</p><p class="buses hidden-xs hidden-sm" id="'+key+'busnum">'+bus_count_list[key]+' Buses</p></div>'
				else if(bus_count_list[key]>1)
				temp_string='<div class="routelabel" id="'+key+'bus"> <p>'+bus_name_list[key]+'</p><p class="route hidden-xs hidden-sm">'+bus_code_list[key]+' Route</p><p class="buses hidden-xs hidden-sm" id="'+key+'busnum">&nbsp;'+bus_count_list[key]+' Buses</p></div>'
				else
				temp_string='<div class="routelabel" id="'+key+'bus"> <p>'+bus_name_list[key]+'</p><p class="route hidden-xs hidden-sm">'+bus_code_list[key]+' Route</p><p class="buses hidden-xs hidden-sm" id="'+key+'busnum">&nbsp;'+bus_count_list[key]+' Bus</p></div>'
				$("#label-container").append(temp_string);
			}
		}
		else{
			t_string = key+"bus";
			temp_string="#"+t_string;
			if(document.getElementById(t_string))
			$(temp_string).remove();
		}
	}
}

function move_latlongs(){
	var temp_string = " Lastupdate: "+result.server_time;
	var t_string = "";
	var latlng;
	var mark_id;
	var new_html;
	
	window.ubus_count_list = []
	
	$("#lastupdate").text(temp_string);
	
	for(j=0; j<result.markers.length; ++j){
		if(marker_list[j]!=null){
			mark_id = result.markers[j].id
			latlng = new google.maps.LatLng(result.markers[j].lat, result.markers[j].lng);
			
			marker_list[j].setPosition(latlng);
			
			if(result.markers[j].display==1 || show_idle_buses==true)
			{
				if(ubus_count_list[result.markers[j].rid]==null ||ubus_count_list[result.markers[j].rid]==undefined){		
					window.ubus_count_list[result.markers[j].rid]=1;
				}
				else{
					window.ubus_count_list[result.markers[j].rid]+=1;
				}
			}
			
			if(result.markers[j].idle==1)
			{
				temp_string = "#"+mark_id+"marklast";
				if(bus_is_idle[j]==false){
					new_html = "<b id='"+result.markers[j].id+"mark' class='markerTitle' style='width:"+result.markers[j].lwidth+";'>"+result.markers[j].route+"<span>"+result.markers[j].description+"</span></b><hr class='markerhr'><b id='"+result.markers[j].id+"marklast' class='lastUpdatedHeading'><span style='margin:0;' id ='"+result.markers[j].id+"markspeed'>"+result.markers[j].speed+"</span><span><i id='"+result.markers[j].id+"markarr' class='fa fa-long-arrow-up "+result.markers[j].course_class+"'></i></span><span class='timel' id='"+result.markers[j].id+"marktime'>"+result.markers[j].lastupdated_time+"</span><span class='stopl' title='Bus Idle' id='"+result.markers[j].id+"markidle'>"+result.markers[j].idle_time+"</span></b>";
					window.bus_is_idle[j]=true;
					var check_map = marker_list[j].info.getMap();
					if(check_map == null){
						window.marker_list[j].info = new google.maps.InfoWindow({content:new_html});
					}
					else{
						marker_list[j].info.close();
						window.marker_list[j].info = new google.maps.InfoWindow({content:new_html});
						marker_list[j].info.open(map,marker_list[j]);
					}
					continue;
				}
				else{
					
					temp_string = "#"+mark_id+"markidle";
					$(temp_string).html(result.markers[j].idle_time);
				}
			}
			else{
				temp_string = "#"+mark_id+"markidle";
				if(bus_is_idle[j]==true){
					var check_map = marker_list[j].info.getMap();
					if(check_map == null){
						new_html = "<b id='"+result.markers[j].id+"mark' class='markerTitle' style='width:"+result.markers[j].lwidth+";'>"+result.markers[j].route+"<span>"+result.markers[j].description+"</span></b><hr class='markerhr'><b id='"+result.markers[j].id+"marklast' class='lastUpdatedHeading'><span style='margin:0;' id ='"+result.markers[j].id+"markspeed'>"+result.markers[j].speed+"</span><span><i id='"+result.markers[j].id+"markarr' class='fa fa-long-arrow-up "+result.markers[j].course_class+"'></i></span><span class='timel' id='"+result.markers[j].id+"marktime' >"+result.markers[j].lastupdated_time+"</span></b>";
						window.marker_list[j].info = new google.maps.InfoWindow({content:new_html});
					}
					else{
						marker_list[j].info.close();
						new_html = "<b id='"+result.markers[j].id+"mark' class='markerTitle' style='width:"+result.markers[j].lwidth+";'>"+result.markers[j].route+"<span>"+result.markers[j].description+"</span></b><hr class='markerhr'><b id='"+result.markers[j].id+"marklast' class='lastUpdatedHeading'><span style='margin:0;' id ='"+result.markers[j].id+"markspeed'>"+result.markers[j].speed+"</span><span><i id='"+result.markers[j].id+"markarr' class='fa fa-long-arrow-up "+result.markers[j].course_class+"'></i></span><span class='timel' id='"+result.markers[j].id+"marktime' >"+result.markers[j].lastupdated_time+"</span></b>";
						window.marker_list[j].info = new google.maps.InfoWindow({content:new_html});
						marker_list[j].info.open(map,marker_list[j]);
					}
					continue;
				}
				else{
					
				}
			}
			temp_string = "#"+mark_id+"marktime";
			//alert(temp_string);
			$(temp_string).html(result.markers[j].lastupdated_time);
			temp_string = "#"+mark_id+"markarr";
			t_string = "fa fa-long-arrow-up " + result.markers[j].course_class;
			$(temp_string).removeAttr("class").addClass(t_string);
			temp_string = "#"+mark_id+"markspeed";
			$(temp_string).html(result.markers[j].speed)
		}
	}
	
	for (var keys=0; keys<=25; ++keys) {
		var key = keys.toString();
		if(ubus_count_list[key]!=null ||ubus_count_list[key]!=undefined){
			if(ubus_count_list[key]!=bus_count_list[key])
			{
				initialize_latlongs();
				break;
			}
		}
	}
}


function update_latlongs(){
	
	var point=0;
	var i=0;


function delayedLoop()
{

  if(i>20){return;}

  full=0;

   if(full==1)
   {

     var html = result.markers[i].description.concat(result.markers[i].lat, result.markers[i].lng,
      "<br><b class='lastUpdatedHeading'>Last updated:</b><span class='lastUpdatedTime'>",result.markers[i].lastupdated,
      "<br>Bus Full !","</span>");
   }

   else{

   var html=result.markers[i].description.concat("<br><b class='lastUpdatedHeading'>Last updated : </b><span class='lastUpdatedTime'>",
    result.markers[i].lastupdated,"</span>");
     }


  lats[i]=result.markers[i].lat;
  lngs[i]=result.markers[i].lng;
des[i]=result.markers[i].description;
  label=result.markers[i].description;
    point = new google.maps.LatLng(lats[i],lngs[i]);
    marker = createMarker(map,point,label,html,full);
   i++;


  window.setTimeout(delayedLoop, 1000);

//clearMarkers();

}

delayedLoop();



}

function allbuses(){

for(i=0;i<des.length;i++)

document.getElementById("all").innerHTML=des[i];

}


</script>

<script>
var selected_label = "0";

function idIsHovered(id){
    return $("#" + id + ":hover").length > 0;
}

$( document ).ready(function() {
  
	$("#label-container").on('click','.routelabel',function() {
		var label_id = $(this).attr("id");
		if(selected_label!="0"){
			$("#"+selected_label).addClass("routelabel");
			$("#"+selected_label).removeClass("label-highlited");
		}
		if(selected_label!=label_id){
			$("#"+label_id).addClass("label-highlited");
			$("#"+label_id).removeClass("routelabel");
			window.selected_label = label_id;
		}
		else{
			window.selected_label = "0";
		}
		initialize_latlongs();
	});
	
	
	$("#label-container").on('click','.label-highlited',function() {
		var label_id = $(this).attr("id");
		$("#"+label_id).addClass("routelabel");
		$("#"+label_id).removeClass("label-highlited");
		window.selected_label = "0";
		initialize_latlongs();
	});
	
	$(".tag0").mouseenter(function(){
		$(".phones").show();
		$(".phones").animate({
			width:'70px',
		});
	});
	$(".tag0").mouseleave(function(){
		$(this).css({"top":0,"background-color":"white", "color":"#36aad9","border-bottom":"1px solid #CCCCCC"});
		setTimeout(function(){
			if(!idIsHovered("phone-div")){
				$(".phones").animate({
					width:'0px',
					speed:10,
				},function(){
					$(".phones").hide();
					$(".tag0").removeAttr( 'style' );
				});
			}
		}, 100);
	});
	$(".phones").mouseleave(function(){
		setTimeout(function(){
			if(!idIsHovered("mobile-logo")){
				$(".phones").animate({
					width:'0px',
					speed:10,
				},function(){
					$(".phones").hide();
					$(".tag0").removeAttr( 'style' );
				});
			}
		}, 50);
	});
	
	$(".onoffswitch-label").click(function(){
		if(show_idle_buses==1)
		window.show_idle_buses=0;
		else
		window.show_idle_buses=1;
		initialize_latlongs();
	});

});
</script>
</body>

</html>