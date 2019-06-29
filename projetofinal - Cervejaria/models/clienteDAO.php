<?php 
	class clienteDAO{
		
		//Função Cadastrar 
		public function inserir_Cliente($pdo, $nome, $endereco, $cpf, $telefone, $email, $senha){
			$result = $pdo->exec("INSERT INTO cliente(nome, endereco, cpf, telefone, email, senha) VALUES ('$nome', '$endereco','$cpf','$telefone','$email', '$senha' )");

			if ($result) {
				echo 'Cadastrado com sucesso!';
				header("Location: ../views/form_listar_clientes.php"); 

			}else{
				echo 'Não foi possível cadastrar cliente';
			}
		}
		//função Listar
		public function listar_Cliente($pdo){
			$result = $pdo->query("SELECT * FROM cliente");

			return $result;
			

		}

		//alTERAR
		public function alterar_Cliente($pdo, $id, $nome, $endereco, $cpf, $telefone, $email){
			$result = $pdo -> query("UPDATE cliente SET nome = '$nome', endereco = '$endereco', cpf = '$cpf', telefone = '$telefone', email = '$email' WHERE idcliente = '$id'");
			if ($result) {
				echo "Cliente atualizado com sucesso!";
				header("Location: ../views/form_listar_clientes.php"); 

			}else{
				echo "Erro ao atualizar!";
			}	

			$pdo = null;
		}

		public function buscar_Cliente($pdo, $id){
			$result = $pdo->query("SELECT * FROM cliente WHERE idcliente = $id ");
			return $result;
		}


		//DELETAR

		public function deletar_Cliente($pdo, $id){
			$result = $pdo -> query("DELETE FROM cliente WHERE idcliente = '{$id}'");
			if ($result) {
				echo "Deletado com sucesso!";
				header("Location: ../views/form_listar_clientes.php"); 
				
			}else {
				echo "Erro ao deletar!"; 
			}
		}
		


	}
 ?>