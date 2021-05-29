<html>
<head>
	<title>Locatec | Cadastro</title>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/main.css">
	<link rel="icon" href="http://localhost/img/favicon/fav5.jpg" type="image/jpg" sizes="32x32">
	
	<!-- [Sidnei] SINCRONIZA A PAGINA A CADA 30 segundos -->
	<meta http-equiv="refresh" content="5">

	<!------------------------------------------------ Bootstrap CSS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body>
<!----------------------------------- INICIO CORPO DO SITE -->
<div class="container-fluid">
  <h1>
    <b>
		<a href="../index.html">Locatec</a>
	</b>
		> <a class="breadcrumblink" href="index.php"> Home </a>
		> <a class="breadcrumblink" href="edtUser.php"> Editar usuário </a>
  </h1>
</div>


<!------- MENU ----------- INICIO -->
<nav class="navMain">
    <ul> <!--  style="background: #ff9999;" -->
        <li>
			<a href="#tab1" data-toggle="collapse" data-target="#tabn">Locação</a>
		</li>
        <li>
			<a href="../Frotas.html">Frotas</a>
		</li>
        <li>
			<a href="../cadastro.html">Clientes</a>
		</li>
        <li>
			<a href="../locacao.html">Veículos</a>
		</li>
		
		<div class="loginButton">
			<li>
				<a href="#login.html" class="activeMenu" style="font-weight: bold;">$userName</a>	<!--	LOGIN	-->
			</li>
			<li>
				<a href="#cadastro.html" style="font-weight: bold;">$Logoff</a>	<!--	CADASTRO	-->
			</li>
		</div>
    </ul>
</nav>
<!------- MENU ----------- FIM -->


<!------- SUB-MENU 01 ----------- INICIO -->

<div id="tabn" class="collapse">
	<div class="tabs">
		<div id="tab1">
			
			<h5>Alugar</h5>
			<table>
				<tr>
					<td>
				<label>Local de retirada </label>
					</td>
					<td>
				<input type="text" name="local">
					</td>
					<td>
				<label>Data/Hora Retirada </label>
					</td>
					<td>
				<input type="date" name="datahoraretira"><br>
					</td>
				</tr>
				<tr>
					<td>
					</td>
					<td>
					</td>
					<td>
				<label>Data/Hora Devolução </label>
					</td>
					<td>
				<input type="date" name="datahoradevolucao"><br>
					</td>
					<td>
						<!--  -->
					</td>
					<td>
						<!--  -->
					</td>
					<td>
						<!--  -->
					</td>
					<td>
			<input type="submit" value="buscar" name="buscar" 
				   id="buscar" onclick="location.href='Confirmação.html'"><br>
					</td>
				</tr>
			</table>
		</div>
	</div>
</div>
<!------- SUB-MENU 01 ----------- FIM -->

	
<!------- CONTEUDO-CORPO-SITE ----------- INICIO -->
<div class="global-body-content">
<div class="body-content-layer-1">

<H1>Listar/Editar usuários</H1>

<br>
<br>
<br>
<h4>
		<!-- 
	<b>Lembrete: </b>
		<br>
		<br>
			<p style="width:400px;margin:auto;">Aqui será trazida a lista de usuarios existentes no banco e dados basico que podem ser editados</p> -->
</h4>

<?php
$strcon = mysqli_connect('localhost','root','','locatec') 
    or die('Erro ao conectar ao banco de dados');

$sql = "select * from usuarios";
// $sql .= "('','$data','$nome','$sobrenome','$cpf','$email','$login','$senha','$userType')";

//$result = mysqli_query($strcon,$sql);
	//or die("Erro ao tentar cadastrar registro");
//mysqli_close($strcon);
echo "<br>";
$result = mysqli_query($strcon,$sql);
	// echo [$result]; //Não traz os resultados de forma legivel
	//////////////////////////////////////////////////////////////
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo 
				"ID: ".$row["userId"].
				" - NOME: ".$row["userFirstName"].
				" - SOBRENOME: ".$row["userLastName"].
				"<br>";
		}
	} else {
		echo "0 results (Seu banco de dados está em branco...)";
	}
$strcon->close();
?>


<?php
	/*
	while($row = mysqli_fetch_array($result)) {
	    echo $row['userEmail']; // Print a single column data
	    echo print_r($row);       // Print the entire row data
	}*/

	//////////////////////////////////////////////////////////////
	/*
	mysqli_query($strcon,$sql)
		or die("Erro ao tentar cadastrar registro. Contate seu suporte."
			.mysqli_close($strcon)
			);*/
?>


</div>
</div>

<!------- CONTEUDO-CORPO-SITE ----------- FIM -->

</body>
</html>