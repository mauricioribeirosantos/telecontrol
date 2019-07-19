<?php

	include('../model/conecta.php');
	include('funcoes.php');

	$id = $_GET['id'];

	if(deletaFuncionario($db, $id)) {
		header('Location: ../view/form-cadastra-interno.php');
	}
	else {
		echo "Erro";
		echo "id ".$id;
	}