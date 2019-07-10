<?php 
include '../DAO/Conecta.php';
$Crud = new Conecta();
$id = filter_input(INPUT_GET,'id', FILTER_SANITIZE_SPECIAL_CHARS);

$Crud ->deleteDB(
        "pessoafisica",
        "id = ?",
        array($id)
        );

echo 'dado deletado com sucesso';

