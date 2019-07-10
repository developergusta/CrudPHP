<?php

if(isset($_POST['acao'])){
    $acao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_SPECIAL_CHARS);
}
elseif(isset($_GET['acao'])){
    $acao = filter_input(INPUT_GET, 'acao', FILTER_SANITIZE_SPECIAL_CHARS);
}

if(isset($_POST['nome'])){
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
}
elseif(isset($_GET['nome'])){
    $nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
}

if(isset($_POST['sobrenome'])){
    $sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_SPECIAL_CHARS);
}
elseif(isset($_GET['sobrenome'])){
    $sobrenome = filter_input(INPUT_GET, 'sobrenome', FILTER_SANITIZE_SPECIAL_CHARS);
}

if(isset($_POST['cpf'])){
    $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_SPECIAL_CHARS);
}
elseif(isset($_GET['cpf'])){
    $cpf = filter_input(INPUT_GET, 'cpf', FILTER_SANITIZE_SPECIAL_CHARS);
}

if(isset($_POST['datanasc'])){
    $datanasc = filter_input(INPUT_POST, 'datanasc', FILTER_SANITIZE_SPECIAL_CHARS);
}
elseif(isset($_GET['datanasc'])){
    $datanasc = filter_input(INPUT_GET, 'datanasc', FILTER_SANITIZE_SPECIAL_CHARS);
}

class PessoaFisica{
    
    
    private $cpf;
    private $datanasc;
    private $nome;
    private $sobrenome;
    private $endereco;
    
    function getCpf() {
        return $this->cpf;
    }

    function getDatanasc() {
        return $this->datanasc;
    }

    function getNome() {
        return $this->nome;
    }

    function getSobrenome() {
        return $this->sobrenome;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setDatanasc($datanasc) {
        $this->datanasc = $datanasc;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }


}

$c = new PessoaFisica();
$c->setCpf($cpf);
$c->setDatanasc($datanasc);
$c->setNome($nome);
$c->setSobrenome($sobrenome);
