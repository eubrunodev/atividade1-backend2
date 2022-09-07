<?php
class Produto 
{
    private $codigo, $descricao, $valor_custo, $valor_venda, $quantidade_estoque;


// sets
    public function setCodigo($codigo_param) {
        $this->codigo = $codigo_param;
    }
    public function setDescricao($descricao_param) {
        $this->descricao = $descricao_param;
    }
    public function setValorCusto($valor_custo_param) {
        $this->valor_custo = $valor_custo_param;
    }
    public function setValorVenda($valor_venda_param) {
        $this->valor_venda = $valor_venda_param;
    }
    public function setQuantidadeEstoque($quantidade_estoque_param) {
        $this->quantidade_estoque = $quantidade_estoque_param;
    }


// gets
    public function getCodigo() {
        return $this->codigo;
    }
    public function getDescricao() {
        return $this->descricao;
    }
    public function getValorCusto() {
        return $this->valor_custo;
    }
    public function getValorVenda() {
        return $this->valor_venda;
    }
    public function getQuantidadeEstoque() {
        return $this->quantidade_estoque;
    }
}