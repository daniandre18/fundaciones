<?php

class generalInfo{
	private $title;
	private $id;
	
	function __construct() {
		$this->title="";
		$this->id="";
	}

	function setTitle($title){$this->title=$title;}
	function setId($id){$this->id=$id;}
	
	function getTitle(){return $this->title;}
	function getId(){return $this->id;}
}

class objFunction{
	
	public function suprimirTexto($textArray){
		$textArray = trim($textArray);
		return substr($textArray,0,strlen($textArray));
	}
	
	public function elimina_duplicados($textArray, $campo){
		foreach ($textArray as $sub){
			if($campo=="ciudad"){
				$cmp[] = $sub;
			}else{
				$cmp[] = $sub->getTitle();
			}
		}
		$unique = array_unique($cmp);
		foreach ($unique as $k => $campo){
			$resultado[] = $textArray[$k];
		}
		return $resultado;
	}

	function toText($strText='""'){
		$strText = substr($strText,0,strlen($strText));
		$strText = $this->_convert(ucfirst(strtolower($strText)));
		return $strText;
	}
	
	function toText02($strText='""'){
		$strText = substr($strText,0,strlen($strText));
		$strText = $this->supr2HTML($this->_convert($strText));
		return $strText;
	}
	
	public function _convert($content) { 		
		/*
		if(!mb_check_encoding($content, 'UTF-8') 
			OR !($content === mb_convert_encoding(mb_convert_encoding($content, 'UTF-32', 'UTF-8' ), 'UTF-8', 'UTF-32'))) { 

			$content = mb_convert_encoding($content, 'UTF-8'); 

			if (mb_check_encoding($content, 'UTF-8')) { 
				echo '<script> console.log("Converted to UTF-8");</script>';
			} else { 
				echo '<script> console.log("Could not converted to UTF-8");</script>'; 
			} 
		}*/
		//$content = utf8_decode($content);
		$content = utf8_encode($content);
		return $content; 
	}
	
	public function accents2HTML($mensaje){
		$mensaje = str_replace("á","&aacute;",$mensaje);
		$mensaje = str_replace("é","&eacute;",$mensaje);
		$mensaje = str_replace("í","&iacute;",$mensaje);
		$mensaje = str_replace("ó","&oacute;",$mensaje);
		$mensaje = str_replace("ú","&uacute;",$mensaje);
		$mensaje = str_replace("ñ","&ntilde;",$mensaje);
		$mensaje = str_replace("¿","&iquest;",$mensaje);

		$mensaje = str_replace("Á","&Aacute;",$mensaje);
		$mensaje = str_replace("É","&Eacute;",$mensaje);
		$mensaje = str_replace("Í","&Iacute;",$mensaje);
		$mensaje = str_replace("Ó","&Oacute;",$mensaje);
		$mensaje = str_replace("Ú","&Uacute;",$mensaje);
		$mensaje = str_replace("Ñ","&Ntilde;",$mensaje);
		return $mensaje;
	}
	public function supr2HTML($mensaje){
		$mensaje = str_replace("Á","á",$mensaje);
		$mensaje = str_replace("É","é",$mensaje);
		$mensaje = str_replace("Í","í",$mensaje);
		$mensaje = str_replace("Ó","ó",$mensaje);
		$mensaje = str_replace("Ú","ú",$mensaje);
		$mensaje = str_replace("Ñ","ñ",$mensaje);
		return $mensaje;
	}
	public function moveOtros($arrayVal){
		//$convenio->getId().">".$convenio->getTitle()."</option>");
		$vec02 = array();
		$ver=0;$i=0;$ultimo=0;
		foreach($arrayVal as $val){
			$vec02[$i]=$val;
			
			if($ver>0){
				$vec02[$ver]=$val;$ver++;
			}
			
			if($val->getTitle()==="Otros" || $val->getTitle()==="OTROS"){
				$ver=$i;$ultimo=$val;
			}
			$i++;
		}
		$vec02[count($arrayVal)-1]=$ultimo;
		return $vec02;
	}

}