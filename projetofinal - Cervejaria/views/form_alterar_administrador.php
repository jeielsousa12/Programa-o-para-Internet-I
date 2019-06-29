<?php 

	include_once '../controllers/administrador.php';
	include_once '../models/conexao.php';
	include_once '../models/administradorDAO.php';
	include_once 'header.php';

	$idAdministrador = $_GET["id"];

	$ca = new administradorDAO();

	$result = $ca->buscar_Administrador($pdo,$idAdministrador);
	

	if($result){

		$row = $result->fetch(PDO::FETCH_OBJ);
	}
		
?>
	<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light">Atualizar Administrador</h3>
		<form method="post" action="../models/alterar_Administrador.php">
			
			<input type="hidden" name="idadministrador" value="<?php echo $row ->idadministrador; ?>">
	  		<div >
	    		<label>Nome:</label>
	    		<input type="text"  name="nome" required="" value="<?php echo $row ->nome; ?>">
	  		</div>
	  		<div>
	    		<label>ENDERECO:</label>
	    		<input type="text" name="endereco" value="<?php echo $row ->endereco; ?>">
	 	    </div>
	  		<div>
	  			<label>CPF:</label>
	    		<input type="text" name="cpf" value="<?php echo $row ->cpf; ?>">
	  		</div>

	  		<div>
	  			<label>TELEFONE:</label>
	    		<input type="text" name="telefone" value="<?php echo $row ->telefone; ?>">
	  		</div>
	  		<div>
	  			<label>EMAIL:</label>
	    		<input type="text" name="email" value="<?php echo $row ->email; ?>">
	  		</div>
	   	
	  		
	 		    <button type="submit" name="btn-editar" class="btn">Atualizar</button>
	 		    <a href="form_listar_adiministrador.php" class="btn-floating green modal-trigger"><i class="material-icons">like</i>></a>
		</form>
	</div>
</div>
	<?php

  include_once 'footer.php'; 
  
?>