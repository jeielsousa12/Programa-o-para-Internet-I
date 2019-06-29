<?php 

	include_once '../controllers/produto.php';
	include_once '../models/conexao.php';
	include_once '../models/produtoDAO.php';
	include_once 'header.php';

	$idProduto = $_GET["id"];

	$ca = new produtoDAO();

	$result = $ca->buscar_Produto($pdo,$idProduto);
	

	if($result){

		$row = $result->fetch(PDO::FETCH_OBJ);
	}
		
?>
	<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light">Atualizar Produto</h3>
		<form method="post" action="../models/alterar_Produto.php">
			
			<input type="hidden" name="idproduto" value="<?php echo $row ->idproduto; ?>">
	  		<div >
	    		<label>Nome:</label>
	    		<input type="text"  name="nome" required="" value="<?php echo $row ->nome; ?>">
	  		</div>
	  		<div>
	    		<label>QUANTIDADE:</label>
	    		<input type="text" name="quantidade" value="<?php echo $row ->quantidade; ?>">
	 	    </div>
	 	    <div>
	    		<label>CATEGORIA:</label>
	    		<input type="text" name="categoria" value="<?php echo $row ->categoria; ?>">
	 	    </div>
	 	    <div>
	    		<label>VALOR:</label>
	    		<input type="text" name="valor" value="<?php echo $row ->valor; ?>">
	 	    </div>

	  		
	  		
	 		   <button type="submit" name="btn-editar" class="btn">Atualizar</button>
	 		   <a href="form_listar_produto.php" class="btn-floating green modal-trigger"><i class="material-icons">like</i>></a>
		</form>

</div>
</div>
	<?php

  include_once 'footer.php'; 
  
?>