<?php
require_once('dadosphp.crud.php');

$icone = $_POST['inputIcone'];
$titulo = $_POST['inputTitulo'];
$descricao = $_POST['inputDescricao'];

if(listaIcones($icone, $titulo, $descricao))
{
    header('Location: ../index.php');
    exit;
}

header('Location: ../icones.form.php?error=true');
    exit;