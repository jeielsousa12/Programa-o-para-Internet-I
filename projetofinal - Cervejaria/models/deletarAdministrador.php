<?php 
	include_once '../controllers/administrador.php';
	include_once '../models/conexao.php';
	include_once '../models/administradorDAO.php';

	$id = $_GET['id'];

	$dao = new administradorDAO();
	$dao -> deletar_Administrador($pdo, $id);

?>