<?php

class Funicionario {
    public $nome= null;
    public $telefone= null;
    public $num_filhos= null;

    function resumirCardFunc () {
        return "Este é o resumo do funcionário";
    }

    function modificarNumFilhos () {
        return "Este é o número de filhos";
    }

}

    $k= new funcionario ();
    echo $k->modificarNumFilhos();
    

?>