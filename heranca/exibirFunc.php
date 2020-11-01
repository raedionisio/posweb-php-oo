<?php

    require_once 'autoload.php';

    use Classes\Funcionario;
    use Classes\Gerente;
    use Classes\Programador;

    $nome = $_POST['nome'];
    $salario = $_POST['salario'];
    $cargo = $_POST['cargo']; // 1- Gerente, 2- Programador
    $obs = $_POST['obs'];

    if($cargo == 1){
        $funcionario = new Gerente($nome, $salario, $obs);
    } elseif($cargo == 2){
        $funcionario = new Programador($nome, $salario, $obs);
    } else{
        echo "Opção inválida - Funcionário não existe!";
    }

    $funcionario->relatorioFunc();


?>