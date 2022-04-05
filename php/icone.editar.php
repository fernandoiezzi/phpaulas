<?php
require_once('dadosphp.crud.php');

$id = $_POST['inputId'];
$icone = $_POST['inputIcone'];
$titulo = $_POST['inputTitulo'];
$descricao = $_POST['inputDescricao'];


if(atualizarIcones($id, $icone, $titulo, $descricao))
{
    header('Location: ../index.php');
    exit;
}

header('Location: ../icones.form.edit.php?error=true');
    exit;