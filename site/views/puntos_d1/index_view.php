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


<!--Fin Geolocalizacion-->
<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false&v=3.exp"> </script>

<?php 
		$data = new Spreadsheet_Excel_Reader();
		$objFunct = new objFunction(); 
		//$data->setOutputEncoding('CP1251');
		$data->setOutputEncoding('UTF-8');
		$data->read(APPPATH.'views/inc/d1_tiendas.xls');
		error_reporting(E_ALL ^ E_NOTICE);
		//*************************************************************//
		// INICIO DE LAS CIUDADES ///
		$numFile = 	@$data->sheets[0]['numRows'];
		$numColum = @$data->sheets[0]['numCols'];
		$objExcel = @$data->sheets[0]['cells'];
		
		if ($numFile==null){
			echo ''; 
		}else{
			$temSw=0;
			echo '<script type="text/javascript"> var places = [';
			$variable="";
			for ($i = 2; $i <= $numFile; $i++) {
				if (@$objExcel[$i][5]=="1"){
					$strCiudad = $objFunct->suprimirTexto(@$objExcel[$i][1]);
					$strCiudad = $objFunct->_convert(@$strCiudad);
					
					$strLat = $objFunct->suprimirTexto(@$objExcel[$i][3]);
					$strLat = $objFunct->_convert(@$strLat);
					
					$strLong = $objFunct->suprimirTexto(@$objExcel[$i][4]);
					$strLong = $objFunct->_convert(@$strLong);
					
					$temSw++;
					$variable .= '{"place":"'.$strCiudad.'", "lat": "'.$strLat.'", "long": "'.$strLong.'"},'; 
				}
			}
			echo substr($variable,0,(strlen($variable)-1)).']; </script>';
		}
		// FIN DE LAS CIUDADES ///
		//***********************************************************************//
		
		$numFile = 	@$data->sheets[1]['numRows'];
		$numColum = @$data->sheets[1]['numCols'];
		$objExcel = @$data->sheets[1]['cells'];
		
		if ($numFile==null){
			echo ''; 
		}else{
			$temSw=0;
			echo '
			<script type="text/javascript"> 
			var myJSONObject = [';
			$variable ="";
			for ($i = 2; $i <= $numFile; $i++) {
				if (@$objExcel[$i][6]==1){
					$strLong = $objFunct->suprimirTexto(@$objExcel[$i][2]);
					$strLong = $objFunct->_convert(@$strLong);
					
					$strLat = $objFunct->suprimirTexto(@$objExcel[$i][3]);
					$strLat = $objFunct->_convert(@$strLat);
					
					$strImg = $objFunct->suprimirTexto(@$objExcel[$i][4]);
					$strImg = $objFunct->_convert(@$strImg);
					
					$strMuni = $objFunct->suprimirTexto(@$objExcel[$i][4]);
					$strMuni = $objFunct->_convert(@$strMuni);
					
					$strTitle = $objFunct->suprimirTexto(@$objExcel[$i][9]);
					$strTitle = $objFunct->_convert(@$strTitle);
					
					$strDesc = $objFunct->suprimirTexto(@$objExcel[$i][10]);
					$strDesc = $objFunct->_convert(@$strDesc);
					
					$temSw++;
					$variable .= '
					{"lon":'.@$strLong.',"lat":'.@$strLat.',"img":"'.@$strImg.'","desc":"'.@$strTitle.'\u003cbr\u003e'.@$strDesc.'","muni":"'.@$strMuni.'"},
					';
				}

			}
			echo substr($variable,0,(strlen($variable)-1)).'];
			 console.log(JSON.stringify(myJSONObject));

			</script>';
		}
?>

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
			streetViewControl: false,
			overviewMapControl: false,

			//Fin de controles
			scaleControlOptions: {
				position: google.maps.ControlPosition.RIGHT_CENTER
			},
			zoomControlOptions: {
				style: google.maps.ZoomControlStyle.SMALL
				//position: google.maps.ControlPosition.TOP_CENTER
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
					icon: '<?=$template;?>images/supermarket.png',
				    draggable:true,
				    animation: google.maps.Animation.DROP,
    
                   
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


	<div id="wrapper">
    	<div class="places-select">
    		<div class="places-content">
    			<div class="places-showhide"><a href="#!" onclick="$('.places-list').toggle();">Selecciona localidad</a></div>
				<div class="places-list" style="display:block;"></div>
				<div class="places-showhide-bottom">&nbsp;</div>
    		</div>


    	</div>
        <div id="content" style="margin-bottom:5px">
			<div id="map" class="banner-item" style="width:100%; height:600px;"></div>
	    </div>	
        <!-- End Content --> 
       <div id="push">&nbsp;</div>
    </div>
    <!--End wrapper--> 
</body>
</html>