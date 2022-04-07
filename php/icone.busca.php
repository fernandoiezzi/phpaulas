<?php 
include_once('./php/dadosphp.crud.php');
session_start();

if(filter_input(INPUT_GET,'id') !== null) {
  
    $id = filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);
    $_SESSION['icone_dados'] = locazilaIconePeloId($id);
}else{
    $_SESSION['icone_lista'] = listarIcones();
}
