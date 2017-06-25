<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	/**
	 * Cada função em um controlador DEVE gerar uma página diferente
	 * 
	 */
	public function nome($name, $idade){
		echo "Ol&aacute; $name... voce tem $idade anos?";
	}
	
	public function produto($setor, $id){
		echo "Produto num. $id do setor $setor carregado com sucesso!";
	}
	
	
	public function load(){
		$this->load->helper('file');
		
		//$v = array('name1' => 'value1', 'name2' => 'value2');
		$appconfig = new AppConfig('escola');
		$appconfig->set('use_chat', 'another value');
		$appconfig->set('use_forum', 'maybe');
		$appconfig->write();
		$cfg = $appconfig->data();	
		
		
		echo http_build_query($cfg, '', ";\n");
	}
}

// por enquanto não usar acento nas strings de configuração
class AppConfig {
	private $data = array();
	private $path;
	
	function __construct($escola, $data = null) {
		$this->path = "docs/$escola/appconfig.txt";
		if($data == null) $this->load();
		else $this->setData($data);
	}
	
	private function setData($data){
		$this->data = $data;
	}
	
	private function load(){
		$this->data = array();
		$string = read_file($this->path);
		
		$token = strtok($string, ";");
		while ($token !== false){
			$aux = explode("=", $token);
			$this->data[trim($aux[0])] = trim($aux[1]);
			$token = strtok(";");
		}
	}
	
	public function write(){
		$aux = http_build_query($this->data, '', ";\n");
		if (write_file($this->path, $aux))
			return true;
		return false;
	}
	
	public function set($key, $val){
		$this->data[$key] = $val;
	}
	
	public function get($key){
		return $this->data[$key];
	}
	
	public function data(){
		return $this->data;
	}
}
