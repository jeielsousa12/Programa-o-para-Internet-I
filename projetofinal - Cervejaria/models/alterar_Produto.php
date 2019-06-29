<?php 

	include_once '../controllers/produto.php';
	include_once 'conexao.php';
	include_once 'produtoDAO.php';

	$produto = new produto();
	$dao = new produtoDAO();

	$produto -> setIdProduto($_POST['idproduto']);

	$produto -> setNome($_POST['nome']);
	$produto -> setQuantidade($_POST['quantidade']);
	$produto -> setCategoria($_POST['categoria']);
	$produto -> setValor($_POST['valor']);
	


	$dao -> alterar_Produto($pdo, $produto->getIdProduto(), $produto->getNome(), $produto->getQuantidade(),$produto->getCategoria(), $produto->getValor());


 ?>