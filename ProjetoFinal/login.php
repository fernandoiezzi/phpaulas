<?php
session_start();
include_once('./php/connection.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])){
    echo 'Campos Usuário e senha são obrigatórios!';
    header('Location: index.php');
    exit;
    
}

$usuario = mysqli_real_escape_string($connection, $_POST['usuario']);
$senha = mysqli_real_escape_string($connection, $_POST['senha']);

$query = "select * from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";

$result = mysqli_query($connection, $query);

$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['usuario'] = $usuario;
    header('Location: ./edicaodecontexto/index.php');
    exit();
}else{
    header('Location: index.php');
    exit();
}
