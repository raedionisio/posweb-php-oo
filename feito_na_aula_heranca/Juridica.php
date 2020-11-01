<?php

    class Fisica extends Pessoa
    {
        private $cnpj;

        public function __construct($nome='', $cnpj='')
        {
            parent::__construct($nome);
            $this->cnpj = $cnpj;
        }

        public function CNPJ()
        {
            echo "<p>Jaja implemento esse método</p>";
        }
    }

?>