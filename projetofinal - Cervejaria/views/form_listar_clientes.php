<?php
// header
  include_once 'header.php'; 
  

?>

	<div class="row">
		<div class="col s12 m10 push-m1 ">

		<h3 class="light"><CENTER>Listando Clientes</CENTER></h3>
		<table class="striped">
        <thead>
            <tr>
                
                <th><center>ID:</center></th>
                <th><center>Nome:</center></th>
                <th><center>Endereco:</center></th>
                <th><center>CPF:</center></th>
                <th><center>Telefone:</center></th>
                <th><center>Email:</center></th>
                
            </tr>
        </thead>
		<?php 
				include_once '../models/conexao.php';
				include_once '../models/clienteDAO.php';

					$c1 = new clienteDAO();
					$result = $c1-> listar_Cliente($pdo);

					if($result){

							while ($row = $result->fetch(PDO::FETCH_OBJ)) {
								echo '<tr>';
								echo'<td><center>'.$row -> idcliente. '</center></td>'.
								'<td><center>'.$row -> nome. '</center></td>'.
								'<td><center>'.$row -> endereco. '</center></td>'.
								'<td><center>'.$row -> cpf. '</center></td>'.
								'<td><center>'.$row -> telefone. '</center></td>'.
								'<td><center>'.$row -> email. '</center></td>'.
								'<td><a href="form_alterar_cliente.php?id='.$row -> idcliente.' " class="btn-floating orange" > <i class="material-icons">edit</i></a>'.'</td>'.
								'<td><a href="../models/deletarCliente.php?id='.$row -> idcliente.'" class="btn-floating red modal-trigger"><i class="material-icons">delete</i> </a></td>';
								echo '</tr>';
								echo "<br>";
							}

					}
		 
					echo '</table>';
		 ?>
		 	<br>

			 		   <a class="btn  blue-logo" href="index-.html">Home</a>
			 		   <a class="btn  blue-logo" href="form_cadastrar_cliente.php">Cadastrar Cliente</a>

		</div>
	</div>


<?php

  include_once 'footer.php'; 
  
?>
