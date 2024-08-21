<?php

class Funcionario {

    //atributos
    public $nome= null;
    public $telefone= null;
    public $numFilhos=null;

    //métodos
    function setNome($nome) {
        $this->nome = $nome;
    }

    function getNome() {
        return $this->nome;
    }

    function getNumFilhos() {
        return $this->numFilhos;
    }

    function setNumFilhos($numFilhos) {
        $this->numFilhos = $numFilhos;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function getTelefone ($telefone) {
        return $this->telefone = $telefone;
    }

    //funções e métodos
    function resumirCardFunc () {
        return "$this->nome  e ele possui $this->numFilhos filho(s)";
    }

    function modificarNumFilhos($numFilhos) {
       return $this->numFilhos = $numFilhos;
    }

}

//criação do objejo funcionário
$k= new Funcionario();
$k->setNome('kamiya');
$k->setNumFilhos(2);

//exibição dos resultados
echo $k->resumirCardFunc();
echo $k->getNome() . 'possui ' . $k->getNumFilhos() . 'filhos';

?>