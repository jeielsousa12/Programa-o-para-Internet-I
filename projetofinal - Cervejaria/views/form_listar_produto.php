<?php
// header
  include_once 'header.php'; 
  

?>
	<div class="row">
		<div class="col s12 m10 push-m1 ">

	


		<h3 class="light"><CENTER>Listando Produtos</CENTER></h3>
		<table class="striped">
        <thead>
            <tr>
                
                <th><center>ID:</center></th>
                <th><center>NOME</center></th>
                <th><center>Quantidade:</center></th>
                <th><center>Categoria:</center></th>
                <th><center>Valor:</center></th>
                
            </tr>
        </thead>

	<?php 
				include_once '../models/conexao.php';
				include_once '../models/produtoDAO.php';

					$c1 = new produtoDAO();
					$result = $c1-> listar_Produto($pdo);

					if($result){

							while ($row = $result->fetch(PDO::FETCH_OBJ)) {
								echo '<tr>';
										echo '<td><center>'.$row -> idproduto. '</center></td>'.
											'<td><center>'.$row -> nome. '</center></td>'.
											'<td><center>'.$row -> quantidade. '</center></td>'.
											'<td><center>'.$row -> categoria. '</center></td>'.
											'<td><center>'.$row -> valor. '</center></td>'.
											'<td><center><a href="form_alterar_produto.php?id='.$row -> idproduto.'" class="btn-floating orange"><i class="material-icons">edit</i> </a>'.'</center></td>'.
											'<td><a href="../models/deletarProduto.php?id='.$row -> idproduto.'" class="btn-floating red modal-trigger"><i class="material-icons">delete</i> </a></td>';
								echo '</tr>';

								echo "<br>";
							}

					}
		 
					echo '</table>';
		 ?>
		 <br>
		 	 <a class="btn  blue-logo" href="index-.html">Home</a>
			 <a class="btn  blue-logo" href="form_cadastrar_produto.php">Cadastrar Produto</a>
		 </div>
	</div>

<?php

  include_once 'footer.php'; 
  
?>