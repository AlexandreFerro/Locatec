<?php

$nome = $_POST['cadFirstName'];
$sobrenome = $_POST['cadLastName'];
$email = $_POST['cadEmail'];
$senha = md5($_POST['cadSenha']);

// Cria a string de conexão $strcon

$strcon = mysqli_connect('127.0.0.1','root','','locatec') 
    or die('Erro ao conectar ao banco de dados');
$sql = "INSERT INTO usuarios VALUES ";
$sql .= "('$nome', '$sobrenome', '$email', '$senha')"; 

mysqli_query($strcon,$sql) 
    or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);

echo "Cliente cadastrado com sucesso!";
?>