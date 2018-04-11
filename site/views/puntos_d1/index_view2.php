<?php include(APPPATH.'views/inc/head.php');
include_once (APPPATH.'views/inc/Excel/reader.php');
include_once (APPPATH.'views/inc/obj-function.php');
?>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<style type="text/css">
  html { height: 100% }
  body { height: 100%; margin: 0px; padding: 0px }
  #map { height: 100% }
</style>

<!--Geolocalizacion html5-->
<script type="text/javascript">
if (navigator.geolocation) 
	{ var tiempo_de_espera = 3000; navigator.geolocation.getCurrentPosition(mostrarCoordenadas, mostrarError, { enableHighAccuracy: true, timeout: tiempo_de_espera, maximumAge: 0 } ); } 
  else { alert("La Geolocalización no es soportada por este navegador"); } 
  function mostrarCoordenadas(position) { 
  	 alert("Latitud: " + position.coords.latitude + ", Longitud: " + position.coords.longitude); } 
  function mostrarError(error) { 
  	var errores = {1: 'Permiso denegado', 2: 'Posición no disponible', 3: 'Expiró el tiempo de respuesta'}; 
  	alert("Error: " + errores[error.code]); } 
  </script> 

<!--Fin Geolocalizacion-->





<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false&v=3.exp"> </script>



<script type="text/javascript">
<!--
	var MapStyles = [
		{
			featureType: "all",
			stylers: [
				{ saturation: -90 }
			]
		}
	];

	var places = [{"place":"bogota", "lat": "4.598056", "long": "-74.075833"}];
	var myJSONObject = [{"lon":'-74.10331514340159',"lat":'4.704428420746854',"img":"test.jpg","desc":"Cerezos \u003cbr\u003e Carrera 89A No. 80-63"}];

	var MapTypeColor = new google.maps.StyledMapType(MapStyles ,{name: "ANDIw"});
	var map;
	var MyLat = new google.maps.LatLng(4.598056, -74.075833);

		function initialize() {
		var myOptions = {
			zoom: 12,
			center: MyLat,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			disableDefaultUI: true,//interfaz por defecto sin nada
			//Controles
			scrollwheel: false,
			panControl: true,
			zoomControl: true,
			mapTypeControl: false,
			scaleControl: true,
			streetViewControl: true,
			overviewMapControl: false,
			//Fin de controles
			scaleControlOptions: {
				position: google.maps.ControlPosition.RIGHT_CENTER
			},
			zoomControlOptions: {
				style: google.maps.ZoomControlStyle.SMALL
				position: google.maps.ControlPosition.TOP_CENTER
			},
			mapTypeControlOptions: {
				style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
				//style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
				//style: google.maps.MapTypeControlStyle.DEFAULT
				//mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'color_maps']// listado de mapas de google
				position: google.maps.ControlPosition.BOTTOM_CENTER,
				mapTypeIds: ['color_maps']// listado de mapas de google
			}
			
			
			
			
		};
		// CREA EL OBJETO MAPA
		map = new google.maps.Map(document.getElementById("map"), myOptions);
		
		// ASOCIA EL TIPO DE COLOR DE MAPA A NOMBRE DEL MAPA ASIGNADO EN EL MAPATYPE ID
		map.mapTypes.set('color_maps', MapTypeColor);
		map.setMapTypeId('color_maps');
		
		//AGREGAR PUNTOS
		loadMarkers(myJSONObject, 'success', 0);
	}

	var geocoder;
	var markerNew = 1;
	var marker;
	var markersArray = [];
	var infowindow;
	
	function clearMarkers() {
		if (markersArray) {
			for (i in markersArray) {
				markersArray[i].setMap(null);
			}
			markersArray = [];
		}
	}
	
	function loadMarkers(data, textStatus, jqXHR){
		//alert(textStatus);
		if (textStatus == "success") {
			clearMarkers();
			for (i in data) {
				var marker = new google.maps.Marker({
					map: map,
					position: new google.maps.LatLng(data[i].lat, data[i].lon),
					icon: '<?=$template;?>images/supermarket.png'
				});
				marker.setTitle('Punto ['+i.toString()+']');//mouse
				addInfo(marker, i, data[i]);//mensaje
			}
		} else {
			alert("Ha ocurrido un error al intentar obtener los marcadores para el programa. Por favor vuelva a intentarlo.");
		}
	}

	function addInfo(marker, number, info){
		desc = info.desc.split('<br>');
		lat = info.lat;
		lon =info.lon;

		contenido ='<div class="c-coffe bold">'+desc[0]+'</div><div class="c-green">'+desc[1]+'</div>';
		listado = '<div class="c-coffe bold">'+desc[0]+'</div><div class="c-green">'+desc[1]+'</div><a href="#!" onclick="getPoint('+lat+','+lon+')">Ver mapa</a><br> ';
		//contenido += '<div class="c-coffe bold margin-top-20">Ubicaci&oacute;n del punto:</div><div class="c-green"></div>';
		//contenido += '<div class="margin-top-20" style="text-align:center;"><a href="#!"><img src="<?=$template;?>images/verfotos.png" alt="Ver Fotos"></a></div>';
		var infowindow = new google.maps.InfoWindow({ 
			content: contenido,
			size: new google.maps.Size(200,100)
			});
		google.maps.event.addListener(marker, 'click', function() {
			infowindow.open(map,marker);
		});

		$('.point-list').append(listado);

	}
	
	function getPlace(lat,lng){        
		var latLong = new google.maps.LatLng(lat, lng);
		map.setCenter(latLong);
		map.setZoom(12);
		$('.places-list').toggle();
	}

	function getPoint(lat,lng){        
		var latLong = new google.maps.LatLng(lat, lng);
		map.setCenter(latLong);
		map.setZoom(12);
		$('.point-list').toggle();
	}

	

$(window).load(function(){

alert('farlo');	
	$(places).each(function(){
		site = this;
		link = '<a href="#!" onclick="getPlace('+site.lat+','+site.long+')">'+site.place+'</a>';
		$('.places-list').append(link);
	});
});


//-->	
</script>
</head><!--fin head-->
<body id="<?=$body_id?>" onload="initialize();">
	
	<?php /* <script>
		//,{"lon":-75.698066,"lat":4.813505,"img":"lorem.jpg","desc":"Fundación Universitaria del Area Andina Seccional Pereira \u003cbr\u003e Calle 24 No 8-55"}
		document.write('<pre>');
		for (var i=0;i<=myJSONObject.length;i++){		
			var substr = myJSONObject[i]["desc"].split('<br>');
			document.write('<br/>'+substr[1]);
			//document.write('<br/>'+myJSONObject[i]["desc"]);
		}
		document.write('</pre>');
	</script> */ ?>

	<div id="wrapper">
    	<div class="places-select">
    		<div class="places-content">
    			<div class="places-showhide"><a href="#!" onclick="$('.places-list').toggle();">Selecciona tu Ciudad</a></div>
				<div class="places-list" style="display:block;"></div>
				<div class="places-showhide-bottom">&nbsp;</div>
    		</div>


    	</div>
        <div id="content" style="margin-bottom:5px">
			<div id="map" class="banner-item" style="width:100%; height:600px;"></div>
	    </div>	
        <!-- End Content --> 
       <div id="push">&nbsp;</div>
       
       <!--lista de puntos-->
      
        <div class="point-select">
    		<div class="point-content">
    			<div class="places-showhide"><a href="#!" onclick="$('.point-list').toggle();">Puntos de venta</a></div>
				<div class="point-list" style="display:block;"></div>
				<div class="places-showhide-bottom">&nbsp;</div>
    		</div>
        </div>


    </div>
    <!--End wrapper--> 
</body>
</html>