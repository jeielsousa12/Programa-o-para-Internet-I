<?php 
	include_once '../controllers/cliente.php';
	include_once '../models/conexao.php';
	include_once '../models/clienteDAO.php';

	$id = $_GET['id'];

	$dao = new clienteDAO();
	$dao -> deletar_Cliente($pdo, $id);

?>