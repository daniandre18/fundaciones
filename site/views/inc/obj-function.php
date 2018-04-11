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
		$mensaje = str_replace("�","&aacute;",$mensaje);
		$mensaje = str_replace("�","&eacute;",$mensaje);
		$mensaje = str_replace("�","&iacute;",$mensaje);
		$mensaje = str_replace("�","&oacute;",$mensaje);
		$mensaje = str_replace("�","&uacute;",$mensaje);
		$mensaje = str_replace("�","&ntilde;",$mensaje);
		$mensaje = str_replace("�","&iquest;",$mensaje);

		$mensaje = str_replace("�","&Aacute;",$mensaje);
		$mensaje = str_replace("�","&Eacute;",$mensaje);
		$mensaje = str_replace("�","&Iacute;",$mensaje);
		$mensaje = str_replace("�","&Oacute;",$mensaje);
		$mensaje = str_replace("�","&Uacute;",$mensaje);
		$mensaje = str_replace("�","&Ntilde;",$mensaje);
		return $mensaje;
	}
	public function supr2HTML($mensaje){
		$mensaje = str_replace("�","�",$mensaje);
		$mensaje = str_replace("�","�",$mensaje);
		$mensaje = str_replace("�","�",$mensaje);
		$mensaje = str_replace("�","�",$mensaje);
		$mensaje = str_replace("�","�",$mensaje);
		$mensaje = str_replace("�","�",$mensaje);
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