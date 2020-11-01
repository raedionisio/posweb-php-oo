<?php

    $id = $_GET['id'];

    $servidor = new PDO('mysql:host=localhost; dbname=livros', 'root', '');
    
    $servidor->exec("DELETE from famosos where id = $id");

    $servidor = null;

    header("Location: exemploSelect.php");

?>