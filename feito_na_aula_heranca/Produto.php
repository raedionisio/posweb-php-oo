<?php

    class Produto
    {
        private $codigo;
        private $nome;
        private $preco;

        public function __construct($codigo, $nome, $preco)
        {
            $this->codigo = $codigo;
            $this->nome = $nome;
            $this->preco = $preco;
        }

        public function imprimeProduto()
        {
            echo "<p>Nome: {$this->nome}</p>";
            echo "<p>Preço: {$this->preco}</p>";
        }

        public function __destruct()
        {
            echo "<p>Omae wa mou shindeiru! Nani?</p>";
        }
    }
?>