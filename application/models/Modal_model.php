<?php 
include_once APPPATH.'libraries/Modal.php';

class Modal_model extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}
	
	function getModal($tipoModal) {
		$model = new Modal($tipoModal);
		return $model->show();
	}
}