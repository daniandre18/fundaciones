<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author Samysofht
 * @version 1.0
 * @
 */

class Puntos_d1 extends Ext_Controller {	

	public function __construct(){

		parent::__construct();

		$this->tp['body_id'] = 'puntos';		
		$this->tp['title'] = 'Puntos d1';           
		$this->tp['controller'] = 'puntos_d1';
	}

	
    /**
     * Mostrar por la vista de inicio por defecto y cargar las variables de 
     * template en Ext_controller
     */

	public function index($preview = ""){

		$this->load->view('puntos_d1/index_view', $this->tp);	

	}

}