<div class="card mt-3 col-md-8 mx-auto">
    <div class="card-block">
        <!--Header-->
        <div class="text-center">
            <h3><i class="fa fa-pencil"></i> Inserir Card:</h3>
            <hr class="mt-2 mb-2">
        </div>
        
        <!--Body-->
        <p>Insira as informacoes para inserir um card no trello</p>
		<div class="form-group">
  		<label for="sel1">Board do Trello</label>
  		<select class="form-control" id="sel1" class="selectBoard" name="boards" onfocus="buscaBoard();">
  			<option value="" disabled selected>Choose your option</option>
    		
  		</select>
		</div>
		<div class="form-group">
  		<label for="sel2">Listas dos Boards</label>
  		<select class="form-control" id="sel2" class="selectList" name="lists">
  			<option value="" disabled selected>Choose your option</option>
  		</select>
		</div>
        <!--Body-->
        <div class="md-form">
            <i class="fa fa-user prefix"></i>
            <input type="text" id="name" class="form-control" name="name">
            <label for="form3">Nome do Card: </label>
        </div>

        <div class="md-form">
            <i class="fa fa-envelope prefix"></i>
            <input type="text" id="description" class="form-control" name="desc">
            <label for="form2">Descricao: </label>
        </div>
       <div class="text-center">
            <a class="btn btn-deep-orange" onclick="insere()">Inserir</a>
        </div>
        
    </div>
</div>
<?= $modal2 ?>
<?= $modal1 ?>