<?php
// header
  include_once 'header.php'; 
  
?>
<div class="row">
	<div class="col s12 m6 push-m3">
	<h3 class="light"><center>Cadastrar Produto</center></h3>

		<form method="post" action="../models/Cadastrar_Produto.php">
			<div class="input-field col s12">
			<label>Nome:</label>
			<input type="text" name="nome">
			</div>
			<br><br>
			<div class="input-field col s12">
			<label>Quantidade: </label>
			<input type="text" name="quantidade">
			</div>

			<div class="input-field col s12">
			<label>Categoria: </label>
			<input type="text" name="categoria">
			</div>
			<br><br>
			<div class="input-field col s12">
			<label>Valor: </label>
			<input type="text" name="valor">
			</div>
			
			<button type="submit" name="btn-editar" class="btn">Cadastrar</button>
			<a href="form_listar_produto.php" class="btn-floating green modal-trigger"><i class="material-icons">like</i>></a>
		</form>

		</div>
</div>
<?php

  include_once 'footer.php'; 
  
?>