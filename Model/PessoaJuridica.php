<?php

require_once 'Controlador.php';

class PessoaJuridica implements Controlador{
    private $cnpj;
    private $razao_social;
    private $nome_fantasia;
    
    function getCnpj() {
        return $this->cnpj;
    }

    function getRazao_social() {
        return $this->razao_social;
    }

    function getNome_fantasia() {
        return $this->nome_fantasia;
    }

    function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }

    function setRazao_social($razao_social) {
        $this->razao_social = $razao_social;
    }

    function setNome_fantasia($nome_fantasia) {
        $this->nome_fantasia = $nome_fantasia;
    }

    public function Alterar() {
        
    }

    public function Cadastrar() {
        
    }

    public function Excluir() {
        
    }

}
