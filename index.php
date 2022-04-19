<?php
require_once("config/config.php");

$repository = new EstoqueRepository();

$categoria = new Categoria();
$categoria->setNome("Mobília");
$repository->fnAddCategoria($categoria);

/*
$produto = new stdClass();
$produto ->nome = 'Mouse';
$produto ->descricao = 'Mouse Gamer';
$produto ->valorCompra = 150.90;
$produto ->valorVenda = 160.00;
$produto ->status = true;
$produto ->categoriaId = 1;

$repository ->fnAddProduto($produto);*/

/*$estoque = new stdClass();
$estoque ->data_cadastro = date('Y-m-d h:i:s');
$estoque ->qtd_min = 50;
$estoque ->qtd_max = 180;
$estoque ->qtd_anual = 120;
$estoque -> produto_id = 1;

$repository->fnAddEstoque($estoque);*/

