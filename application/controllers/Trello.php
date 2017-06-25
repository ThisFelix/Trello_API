<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// a criação de um controlador pode ser entendida
// como a criação de uma seção no seu site...
// pense em cada função como uma subseção

// um controlador é um gerador de páginas
class Trello extends CI_Controller {
	
	function index(){
		$this->load->model('Modal_model', 'model');
		
		$html = '<body onload="autoriza()">';
		
		$data['modal1'] = $this->model->getModal(0);
		$data['modal2'] = $this->model->getModal(1);
		
		$html .= $this->load->view('form_insert', $data, true);
		
		$this->show($html);
	}
	
	function logs(){
		$this->load->model('My_Model', 'model');
		$dados['dados'] = $this->model->lista('id', 'asc');
		$html = $this->load->view('logs', $dados, true);
		$this->show($html);
	}
			
	// copiar e colar não é coisa de gente decente
	function show($content){
		$html = $this->load->view('common/header', null, true);
		$html .= $this->load->view('common/navbar', null, true);
		$html .= $content; 
		$html .= $this->load->view('common/footer', null, true);
		echo $html;
	}
}