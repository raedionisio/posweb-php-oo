<?php

    require_once "autoload.php";

    use Classes\Conta;
    use Classes\ContaCorrente;
    use Classes\ContaPoupanca;

    $tipoCC = new ContaPoupanca(500);
    $tipoCP = new ContaCorrente(200);

    $tipoCC->saca(100);
    $tipoCP->saca(100);

    $tipoCC->imprimeExtrato();
    $tipoCP->imprimeExtrato();
?>