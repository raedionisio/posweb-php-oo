<?php

    require_once "autoload.php";

    use Classes\Cadastro;

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];

    $cadastro = new Cadastro();
    
    $cadastro->inserir($nome, $telefone, $email);
    
    header("Location: lista_usuarios.php");

?>
