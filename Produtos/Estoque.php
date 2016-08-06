<?php

namespace Elaborata\Mercado\Produtos;

//use Elaborata\Mercado\Produtos\Produto as Produto;
/**
 * Description of Estoque
 *
 * @author aluno
 */
class Estoque {
    private $produtos;
    
    public function totalDisponivel(){
        
    }
    
    public function addEstoque(Produto $produto) {
        
        $produto->setQt_estoque($produto->getQt_estoque() + 10);
    }
    
    public function delEstoque(Produto $produto, $quantidade) {
        $produto->setQt_estoque($produto->getQt_estoque() - $quantidade);
        return $produto;
    }
    
    public function procuraProduto($cod) {
        
    }
}


