<?php
// header
  include_once 'header.php'; 
  

?>

<div class="row">
		<div class="col s12 m10 push-m1 ">

		<h3><CENTER>Listando Administradores</CENTER></h3>
			<table class="striped">
        <thead>
            <tr>
                
                <th><center>Id:</center></th>
                <th><center>Nome</center></th>
                <th><center>Endereço:</center></th>
                <th><center>CPF:</center></th>
                <th><center>Telefone:</center></th>
                <th><center>Email:</center></th>
                
            </tr>
        </thead>

		<?php 
				include_once '../models/conexao.php';
				include_once '../models/administradorDAO.php';

					$c1 = new administradorDAO();
					$result = $c1-> listar_Administrador($pdo);

					if($result){

							while ($row = $result->fetch(PDO::FETCH_OBJ)) {
								echo '<tr>';
								echo'<td><center>'.$row -> idadministrador. '</center></td>'.
								'<td><center>'.$row -> nome. ' </center> </td>'.
								'<td><center>'.$row -> endereco. ' </center></td>'.
								'<td><center>'.$row -> cpf. '</center></td>'.
								'<td><center>'.$row -> telefone. '</center> </td>'.
								'<td><center>'.$row -> email. ' </center></td>'.
								'<td><center><a href="form_alterar_administrador.php?id='.$row -> idadministrador.'" class="btn-floating orange"><i class="material-icons">edit</i></a>'.'</center></td>'.
								'<td><center><a href="../models/deletarAdministrador.php?id='.$row -> idadministrador.'" class="btn-floating red modal-trigger"> <i class="material-icons">delete</i> </a></center></td>';
								echo '</tr>';
								echo "<br>";
							}

					}
		 
					echo '</table>';
		 ?>
		 <br>

		 				<a class="btn  blue-logo" href="index-.html">Home</a>
			 		   <a class="btn  blue-logo" href="form_cadastrar_administrador.php">Cadastrar Administrador</a>

			</div>
	</div>


<?php

  include_once 'footer.php'; 
  
?>
