<?php

    // Primeira e Segunda etapas - Conexão com SGBD e com uma base de dados específica
    $servidor = new PDO('mysql:host=localhost; dbname=livros', 'root', '');

    // Terceira etapa - Executar uma consulta (insert, update e delete)
    //$servidor->exec("INSERT INTO famosos (nome) VALUES ('Rafael Carneiro')");
    $consultaPrep = $servidor->prepare("INSERT into famosos (nome) VALUES (:nomeNovo)");
    $consultaPrep->bindParam(':nomeNovo', $nome);

    $nome = "João Guilherme";
    $consultaPrep->execute();

    $nome = "Tiago Catupiry";
    $consultaPrep->execute();

    $servidor = null;

?>