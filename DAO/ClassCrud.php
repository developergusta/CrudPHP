<?php

class ClassCrud extends ClassConexao{
    #Atributos
    private $Crud;
    private $Contador;

    #Preparação das declativas
    private function preparedStatements($query , $parametros)
    {
        $this->countParametros($parametros);
        $this->Crud=$this->conectaDB()->prepare($query);

        if($this->Contador > 0){
            for($i=1; $i <= $this->Contador; $i++){
                $this->Crud->bindValue($i,$parametros[$i-1]);
            }
        }

        $this->Crud->execute();
    }

    #Contador de parâmetros
    private function countParametros($parametros)
    {
        $this->Contador=count($parametros);
    }
}