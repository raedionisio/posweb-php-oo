<?php

    namespace Classes;
    use PDO;

    class Cadastro
    {
        private $nome;
        private $telefone;
        private $email;

        public function __construct($nome, $telefone, $email)
        {
            $this->nome = $nome;
            $this->telefone = $telefone;
            $this->email = $email;
        }

        public function getNome()
        {
                return $this->nome;
        }

        public function setNome($nome)
        {
                $this->nome = $nome;

                return $this;
        }

        public function getTelefone()
        {
                return $this->telefone;
        }

        public function setTelefone($telefone)
        {
                $this->telefone = $telefone;

                return $this;
        }

        public function getEmail()
        {
                return $this->email;
        }

        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        public function inserir()
        {
            $servidor = new PDO('mysql:host=localhost;dbname=sistema', 'root', '');

            $consultaPrep = $servidor->prepare("INSERT into cadastro (nome, telefone, email) VALUES (:nome, :telefone, :email)");
            $consultaPrep->bindParam(':nome', $this->nome);
            $consultaPrep->bindParam(':telefone', $this->telefone);
            $consultaPrep->bindParam(':email', $this->email);

            $consultaPrep->execute();

            $servidor = null;
        }

        public function exibir()
        {
            header("Location: lista_usuarios.php");
        }
    }
    
?>