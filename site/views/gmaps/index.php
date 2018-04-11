<?php include(APPPATH.'views/inc/head.php');?>



</head><!--fin head-->
<body id="<?=$body_id?>">
	<div id="wrapper">
    	<?php include(APPPATH.'views/inc/header.php');?>
        <div id="content">
			<div onload="initialize()">
			<div id="map_ZavGroup" style="width:70%; height:70%"></div>
			</div>
	    </div>	
        <!-- End Content --> 
       <div id="push"></div>
    </div>
    <!--End wrapper--> 
   <?php include(APPPATH.'views/inc/footer.php');?>
</body>
</html>