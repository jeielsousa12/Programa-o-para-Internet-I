<?php 
	include_once '../controllers/produto.php';
	include_once 'conexao.php';
	include_once 'produtoDAO.php';

	$produto = new Produto();
	$dao = new produtoDAO();
	$produto-> setNome($_POST['nome']);
	$produto -> setQuantidade($_POST['quantidade']);
	$produto -> setCategoria($_POST['categoria']);
	$produto -> setValor($_POST['valor']);
	

	$dao -> inserir_produto($pdo, $produto->getNome(), $produto->getQuantidade(),
			 $produto->getCategoria(), $produto->getValor());

 ?>