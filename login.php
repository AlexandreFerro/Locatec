<html>
<head>
<title>Locatec | Login</title>
    
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
   <a href="login.html">Retornar</a>
<br>
<br>
<br>

<!-- ---------------------------- INICIO PHP -->
<?php

$login = $_POST['login'];
$senha = $_POST['senha'];
$entrar = $_POST['entrar'];
$strcon = mysqli_connect('127.0.0.1','root','','locatec');

if (isset($entrar)) 
  {
    $verifica = mysqli_query($strcon,"SELECT * FROM usuarios WHERE login ='$login' AND senha = '$senha'") 
      or die("Dados incorretos");
    if (mysqli_num_rows($verifica)<=0)
      {
        echo"<script language='javascript' type='text/javascript'>
              alert('Login e/ou senha incorretos');window.location.href='login.html';
            </script>";
        die();
      }
    else
     {
      setcookie("login",$login);
      header("Location:index.php");
     }
  }
?>
<!-- ---------------------------- FIM PHP -->




</h1>
<br><br><br>
Retornando a pagina anterior...

</div>
</body>
</html>