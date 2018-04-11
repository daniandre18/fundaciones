<?php
class Ext_Controller extends CI_Controller{
	
	public function Ext_Controller(){
		parent::__construct();
		//cargar helper base de datos
		$this->load->database();
		//cargar helper de lenguaje
		$this->load->helper('language');
		//load url helper
		$this->load->helper('url');
		//cargar archivo de lenguage
		$this->lang->load('site');
		
		// Variables de Plantilla/Vista
		$this->tp = array();
		//with language
		//$this->tp['site_url'] = $this->config->site_url().$this->lang->lang().'/';
		//widthout language
		$this->tp['site_url'] = $this->config->site_url();
		$this->tp['base_url'] = base_url();
		$this->tp['template'] = base_url().'site/';
		$this->tp['zav_url'] = base_url().'zav_admin/app/upload/';
		//$this->tp['lang_name'] = $this->lang->lang().'/';
		$this->tp['title'] = "";
		$this->tp['keywords'] = "";
		$this->tp['description'] = "";
		
		//variable idioma
		$this->lang_id = 1;
		/*
		switch ($this->lang->lang()) {
		    case 'es':
		        $this->lang_id = 1;
		        break;
		    case 'en':
		        $this->lang_id = 2;
		        break;
		    default:
		        $this->lang_id = 2;
		}
		
		$this->tp['lang_id'] = $this->lang_id;
		 */
		//end variable idioma
	}

	function miFecha($fecha){
		if($fecha != '0000-00-00'){
			$fechac = explode("-", $fecha);  // declaro el array
			$mes= $fechac[1];
			$dia = substr($fechac[2], 0, 2);
			$año = $fechac[0];
			$m1     = array("01","02","03","04","05","06","07","08","09");
			$m2     = array("1","2","3","4","5","6","7","8","9");
			$mes= str_replace($m1,$m2,$mes);
			
				$mesArray = lang('mouth');
			
			$mesReturn = $mesArray[$mes];
			return $mesReturn." ".$dia." ".$mesArray[13]." ".$año;
		}
		else{
			return '0000-00-00';
		}
	}
	
	public function miCambio($string, $space="_", $dot = null) {
        if (function_exists('iconv')) {
            $string = @iconv('UTF-8', 'ASCII//TRANSLIT', $string);
        }
        if (!$dot) {
            $string = preg_replace("/[^a-zA-Z0-9 \-]/", "", $string);
        } else {
            $string = preg_replace("/[^a-zA-Z0-9 \-\.]/", "", $string);
        }
        $string = trim(preg_replace("/\\s+/", " ", $string));
        $string = strtolower($string);
        $string = str_replace(" ", $space, $string);
        return $string;
    }
}
?>
