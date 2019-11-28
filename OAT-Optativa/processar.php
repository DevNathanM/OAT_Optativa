<?php

require_once("conexao/conexaobd.php");

$nome = $_POST["nome"];
$email = $_POST["email"];

if(isset($_GET["editar"]) && $_GET["editar"] != 0){
	$id = $_GET["editar"];
	$sql = "UPDATE usuarios SET nome='$nome', email='$email' WHERE id = $id";
}
else{

	$sql = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";
}

$query = mysqli_query($link, $sql);

if ($query === TRUE) 
{

	echo '
	<div class="alert alert-success" role="alert">
  		Cadastrado com sucesso!
	</div>';	
}
else{

	echo '
	<div class="alert alert-danger" role="alert">
  		Falhou!
	</div>';
}

?>