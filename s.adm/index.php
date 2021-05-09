<!DOCTYPE html>
<html>
<head>

  <title>Locatec | Admin</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel = "stylesheet" href = "css/main.css">

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
    <b><a href="index.html">Locatec</a></b>
  </h1>
</div>


<!------- MENU ----------- INICIO -->
<nav class="navMain">
    <ul style="background: #ff9999;">
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
		
		<div class="loginButton" style="background: red; border-radius: 10px;">
			<li>
				<a href="login.html" style="color: aliceblue; font-weight: bold;">UserName</a>	<!--	LOGIN	-->
			</li>
			<li>
				<a href="cadastro.html" style="color: aliceblue; font-weight: bold;">Logoff</a>	<!--	CADASTRO	-->
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
<div style="margin: 100px 100px;">
	<h2>Ferramentas do administrador</h2>
	<p style="color:dimgray;"> - Ferramentas para administração de funcionários e cadastros.</p>
</div>


<!-- ------------ CARDS - MASTER DIVS ------------ INICIO -->
<div class="card-container">
<div class="card-sub-layer-1">


<!--- Card 1 ------------------------ -->
<div class="card-content">
	<!-- <img src="" alt="txt"> -->
	<h3>veículos</h3>
	<!-- <p>Encontre veículos de passeio no botão abaixo</p> -->
	<button type="button" class="btn btn-secondary" data-toggle="collapse" data-target="#Passeio">Mostrar mais</button>
</div>

<!--- Card 2 ------------------------ -->
<div class="card-content">
	<!-- <img src="img/Utilitários.png" alt="Utilitários"> -->
	<h3>funcionários</h3>
	<!-- <p>Encontre utilitários clicando no botão abaixo</p> -->
	<button type="button" class="btn btn-secondary" data-toggle="collapse" data-target="#Utilitários">Mostrar mais</button>	
</div>

<!--- Card 3 ------------------------ -->
<div class="card-content">
	<!-- <img src="img/Vans.jpg" alt="Vans"> -->
	<h3>clientes</h3>
	<!-- <p>Encontre Vans clicando no botão abaixo</p> -->
	<button type="button" class="btn btn-secondary" data-toggle="collapse" data-target="#Vans">Mostrar mais</button>
</div>

</div> <!-- card-sub-layer-1 -->
</div> <!-- CARD-CONTAINER -->
<!-- ------------ CARDS - MASTER DIVS ------------ FECHAMENTO -->


<div style="margin: 100px 100px;"></div>


<!-- ------------ RODAPE ------------ INICIO -->

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
        </tr>   
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
    </tbody>
</table>
</div>
<!-- ------------ RODAPE ------------ FIM -->

<!--</div> BODY-CONTENT-LAYER-1 -->
</div> <!-- GLOBAL BODY CONTENT -->
	
<!------- CONTEUDO-CORPO-SITE ----------- FIM -->
	
	
</body>
</html>