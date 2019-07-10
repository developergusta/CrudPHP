<?php

abstract class Conexao {

    protected function conectaDB() {

        try {
            $Con = new PDO("mysql:host=localhost;dbname=banco01", "root", "");
            return $Con;
        } catch (PDOException $Erro) {
            return $Erro->getMessage();
        }
    }

}
?> 

