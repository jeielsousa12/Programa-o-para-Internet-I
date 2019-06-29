<?php 
	class produtoDAO{
		
		//CADASTRO 
		public function inserir_produto($pdo, $nome, $quantidade, $categoria, $valor){
			$result = $pdo->exec("INSERT INTO produto(nome, quantidade, categoria, 
				valor) VALUES ('$nome', '$quantidade','$categoria','$valor')");

			if ($result) {
				echo 'Cadastrado com sucesso!';
				header("Location: ../views/form_listar_produto.php");
			}else{
				echo 'Não foi possível cadastrar cliente';
			}
		}

		public function listar_Produto($pdo){
			$result = $pdo->query("SELECT * FROM produto");

			return $result;
		}



		// DELETAR

		public function deletar_Produto($pdo, $id){
			$result = $pdo -> query("DELETE FROM produto WHERE idproduto = '{$id}'");
			if ($result) {
				echo "Deletado com sucesso!"; 
				header("Location: ../views/form_listar_produto.php");
				
			}else {
				echo "Erro ao deletar!"; 
			}
		}

		// Alterar
		public function alterar_Produto($pdo, $id, $nome, $quantidade, $categoria, $valor){
			$result = $pdo -> query("UPDATE produto SET nome = '$nome', quantidade = '$quantidade', categoria = '$categoria', valor = '$valor'  WHERE idproduto = '$id'");
			if ($result) {
				echo "PRoduto atualizado com sucesso!";
				header("Location: ../views/form_listar_produto.php");
			}else{
				echo "Erro ao atualizar!";
			}	

			$pdo = null;
		}

		public function buscar_Produto($pdo, $id){
			$result = $pdo->query("SELECT * FROM produto WHERE idproduto = $id ");
			return $result;
		}

		


	}
 ?>