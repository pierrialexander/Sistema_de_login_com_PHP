<?php
include('conexao.php');

if (empty($_POST['usuario']) || empty($_POST['senha'])) {
  header('Location: index.php');
  exit();
}

$usuario = mysqli_real_escape_string($_conexao,$_POST['usuario']);
$senha = mysqli_real_escape_string($_conexao, $_POST['senha']);

$query = "select usuario_id, usuario from usuario where usuario = '{}' and senha = '{}'" 
