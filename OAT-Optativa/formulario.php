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


						<?php

							$actionEditar = "";
							$id = 0;
							$nome = NULL;
							$email = NULL;
						
							if (isset($_GET["editar"])) {
								$id = $_GET["editar"];
								$sql = "SELECT * FROM usuarios WHERE id = $id";
								$query = mysqli_query($link, $sql);
								if($row = mysqli_fetch_assoc($query)){
									$nome = $row["nome"];
									$email = $row["email"];									
								}
								else{
									echo "Falha ao carregar registro!";
								}

								$actionEditar = "&editar=$id";
							}

						?>

				<form action="?pg=processar<?=$actionEditar?>" method="POST">
				<div class="formulario">
					<h1>Formulário</h1>	
					<ul>
						<li>Nome:<input type="text" name="nome" value="<?= $nome ?>"></li>	
						<li>Email:<input type="text" name="email" value="<?= $email ?>"></li>	
						<li><input type = "submit" value="Enviar"></li>
					</ul>
				</div>
				</form>

				<div></div>		

			</div>	
			
		</div>

				
	</div>

</body>
</html>