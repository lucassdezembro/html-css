<?php

class Cliente{
    public $nome;
    public $telefone;
    public $email;

    public function exibirDados($nome, $telefone, $email){
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->email = $email;

        echo "<p>Nome: " .$nome. "</p>";
        echo "<p>Telefone: " .$telefone. "</p>";
        echo "<p>Email: " .$email. "</p>";
    }

}

?>