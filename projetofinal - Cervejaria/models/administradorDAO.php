<?php 
	class administradorDAO{
		
		//CADASTRO 
		public function inserir_Administrador($pdo, $nome, $endereco, $cpf, $telefone, $email, $senha){
			$result = $pdo->exec("INSERT INTO administrador(nome, endereco,cpf, telefone, email, senha) VALUES ('$nome', '$endereco','$cpf','$telefone','$email', '$senha' )");

			if ($result) {
				echo 'Cadastrado com sucesso!';
				 header("Location: ../views/form_listar_adiministrador.php"); 
			}else{
				echo 'Não foi possível cadastrar administrador';
			}
		}

		public function listar_Administrador($pdo){
			$result = $pdo->query("SELECT * FROM administrador");

			return $result;
		}




		//DELETAR
		public function deletar_Administrador($pdo, $id){
			$result = $pdo -> query("DELETE FROM administrador WHERE idadministrador = '{$id}'");
			if ($result) {
				echo "Deletado com sucesso!";
				header("Location: ../views/form_listar_adiministrador.php"); 
 
				
			}else {
				echo "Erro ao deletar!"; 
			}
		}


		// atualizar
		public function alterar_Administrador($pdo, $id, $nome, $endereco, $cpf, $telefone, $email){
			$result = $pdo -> query("UPDATE administrador SET nome = '$nome', endereco = '$endereco', cpf = '$cpf', telefone = '$telefone', email = '$email' WHERE idadministrador = '$id'");
			if ($result) {
				echo "Cliente atualizado com sucesso!";
				header("Location: ../views/form_listar_adiministrador.php"); 

			}else{
				echo "Erro ao atualizar!";
			}	

			$pdo = null;
		}

		public function buscar_Administrador($pdo, $id){
			$result = $pdo->query("SELECT * FROM administrador WHERE idadministrador = $id ");
			return $result;
		}

		

	}
 ?>