<div class="card mt-3 col-md-8 mx-auto"  id="tableCard">
    <div class="card-block">
	<table class="table table-stripped table-light col-md-8 mx-auto">
	  <thead>
	    <tr>
	      <th>Acao</th>
	    </tr>
	  </thead>
	  <tbody id="tabela">
	  <?php 
	  		
	  		foreach($dados as $key => $value){
	  			$html = '<tr>';
	  			$html .= '<td>';
	  				$html .= 'Usuario: '; 
	  				$html .= $value['usuario'];
	  				$html .= " Inseriu um card na lista: ";
	  				$html .= $value['lista'];
	  			$html .= '</td>';
	  			$html .= '</tr>';
	  			echo $html;		
	  		}
	  
	  ?>
	  </tbody>
	</table>
	</div>
</div>