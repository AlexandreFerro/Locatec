<html>
<head>
	<title>Locatec | Cadastro</title>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel = "stylesheet" href = "css/main.css">
	<link rel="icon" href="../img/favicon/fav5.jpg" type="image/jpg" sizes="32x32">
	
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
	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//"delete from usuarios" 
	//(apaga todos os registros da tabela) - Apos testes...

	$data = date("Y/m/d");
	$userType = $_POST['userType'];
	$nome = $_POST['userFirstName'];
	$sobrenome = $_POST['userLastName'];
	$cpf = $_POST['userCPF'];
	$email = $_POST['userEmail'];
	$login = $_POST['userLogin'];
	$senha = sha1($_POST['userPass']);

//===================== Cria a string de conexão $strcon

$strcon = mysqli_connect('127.0.0.1','root','','locatec') 
    or die('Erro ao conectar ao banco de dados');

$sql = "INSERT INTO usuarios VALUES ";
$sql .= "('','$data','$nome','$sobrenome','$cpf','$email','$login','$senha','$userType')";
//$sql = "SELECT userId, userLogin, userCPF, userEmail FROM usuarios"; //Query não está conectando

//$result = mysqli_query($strcon,$sql);
	//or die("Erro ao tentar cadastrar registro");
//mysqli_close($strcon);

///////////////////////////////////////////////////////
/*$strcon = mysqli_connect('localhost','root','','locatec') 
    or die('Erro ao conectar ao banco de dados');
$sql = "INSERT INTO usuarios VALUES ";
$sql .= "('$nome', '$sobrenome', '$email', '$senha')";
*/
mysqli_query($strcon,$sql)
	or die("Erro ao tentar cadastrar registro. Contate seu suporte."
		.mysqli_close($strcon)
		);
///////////////////////////////////////////////////////

// $row = mysqli_fetch_array($result);


//=============================== EM ANALISE
/*$test = print_r($row);
echo "<div style='font-size=8px;'>$test</div>";
*/
// echo "parou aqui para fins de teste";
// die();
/*
if($login == isset($row['userLogin'])){
	echo "<br> Usuário já existe, tente outro usuário... <br>";
	echo "usuário digitado: ".$login;
	die("<br> Redirecionando... <a href='addFunc.php'>Retornar</a>");

}else{

	$sqlin = "INSERT INTO usuarios VALUES ";
	$sqlin .= "('','$data','$nome', '$sobrenome', '$cpf', '$email', '$login', '$senha')";
}
*/

echo "Cadastrado com sucesso!"."<br> - ".$data;
//	} // ELSE -- FIM
?>
<!-- ---------------------------------------------- FIM PHP -->


</h1>
<br>
<br>
<br>
<br>
   <a href="addUser.php">Retornar</a>
<br>
Retornando a página anterior...
<br>

</div>
</div>
</div>
</body>
</html>