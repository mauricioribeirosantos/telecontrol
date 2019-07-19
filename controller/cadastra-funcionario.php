<?php

	include('../model/conecta.php');
	include('funcoes.php');

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$cpf = $_POST['cpf'];

	if(cadastraFuncionario($db, $nome, $email, $cpf)) {
		header("Location: ../view/form-cadastra-funcionario.php?acao=1");
	}
	else {
		header('Location: ../view/form-cadastra-funcionario.php?acao=2');
	}