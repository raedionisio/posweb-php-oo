<?php

    // 1ª e 2ª Etapa - Conexão com um SGBD e com uma base de dados específica
    $servidor = new PDO('mysql:host=localhost;dbname=livros', 'root', '');

    $tabela = $servidor->query("UPDATE famosos SET nome = 'Israel Dionísio' WHERE id = $id");
    
    $servidor = null;

?>