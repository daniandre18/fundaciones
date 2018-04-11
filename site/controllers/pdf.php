<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @author ZavGroup
 * @version 1.0
 * @
 */
class Pdf extends Ext_Controller {	
	public function __construct(){
		parent::__construct();
		$this->tp['body_id'] = 'pdf';		
		$this->tp['title'] = 'Google Maps';           
		$this->tp['controller'] = 'pdf';
	}
	
    /**
     * Mostrar por la vista de inicio por defecto y cargar las variables de 
     * template en Ext_controller
     */
	public function index($preview = ""){
		//
		$this->load->view('pdf/index', $this->tp);	
	}

}