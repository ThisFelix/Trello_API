<?php

class MY_Controller extends CI_Controller {
	
	protected function show($content) {
		$data['style_list'] = $this->getStyleList();
		$html  = $this->load->view('common/header', $data, true);
		$html .= $this->load->view('common/navbar', null, true);
		$html .= $content;
		
		$data['script_list'] = $this->getScriptList();
		$html .= $this->load->view('common/footer', $data, true);
		echo $html;
	}
	
	private $script_list = array();
	protected function addScript($script) {
		$this->script_list[] = $script;
	}
	
	private function getScriptList() {
		$html = '';
		foreach ($this->script_list as $script){
			$path = base_url("assets/js/$script.js");
			$html .= '<script src="'.$path.'"></script>'."\n";
		}
		return $html;
	}
	
	
	private $style_list = array();
	protected function addStyle($style){
		$this->style_list[] = $style;	
	}
	
	private function getStyleList() {
		$html = '';
		foreach ($this->style_list as $style) {
			$path = base_url("assets/css/$style.css");
			$html .= '<link href="'.$path.'" rel="stylesheet">';
		}
		return $html;
	}
}













