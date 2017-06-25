<?php
class Modal{
	
	private $tipomodal; 
	
	function __construct($tipomodal) {
		$this->tipomodal = $tipomodal;	
	}
	
	function defineModal($text){
		
			if($this->tipomodal == 0){
				$id = "sucessoModal";
			}else{
				$id = "erroModal";
			}
				
			$html = '<div class="modal fade" id="'.$id.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">';
			$html .= '<div class="modal-dialog" role="document">';
			$html .= '<div class="modal-content">';
			
			if($this->tipomodal == 0){
				$html .= '<div class="modal-header">';
				$html .= '<button type="button" class="close" data-dismiss="modal" aria-label="Close">';
				$html .= '<span aria-hidden="true">&times;</span>';
				$html .= '</button>';
				$html .= '<h4 class="modal-title w-100" id="myModalLabel">Card Inserido</h4>';
				$html .= '</div>';
				$html .= '<div class="modal-body">';
				$html .= $text;
				$html .= '</div>';
			}else{
				$html .= '<div class="modal-header">';
				$html .= '<button type="button" class="close" data-dismiss="modal" aria-label="Close">';
				$html .= '<span aria-hidden="true">&times;</span>';
				$html .= '</button>';
				$html .= '<h4 class="modal-title w-100" id="myModalLabel">Erro ao inserir Card! </h4>';
				$html .= '</div>';
				$html .= '<div class="modal-body">';
				$html .= $text;
				$html .= '</div>';
			}
			
			$html .= '<div class="modal-footer">';
			$html .= '<button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>';
			$html .= '</div>';
			$html .= '</div>';
			$html .= '</div>';
			$html .= '</div>';
			
		
		return $html;
	}
	
	function defineText(){
		if($this->tipomodal == 0){
			$text = 'O seu modal foi inserido com sucesso no card escolhido';
		}else{
			$text = 'O teu card não pode ser inserido, verifique as informações e tente novamente';
		}
		
		return $text;
	}
	
	function show(){
			$text = $this->defineText();
			$html = $this->defineModal($text);

			echo $html;	
	}
	
}