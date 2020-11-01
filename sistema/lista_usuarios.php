<?php

    require_once "autoload.php";
    
    use Classes\Cadastro;
    
    $listar = new Cadastro();

    $listar->exibir();

    echo "<p><button><a href='index.html'>Novo Cadastro</a></button></p>";

    $servidor = null;

?>
