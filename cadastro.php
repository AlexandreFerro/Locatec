<?php

$login = $_POST['login'];
$senha = $_POST['senha'];

// Cria a string de conexão $strcon

$strcon = mysqli_connect('127.0.0.1','root','','locatec') or die('Erro ao conectar ao banco de dados');
$sql = "INSERT INTO usuarios VALUES ";
$sql .= "('$login', '$senha')"; 
mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
echo "Cliente cadastrado com sucesso!";
?>