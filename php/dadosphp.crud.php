<?php
 require_once("conexao.php");
 
   function cadastrarIcones($icone, $titulo, $descricao) 
{
     $link = getConnection();
     $query = "insert into bancoicones (icone, titulo, descricao) values ('{$icone}', '{$titulo}', '{$descricao}')";
     $result = mysqli_query($link, $query);
     
     mysqli_close($link);
     
     if($result)
            return true;

        return false;
}

function listarIcones()
{
  $link = getConnection();
  $query = "select * from bancoicones";
  $result = mysqli_query($link,$query);
  $listarIcones = array();
  while($registro = mysqli_fetch_object($result))
  {
  array_push($listarIcones, $registro);
  }
  mysqli_close($link);
  return $listarIcones;
}

function apagarIcones($id){
  $link = getConnection();
  $query = "delete from bancoicones where id = {$id}";
  $result = mysqli_query($link,$query);
   mysqli_close($link);

   if ($result)
  return true;
  return false;
}

function atualizarIcones($id, $icone, $titulo, $descricao) {

  $link = getConnection();
  $query = "update bancoicones set icone = '{$icone}', titulo = '{$titulo}', descricao = '{$descricao}' where id = {$id}";
  $result = mysqli_query($link,$query);
  mysqli_close($link);

  if($result)
  return true;
  return false;
}

function locazilaIconePeloId($id){

  $link = getConnection();
  $query = "select * from bancoicones where id = {$id}";
  $result = mysqli_query($link, $query);
  $registro = mysqli_fetch_object(mysqli_query($link,$query));
  mysqli_close($link);

  return $registro;
}
    