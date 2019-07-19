<?php
	include('cabecalho.php');
	include('../model/conecta.php');
	include('../controller/funcoes.php');
?>
	
<div class="titulo">
	<h1>Formulário de cadastro interno</h1>
</div>

<div class="Formulario">
	<div class="container">
		<h4 class="titulo">Buscar funcionário</h4>

		<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
			<div class="form-group">
				<div class="row">
					<div class="col col-sm-6">
						<label>Nome Funcionário ou CPF</label>
						<input type="text" class="form-control" name="nome" id="nome">
					</div>
				</div>
			</div>
			<button type="submit" class="btn btn-primary">Buscar</button>
		</form>

	</div>	
</div>

<?php
	if(!empty($_POST)) {
		$nome = $_POST['nome'];

		$funcionarios = retornaFuncionario($db, $nome);

		if(count($funcionarios) > 0) {
			?>
			<div class="container">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">Id</th>
							<th scope="col">Nome</th>
							<th scope="col">E-mail</th>
							<th scope="col">CPF</th>
						</tr>
					</thead>
					<tbody>
					<?php
					foreach($funcionarios as $funcionario) {
					?>
						<tr>
							<td><?=$funcionario['id']?></td>
							<td><?=$funcionario['nome']?></td>
							<td><?=$funcionario['email']?></td>
							<td><?=$funcionario['cpf']?></td>
							<td><a class="btn btn-danger" href="../controller/deleta-funcionario.php?id=<?=$funcionario['id']?>">Excluir</a></td>
						</tr>
					<?php
					}//fim foreach
					?>
					</tbody>
				</table>
			</div>
			<?php
		}//fim count
		else {
			?>
			<div class="alert alert-danger titulo">
				Funcionário não encontrado!
			</div>
			<?php
		}
	}//fim empty
?>

<?php
	include('rodape.php');
?>