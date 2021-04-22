<html>
<head>
<title> Cadastro de Usuário </title>
    
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel = "stylesheet" href = "css/style.css">
<!--Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
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

<div style="margin-top: 100px; text-align: center;">
<h1>

<br>
   <a href="cadastro.html">Retornar</a>
<br>
<br>
<br>

<!-- ---------------------------- INICIO PHP -->
<?php
	
//"delete from usuarios" 
	//(apaga todos os registros da tabela) - Apos testes...

	$nome = $_POST['cadFirstName'];
	$sobrenome = $_POST['cadLastName'];
	$email = $_POST['cadEmail'];
	$senha = md5($_POST['cadSenha']);	
	
// SE NOME ESTIVER EM BRANCO RETORNA AO CADASTRO
//IF($nome == "")
//{
//	echo "ERRO, redirecionando...";
//	echo "Nome não pode ficar em branco";
//	set_time_limit(100);
//	header("Location: cadastro.html");// localhost/
//}else{
//	
//	$nome = $_POST['cadFirstName'];
//	$sobrenome = $_POST['cadLastName'];
//	$email = $_POST['cadEmail'];
//	$senha = md5($_POST['cadSenha']);

// Cria a string de conexão $strcon

		$strcon = mysqli_connect('127.0.0.1','root','','locatec') 
			or die('Erro ao conectar ao banco de dados');
		$sql = "INSERT INTO usuarios VALUES ";
		$sql .= "('$nome', '$sobrenome', '$email', '$senha')"; 
		
		mysqli_query($strcon,$sql) 
			or die("Erro ao tentar cadastrar registro");
		mysqli_close($strcon);
		
		echo "Cadastrado com sucesso!";		
//	} // ELSE -- FIM
?>
<!-- ---------------------------- FIM PHP -->




</h1>
<br><br><br>
Retornando a página anterior...

</div>
</body>
</html>