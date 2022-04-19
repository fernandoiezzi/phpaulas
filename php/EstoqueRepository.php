<?php


class EstoqueRepository{

    private $conn;

    public function __construct() {
         $connection = new Connection();
         $this->conn = $connection->getConnection();
    }

    function fnAddCategoria(Categoria $categoria){
    
    try { 
     $query = "insert into categoria (nome) values (:pnome)";
     
     $stmt = $this->conn->prepare($query);
     $stmt->bindValue(":pnome",$categoria->getNome());

     
     if($stmt->execute())
     return true;
     
     return false;
    } catch (PDOException $error){
    echo "erro ao inserir a categoria no banco Erro:{$error->getMessage()}";
    return false;
    }finally{
        unset($this->conn);
        unset($stmt);
   
    }
}

function fnAddProduto($produto){
    try {
     $query = "insert into produto (nome, descricao, valor_compra, valor_venda, status, categoria_id) values (:pnome, :pdescricao, :pvalorCompra, :pvalorVenda, :pstatus, :pcategoriaId)";
     
     $stmt = $this->conn->prepare($query);
     $stmt->bindValue(":pnome",$produto->nome);
     $stmt->bindValue(":pdescricao",$produto->descricao);
     $stmt->bindValue(":pvalorCompra",$produto->valorCompra);
     $stmt->bindValue(":pvalorVenda",$produto->valorVenda);
     $stmt->bindValue(":pstatus",$produto->status);
     $stmt->bindValue(":pcategoriaId",$produto->categoriaId);

     
     if($stmt->execute())
     return true;
     
     return false;
    } catch (PDOException $error){
    echo "erro ao inserir o produto no banco Erro:{$error->getMessage()}";
    return false;
    }finally{
        unset($this->conn);
        unset($stmt);
   
    }
}

function fnAddEstoque($estoque){
    try {
     $query = "insert into estoque (data_cadastro,  qtd_min,  qtd_max,  qtd_anual,  produto_id) values (:pdataCadastro, :pqtdMin, :pqtdMax, :pqtdAnual, :pprodutoId)";
     
     $stmt = $this->conn->prepare($query);
     $stmt->bindValue(":pdataCadastro",$estoque->data_cadastro);
     $stmt->bindValue(":pqtdMin",$estoque->qtd_min);
     $stmt->bindValue(":pqtdMax",$estoque->qtd_max);
     $stmt->bindValue(":pqtdAnual",$estoque->qtd_anual);
     $stmt->bindValue(":pprodutoId",$estoque->produto_id);
          
     if($stmt->execute())
     return true;
     
     return false;
    } catch (PDOException $error){
    echo "erro ao inserir o estoque no banco Erro:{$error->getMessage()}";
    return false;
    }finally{
        unset($this->conn);
        unset($stmt);
   
    }
}
}