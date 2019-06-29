<?php
// header
  include_once 'header.php'; 
  
?>

	<div class="row">
	<div class="col s12 m6 push-m3">
	<h3 class="light"><center>Cadastrar Cliente</center></h3>

		

		<form method="post" action="../models/Cadastrar_Cliente.php">
			<div class="input-field col s12">
			<label>Nome:</label>
			<input type="text" name="nome">
			</div>

			<div class="input-field col s12">		
			<label>Endereco:</label>
			<input type="text" name="endereco">
			</div>
			
			<div class="input-field col s12">
			<label>CPF:</label>
			<input type="text" name="cpf">
			</div>
			
			<div class="input-field col s12">
			<label>Telefone:</label>
			<input type="text" name="telefone">
			</div>
			<div class="input-field col s12">
			<label>Email:</label>
			<input type="text" name="email">
			</div>
			<div class="input-field col s12">
			<label>Senha:</label>
			<input type="password" name="senha">
			</div>
			
			<button type="submit" name="btn-editar" class="btn">Cadastrar</button>
			<a href="form_listar_clientes.php" class="btn-floating green modal-trigger"><i class="material-icons">like</i>></a>
		</form>
		<br>
			
		</div>
</div>
<?php

  include_once 'footer.php'; 
  
?>