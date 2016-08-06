<?php

namespace Elaborata\Mercado\Produtos;

/**
 * Description of Produto
 *
 * @author aluno
 */
class Produto {
    private $cod;
    private $nome;
    private $precoUnit;
    private $qtEstoque;
    private $desconto;
    
    public function getCod() {
        return $this->cod;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getPreco_unit() {
        return $this->precoUnit;
    }

    public function getQt_estoque() {
        return $this->qtEstoque;
    }

    public function getDesconto() {
        return $this->desconto;
    }

    public function setCod($cod) {
        $this->cod = $cod;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setPreco_unit($preco_unit) {
        $this->precoUnit = $preco_unit;
    }

    public function setQt_estoque($qt_estoque) {
        $this->qtEstoque = $qt_estoque;
    }

    public function setDesconto($desconto) {
        $this->desconto = $desconto;
    }
}
