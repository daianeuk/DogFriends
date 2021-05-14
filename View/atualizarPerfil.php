 <!doctype html>
<html>
	<head>
		<title>DogFriends</title>
		<meta charset="utf-8">
		<link rel="icon" type="image/png" href="imagens/iconeAba.png">
		
		<link rel="stylesheet" type="text/css" href="estilo.css">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" 
		integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	
	</head>
	
	<body>
			<div id="menu">
				<ul>
					<li><img src="imagens/logoMenu.png" width="100% "/></li>
					<li><a href= "perfil.php"><img src="imagens/iconeHome.png" width="20%" title="Perfil"/></a></li>
					<li><a href= "amigos.php"><img src="imagens/iconeAmigos.png" width="20%" title="Amigos"/></a></li>
					<li><a href= "caes.php"><img src="imagens/iconeCaes.png" width="20%" title="Cães"/></a></li>
					<li><a href= "index.html"><img src="imagens/sair.png" width="20%" title="Sair"/></a></li>				
				</ul>
		</div>		
	
		<div id="cadastro">
			<h1>Atualize o seu Perfil</h1><br>
			<div class="row">
	        	<div class="col-md-6"> 
		        	<form method="post" action="../Controller/Atualizar.php" id="usrform"><br>
						<input type="text"  placeholder= "Nome"   name="nome"></br>
						<input type="password"  placeholder= "Senha"  name="senha"></br></br>
						<input type="text"  placeholder= "Raça"   name="raca"></br></br>
						<input type="text"  placeholder= "Telefone"   name="telefone"></br></br>
						<label>Data de Nascimento</label>
						<input id="data" type ="date" name="data"/><br><br>
						<textarea id="descricao" name="descricao"  form="usrform" 
						placeholder="Escreva aqui uma breve apresentação."></textarea>
					
	        	</div>
	  
			    <div class="col-md-6"> 
						Coloque uma foto:</br>
						<img id="uploadPreview" style="width: 120px; height: 100px;" /></br>
						<input id="uploadImage" type="file" name="foto" onchange="PreviewImage();" />
					
						<script type="text/javascript">
							function PreviewImage() {
								var oFReader = new FileReader();
								oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);
								oFReader.onload = function (oFREvent) {
									document.getElementById("uploadPreview").src = oFREvent.target.result;
								};
						    };
						</script>
						
						<br><br>	
							
						<label for="gender1">Sexo:</label></br>
						<input class="a" type="radio" name="sexo" value="femea" checked>Fêmea
						<input class="a" type="radio" name="sexo" value="macho">Macho<br><br>
						<input type="submit" class="btn btn-danger" value="Atualizar"></br>
					</form>
			  	</div>
			 </div>
		</div>
	</body>
</html>
