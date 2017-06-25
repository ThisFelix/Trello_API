<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Me extends CI_Controller{
	
	function index(){
		$html = $this->load->view('Index_view', null, true);
		$this->show($html);
	}
	
	function informacoes(){
		$html = $this->load->view('inform_view', null, true);
		$this->show($html);
	}
	
	function show($content){
		$html = $this->load->view('common/header', null, true);
		$html .= $this->load->view('common/navbar_index', null, true);
		$html .= $content;
		$html .= $this->load->view('common/footer', null, true);
		echo $html;
	}
	
}