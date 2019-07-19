<?php
	
	function cadastraFuncionario($db, $nome, $email, $cpf) {
		$query = "INSERT INTO funcionario (nome, email, cpf) VALUES ('{$nome}', '{$email}', '{$cpf}')";
		return mysqli_query($db, $query);
	}

	
	function retornaFuncionario($db, $nome) {
		$funcionarios = array();
		$query = mysqli_query($db, "SELECT * FROM funcionario WHERE nome like '%{$nome}%' OR cpf = '{$nome}'");
		while($funcionario = mysqli_fetch_assoc($query)){
			array_push($funcionarios, $funcionario);
		}
		return $funcionarios;
	}

	function deletaFuncionario($db, $id) {
		$query = "DELETE FROM funcionario WHERE id = {$id}";
		return mysqli_query($db, $query);
	}

	function teste($db, $nome) {
		$query = mysqli_query($db, "SELECT * FROM funcionario WHERE nome = '{$nome}'");
		return mysqli_fetch_assoc($query);
	}

	function teste2($db, $id) {
		$funcionarios = array();
		$query = mysqli_query($db, "SELECT * FROM funcionario WHERE id = {$id}");
		while($funcionario = mysqli_fetch_assoc($query)){
			array_push($funcionarios, $funcionario);
		}
		return $funcionarios;
	}

	function retornaUsuario($db, $id) {
		$query = mysqli_query("SELECT * FROM funcionario WHERE id = {id}");
		return mysqli_fetch_assoc($query);
	}

	function alteraFuncionario($db, $id) {
		$query = "UPDATE funcionario SET nome = '{$nome}', email = '{$email}'";
		return mysqli_query($db, $query);
	}

	function retornaFuncionarios($db, $id) {
		$funcionarios = array();
		$query = mysqli_query($db, "SELECT * from funcionario");
		while($funcionario = mysqli_fetch_assoc($query)) {
			array_push($funcionarios, $funcionario);
		}
		return $funcionarios;
	}