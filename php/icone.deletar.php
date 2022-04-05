<?php
require_once('dadosphp.crud.php');

$id = $_GET['id'];


if(apagarIcones($id))
{
    header('Location: ../icones.list.php?success');
    exit;
}

header('Location: ../icones.list.php?error');
    exit;