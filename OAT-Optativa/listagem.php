<?php
require_once("conexao/conexaobd.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>OAT Optativa</title>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="css/estilo.css">

	<link rel="stylesheet" type="text/css" href="css/estilo-grid.css">

	<link rel="stylesheet" type="text/css" href="css/estilo-grid-600.css" media="screen and (max-width:600px)">
</head>
<body>

	<div id="container">

		<div id="header">
			<h1>Universidade Mérieux NutriSciences</h1>
		</div>

		<div id="menu">
			<ul>
				<li><a href="index.php"><button>Home</button></a></li>
				<li><a href="formulario.php"><button>cadastro</button></a></li>
				<li><a href="listagem.php"><button>listagem</button></a></li>
			</ul>
		</div>		

		<div class ="main">

				<div></div>

				<div class = "formulario">

					<?php

								if (isset($_GET["excluir"])) {
								$id = $_GET["excluir"];
								$sql = "DELETE FROM usuarios WHERE id = $id";
								$query = mysqli_query($link, $sql);
								if ($query === TRUE) {
								echo "Registro $id excluído com sucesso!";
							}
						}

								$sql = "SELECT * FROM usuarios ";

								$query = mysqli_query($link, $sql);


								while($row = mysqli_fetch_assoc($query)){

					?>

						<tr>
							<td>
								<?= $row["id"] ?>
							</td>
							<td>
								<?= $row["nome"] ?>
							</td>
							<td>			
								<?= $row["email"] ?>
							</td>
							<td>
								<a 
								href="?pg=cadastro&editar=<?= $row["id"] ?>"
								>
									Editar
								</a>
							</td>
							<td>
								<a 
								href="?pg=listagem&excluir=<?= $row["id"] ?>"
								>
									Excluir
								</a>
							</td>
						</tr>

					<?php 

					}

					echo "</table>";

					?>			

					

				</div>

				<div></div>		

			</div>	
			
		</div>

				
	</div>

</body>
</html>