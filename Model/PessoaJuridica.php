<?php

if(isset($_POST['acao'])){
    $acao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_SPECIAL_CHARS);
}
elseif(isset($_GET['acao'])){
    $acao = filter_input(INPUT_GET, 'acao', FILTER_SANITIZE_SPECIAL_CHARS);
}

if(isset($_POST['cnpj'])){
    $cnpj = filter_input(INPUT_POST, 'cnpj', FILTER_SANITIZE_SPECIAL_CHARS);
}
elseif(isset($_GET['cnpj'])){
    $cnpj = filter_input(INPUT_GET, 'cnpj', FILTER_SANITIZE_SPECIAL_CHARS);
}

if(isset($_POST['razaosocial'])){
    $razaosocial = filter_input(INPUT_POST, 'razaosocial', FILTER_SANITIZE_SPECIAL_CHARS);
}
elseif(isset($_GET['razaosocial'])){
    $razaosocial = filter_input(INPUT_GET, 'razaosocial', FILTER_SANITIZE_SPECIAL_CHARS);
}

if(isset($_POST['nome_fantasia'])){
    $nome_fantasia = filter_input(INPUT_POST, 'nome_fantasia', FILTER_SANITIZE_SPECIAL_CHARS);
}
elseif(isset($_GET['nome_fantasia'])){
    $nome_fantasia = filter_input(INPUT_GET, 'nome_fantasia', FILTER_SANITIZE_SPECIAL_CHARS);
}

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
