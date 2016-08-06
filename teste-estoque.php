<?php

require_once './Produtos/Produto.php';
require_once './Produtos/Estoque.php';

use \Elaborata\Mercado\Produtos\Produto;
use \Elaborata\Mercado\Produtos\Estoque;

$prod1 = new Produto();
$prod1->setCod('0001');
$prod1->setNome('Coca-Cola');
$prod1->setPreco_unit(10);
$prod1->setQt_estoque(10);

$prod2 = new Produto();
$prod2->setCod('0002');
$prod2->setNome('Bolacha');
$prod2->setPreco_unit(10);
$prod2->setQt_estoque(10);

var_dump($prod1);

$estoque = new Estoque();
$estoque->addEstoque($prod1);

var_dump($prod1);

$estoque->delEstoque($prod1, 10);

var_dump($prod1);
//$estoque->addEstoque($prod2);