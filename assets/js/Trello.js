	function autoriza(){
		var token = 'https://trello.com/1/authorize?expiration=never&name=SinglePurposeToken&key='+'a9a7b576dbdc25e01e2aa04e46f85c95';
		var authenticationSuccess = function() { 
		
		console.log('Successful authentication'); 
		};
		var authenticationFailure = function() { console.log('Failed authentication'); 
		};

		Trello.authorize({
			  type: 'popup',
			  name: 'Trello API',
			  scope: {
			    read: 'true',
			    write: 'true'},
			  expiration: 'never',
			  success: authenticationSuccess,
			  error: authenticationFailure
			});
 		}
		
 		function buscaBoard(){
			// pegar todos os boards do trello
 				$('#sel1').find('option').remove();
 				
 				var success = function(successMsg) {
 	 			console.log('sucesso');
 	 			var b = a['responseJSON'];
 	 	 		
 	 			for(var i in b){
 	 	 			var op = document.createElement('option');
 	 	 			op.setAttribute('value', ''+b[i].id+'');
 	 	 			op.setAttribute('name', ''+b[i].name+'');
 	 	 			var textnode = document.createTextNode(''+b[i].name+'');
 	 	 		    op.appendChild(textnode);
 	 	 			document.getElementById("sel1").appendChild(op);
 	 	 			}
 			};
 	 		       		
 	 		var error = function(errorMsg) {
 	 			console.log('erro');
 	 		};

 	 		var a = Trello.get('/member/me/boards', success, error); 
 		};
 		
 		;(function(){
 		// Quando o #primeiroSelect for alterado, vai executar a seguinte função:
 			  $('#sel1').on('change', function () {
 			    var val = $(this).val(); // Pega o valor do select alterado
 			    var options = {}[val];
 	 	 		var outroSelect = $('#sel2'); // Pega o select que vai receber os novos valores
 	 	 		$('#sel2').find('option').remove();
 	 	 		
 	 	 		var success = function(successMsg) {
 				  	console.log('sucesso');
 				  	var b = list['responseJSON'];
 				  	
 	 	 	 		
 	 	 	 		for(var i in b){
 	 	 	 			var op = document.createElement('option');
 	 	 	 			op.setAttribute('value', ''+b[i].id+'');
 	 	 	 			op.setAttribute('name', ''+b[i].name+'');
 	 	 	 			var textnode = document.createTextNode(''+b[i].name+'');
 	 	 	 			op.appendChild(textnode);
 	 	 	 			document.getElementById("sel2").appendChild(op);
 	 	 	 			}
 			    };
 				
 				var error = function(errorMsg) {
 				  	console.log('erro');
 				};

 				var list = Trello.get('/boards/'+val+'/lists', success, error);
 			  	});
 			
 			})();
 	
 		
 		function insere(){
 				var idList = $('#sel2').val();
 				var nameCard =$('#name').val();
 				var descriptionCard = $('#description').val();
 				
 				var myList = ""+idList+"";
 				var creationSuccess = function(data) {
 					
 				console.log('Card created successfully. Data returned:' + JSON.stringify(data));
 				alert('Card Inserido Com Sucesso');
 				
 				};
 				
 				var newCard = {
 				  name: nameCard, 
 				  desc: descriptionCard,
 				  // Place this card at the top of our list 
 				  idList: myList,
 				  pos: 'top'
 				};
 				
 				Trello.post('/cards/', newCard, creationSuccess);
 			}
 		
 	