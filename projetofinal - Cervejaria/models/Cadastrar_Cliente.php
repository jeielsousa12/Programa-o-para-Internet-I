<?php 
	include_once '../controllers/cliente.php';
	include_once 'conexao.php';
	include_once 'clienteDAO.php';

	$cliente = new cliente();
	$dao = new clienteDAO();
	$cliente -> setNome($_POST['nome']);
	$cliente -> setEndereco($_POST['endereco']);
	$cliente -> setCpf($_POST['cpf']);
	$cliente -> setTelefone($_POST['telefone']);
	$cliente -> setEmail($_POST['email']);
	$cliente -> setSenha($_POST['senha']);

	$dao -> inserir_Cliente($pdo, $cliente->getNome(), $cliente->getEndereco(),
			 $cliente->getcpf(), $cliente->getTelefone(), $cliente->getEmail(), $cliente->getSenha());

 ?>