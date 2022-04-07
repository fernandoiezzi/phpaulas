<?php
require_once('dadosphp.crud.php');

$id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);



if(apagarIcones($id))
{
    header('Location: ../icones.list.page.php?success');
    exit;
}

header('Location: ../icones.list.page.php?error');
    exit;