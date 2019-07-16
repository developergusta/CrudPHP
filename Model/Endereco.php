<?php

if(isset($_POST['cep'])){
    $cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_SPECIAL_CHARS);
}
elseif(isset($_GET['cep'])){
    $cep = filter_input(INPUT_GET, 'cep', FILTER_SANITIZE_SPECIAL_CHARS);
}

if(isset($_POST['logradouro'])){
    $logradouro = filter_input(INPUT_POST, 'logradouro', FILTER_SANITIZE_SPECIAL_CHARS);
}
elseif(isset($_GET['logradouro'])){
    $logradouro = filter_input(INPUT_GET, 'logradouro', FILTER_SANITIZE_SPECIAL_CHARS);
}

if(isset($_POST['numero'])){
    $numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_SPECIAL_CHARS);
}
elseif(isset($_GET['numero'])){
    $numero = filter_input(INPUT_GET, 'numero', FILTER_SANITIZE_SPECIAL_CHARS);
}

if(isset($_POST['complemento'])){
    $complemento = filter_input(INPUT_POST, 'complemento', FILTER_SANITIZE_SPECIAL_CHARS);
}
elseif(isset($_GET['complemento'])){
    $complemento = filter_input(INPUT_GET, 'complemento', FILTER_SANITIZE_SPECIAL_CHARS);
}

if(isset($_POST['bairro'])){
    $bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_SPECIAL_CHARS);
}
elseif(isset($_GET['bairro'])){
    $bairro = filter_input(INPUT_GET, 'bairro', FILTER_SANITIZE_SPECIAL_CHARS);
}

if(isset($_POST['cidade'])){
    $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS);
}
elseif(isset($_GET['cidade'])){
    $cidade = filter_input(INPUT_GET, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS);
}

if(isset($_POST['uf'])){
    $uf = filter_input(INPUT_POST, 'uf', FILTER_SANITIZE_SPECIAL_CHARS);
}
elseif(isset($_GET['uf'])){
    $uf = filter_input(INPUT_GET, 'uf', FILTER_SANITIZE_SPECIAL_CHARS);
}



class Endereco{
    private $cep;
    private $logradouro;
    private $numero;
    private $complemento;
    private $bairro;
    private $cidade;
    private $uf;
    
    function getCep() {
        return $this->cep;
    }

    function getLogradouro() {
        return $this->logradouro;
    }

    function getNumero() {
        return $this->numero;
    }

    function getComplemento() {
        return $this->complemento;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getUf() {
        return $this->uf;
    }

    function setCep($cep) {
        $this->cep = $cep;
    }

    function setLogradouro($logradouro) {
        $this->logradouro = $logradouro;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setComplemento($complemento) {
        $this->complemento = $complemento;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setUf($uf) {
        $this->uf = $uf;
    }



}
