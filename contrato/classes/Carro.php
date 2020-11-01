<?php

    namespace Classes;

    final class Carro extends Veiculo implements ICaracteristicas
    {

        const Tipo = "Carro";

        public function __construct($nome, $marca, $modelo)
        {
            parent::__construct ($nome, $marca, $modelo);
        }

        function exibeNome()
        {
            echo "Tipo: " . self::Tipo;
            echo "<p>Nome: {$this->getNome()}</p>";
        }
        function exibeMarca()
        {
            echo "<p>Marca: {$this->getMarca()}</p>";
        }
        function exibeModelo()
        {
            echo "<p>Modelo: {$this->getModelo()}</p>";
        }

    }   

?>