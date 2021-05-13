<!DOCTYPE html>
<html>
<head>

  <title>Locatec | Admin</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel = "stylesheet" href = "css/main.css">
<link rel="icon" href="http://localhost/img/favicon/fav5.jpg" type="image/jpg" sizes="32x32">

<!-- [Sidnei] SINCRONIZA A PAGINA A CADA 30 segundos -->
<meta http-equiv="refresh" content="5">


<!------------------------------------------------ Bootstrap CSS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

    
<body> <!----------------------------------- INICIO CORPO DO SITE -->
<div class="container-fluid">
  <h1>
    <b><a href="http://localhost">Locatec</a></b>
  </h1>
</div>


<!------- MENU ----------- INICIO -->
<nav class="navMain">
    <ul> <!--  style="background: #ff9999;" -->
        <li>
			<a href="#tab1" data-toggle="collapse" data-target="#tabn">Locação</a>
		</li>
        <li>
			<a href="http://localhost/Frotas.html">Frotas</a>
		</li>
        <li>
			<a href="http://localhost/cadastro.html">Clientes</a>
		</li>
        <li>
			<a href="http://localhost/locacao.html">Veículos</a>
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
				<tr> <!-- LINHA 01 - INICIO -->
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
				<tr> <!-- LINHA 02 - INICIO -->
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
					</td>
					<td>
					</td>
					<td>
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
<!--<div class="body-content-layer-1">-->



<!--- CARDS TITULO ------------------------ -->
<div style="margin: 0px 100px; margin-top: 80px;">
	<h2>Ferramentas do administrador</h2>
	<p style="color:dimgray;"> - Ferramentas para administração de funcionários e cadastros.</p>
</div>


<!-- ------------ CARDS - MASTER DIVS ------------ INICIO -->
<div class="card-container">

<table class="card-content">
<!--- Card 1 ------------------------ -->
	<tr>
		<td>
			<h5>Veículos</h5>
		</td>
		<td>
			<!-- <img src="" alt="txt"> -->
			<!-- <p>Encontre veículos de passeio no botão abaixo</p> -->
			<a href="addVeic.php"><button type="button" class="btn btn-primary">Adicionar</button></a>
			<a href="edtVeic.php"><button type="button" class="btn btn-secondary">Editar</button></a>
		</td>
	</tr>
	
<!--- Card 2 ------------------------ -->
	<tr>
		<td>
			<h5>Funcionários</h5>
		</td>
		<td>
			<!-- <img src="img/Utilitários.png" alt="Utilitários"> -->
			<!-- <p>Encontre utilitários clicando no botão abaixo</p> -->
			<a href="addFunc.php"><button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#Passeio">Adicionar</button></a>
			<a href="edtFunc.php"><button type="button" class="btn btn-secondary" data-toggle="collapse" data-target="#Passeio">Editar</button></a>
		</td>
	</tr>

<!--- Card 3 ------------------------ -->
	<tr>
		<td>
			<h5>Clientes</h5>
		</td>
		<td>
			<!-- <img src="img/Vans.jpg" alt="Vans"> -->
			<!-- <p>Encontre Vans clicando no botão abaixo</p> -->
			<a href="addClient.php"><button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#Passeio">Adicionar</button></a>
			<a href="edtClient.php"><button type="button" class="btn btn-secondary" data-toggle="collapse" data-target="#Passeio">Editar</button></a>
		</td>
	</tr>
	
</table>
<!-- </div> --> <!-- card-sub-layer-1 -->
</div> <!-- CARD-CONTAINER -->
<!-- ------------ CARDS - MASTER DIVS ------------ FECHAMENTO -->


<div style="margin: 100px 100px;"></div>


<!-- ------------ RODAPE ------------ INICIO -->
<!-- 
<div class="table-responsive">
	<table class="table">
	    <thead class="thead-dark">
	      <tr>
	        <th>Institucional</th>
	        <th>Negócios</th>
	        <th>Para você</th>
	      </tr>
	    </thead>
	    <tbody>
	        <tr class="table-active">
	            <td>Sobre a Locatec</td>
	            <td>Para Empresas</td>
	            <td>Minhas Reservas</td>
	        </tr> -->   
	        <!-- <tr class="table-active">
	            <td>Relação com o Investidor</td>
	            <td>Agências de Viagem</td>
	            <td>Roteiros de Viagem</td>
	        </tr>
	        <tr class="table-active">
	            <td>Trabalhe conosco</td>
	            <td>Seja um franqueado</td>
	            <td>Cadastra-se</td>
	        </tr> -->
	    <!--</tbody>
	</table>
</div>
 -->
<!-- ------------ RODAPE ------------ FIM -->

<!--</div> BODY-CONTENT-LAYER-1 -->
</div> <!-- GLOBAL BODY CONTENT -->
	
<!------- CONTEUDO-CORPO-SITE ----------- FIM -->
	
	
</body>
</html>