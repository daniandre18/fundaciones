<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @author ZavGroup
 * @version 1.0
 * @
 */
class Gmaps extends Ext_Controller {	
	public function __construct(){
		parent::__construct();
		$this->tp['body_id'] = 'gmaps';		
		$this->tp['title'] = 'Google Maps';           
		$this->tp['controller'] = 'gmaps';
	}
	
    /**
     * Mostrar por la vista de inicio por defecto y cargar las variables de 
     * template en Ext_controller
     */
	public function index($preview = ""){
		//
		$this->load->view('gmaps/index', $this->tp);	
	}

}