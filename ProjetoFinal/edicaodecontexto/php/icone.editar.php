<?php
require_once('dadosphp.crud.php');
$id = filter_input(INPUT_POST,'inputId',FILTER_SANITIZE_NUMBER_INT);
$icone = filter_input(INPUT_POST,'inputIcone',FILTER_SANITIZE_SPECIAL_CHARS);
$titulo = filter_input(INPUT_POST,'inputTitulo',FILTER_SANITIZE_SPECIAL_CHARS);
$descricao = filter_input(INPUT_POST,'inputDescricao',FILTER_SANITIZE_SPECIAL_CHARS);


if(atualizarIcones($id, $icone, $titulo, $descricao))
{
    header('Location: ../index.php');
    exit;
}

header('Location: ../icones.form.edit.php?error=true');
    exit;