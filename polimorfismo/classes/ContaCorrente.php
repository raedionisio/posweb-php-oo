<?php

    namespace Classes;

    class ContaCorrente extends Conta
    {
        public function __construct($saldo)
        {
            parent::__construct($saldo);  
        }

        public function saca($valor)
        {
            //echo parent::AGENCIA;

            if($this->getSaldo() >= $valor){
                $this->setSaldo($this->getSaldo() - $valor - 0.10);
            }
            else{
                echo "Saldo insuficiente";
            }
        }
    }

?>