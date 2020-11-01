<?php

    namespace Classes;

    abstract class Conta
    {
        protected $saldo;
        const AGENCIA = "Banco do Brasil - UFPB";

        public function __construct($saldo=0)
        {
          $this->saldo = $saldo;  
        }

        public function getSaldo()
        {
                return $this->saldo;
        }

        public function setSaldo($saldo)
        {
                $this->saldo = $saldo;

                return $this;
        }

        final public function deposita($valor)
        {
            $this->setSaldo($this->getSaldo()+$valor);
        }

        public function saca($valor)
        {
            if($this->getSaldo() >= $valor){
                $this->setSaldo($this->getSaldo()-$valor);
            }
            else{
                echo "<p>Saldo Insuficiente!</p>";
            }
        }

        public function imprimeExtrato()
        {
            echo self::AGENCIA;
            echo "<p>Saldo: R$ {$this->getSaldo()}</p>";
        }
    }

?>