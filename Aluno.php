<?php

class Aluno {
    private $id;
    private $nome;
    private $turma;
    

    public function getId (){
        return $this->id;
    }
    public function setId ($i){
        $this->id = $i;
    }
    public function getNome (){
        return $this->nome;
    }
    public function setNome ($i){
        $this->nome = $i;
    }
    public function getTurma (){
        return $this->turma;
    }
    public function setTurma ($i){
        $this->turma = $i;
    }
}

