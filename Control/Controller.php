<?php

include_once '../Model/PessoaFisica.php';
function clear($str) {
    return preg_replace("/[^0-9]/", "", $str);
}
$cpf = clear($cpf);
$datanasc = clear($datanasc);
include ("../DAO/Conecta.php");

include("../Includes/Variaveis.php");
include("../Class/ClassCrud.php");

$Crud=new ClassCrud();
$crud = new Conecta();
if($acao=='cadastrar'){
        $Crud->insertDB(
            "PessoaFisica",
            "?,?,?,?,?",
            array(
                null,
                $nome,
                $sobrenome,
                $cpf,
                $datanasc
            )
        );
        echo "Cadastro Realizado com Sucesso!";
}else{
        $Crud->updateDB(
            "PessoaFisica",
            "nome=?,sobrenome=?,cpf=?,data_nasc=?",
            "id=?",
            array(
                $nome,
                $sobrenome,
                $cpf,
                $datanasc,
                $id
            )
        );
        echo "Cadastro Editado com Sucesso!";
}



