<?php

include_once '../Model/PessoaFisica.php';
include_once '../Model/PessoaJuridica.php';
include_once '../Model/Endereco.php';

if (isset($_POST['pessoa'])) {
    $pessoa = filter_input(INPUT_POST, 'pessoa', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['pessoa'])) {
    $pessoa = filter_input(INPUT_GET, 'pessoa', FILTER_SANITIZE_SPECIAL_CHARS);
}

function clear($str) {
    return preg_replace("/[^0-9]/", "", $str);
}

$cpf = clear($cpf);
$datanasc = clear($datanasc);
include ("../DAO/Conecta.php");

include("../Includes/Variaveis.php");
include("../DAO/ClassCrud.php");

$Crud = new ClassCrud();

if ($pessoa == 'fisica') {
    if ($acao == 'cadastrar') {
        $Crud->insertDB(
                "PessoaFisica", "?,?,?,?,?", array(
            null,
            $nome,
            $sobrenome,
            $cpf,
            $datanasc
                )
        );
        echo "Cadastro Realizado com Sucesso!";
    } else {
        $Crud->updateDB(
                "PessoaFisica", "nome=?,sobrenome=?,cpf=?,data_nasc=?", "id=?", array(
            $nome,
            $sobrenome,
            $cpf,
            $datanasc,
            $id
                )
        );
        echo "Cadastro Editado com Sucesso!";
    }
} else if ($pessoa == 'juridica') {
    if ($acao == 'cadastrar') {
        $Crud->insertDB(
                "PessoaJuridica", "?,?,?,?,?", array(
            null,
            $cnpj,
            $razaosocial,
            $nome_fantasia
                )
        );
        echo "Cadastro Realizado com Sucesso!";
    } else {
        $Crud->updateDB(
                "PessoaJuridica", "cnpj=?,razaosocial=?,nome_fantasia=?", "id=?", array(
            $cnpj,
            $razaosocial,
            $nome_fantasia,
            $id
                )
        );
        echo "Cadastro Editado com Sucesso!";
    }
}


