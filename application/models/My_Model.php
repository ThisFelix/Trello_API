<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Model extends CI_Model {
	
	private $table = "acao";
	 
	function __construct() {
		parent::__construct();
	}
	 
	function Inserir($data) {
		if(!isset($data)){
			return false;
		}else{
			return $this->db->insert($this->table, $data);
		}
	}
	
	// sort = id, order = asc
	function lista($sort, $order) {
		$this->db->order_by($sort, $order);
		$this->db->select('usuario, lista');
		$query = $this->db->get($this->table);
		if ($query->num_rows() > 0) {
			return $query->result_array();
		} else {
			return null;
		}
	}
}