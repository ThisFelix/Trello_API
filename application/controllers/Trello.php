<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// a cria��o de um controlador pode ser entendida
// como a cria��o de uma se��o no seu site...
// pense em cada fun��o como uma subse��o

// um controlador � um gerador de p�ginas
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
			
	// copiar e colar n�o � coisa de gente decente
	function show($content){
		$html = $this->load->view('common/header', null, true);
		$html .= $this->load->view('common/navbar', null, true);
		$html .= $content; 
		$html .= $this->load->view('common/footer', null, true);
		echo $html;
	}
}