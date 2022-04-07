<?php
 require_once("conexao.php");
 
   function cadastrarIcones($icone, $titulo, $descricao) 
{
     $con = getConnection();
     $query = "insert into bancoicones (icone, titulo, descricao) values (:icone, :titulo, :descricao)";
     $result = $con->prepare($query);
     $result->bindParam(":icone", $icone);
     $result->bindParam(":titulo", $titulo);
     $result->bindParam(":descricao", $descricao);
     
     $status = $result->execute();
     unset($con);
     unset($result);
     
     if($status)
            return true;

        return false;
}

function listarIcones()
{
  $con = getConnection();
  $query = "select * from bancoicones";
  $result = $con->query($query);
  $listarIcones = array();
  while($registro = $result->fetch(PDO::FETCH_OBJ))
  {
  array_push($listarIcones, $registro);
  }
  unset($con);
  unset($result);

  return $listarIcones;
}

function apagarIcones($id){
  $con = getConnection();
  $query = "delete from bancoicones where id = :id";
  $result = $con->prepare($query);
  $result->bindParam(":id", $id);
  $status = $result->execute();

  unset($con);
  unset($result);

   if ($status)
  return true;
  return false;
}

function atualizarIcones($id, $icone, $titulo, $descricao) {

  $con = getConnection();
  $query = "update bancoicones set icone = :icone, titulo = :titulo, descricao = :descricao where id = :id";
  $result = $con->prepare($query);
     $result->bindParam(":id", $id);
     $result->bindParam(":icone", $icone);
     $result->bindParam(":titulo", $titulo);
     $result->bindParam(":descricao", $descricao);
     $status = $result->execute();
     unset($con);
     unset($result);

  if($status)
  return true;
  return false;
}

function locazilaIconePeloId($id){

  $con = getConnection();
  $query = "select * from bancoicones where id = :id";
  $result = $con->query($query);
  $registro = $result->fetch(PDO::FETCH_OBJ);

  unset($con);
  unset($result);

  return $registro;
}
    