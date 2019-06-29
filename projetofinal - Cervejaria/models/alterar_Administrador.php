<?php 

	include_once '../controllers/administrador.php';
	include_once 'conexao.php';
	include_once 'administradorDAO.php';

	$administrador = new administrador();
	$dao = new administradorDAO();

	$administrador -> setIdAdministrador($_POST['idadministrador']);

	$administrador -> setNome($_POST['nome']);
	$administrador -> setEndereco($_POST['endereco']);
	$administrador -> setCpf($_POST['cpf']);
	$administrador -> setTelefone($_POST['telefone']);
	$administrador -> setEmail($_POST['email']);


	$dao -> alterar_Administrador($pdo,$administrador->getIdAdministrador(), $administrador->getNome(), $administrador->getEndereco(),
			 $administrador->getcpf(), $administrador->getTelefone(), $administrador->getEmail());


 ?>