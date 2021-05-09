<html>
<head>
	<title>Locatec | Cadastro</title>
    
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/main.css">
    
<!-- [Sidnei] SINCRONIZA A PAGINA A CADA 30 segundos -->
<!-- <meta http-equiv="refresh" content="5">  -->

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
    <b><a href="index.html">Locatec</a></b>
  </h1>
</div> 


<!------- MENU ----------- INICIO -->
<nav class="navMain">
    <ul>
        <li>
			<a href="#tab1" data-toggle="collapse" data-target="#tabn">Locação</a>
		</li>
        <li>
			<a href="Frotas.html">Frotas</a>
		</li>
        <li>
			<a href="cadastro.html">Clientes</a>
		</li>
        <li>
			<a href="locacao.html">Veículos</a>
		</li>
		
		<div class="loginButton">
			<li>
				<a href="login.html">Login</a>	<!--	LOGIN	-->
			</li>
			<li>
				<a href="cadastro.html" class="activeMenu">Cadastrar</a>	<!--	CADASTRO	-->
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
						<!--  -->
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

<H1>Cadastro de cliente</H1>

<form method="POST" action="cadastro.php">
    <table>
        <tr>
            <td>
                <label><b style="color: red;">*</b> Nome</label>
            </td>
            <td>
                <input type="text" name="cadFirstName" required autofocus><br>
            </td>
        </tr>
        <tr>
            <td>
                <label><b style="color: red;">*</b> Sobrenome</label>
            </td>
            <td>
                <input type="text" name="cadLastName" required><br>
            </td>    
        </tr>
        <tr>
            <td>
                <label><b style="color: red;">*</b> Email</label>
            </td>
            <td>
                <input type="email" name="cadEmail" required><br>
            </td>    
        </tr>
        <tr>
            <td>
                <label><b style="color: red;">*</b> Senha</label>
            </td>
            <td>
                <input type="password" name="cadSenha" required><br>
            </td>    
        </tr>
        <tr>
            <td>
<!--                Bloco vazio -->
            </td>
            <td style="float: right;">
                <br>
                <input type="submit" value="Cadastrar" name="cadSubmit">
            </td>
        </tr>
    </table>
</form>

<br>
<a href="login.html">Já possui login? Acesse aqui.</a>
<br>
<br>
<a href="index.html">Voltar a página inicial</a>




<!------- LEMBRETE ----------- INICIO -->
<div style="margin-top: 140px;">
	<h4 style="color: red;">Lembrete:</h4>
	<h5>
		<p>
			Criar redirecionamento dentro do PHP,<br> 5 segundos apos cadastro redirecionar para LOGIN.html;
		</p>
	</h5>
</div>
<!------- LEMBRETE ----------- FIM -->


</div>
</div>
<!------- CONTEUDO-CORPO-SITE ----------- FIM -->

</body>
</html>