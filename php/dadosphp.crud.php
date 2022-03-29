<?php
 require_once("php/conexao.php");

 function listaDados() {
     $link = getConnection();
     $query = "select * from bancodedados";
     $result = mysqli_query($link, $query);
     $basededados = array();
     while($dados = mysqli_fetch_object($result)){
         array_push($basededados, $dados);
     }
     mysqli_close($link);
     return $basededados;
    }

    function bemVindo(){
        $link = getConnection();
        $query = "select * from bemvindo";
        $result = mysqli_query($link, $query);
        $bemvindo = array();
        while($boasvindas = mysqli_fetch_object($result)){
            array_push($bemvindo, $boasvindas);
        }
        mysqli_close($link);
        return $bemvindo;
       }
    