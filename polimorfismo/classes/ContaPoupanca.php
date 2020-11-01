<?php

    namespace Classes;

    final class ContaPoupanca extends Conta
    {
        public function __construct($saldo)
        {
            parent::__construct($saldo);  
        }
    }

?>