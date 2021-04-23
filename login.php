<html>
<head>
<title>Locatec | Login</title>
    
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel = "stylesheet" href = "css/style.css">

<!--Google fonts-->
<!--    <link rel="preconnect" href="https://fonts.gstatic.com">-->
    <link href="https://fonts.googleapis.com/css2?family=Pompiere&display=swap" rel="stylesheet"> 
    
<!-- [Sidnei] SINCRONIZA A PAGINA A CADA 30 segundos -->
<!--<meta http-equiv="refresh" content="10"; url="cadastro.html"/>-->

  <!------------------------------------------------ Bootstrap CSS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 
</head>
<body>

<div style="margin-top: 100px; text-align: center; font: 30px pompiere">
<!--<h1>-->

<!-- ---------------------------- INICIO PHP -->
<?php

$email = $_POST['email'];
$senha = $_POST['senha'];



//================================= Seguranca contra SQL INJECTION
$email = stripcslashes($email);
$senha = stripcslashes($senha);
//$email = mysqli_real_escape_string($email);
//$senha = mysqli_real_escape_string($senha);



//================================= Conexao com banco de dados
$con = mysqli_connect("localhost","root","","locatec");
if($con){
	echo "teste conexao DB - OK <br>";
}else{
	die(mysqli_error($con));
}

//mysql_select_db("locatec");



//================================= Conexao com dados do usuario
	echo "antes da query - OK <br>";
	
$result = mysqli_query($con,"select * from usuarios where email = '$email' and senha = '$senha'") or die("Dados incorretos " .mysqli_error());
					   
	echo "depois da query - OK <br>";

					   
if($result){
	echo "segundo test query (IF / ELSE) - OK <br>";
}else{
	die(mysqli_error($result));
}



//================================= Teste de conexao
$row = mysqli_fetch_array($result);

		// TESTA SE OS DADOS ESTAO EM BRANCO
if (is_null($row['email']) || is_null($row['senha']))
{
	echo ("<br> Usuario ou senha incorreto... (não existe no banco...)"); //.mysqli_error($result);
	echo "<br><br> <b>dados digitados</b> (email: $email <b> || </b> senha: $senha) <br>";
}
else
{
		// TESTA SE OS DADOS EXISTEM NO BANCO
		if ($row['email'] == $email && $row['senha'] == $senha )
		{
			echo "<br> <b>Conectado com sucesso!</b> <br> Bem vindo: " .$row['email'];
			echo "<br><br> <b>dados digitados</b> (email: $email <b> || </b> senha: $senha) <br>";
		}
		else
		{
			die("Falha no login ou senha" .mysqli_error($result));
		} // FIM ELSE 02

} // FIM ELSE 01


?>
<!-- ---------------------------- FIM PHP -->


<!--</h1>-->
<br>
   <a href="login.html">Retornar</a>
<br>
Retornando a pagina anterior...
<br>

</div>
</body>
</html>