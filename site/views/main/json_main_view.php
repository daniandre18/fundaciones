<?php include(APPPATH.'views/inc/head.php');?>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<style type="text/css">
  html { height: 100% }
  body { height: 100%; margin: 0px; padding: 0px }
  #map { height: 100% }
</style>
<!--
<script type="text/javascript" src="https://maps.google.com/maps/api/js?v=3.8&libraries=geometry&sensor=true&language=es&region=CO"> </script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.5.js"> </script>
-->
<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"> </script>
<script type="text/javascript">
<!--
	var places = [
	{"place":"Barranquilla", "lat": "10.97787", "long": "-74.803764"}
	,{"place":"Bogotá", "lat":"4.598265", "long":"-74.075335"}
	,{"place":"Bucaramanga", "lat":"7.109081", "long": "-73.119881"}
	//,{"place":"Buenaventura","lat":"3.886611", "long":"-77.070229"}
	//,{"place":"Cajicá", "lat":"4.920434", "long":"-74.027161"}
	//,{"place":"Cali", "lat":"3.420556", "long":"-76.522222"}
	,{"place":"Cartagena", "lat":"10.387337", "long":"-75.519663"}
	,{"place":"Chía", "lat":"4.85", "long":"-74.05"}
	//,{"place":"Cota", "lat":"4.809568", "long":"-74.098129"}
	//,{"place":"Envigado", "lat":"6.166667", "long":"-75.566667"}
	//,{"place":"Facatativá", "lat":"4.815029", "long":"-74.356468"}
	//,{"place":"Funza", "lat":"4.716667", "long":"-74.216667"}
	//,{"place":"Guayabal", "lat":"6.198562", "long":"-75.584433"}
	//,{"place":"Itagüí", "lat":"6.176627", "long":"-75.612701"}
	//,{"place":"Jamundi", "lat":"3.266667", "long":"-76.55"}
	//,{"place":"Madrid", "lat":"4.761294", "long":"-74.276619"}
	,{"place":"Manizales", "lat":"5.06798", "long":"-75.51738"}
	,{"place":"Medellín", "lat":"6.235925", "long":"-75.575137"}
	//,{"place":"Mosquera", "lat":"4.707778", "long":"-74.232778"}
	//,{"place":"Palmira", "lat":"3.583333", "long":"-76.25"}
	,{"place":"Pereira", "lat":"4.81429", "long":"-75.69464"}
	//,{"place":"Rionegro", "lat":"6.155", "long":"-75.388889"}
	//,{"place":"Sabaneta", "lat":"6.15", "long":"-75.6"}
	//,{"place":"San Andrés y Providencia", "lat":"12.556732", "long":"-81.718525"}
	//,{"place":"San Juan", "lat":"6.24931", "long":"-75.59027"}
	//,{"place":"Santa Marta", "lat":"11.234016", "long":"-74.195011"}
	//,{"place":"Soacha", "lat":"4.583333", "long":"-74.216667"}
	//,{"place":"Tocancipa", "lat":"4.966667", "long":"-73.916667"}
	//,{"place":"Yumbo" , "lat":"3.585", "long":"-76.4958"}
	//,{"place":"Zipaquirá", "lat":"5.027352", "long":"-74.009689"}
	];
	
	var MapStyles = [
		{
			featureType: "all",
			stylers: [
				{ saturation: -90 }
			]
		}
	];
  
	var MapTypeColor = new google.maps.StyledMapType(MapStyles ,{name: "ANDI"});
	var map;
	var MyLat = new google.maps.LatLng(4.598056, -74.075833);
	var myJSONObject = [
	
	//bogota
	{"lon":-74.13200999999998,"lat":4.6638000000000011,"img":"lorem.jpg","desc":"Centro Comercial Hayuelos \u003cbr\u003e Calle 20 No 82-52 "}
	,{"lon":-74.029209796295163,"lat":4.7154718287868693,"img":"lorem.jpg","desc":"Centro Comercial Palatino \u003cbr\u003e Carrera 7 No 138-33"}
	,{"lon":-74.05775,"lat":4.66528,"img":"lorem.jpg","desc":"Centro de Alta Tecnología \u003cbr\u003e Carrera 15 No 77-05/59"}
	,{"lon":-74.042750000000012,"lat":4.70288,"img":"lorem.jpg","desc":"Centro Comercial Unicentro \u003cbr\u003e Carrera 15 No 124-30"}
	,{"lon":-74.07555259999998,"lat":4.626571,"img":"lorem.jpg","desc":"RCN Radio \u003cbr\u003e Calle 37 No 13A-19"}
	,{"lon":-74.108848033837887,"lat":4.6550104275319075,"img":"lorem.jpg","desc":"Maloka \u003cbr\u003e Carrera 68D No  24A-51"}
	,{"lon":-74.0944131,"lat":4.5856368,"img":"lorem.jpg","desc":"Secretaria Distrital de Ambiente\u003cbr\u003e Avenida Caracas No 54-38"}
	//,{"lon":-74.06556487083435,"lat":4.641755436753244,"img":"lorem.jpg","desc":"Secretaria Distrital de Ambiente \u003cbr\u003e Avenida Caracas No 54-38"}
    ,{"lon":-74.05479446053505,"lat":4.6746590204866285,"img":"lorem.jpg","desc":"Rayovac-Varta S.A. \u003cbr\u003e Carrera 17 No 89-40"}
	,{"lon":-74.051306,"lat":4.684561,"img":"lorem.jpg","desc":"Eveready de Colombia S.A.\u003cbr\u003e Transversal 18 No 96-41 Piso 8"}
	//,{"lon":-74.0350091457367,"lat":4.691650224651214,"img":"lorem.jpg","desc":"Teleport Business Park \u003cbr\u003e Calle 113 No 7- 45 Torre B"}
	,{"lon":-74.027317,"lat":4.769212,"img":"lorem.jpg","desc":"Teleport Business Park \u003cbr\u003e Calle 113 No 7-45 Torre B"}
	,{"lon":-74.116452,"lat":4.650471,"img":"lorem.jpg","desc":"Open Market Ltda\u003cbr\u003e Carrera 69 No  21-63"}
	,{"lon":-74.041394174499487,"lat":4.7022421899709537,"img":"lorem.jpg","desc":"Pepe Ganga Unicentro\u003cbr\u003eAv. Carrera  15 No. 127-30  L-1-196"}
	,{"lon":-74.0778803,"lat":4.6228636,"img":"lorem.jpg","desc":"Pepe Ganga Gran Estación \u003cbr\u003eAV. Calle 26 No 62-47 Piso 2, L-225-226"}
	//,{"lon":-74.10150110721588,"lat":4.647679692463634,"img":"lorem.jpg","desc":"Pepe Ganga Gran Estación \u003cbr\u003e AV. Calle 26 No 62-47 Piso 2, L-225-226"}
	,{"lon":-74.04145,"lat":4.7603193,"img":"lorem.jpg","desc":"Pepe Ganga Santafe\u003cbr\u003eCalle 183 No 45-03 L-132-133  "}
	,{"lon":-74.138252500000021,"lat":4.5758473,"img":"lorem.jpg","desc":"Pepe Ganga CC. Tunal \u003cbr\u003eCarrera 24C No 48 -94 Sur L-1-115"}
	,{"lon":-74.064212227075188,"lat":4.6880608180256,"img":"lorem.jpg","desc":"Carrefour Iserra 100\u003cbr\u003eCarrera 94 A No 98 A-51 L-102"}
	,{"lon":-74.067099999999982,"lat":4.72185,"img":"lorem.jpg","desc":"Carrefour CC. Bulevar \u003cbr\u003e AV. Carrera 58 No 127-59 L-104"}
	//,{"lon":-74.07066106796265,"lat":4.712078686202863,"img":"lorem.jpg","desc":"Carrefour CC. Bulevar \u003cbr\u003e AV. Carrera 58 No 127-59 L-104"}
	,{"lon":-74.0899209534424,"lat":4.6180206708230394,"img":"lorem.jpg","desc":"Carrefour Carrera 30 \u003cbr\u003eCarrera 32 No 17 B-04"}
	,{"lon":-74.14024999999998,"lat":4.63913,"img":"lorem.jpg","desc":"Carrefour Banderas \u003cbr\u003e AV. de Las Américas con Carrera 76"}
	,{"lon":-74.134150891571039,"lat":4.6022894689182214,"img":"lorem.jpg","desc":"Carrefour Alquería \u003cbr\u003e Avenida 68 con Calle 38 Sur"}
	,{"lon":-74.0997097645569,"lat":4.5692125270644963,"img":"lorem.jpg","desc":"Carrefour 20 de Julio \u003cbr\u003eCarrera 10 No 30 B-20 Sur"}
	,{"lon":-74.15265671435543,"lat":4.6813616121762838,"img":"lorem.jpg","desc":"Carrefour Fontibón\u003cbr\u003eCalle 17 No 112-58"}
	,{"lon":-74.0464815291748,"lat":4.7624228080002666,"img":"lorem.jpg","desc":"Carrefour CC. Santafe\u003cbr\u003eCalle 185 No 45-03 L-167"}
	,{"lon":-74.0433802,"lat":4.8642387,"img":"lorem.jpg","desc":"Carrefour Chía\u003cbr\u003eAV. Pradilla No 2 E-50"}
	,{"lon":-74.046285111083876,"lat":4.7489147279763761,"img":"lorem.jpg","desc":"Panamericana Calle 170 \u003cbr\u003e Autopista Norte No 168-30"}
	,{"lon":-74.124156082617219,"lat":4.5922863643416232,"img":"lorem.jpg","desc":"Panamericana Centro Mayor \u003cbr\u003e Carrera 38A No 34D-50 L-1-096"}
	,{"lon":-74.085605110742165,"lat":4.6796291357026,"img":"lorem.jpg","desc":"Alkosto Avenida 68 \u003cbr\u003e AK 68 No 72-43"}
	,{"lon":-74.139898949243161,"lat":4.5959843596207044,"img":"lorem.jpg","desc":"Alkosto Venecia \u003cbr\u003e fDiagonal 44 No 51-90 Sur"}
	,{"lon":-74.046964232263178,"lat":4.7560400999846166,"img":"lorem.jpg","desc":"Homecenter Auto Norte \u003cbr\u003e Autopista Norte No 175-50."}
	//,{"lon":-75.60402049999999,"lat":6.2338955,"img":"lorem.jpg","desc":"Homecenter C.C Molinos \u003cbr\u003e Calle 31 A Carrera 82"}
	,{"lon":-74.080802818774487,"lat":4.6840720479869455,"img":"lorem.jpg","desc":"Homecenter Calle 80 \u003cbr\u003e Avenida 68 No 80-70"}
	,{"lon":-74.136615925408933,"lat":4.6180357417775468,"img":"lorem.jpg","desc":"Sao Plaza de las Américas \u003cbr\u003e Transversal 64 A No 26-50 Sur"}
	,{"lon":-74.1115059,"lat":4.7115713,"img":"lorem.jpg","desc":"Sao Portal 80 \u003cbr\u003e Transversal 100A No 79-20 "}
	,{"lon":-74.040625342419446,"lat":4.771511768111834,"img":"lorem.jpg","desc":"Makro Cumara \u003cbr\u003e Calle 192 No 19-12"}
	,{"lon":-74.153060669805882,"lat":4.5977474096770106,"img":"lorem.jpg","desc":"Makro Villa del Rio \u003cbr\u003e Carrera 63 No 57G -47 Sur"}
	,{"lon":-74.097213100585918,"lat":4.7486239937017904,"img":"lorem.jpg","desc":"Éxito Suba \u003cbr\u003e Calle 145 No 105B-58"}
	,{"lon":-74.064367341461264,"lat":4.7341796789910688,"img":"lorem.jpg","desc":"Éxito Colina \u003cbr\u003e AV. Boyaca Carrera 72 No 146 B"}
	//,{"lon":-74.06566679477692,"lat":4.734201268323609,"img":"lorem.jpg","desc":"Éxito Colina \u003cbr\u003e AV. Boyacá Carrera 72 No 146 B"}
	,{"lon":-74.044892003088364,"lat":4.7546233729529819,"img":"lorem.jpg","desc":"Éxito Calle 170 \u003cbr\u003e Calle 175 No 22-13."}
	,{"lon":-74.080533873910554,"lat":4.6838906957007671,"img":"lorem.jpg","desc":"Éxito Calle 80 \u003cbr\u003e Carrera 59 A No 79-30."}
	//,{"lon":-74.0755695104599,"lat":4.677268143472074,"img":"lorem.jpg","desc":"Éxito Calle 80 \u003cbr\u003e Carrera 59 A No 79-30"}
	,{"lon":-74.153147193145742,"lat":4.6723341263378471,"img":"lorem.jpg","desc":"Éxito Fontibón \u003cbr\u003e AV. Centenario No 106-104."}
	,{"lon":-74.1242950050293,"lat":4.6304904199075745,"img":"lorem.jpg","desc":"Éxito Americas \u003cbr\u003e AV. Americas No 68A-94."}
	,{"lon":-74.034294023529014,"lat":4.712508695047422,"img":"lorem.jpg","desc":"Éxito Country \u003cbr\u003e Calle 134  No 14- 5"}
	,{"lon":-74.1243475220154,"lat":4.5920960093054122,"img":"lorem.jpg","desc":"Éxito CC. Centro Mayor \u003cbr\u003e Autopista Sur 38 A-07."}
	,{"lon":-74.074443728125,"lat":4.6864774395338173,"img":"lorem.jpg","desc":"Éxito Floresta \u003cbr\u003e AK 68 No 90-88."}
	,{"lon":-74.065882742050178,"lat":4.6400221407509452,"img":"lorem.jpg","desc":"Éxito Chapinero \u003cbr\u003e Calle 52 No 13-70."}
	,{"lon":-74.109945518493646,"lat":4.5983127878006709,"img":"lorem.jpg","desc":"Éxito Ciudad Montes \u003cbr\u003e Diagonal 17 Sur No 32-40."}
	,{"lon":-74.108826769741825,"lat":4.6977205542824834,"img":"lorem.jpg","desc":"Éxito Zarzamora \u003cbr\u003e Calle 72 No 90-55."}
	,{"lon":-74.0872291,"lat":4.567851,"img":"lorem.jpg","desc":"Éxito 20 de Julio \u003cbr\u003e Calle 21 Sur No 5A-34."}
	,{"lon":-74.034777743811048,"lat":4.718148908668879,"img":"lorem.jpg","desc":"Carulla Calle 140 \u003cbr\u003e Carrera 11 No 140-29."}
	,{"lon":-74.05095219612122,"lat":4.6494387804670465,"img":"lorem.jpg","desc":"Colegio Nueva Granada \u003cbr\u003e Carrera 2 Este No 70-20"}
	,{"lon":-74.0414478010498,"lat":4.702647764516235,"img":"lorem.jpg","desc":"Centro Comercial Unicentro 2 \u003cbr\u003e Carrera 15 No 124-30"}
	,{"lon":-74.13109084655764,"lat":4.6636390801369787,"img":"lorem.jpg","desc":"Centro Comercial Hayuelos 2 \u003cbr\u003e Calle 20 No 82-52 "}//bogota
	,{"lon":-74.029195049649047,"lat":4.7154158626251288,"img":"lorem.jpg","desc":"Centro Comercial Palatino 2 \u003cbr\u003e Carrera 7 No 138-33"}
	,{"lon":-74.134977320098869,"lat":4.6186316400987151,"img":"lorem.jpg","desc":"Centro Comercial Plaza de Las Americas 1 \u003cbr\u003e Transversal 71D No 26-94 Sur"}
	,{"lon":-74.135063150787346,"lat":4.6188241320151295,"img":"lorem.jpg","desc":"Centro Comercial Plaza de las Americas 2 \u003cbr\u003e Transversal 71D No 26-94 Sur"}
	,{"lon":-74.045264999999972,"lat":4.7229731,"img":"lorem.jpg","desc":"Foto Japón Cedritos \u003cbr\u003eCalle 140 No. 18A-70"}
	,{"lon":-74.049701878672408,"lat":4.6807725654426759,"img":"lorem.jpg","desc":"Foto Japón Calle 94\u003cbr\u003eCRA 15 No. 95-98"}
	,{"lon":-74.058259466534423,"lat":4.66478493134076,"img":"lorem.jpg","desc":"Foto Japón Unilago\u003cbr\u003eCr.15 No. 77-05 L-262,263"}
	,{"lon":-74.071628199999964,"lat":4.6055036,"img":"lorem.jpg","desc":"Foto Japón Calle 19\u003cbr\u003eCalle 19 No. 7-16"}
	,{"lon":-74.056824068908725,"lat":4.6560468303672868,"img":"lorem.jpg","desc":"Foto Japón Calle 72\u003cbr\u003eCalle 72 No. 9-23"}
	,{"lon":-74.032401899999968,"lat":4.6950723,"img":"lorem.jpg","desc":"Foto Japón Usaquén\u003cbr\u003eCr. 7 No. 117-60"}
	,{"lon":-74.1475504,"lat":4.6345472999999986,"img":"lorem.jpg","desc":"Foto Japón Kennedy 1 \u003cbr\u003e CAL 37 No. 78G-17 SUR"}
	,{"lon":-74.036674785614025,"lat":4.8665913293301362,"img":"lorem.jpg","desc":"Foto Japón Centro Comercial Centro Chía \u003cbr\u003e Centro Comercial Centro Chía L-1040 Av. Pradilla 900 Este"}
	,{"lon":-74.036567497253429,"lat":4.8659499195514755,"img":"lorem.jpg","desc":"Carulla Centro Chía \u003cbr\u003e Avenida pradilla 900 Este Centro Comercial Chía Local 1029 / 31"}
	,{"lon":-74.106264739855988,"lat":4.6561489573389441,"img":"lorem.jpg","desc":"Edificio Torre Central \u003cbr\u003eCra 68 D No. 25 B - 86"}
	,{"lon":-74.070672014819365,"lat":4.6161205138493777,"img":"lorem.jpg","desc":"Edificio Centro de Comercio Internacional \u003cbr\u003eCalle 28 No. 13 A - 15"}
	,{"lon":-74.0702864917572,"lat":4.6108886519509058,"img":"lorem.jpg","desc":"Torre Colpatria \u003cbr\u003e Carrera 7 No 24 - 84"}
	,{"lon":-74.03838780000001,"lat":4.6909618,"img":"lorem.jpg","desc":"Torre Empresarial Pacific\u003cbr\u003eCalle 110 No. 9 -25 "}
	,{"lon":-74.097,"lat":4.6417,"img":"lorem.jpg","desc":"Secretaria del ambiente - Gobernación de Cundinamarca \u003cbr\u003e AV.DORADO • 51-53 Torre Beneficencia - Piso 3 "}
	,{"lon":-74.044264,"lat":4.733969,"img":"lorem.jpg","desc":"Colegios Anglo Colombiano \u003cbr\u003e AV. 19 No. 152A - 48"}
	,{"lon":-74.075998,"lat":4.714921,"img":"lorem.jpg","desc":"Colegio Helvetia de Bogotá \u003cbr\u003e Calle 128 No 71 A 91"}
	,{"lon":-74.051116,"lat":4.80098,"img":"lorem.jpg","desc":"Colegio Nueva York \u003cbr\u003e Calle 222 No. 49 - 64 Urbanización El Jadín"}
	//,{"lon":-74.04014557600021,"lat":4.79787591532682,"img":"lorem.jpg","desc":"Colegio Nueva York \u003cbr\u003e Calle 222 N49 -64 Urbanización El Jadín"}
	,{"lon":-74.056543,"lat":4.658238,"img":"lorem.jpg","desc":"Colegio Gimnasio Moderno \u003cbr\u003e Calle 74 No 9-99"}
	,{"lon":-74.087092,"lat":4.617348,"img":"lorem.jpg","desc":"La 14 Sede Bogotá 1 \u003cbr\u003e Av. Calle 19 No. 28 – 80 Paloquemado"}
	,{"lon":-74.114703,"lat":4.723033,"img":"lorem.jpg","desc":"Centro Comercial Unicentro de Occidente \u003cbr\u003e Carrera 111 C No. 86-05"}
	,{"lon":-74.081912,"lat":4.628795,"img":"lorem.jpg","desc":"Contraloría De Bogotá \u003cbr\u003e Carrera 32 A No 26 A 10"}
    ,{"lon":-74.155374,"lat":4.671803,"img":"lorem.jpg","desc":"Zona Franca Fontibón 1 \u003cbr\u003e Carrera 106 No. 15-25"}
	,{"lon":-74.155374,"lat":4.671803,"img":"lorem.jpg","desc":"Zona Franca Fontibón 2 \u003cbr\u003e Carrera 106 No. 15-25"}
    ,{"lon":-74.14347,"lat":4.58134,"img":"lorem.jpg","desc":"GM-General Motors Colombia \u003cbr\u003e Av Boyacá No. 32-1 a 32-99"}//sin direccion en el pdf
	,{"lon":-74.109438,"lat":4.65326,"img":"lorem.jpg","desc":"Centro Comercial Salitre Plaza \u003cbr\u003e Carrera 68 B No. 24-39"}
	,{"lon":-74.074308,"lat":4.64287,"img":"lorem.jpg","desc":"Centro Comercial Galerias \u003cbr\u003e Calle 53 B No 25 21"}	
	,{"lon":-74.070691,"lat":4.614556,"img":"lorem.jpg","desc":"Superintendencia de Industria y Comercio \u003cbr\u003e Carrera 13 No. 27 - 00 piso 3"}
	,{"lon":-74.09321,"lat":4.752262,"img":"lorem.jpg","desc":"Office Depot Suba \u003cbr\u003e AV CRA 104 No 152-A-65"}
	,{"lon":-74.048863,"lat":4.698298,"img":"lorem.jpg","desc":"Office Depot Pepe Sierra \u003cbr\u003e Calle 116 No 18-B-68"}
	,{"lon":-74.035196,"lat":4.76896,"img":"lorem.jpg","desc":"Colegio San Carlos \u003cbr\u003e Calle 192 No 9-45"}
	,{"lon":-74.085666,"lat":4.738157,"img":"lorem.jpg","desc":"Foto Japón Suba \u003cbr\u003e Carrera 92 No. 145-03"}
	,{"lon":-74.060956,"lat":4.726685,"img":"lorem.jpg","desc":"Foto Japón Colina \u003cbr\u003e Calle 138 No. 55-56 L-45"}
	,{"lon":-74.073572,"lat":4.601105,"img":"lorem.jpg","desc":"Foto Japón Jimenez Con 7 \u003cbr\u003e Carrera 7 No. 14-36"}
	,{"lon":-74.052964,"lat":4.667017,"img":"lorem.jpg","desc":"Foto Japón Andino \u003cbr\u003e Carrera 11 No. 82-01 L-307"}
	,{"lon":-74.066567,"lat":4.623674,"img":"lorem.jpg","desc":"Corporación Autónoma Regional De Cundinamarca \u003cbr\u003e Carrera 7 No. 36-45"}
	,{"lon":-74.066926,"lat":4.621369,"img":"lorem.jpg","desc":"Dirección Seccional de Impuestos de Grandes Contribuyentes \u003cbr\u003e Carrera 7 No 34 - 65"}
	//fin bogota
	
	//barranquilla
	,{"lon":-74.827377,"lat":11.013729,"img":"lorem.jpg","desc":"Pepe Ganga CC. Buenavista \u003cbr\u003e Carrera 53 Calle 99 Esquina L-321"}
	//,{"lon":-74.775644899999975,"lat":10.936089,"img":"lorem.jpg","desc":"Carrefour Calle 30 \u003cbr\u003e Calle 30 No. 187 - 78"}
	,{"lon":-74.785373,"lat":10.955644,"img":"lorem.jpg","desc":"Carrefour Calle 30 \u003cbr\u003e Calle 30 No 187-78 Barrio Las Nieves"}
	,{"lon":-74.803070400000024,"lat":11.0041145,"img":"lorem.jpg","desc":"Carrefour Altos del Prado \u003cbr\u003e Carrera 56 No 75-155"}
	,{"lon":-74.829168,"lat":11.01553,"img":"lorem.jpg","desc":"Homecenter\u003cbr\u003eCarrera 53 No 99-160"}
	,{"lon":-74.793350400000008,"lat":10.9652835,"img":"lorem.jpg","desc":"Sao Calle 47 \u003cbr\u003e Calle 47 Carrera 9D Macarena"}	
	,{"lon":-74.803736099999981,"lat":10.9685345,"img":"lorem.jpg","desc":"Olímpica Carrera 21 \u003cbr\u003e Carrera 21B No 63B-50"}
	,{"lon":-74.789877999999987,"lat":10.9568404,"img":"lorem.jpg","desc":"Olímpica Calle 36 \u003cbr\u003e Calle 36B Carrera 8 Esquina"}
	,{"lon":-74.795483499999989,"lat":11.0048723,"img":"lorem.jpg","desc":"Olímpica Calle 73 \u003cbr\u003e Calle 73 Carrera 41C-53"}
	,{"lon":-74.83350999999999,"lat":11.0127,"img":"lorem.jpg","desc":"Makro Villa Santos\u003cbr\u003eCarrera 51 B AV. Circunvalar"}
	,{"lon":-74.790351,"lat":10.9694,"img":"lorem.jpg","desc":"Éxito Murillo \u003cbr\u003e Calle 45 No 26-129."}
	,{"lon":-74.821079,"lat":11.008264,"img":"lorem.jpg","desc":"Éxito Barranquilla \u003cbr\u003e Carrera 51 B No 87-50."}
	,{"lon":-74.827334,"lat":11.013529,"img":"lorem.jpg","desc":"Éxito Buenavista \u003cbr\u003e Carrera 53 con Calle 98."}//agregado
	,{"lon":-74.770280099999979,"lat":10.9861096,"img":"lorem.jpg","desc":"Éxito Metropolitano \u003cbr\u003e AV. Circunvalar Calle Murillo Esquina."}
	,{"lon":-74.8185906,"lat":11.0026987,"img":"lorem.jpg","desc":"Foto Japón Barranquilla 1\u003cbr\u003eCalle 84 No. 47-49"}
	,{"lon":-74.794559,"lat":10.992144,"img":"lorem.jpg","desc":"Foto Japón Prado \u003cbr\u003e Carrera 50 No 48-227 LOCAL 152"}
	//fin barranquilla

	
	//Bucaramanga
	,{"lon":-73.1216508,"lat":7.1238917,"img":"lorem.jpg","desc":"Pepe Ganga CC. Florida \u003cbr\u003e Calle 31 No 26A-27  L-308"}
	,{"lon":-73.1107993,"lat":7.1152647999999994,"img":"lorem.jpg","desc":"Carrefour Megamall \u003cbr\u003e Carrera 33 A No 29-15 L-29"}
	,{"lon":-73.125192200000015,"lat":7.1318823,"img":"lorem.jpg","desc":"Homecenter La Concordia \u003cbr\u003e Carrera 21 No 45-02."}
	,{"lon":-73.129545099999973,"lat":7.1365957,"img":"lorem.jpg","desc":"Éxito Bucaramanga \u003cbr\u003e Carrera 17 No 45-77."}
	,{"lon":-73.120323,"lat":7.126453,"img":"lorem.jpg","desc":"Foto Japón C.cial Cañaveral \u003cbr\u003e C.cial Cañaveral local 107"}
	//Fin Bucaramanga
	
	 //Cartagena
	,{"lon":-75.529804099999978,"lat":10.4163336,"img":"lorem.jpg","desc":"Carrefour CC. Caribe Plaza\u003cbr\u003e AV. El Lago Calle 29 D No 22-62 (Pie de La Popa)"}
	,{"lon":-75.562623700000017,"lat":10.3958374,"img":"lorem.jpg","desc":"Homecenter Avenida el Lago \u003cbr\u003e AV. El Lago Carrera 129B "}
	,{"lon":-75.474896300000012,"lat":10.3972502,"img":"lorem.jpg","desc":"Sao La Plazuela \u003cbr\u003e Diagonal 31 No 71-130 Multicentro"}
	,{"lon":-75.48947609999999,"lat":10.4109198,"img":"lorem.jpg","desc":"Makro Cartagena \u003cbr\u003e Carrera 59B No 30D-21"}
	,{"lon":-75.503261800000018,"lat":10.4064848,"img":"lorem.jpg","desc":"Éxito Cartagena \u003cbr\u003e Calle 31 No 69-75."}
	,{"lon":-75.558981,"lat":10.399487,"img":"lorem.jpg","desc":"Foto Japón Boca Grande \u003cbr\u003e AV. SAN MARTIN 5-150 B/GRANDE"}
	,{"lon":-75.529556,"lat":10.414651,"img":"lorem.jpg","desc":"Foto Japón Caribe Plaza \u003cbr\u003e AV. PIE DE LA POPA Calle 29D No 22-62 LOCAL 153 "}
	//Fn Cartagena
	
	//manizales
	,{"lon":-75.486878,"lat":5.057879,"img":"lorem.jpg","desc":"Edificio Siglo XXI\u003cbr\u003e Carrera 23 No 64B-33"}
	,{"lon":-75.513488,"lat":5.068978,"img":"lorem.jpg","desc":"La 14 Sede Manizales 1 \u003cbr\u003e Carrera 20 No 28-40"}
	//fin manizales
	
	//Medellin
	,{"lon":-75.55863579999999,"lat":6.2030761,"img":"lorem.jpg","desc":"Pepe Ganga CC. Oviedo \u003cbr\u003e Calle 6 Sur No 43A-227 L-52-50"}
	,{"lon":-75.579543899999976,"lat":6.2734375,"img":"lorem.jpg","desc":"Jardín Botánico \u003cbr\u003e Calle 73 No 51D-14"}
	,{"lon":-75.57222999999999,"lat":6.24317,"img":"lorem.jpg","desc":"Gobernación  Antioquia \u003cbr\u003e Calle 42B No. 52"}
	,{"lon":-75.576482800000008,"lat":6.192362,"img":"lorem.jpg","desc":"Carrefour C.C Santa Fe \u003cbr\u003e AV. El Poblado Carrera 43 A con Calle 7 Sur"}
	,{"lon":-75.5533509,"lat":6.2719822,"img":"lorem.jpg","desc":"Carrefour CC. Premium Plaza \u003cbr\u003e Carrera 44 No 29-80"}
	,{"lon":-75.572800499999971,"lat":6.2375463,"img":"lorem.jpg","desc":"Carrefour Bello \u003cbr\u003e Carrera 50 No 27B-71"}
	,{"lon":-75.597233299999971,"lat":6.2637673,"img":"lorem.jpg","desc":"Carrefour Itagüí \u003cbr\u003e Calle 50 No 52-21"}
	,{"lon":-75.575136999999984,"lat":6.235925,"img":"lorem.jpg","desc":"Makro San Juan \u003cbr\u003e AV. San Juan con Carrera 65"}
	,{"lon":-75.546778300000028,"lat":6.3384958,"img":"lorem.jpg","desc":"Éxito Bello \u003cbr\u003e Diagonal 51 No 35-120."}
	,{"lon":-75.5658699,"lat":6.2087417999999994,"img":"lorem.jpg","desc":"Éxito Poblado \u003cbr\u003e Calle 10 No 43E-135"}
	,{"lon":-75.572178800000017,"lat":6.2854674,"img":"lorem.jpg","desc":"Éxito Colombia \u003cbr\u003e Carrera 66 No 49-01"}
	,{"lon":-75.5727536,"lat":6.2354438,"img":"lorem.jpg","desc":"Éxito Envigado \u003cbr\u003eCarrera 48 No 34B Sur 29"}
	,{"lon":-75.586268500000017,"lat":6.2412651,"img":"lorem.jpg","desc":"Éxito CC. Unicentro \u003cbr\u003e Carrera 66 A No 34A-25 L-039"}
	,{"lon":-75.6039647808426,"lat":6.2343414930002075,"img":"lorem.jpg","desc":"Foto Japón Quijote \u003cbr\u003e Calle 35 No. 80B -80"}
	,{"lon":-75.5594271,"lat":6.247952,"img":"lorem.jpg","desc":"Foto Japón 1ro de Mayo \u003cbr\u003e Calle 52 No. 49 - 114"}
	,{"lon":-75.566219,"lat":6.250134,"img":"lorem.jpg","desc":"Edificio Coltejer \u003cbr\u003e Calle 52 No 47 42 Edificio Coltejer"}
	,{"lon":-75.590728,"lat":6.17675,"img":"lorem.jpg","desc":"Almacenes Éxito Sede Administrativa \u003cbr\u003e Carrera 48 No 32 B Sur -139 Envigado"}
	,{"lon":-75.579039,"lat":6.185345,"img":"lorem.jpg","desc":"Office Depot Sao Paulo \u003cbr\u003e Carrera 43A No 18 SUR 135 LC 347"}
	,{"lon":-75.556689,"lat":6.198382,"img":"lorem.jpg","desc":"Office Depot Del Este \u003cbr\u003e C.CIAL DEL ESTE CRA 25 CON Calle 3 VIA DEL TESORO LOCAL 171"}
	,{"lon":-75.570628,"lat":6.229215,"img":"lorem.jpg","desc":"Foto Japón Med. Premium Plaza \u003cbr\u003e Carrera 44 NO. 29 - 80 Local 166"}
	,{"lon":-75.585303,"lat":6.231127,"img":"lorem.jpg","desc":"Almacén General - Proveeduría EPM \u003cbr\u003e Calle 30 65 - 315 interior 197"}
	,{"lon":-75.577765,"lat":6.245344,"img":"lorem.jpg","desc":"Edificio EPM \u003cbr\u003e Carrera 5 No 24 – 28"}
	,{"lon":-75.589236,"lat":6.169584,"img":"lorem.jpg","desc":"Oficina de atención al cliente - EPM Envigado  \u003cbr\u003e Carrera 43-38A sur 31"}
	,{"lon":-75.565835,"lat":6.249677,"img":"lorem.jpg","desc":"Oficina de  atención al cliente - EPM Itagüí  \u003cbr\u003e Calle 52 No 47-46"}
	,{"lon":-75.596386,"lat":6.233772,"img":"lorem.jpg","desc":"Mascerca Belen - EPM \u003cbr\u003e Carrera 76 No 32-74"}
	,{"lon":-75.606633,"lat":6.258973,"img":"lorem.jpg","desc":"Mascerca Floresta - EPM \u003cbr\u003e Carrera 89 B No 48A-37"}
	,{"lon":-75.561437,"lat":6.335652,"img":"lorem.jpg","desc":"Oficina de  atención al cliente EPM Edificio Miguel de Aguinaga \u003cbr\u003e Calle 52 No 53-49"}
	,{"lon":-75.55382,"lat":6.241358,"img":"lorem.jpg","desc":"Mascerca Buenos Aires - EPM \u003cbr\u003e Calle 49 No 31-12"}
	,{"lon":-75.568787,"lat":6.247019,"img":"lorem.jpg","desc":"Oficina de atención al cliente - EPM Bello \u003cbr\u003e Carrera 50 No 46-46"}
	,{"lon":-75.604072,"lat":6.233149,"img":"lorem.jpg","desc":"Centro Comercial Los Molinos \u003cbr\u003e Calle 30A No 82A 26"}
	//fin medellin
	
	
	//pereira
	,{"lon":-75.685008,"lat":4.81558,"img":"lorem.jpg","desc":"Carrefour Avenida del Rio \u003cbr\u003e AV. del Río No 7-02"}
	//,{"lon":-75.6886849,"lat":4.8186528,"img":"lorem.jpg","desc":"Carrefour \u003cbr\u003e AV. del Río No 7-02"}
	,{"lon":-75.691026,"lat":4.811379,"img":"lorem.jpg","desc":"Éxito Carrera 10 \u003cbr\u003e Carrera 10 No 14-71 "}
	//,{"lon":-75.697909699999968,"lat":4.812583,"img":"lorem.jpg","desc":"Éxito Pereira \u003cbr\u003e Carrera 10 No 14-71."}
	,{"lon":-75.694785000000024,"lat":4.8156279,"img":"lorem.jpg","desc":"Multidrogas Centro \u003cbr\u003e Carrera 6 No. 19-82 Centro Esquina"}
	,{"lon":-75.7072470665039,"lat":4.8122867389726061,"img":"lorem.jpg","desc":"Multidrogas AV 30 de Agosto \u003cbr\u003e Av 30 De Agosto No. 34-38  Esquina"}
	,{"lon":-75.699514299999976,"lat":4.812732,"img":"lorem.jpg","desc":"Multidrogas Balalaika \u003cbr\u003e Calle 25 No. 10-03 Loc 01 Balalaika (Dosquebradas)"}
	,{"lon":-75.694476254214464,"lat":4.81359688015126,"img":"lorem.jpg","desc":"Multidrogas Area Administrativa \u003cbr\u003e Calle 22 No. 9-63"}
	,{"lon":-75.694383,"lat":4.813825,"img":"lorem.jpg","desc":"Foto Japón Pereira 1 \u003cbr\u003e Carrera 8 No 19- 79 Esquina"}
	,{"lon":-75.742937,"lat":4.809158,"img":"lorem.jpg","desc":"Foto Japón Pereira Unicentro  \u003cbr\u003e Av. 30 de Agosto C.C. Unicentro Local B-65"}
	,{"lon":-75.689958,"lat":4.808426,"img":"lorem.jpg","desc":"ANDI - Seccional Risaralda Quindio \u003cbr\u003e Calle 13 No 13-40 Oficina 312 A"}
	,{"lon":-75.698066,"lat":4.813505,"img":"lorem.jpg","desc":"Fundación Universitaria del Area Andina Seccional Pereira \u003cbr\u003e Calle 24 No 8-55"}
	//fin pereira
	
	];
	
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
					icon: '<?=$template;?>images/batery.png'
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
		contenido = '<div class="c-coffe bold">'+desc[0]+'</div><div class="c-green">'+desc[1]+'</div>';
		contenido += '<div class="c-coffe bold margin-top-20">Ubicaci&oacute;n del punto:</div><div class="c-green"></div>';
		//contenido += '<div class="margin-top-20" style="text-align:center;"><a href="#!"><img src="<?=$template;?>images/verfotos.png" alt="Ver Fotos"></a></div>';
		var infowindow = new google.maps.InfoWindow({ 
			content: contenido,
			size: new google.maps.Size(50,50)
			});
		google.maps.event.addListener(marker, 'click', function() {
			infowindow.open(map,marker);
		});
	}
	
	function getPlace(lat,lng){        
		var latLong = new google.maps.LatLng(lat, lng);
		map.setCenter(latLong);
		map.setZoom(12);
		$('.places-list').toggle();
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
    	<?php include(APPPATH.'views/inc/header.php');?>
    	<div class="places-select">
    		<div class="places-content">
    			<div class="places-showhide"><a href="#!" onclick="$('.places-list').toggle();">&nbsp;</a></div>
				<div class="places-list" style=""></div>
				<div class="places-showhide-bottom">&nbsp;</div>
    		</div>
    	</div>
		<div id="map" style="width:100%; height:377px;"></div>
        <div id="content" style="margin-bottom:5px">
        	<div class="web-content">
        		<div class="mono-pilas">
        			<img src="<?=$template;?>images/pilas-ambiente-andi.png" alt="Lleva tus pilas usadas" />
        		</div>
        		<div class="img-punto">
        			<img src="<?=$template;?>images/punto-recoleccion-pilas-con-el-ambiente.png" alt="Deposita tus pilas usadas en el punto de recoleccion mas cercano" />
        		</div>
        	</div>
    		<div class="web-content">
    			<div class="title-content c-coffe" style="word-spacing: -1px;font-weight: 100;font-size: 28px;">
    				<span class="c-orange">Recolecta tus pilas</span>, encuentra tu punto <br/>de recolección más cercano y llévalas!
				</div>
    		</div>
    		<div class="web-content">
    			<div class="title-content font-21 c-coffe">Únete a nuestra comunidad</div>
    		</div>
    		<div class="web-content">
    			<div class="title-content font-21 c-green">Facebook</div>
    		</div>
    		<div class="web-content">
    			<div id="fb-root"></div>
				<script>(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=297108940335505";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>
    			<div class="fb-like-box" data-href="https://www.facebook.com/pages/Comunidad-Eco/234925943277028" data-width="938" data-show-faces="true" data-stream="false" data-header="true"></div>
				<div class="title-content font-21 c-green">Tipos de pilas que recibimos en nuestros contenedores</div>
				<div style="display:block; margin: 0 0 30px 0;">
					<img  style="display:block;margin:0 auto 0 auto;" src="<?=$template;?>images/tipospilas.png" alt="Eco Comunidad" />
				</div>
				<div style="display:block">
						<img  style="display:block;margin:0 auto 0 auto;" src="<?=$template;?>images/gallery.png" alt="Eco Comunidad" />
				</div>
    		</div>
	    </div>	
        <!-- End Content --> 
       <div id="push">&nbsp;</div>
    </div>
    <!--End wrapper--> 
   <?php include(APPPATH.'views/inc/footer.php');?>
</body>
</html>