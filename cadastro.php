<html>
<head>
	<title>Locatec | Cadastro</title>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel = "stylesheet" href = "css/style.css">
	<link rel="icon" href="http://localhost/img/favicon/fav5.jpg" type="image/jpg" sizes="32x32">
	
	<!-- [Sidnei] SINCRONIZA A PAGINA A CADA 30 segundos -->
	<!--<meta http-equiv="refresh" content="10"; url="cadastro.html"/>-->
	
	<!------------------------------------------------ Bootstrap CSS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 
</head>
<body>

<div class="global-body-content">
<div class="body-content-layer-1">

<div style="margin-top: 100px; text-align: center;">
<h1>
<br>
<br>

<!-- ---------------------------------------------- INICIO PHP -->
<?php
	
//"delete from usuarios" 
	//(apaga todos os registros da tabela) - Apos testes...

	/*$nome = $_POST['cadFirstName'];
	$sobrenome = $_POST['cadLastName'];
	$email = $_POST['cadEmail'];
	$senha = sha1($_POST['cadSenha']);*/

	$data = date("Y/m/d");
	// $userType = $_POST['userType'];
	$nome = $_POST['userFirstName'];
	$sobrenome = $_POST['userLastName'];
	$cpf = $_POST['userCPF'];
	$email = $_POST['userEmail'];
	// $login = $_POST['userLogin'];
	$senha = sha1($_POST['userPass']);

	//echo "$nome <br>, $sobrenome <br>, $email <br>, $senha <br><br><br>";

//===================== Cria a string de conexão $strcon
//$mysqli = new mysqli('localhost','root','','testing')
//if($mysqli -> connect_errno)

$strcon = mysqli_connect('localhost','root','','locatec') 
    or die('Erro ao conectar ao banco de dados');
$sql = "INSERT INTO usuarios VALUES ";
// $sql .= "('$nome', '$sobrenome', '$email', '$senha')";
$sql .= "('','$data','$nome','$sobrenome','$cpf','$email','webCad','$senha','1')";

mysqli_query($strcon,$sql)
	or die("Erro ao tentar cadastrar registro. Contate seu suporte."
		.mysqli_close($strcon)
		);

echo "Cadastrado com sucesso!";
//	} // ELSE -- FIM
?>
<!-- ---------------------------------------------- FIM PHP -->


</h1>
<br>
<br>
<br>
<br>
   <a href="cadastro.html">Retornar</a>
<br>
Retornando a página anterior...
<br>

</div>
</div>
</div>
</body>
</html>