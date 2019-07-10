<?php

include ("Conexao.php");

class Conecta extends Conexao {

    private $crud;
    private $contador;

    private function preparedStatements($query, $parametros) {
        $this->countParametros($parametros);
        $this->crud = $this->conectaDB()->prepare($query);

        if ($this->contador > 0) {
            for ($i = 1; $i <= $this->contador; $i++) {
                $this->crud->bindValue($i, $parametros[$i - 1]);
            }
        }

        $this->crud->execute();
    }

    private function countParametros($parametros) {
        $this->contador = count($parametros);
    }

    public function insertDB($tabela, $condicao, $parametros) {
        $this->preparedStatements("insert into {$tabela} values ($condicao)", $parametros);
        echo'sucesso';
        return $this->crud;
    }

    public function selectDB($campos, $tabela, $condicao, $parametros) {
        $this->preparedStatements("select {$campos} from $tabela $condicao", $parametros);
        return $this->crud;
    }

    public function deleteDB($tabela, $condicao, $parametros) {
        $this->preparedStatements("delete from {$tabela} where {$condicao}", $parametros);
        return $this->crud;
    }

    public function updateDB($Tabela, $Set, $Condicao, $Parametros) {
        $this->preparedStatements("update {$Tabela} set {$Set} where {$Condicao}", $Parametros);
        return $this->Crud;
    }

}
