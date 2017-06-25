<?php
Class Me extends CI_Controller{
	
	function index(){
		$html = $this->load->view('Index_view');
		$this->show($html);
	}
	
	function show($content){
		$html = $this->load->view('common/header', null, true);
		$html .= $this->load->view('common/navbar', null, true);
		$html .= $content;
		$html .= $this->load->view('common/footer', null, true);
		echo $html;
	}
	
}