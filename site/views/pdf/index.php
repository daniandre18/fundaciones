<?php 

header ('Content-type: text/html; charset=ISO-8859-1');
//include(APPPATH.'views/inc/head.php');
//include_once (APPPATH.'views/inc/pdf/class.pdf.php');
include_once (APPPATH.'views/inc/pdf/class.ezpdf.php');
include_once (APPPATH.'views/inc/pdf/class.backgroundpdf.php'); 


include_once (APPPATH.'views/inc/Excel/reader.php');
include_once (APPPATH.'views/inc/obj-function.php');

	$data = new Spreadsheet_Excel_Reader();
	$objFunct = new objFunction(); 
	//$data->setOutputEncoding('CP1251');
	$data->setOutputEncoding('UTF-8');
	$data->read(APPPATH.'views/inc/pilas_colombia.xls');

	error_reporting(E_ALL ^ E_NOTICE);
	
	//*************************************************************
	// INICIO DE LAS CIUDADES ///
	$numFile = 	@$data->sheets[0]['numRows'];
	$numColum = @$data->sheets[0]['numCols'];
	$objExcel = @$data->sheets[0]['cells'];
	
	$varCiudad=array();
	if ($numFile==null){
		echo '<script> console.log("Error al leer el archivo xls '.APPPATH.'views/inc/pilas_colombia.xls");</script>'; 
	}else{
		$temNum=0;
		for ($i = 2; $i <= $numFile; $i++) {	
			if (@$objExcel[$i][5]=="1"){
				$strCiudad = $objFunct->suprimirTexto(@$objExcel[$i][2]);
				$strCiudad = $objFunct->_convert(@$strCiudad);
				$varCiudad[$temNum] = array(0=>@$objExcel[$i][1],1=>@$objExcel[$i][2]);
				//$strCiudad."\n";
				$temNum++;
				//if(newsLine($temY)){$pdf->ezNewPage();$temY=800;}
			}
		}
	}
	// FIN DE LAS CIUDADES ///
	
	// INICIO DE LAS PUNTOS ///
		$numFile = 	@$data->sheets[1]['numRows'];
		$numColum = @$data->sheets[1]['numCols'];
		$objExcel = @$data->sheets[1]['cells'];
		$varPunto =array();
		if ($numFile==null){
			echo '<script> console.log("Error al leer el archivo xls '.APPPATH.'views/inc/pilas_colombia.xls");</script>'; 
		}else{
			for ($i = 2; $i <= $numFile; $i++) {
				if (@$objExcel[$i][6]==1){

					//$strTitle = $objFunct->suprimirTexto(@$objExcel[$i][9]);
					//$strTitle = $objFunct->_convert(@$strTitle);
					$strTitle = @$objExcel[$i][9];
					
					//$strDesc = $objFunct->suprimirTexto(@$objExcel[$i][10]);
					//$strDesc = $objFunct->_convert(@$strDesc);
					$strDesc = @$objExcel[$i][10];
					
					$temNum =@count($varPunto[@$objExcel[$i][7]]);
					$temSw = @($temNum==null)?0:$temNum;
					$varPunto[@$objExcel[$i][7]][$temSw] = array(0=>@$objExcel[$i][1],1=>@$strTitle,2=>@$strDesc);
					/*
					$pdf->setColor(0/255,0/255,0/255); 
					$pdf->addText(100,$temY,10,@$strDesc,0);
					$temY -=15;
					if ($temY<=200){$pdf->ezNewPage();$temY=700;}*/
				}
			}
		}
		// FIN DE LAS PUNTOS ///
	//***********************************************************************
	
	
	/**********/
	// Configuracion PDF
	/**********/
	
	$pdf = new backgroundPDF('a4', 'portrait', 'image', array('img' => APPPATH.'images/bg-pdf.png'));  
	//$pdf->selectFont(APPPATH.'views/inc/pdf/fonts/courier.afm');
	$pdf->selectFont(APPPATH.'views/inc/pdf/fonts/swis721_md_bt_medium-webfont.ttf');
	
	$datacreator = array (
		'Title'=>'Puntos de recoleccion',
		'Author'=>'mrdaza',
		'Subject'=>'PDF ',
		'Creator'=>'ZavGroup.com',
		'Producer'=>'http://www.zav.co'
	);
	$pdf->addInfo($datacreator);
	$pdf->ezSetCmMargins(3,3,3,3);
	
	//font-family: Florence, cursive;font-weight: 900
	$pdf->addText(340,750,16,utf8_decode('<b>Puntos de recolección</b>'),0);
	$pdf->setColor(206/255,87/255,5/255); 
	$pdf->addText(70,700,20, utf8_decode('<b>Ciudades donde hay puntos de recolección:</b>'),0);
	
		//agrega Ciudades
		$temY=670;
		foreach($varCiudad as $num=>$obj){
			$pdf->setColor(227/255,108/255,44/255); 
			//$pdf->ezText("<c:alink:#_".$obj[0]."><b>".$obj[1]."</b></c:alink>\n",16);
			//$pdf->addText(100,$temY,10,"<c:alink:#_".$obj[0]."><b>".$obj[1]."</b></c:alink>\n",0);
			//$pdf->addText(100,'<a href="#_'.$obj[0].'">'.$temY.'</a>',10,''.$obj[1],0);
			//$pdf->addText(100,$temY,12,"<b>".$obj[0]."</b>\n",0);
			$pdf->addText(100,$temY,12,"<c:alink:".$obj[1].">".$obj[0]."</c:alink>",0);
			$temY = $temY-15;
		}
		unset($num);unset($obj);
		//agrega Puntos
		$temY -=20;
		foreach($varCiudad as $num => $obj){
			$pdf->setColor(206/255,87/255,5/255); 
			//$pdf->addText(70,("<c:alink:#_".$obj[0]."><b>".$obj[1]."</b></c:alink>\n"),14,$obj[1],0);
			$pdf->addText(70,$temY,18,"<c:alink:#_".$obj[1].">".$obj[0]."</c:alink>",0);
			//$pdf->ezText("<c:alink:#_".$obj[1]."><b>".$obj[0]."</b></c:alink>\n",18);
			
			$pdf->addText(70,$temY,18,"<b>".$obj[0]."</b>\n",0);
			$pdf->ezText("",16);
			$temY -=25;
			foreach ($varPunto[$obj[0]] as $num2 => $obj2){
				
				//$strTex1 = explode('<br/>',@$obj2[1]);
				//if (newsLine($temY)){$pdf->ezNewPage();$temY=800;}
				$pdf->setColor(0/255,0/255,0/255); 
				//foreach ($strTex1 as $obj3){
					$pdf->addText(70,$temY,13,@$obj2[1],0);
					$temY -=15;
					$pdf->setColor(109/255,110/255,113/255); 
					$pdf->addText(70,$temY,12,@$obj2[2],0);
				//}
				$temY -=30;
				if ($temY<=100){
					$pdf->ezNewPage();$temY=650;
					$pdf->setColor(0/255,0/255,0/255);
					$pdf->addText(340,750,16,utf8_decode('<b>Puntos de recolección</b>'),0);
				}
			}
			if ($temY>=100){
				$pdf->ezNewPage();$temY=650;
				$pdf->setColor(0/255,0/255,0/255);
				$pdf->addText(340,750,16,utf8_decode('<b>Puntos de recolección</b>'),0);
			}
					
			//	$temY -=19;
		}
		unset($varCiudad);
		unset($num);unset($obj);
		unset($varPunto);
		unset($num2);unset($obj2);
		
	ob_end_clean();
	echo $pdf->Stream();//ob_get_contents() ;
	//$pdf->ezStream();
	
	/**********/
	// Fin Configuracion PDF
	/**********/
	
	function puntos_cm ($medida, $resolucion=72){
		//// 2.54 cm / pulgada
		return ($medida/(2.54))*$resolucion;
	}
	/*
	function newsLine($temY){
		$maxY=100;$minY=900;
		if($temY<=$minY){return false;}
		else{ return true;}
	}*/

?>