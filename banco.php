<?php 

    $banco = new mysqli('localhost', 'root', '', 'banco_receitas');

    function createOnDb($into, $values){
        global $banco;

        $q = "INSERT INTO $into values $values";

        $resp = $banco->query($q);
        echo "<br> Query: $q"; 
        echo var_dump($resp);

    }

    function criarUsuario(string $usuario, string $email, string $senha, $debug=false) : void {
        global $banco;

        $senha = password_hash($senha, PASSWORD_DEFAULT);
        
        $q = "INSERT INTO usuarios(usuario, email, senha) values ('$usuario', '$email', '$senha')";
    
        $resp = $banco->query($q);
        
        if($debug){
            echo "<br> Query: $q"; 
            echo var_dump($resp);
        }
    }

?>