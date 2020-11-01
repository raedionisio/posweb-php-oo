<?php

    require_once "autoload.php";
    require_once "interfaces/ICaracteristicas.php";

    use Classes\Carro;
    use Classes\Moto;

    $tipoVeiculo = $_POST['tipoVeiculo']; // 1- Carro, 2- Moto
    $nome = $_POST['nome'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];

    if($tipoVeiculo == 1){
        $dadosVeiculo = new Carro($nome, $marca, $modelo);
    } elseif($tipoVeiculo == 2){
        $dadosVeiculo = new Moto($nome, $marca, $modelo);
    } else{
        echo "Opção inválida - Funcionário não existe!";
    }

    $dadosVeiculo->exibeNome();
    $dadosVeiculo->exibeMarca();
    $dadosVeiculo->exibeModelo();

?>