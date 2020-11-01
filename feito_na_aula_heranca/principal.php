<?php

    require_once "Produto.php";

    $produto = new Produto("001", "Cyberpunk 2077", "200,00");

    $produto->imprimeProduto();

    $produto = null;

?>