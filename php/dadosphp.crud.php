<?php
 require_once("conexao.php");
 
   function listaIcones($icone, $titulo, $descricao) 
{
     $link = getConnection();
     $query = "insert into bancoicones (icone, titulo, descricao) values ('{$icone}', '{$titulo}', '{$descricao}')";
     $result = mysqli_query($link, $query);
     
     mysqli_close($link);
     
     if($result)
            return true;

        return false;
}

    