<?php


class UsuarioRepository{

    private $conn;

    public function __construct() {
         $connection = new Connection();
         $this->conn = $connection->getConnection();
    }

    function fnAddUsuario(Usuario $usuario): bool {
    
    try { 
     $query = "insert into usuario (nome, email, senha) values (:pnome, :pemail, :psenha) on conflict do nothing";
     
     $stmt = $this->conn->prepare($query);
     $stmt->bindValue(":pnome",$usuario->getNome());
     $stmt->bindValue(":pemail",$usuario->getEmail());
     $stmt->bindValue(":psenha", md5($usuario->getSenha()));

     
     if($stmt->execute())
     return true;
     
     return false;
    } catch (PDOException $error){
    echo "erro ao inserir o usuario no banco Erro:{$error->getMessage()}";
    return false;
    }finally{
        unset($this->conn);
        unset($stmt);
   
    }
}

function fnAddLoginUsuario(Usuario $usuario): Usuario{
    
    try { 
     $query = "select id, nome, email where email = :pemail and senha = :psenha";
     
     $stmt = $this->conn->prepare($query);
     $stmt->bindValue(":pemail",$usuario->getEmail());
     $stmt->bindValue(":psenha", md5($usuario->getSenha()));

     
     if($stmt->execute())
     return $stmt->fetch(PDO::FETCH_OBJ);
     
     return false;
    } catch (PDOException $error){
    echo "erro ao efetuar o login do usuário. Erro:{$error->getMessage()}";
    return false;
    }finally{
        unset($this->conn);
        unset($stmt);
   
    }
}
}