<?php 
	include_once '../controllers/produto.php';
	include_once '../models/conexao.php';
	include_once '../models/produtoDAO.php';

	$id = $_GET['id'];

	$dao = new produtoDAO();
	$dao -> deletar_Produto($pdo, $id);

?>