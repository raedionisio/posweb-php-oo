<?php

    require_once "autoload.php";

    use Classes\Cadastro;

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];

    $cadastro = new Cadastro($nome, $telefone, $email);
    
    $cadastro->inserir();

    $cadastro->exibir();

?>