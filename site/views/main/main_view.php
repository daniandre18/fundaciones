<?php include(APPPATH.'views/inc/head.php');?>
<!--sharethis-->
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "896c1224-dd52-45d3-870b-f31e36a0dac5"});</script>
<!--sharethis-->
<link  type="text/css" href="<?=$template;?>css/prettyPhoto.css" rel="stylesheet">
<script type="text/javascript" src="<?=$template;?>js/jquery.prettyPhoto.js"></script>
<script type="text/javascript">
<!--
$(function(){
	$("a[rel^='box']").prettyPhoto({
		autoplay: true,
		show_title: false,
		social_tools: "" /* html or false to disable */
	});
});
//-->	
</script>
<script type="text/javascript" src="<?=$template;?>js/jquery.cycle.all.js"></script>
<script type="text/javascript">
$(window).load(function(){
 $('.banner').cycle({
	fx:'scrollHorz'
	,timeout:7000
	,pager: '#banner-nav'
	,pagerAnchorBuilder: function(){
		return '<a href="#!">&nbsp;</a>';
	}
	,autostop: true
	,end:function(){
		$('.banner').cycle('pause');
		$('.banner').cycle(0);
	}
 });
 //
 $('.share-button').bind({
	click:function(){
		icons = $('.share-icons');
		icons.slideToggle('fast');
	}
 });
 
});
</script>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
</head><!--fin head-->
<body id="<?=$body_id?>">
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
		<div class="banner">
			<div class="banner-item" style="width:100%; height:377px; background:url(<?=$template;?>images/bg-banner-video.jpg) repeat-x;">
				<div class="web-int" style="width:1050px; margin-top:40px;">
					<div style="float:left; margin:12px 27px; padding:7px; background: url(<?=$template;?>images/video-bg-texture.jpg); box-shadow: 3px 3px 15px rgba(0, 0, 0, 0.3); border-radius: 3px;">
						<iframe width="430" height="260" src="http://www.youtube.com/embed/FIh24hqKywY" frameborder="0" allowfullscreen></iframe>
					</div>
					<div style="float:left; width:460px; font-size:17px;">
						<strong class="c-coffe fSb" style="font-size:28px;">Ent&eacute;rate de lo f&aacute;cil que es contribuir...</strong>
						<p class="c-coffe">...a la correcta disposici&oacute;n de pilas usadas para cerrar su ciclo de vida y ayudar al  Medio Ambiente.</p>
						<div class="web-content">
						<div class="share-button">
							<div class="share-text fSb">Comparte este video <img src="<?=$template;?>images/share-icon.png" alt="Shared" /></div>
						</div>
						</div>
						<div class="web-content">
							<div class="share-icons">
								<span class='st_facebook_large' displayText='Facebook' st_url="http://www.youtube.com/watch?v=FIh24hqKywY&feature=plcp" st_title="Recolecta tus pilas, encuentra tu punto de recolección más cercano y llévalas!"></span>
								<span class='st_twitter_large' displayText='Tweet' st_url="http://www.youtube.com/watch?v=FIh24hqKywY&feature=plcp" st_title="Recolecta tus pilas, encuentra tu punto de recolección más cercano y llévalas!"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="banner-item" style="width:100%; height:377px; text-align:center; background:#e0e0e0;">
				<a href="<?=$site_url;?>puntos_recoleccion" title="Encuentra tu punto de recolecci&oacute;n mas cercano.">
					<img src="<?=$template;?>images/encuentra-punto-recoleccion-pilas-usadas.jpg" alt="encuentra tu punto de recoleccion de pilas usadas mas cercano"/>
				</a>
			</div>
		</div>
		<div class="banner-nav" >
			<div class="banner-nav-content" >
				<div id="banner-nav" class="banner-nav-items"></div>
			</div>
		</div>
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
    			<div class="title-content c-coffe" style="word-spacing: -1px;font-weight: 100; font-size:35px;">
    				<span class="c-orange">Recolecta tus pilas</span>, encuentra tu punto <br/>de recolección más cercano y llévalas!
				</div>
				<div style="height:80px;">&nbsp;</div>
				<?php /*
				<div class="font-29 c-coffe margin-top-20 fSl" style="letter-spacing:-1px;">Colombia es uno de los primeros países de Latinoamérica <br/>en implementar  el programa de recolección de pilas, </div>
				<div class="font-18 c-coffe fSl">convirtiéndonos en referente para otros países interesados en replicar la política <br/>de recolección, <a href="#!">conoce más del programa.</a></div>
				*/ ?>
    		</div>
			<div class="web-content">
				<div class="f-left" style="width:500px;">
					<div style="display:block; margin-top:30px;">
						<div class="c-green font-22">Tipos de pilas que recibimos en nuestros contenedores</div>
						<div style="display:block; margin-top:30px;">
						<a href="<?=$template;?>images/tipospilas.png" rel="box[imagen]"><img style="display:block;margin:0 auto 0 auto;" src="<?=$template;?>images/thumb-tipospilas.png" alt="Eco Comunidad" /></a>
						</div>
					</div>
					<div style="display:block; margin-top:50px;">
						<div class="c-green font-22">Videos</div>
					</div>
					<div style="display:block; margin-top:30px;">
						<div class="f-left">
							<a href="<?=$site_url?>main/video/pilas_colegio?iframe=true&width=640&height=360" rel="box[video]"><img src="<?=$template;?>images/thumb-video01.png" alt="Video Pilas Colegio" /></a>
						</div>
						<div class="f-right">
							<a href="<?=$site_url?>main/video/pilas_militares?iframe=true&width=640&height=360" rel="box[video]"><img src="<?=$template;?>images/thumb-video02.png" alt="Video Pilas Militares" /></a>
						</div>
					</div>
				</div>
				<div class="inst-benef-content">
					<div class="font-21 c-green">Facebook</div>
					<div class="c-coffe font-18 fSl">Únete a nuestra comunidad</div>
					<div>
						<div id="fb-root"></div>
						<script>(function(d, s, id) {
						  var js, fjs = d.getElementsByTagName(s)[0];
						  if (d.getElementById(id)) return;
						  js = d.createElement(s); js.id = id;
						  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=297108940335505";
						  fjs.parentNode.insertBefore(js, fjs);
						}(document, 'script', 'facebook-jssdk'));</script>
						<div class="fb-like-box" data-href="https://www.facebook.com/pages/Comunidad-Eco/234925943277028" data-width="285" data-height="600" data-show-faces="false" data-stream="true" data-header="false"></div>
					</div>
					
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