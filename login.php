<html>
<head>
	<title>Locatec | Login</title>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel = "stylesheet" href = "css/style.css">
	<link rel="icon" href="../img/favicon/fav5.jpg" type="image/jpg" sizes="32x32">
	
	<!-- [Sidnei] SINCRONIZA A PAGINA A CADA 30 segundos -->
	<!-- <meta http-equiv="refresh" content="7"; url="./login.html"/> -->

	<!-- ---------------------------------------------- Bootstrap CSS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 
</head>
<body>

<div class="global-body-content">
<div class="body-content-layer-1">
	
<div style="margin-top: 100px; text-align: center; ">
<!--<h1>  -->
<!--font: 30px pompiere -->

<!-- ---------------------------------------------- INICIO PHP -->
<?php

$email = $_POST['userEmail'];
$senha = sha1($_POST['userPass']); //Transforma a senha recebida em HASH para validar com a HASH salva no BD


//================================= Seguranca contra SQL INJECTION
$email = stripcslashes($email);
$senha = stripcslashes($senha);
//$email = mysqli_real_escape_string($email);
//$senha = mysqli_real_escape_string($senha);


//================================= Conexao com banco de dados
$con = mysqli_connect("localhost","root","","locatec"); //IP(hostname) - User - Pass - DB

//------------ PARA FINS DE TESTE E VALIDACAO DA CONEXAO DB -------------- INICIO
/* if($con){
	echo "teste conexao DB - OK <br>";
}else{
	die(mysqli_error($con));
} */
//------------ PARA FINS DE TESTE E VALIDACAO DA CONEXAO DB -------------- FIM

//================================= Conexao com dados do usuario
	//------------ PARA FINS DE TESTE E VALIDACAO DA QUERY -------------- INICIO
		// echo "antes da query - OK <br>";
	//------------ PARA FINS DE TESTE E VALIDACAO DA QUERY -------------- FIM

$result = mysqli_query($con,"select * 
							from usuarios 
							where userEmail = '$email' 
							and userPass = '$senha'"
						) 
						or die("Erro, verifique os dados digitados;
								<br>
									Caso persista contate o suporte.
								<br>
								<br>
									<a href='#'>suporte@locatec.com.br</a>
								<br>
								<br>
   									<a href='login.html'>Retornar</a>
								<br>"
							);
					//<br>ERROR.MSG: "); // .mysqli_error($result));

	//------------ PARA FINS DE TESTE E VALIDACAO DA QUERY -------------- INICIO
		// echo "depois da query - OK <br>";
	//------------ PARA FINS DE TESTE E VALIDACAO DA QUERY -------------- FIM
	//================================= Dados trazidos pela conexao acima
	$row = mysqli_fetch_array($result);


		// TESTA SE OS DADOS ESTAO EM BRANCO (do HTML para o PHP)
if (is_null($email) || is_null($senha))
{
	//	USUARIO e SENHA em branco...
		//	ESSA POSSIBILIDADE DE ERRO FOI ELIMINADA... 
		//	NO FORM HTML FOI INSERIDO O ATRIBUTO "REQUIRED" DENTRO DO <INPUT>
		// 		ESSE ATRIBUTO IMPEDE O ENVIO DO FORM COM OS CAMPOS EM BRANCO
	echo ("<br> Usuario e senha em branco...");
	
	//------------ PARA FINS DE TESTE E VALIDACAO DO LOGIN -------------- INICIO
		// echo "<br><br> <b>dados digitados</b> (email: $email <b> || </b> senha: $senha) <br>";
	//------------ PARA FINS DE TESTE E VALIDACAO DO LOGIN -------------- FIM
}
else
{
	// -----------------------------------------
	if($email == null) //Testa se o email está em branco
	{
		die("<br> Usuário não preenchido");
	
	}else{
		// TESTA SE O EMAIL EXISTE NO BANCO
		if (isset($row['userEmail']) == $email) //Testa se email digitado existe no DB através da query
		{
			// -----------------------------------------
			if($senha == null) //Testa se a senha está em branco
			{
				die("<br> Senha não preenchida");
			}else{
				
				if(isset($row['userPass']) == $senha) //Testa se a "HASH DA SENHA" digitada existe no DB através da query
				{
					die('<br> <b>Conectado com sucesso!</b> 
						<br> Redirecionando...

						<br><!--
						<span style="color: red;">
							(pendente de desenvolvimento | auto redir em 5 segundos)
						</span> -->
						<br>
						<br>
						<a href="login.html">
							-- Retornar
						</a>
						<script>
							window.location.href="s.adm/index.php"
						</script>;
						'
					);
					/* set_time_limit(5);
					header("Location: cadastro.html");// localhost/ */
				}
			} //ELSE senha em branco - FIM
		}//IF email existe no banco -FIM
		else
		{
			echo "<br> <b>Login ou senha incorretos...</b>"; //.$result;
			echo "<br> Tente novamente.";
			
			//------------ PARA FINS DE TESTE E VALIDACAO DO LOGIN -------------- INICIO
			
				// echo "<br><br> senha trazida do banco: ".isset($row['userPass']);
				// echo "<br><br> <b>Senha digitada (já embaralhada -MD5) :</b> $senha";
						//<br><b>Senha+MD5:</b> " .md5($senha);
			
						// echo "<br> Login digitado: $email <br>";
						// echo "<br> Senha digitada: $senha";
			
			//------------ PARA FINS DE TESTE E VALIDACAO DO LOGIN -------------- FIM
			
			/* set_time_limit(5);
			header("Location: cadastro.html");// localhost/ */
			
		} //ELSE senha INCORRETA - FIM
	} //ELSE senha em branco - FIM
} // FIM ELSE 01

?>
<!-- ---------------------------------------------- FIM PHP -->
<script>
	window.location.href='./login.html';
</script>

<!--</h1>-->
<br><br>
   <a href="login.html">Retornar</a>
<br>
Retornando a pagina anterior... (pendente de desenvolvimento)
<br>

</div>
</body>
</html>