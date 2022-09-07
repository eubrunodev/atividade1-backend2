<?php
class Cliente 
{
    public $codigo, $nome, $cpf, $endereco, $telefone, $email;


    // sets
    public function setCodigo($codigo_param) {
        $this->codigo = $codigo_param;
    }
    public function setNome($nome_param) {
        $this->nome = $nome_param;
    }
    public function setCpf($cpf_param) {
        $this->cpf = $cpf_param;
    }
    public function setEndereco($endereco_param) {
        $this->endereco = $endereco_param;
    }
    public function setTelefone($telefone_param) {
        $this->telefone = $telefone_param;
    }
    public function setEmail($email_param) {
        $this->email = $email_param;
    }


    //gets
    public function getNome() {
        return $this->nome;
    }
    public function getCodigo() {
        return $this->codigo;
    }
    public function getCpf() {
        return $this->cpf;
    }
    public function getEndereco() {
        return $this->endereco;
    }
    public function getTelefone() {
        return $this->telefone;
    }
    public function getEmail() {
        return $this->email;
    }
}