<?php

    namespace Classes;
    use PDO;

    class Cadastro
    {
        private $nome;
        private $telefone;
        private $email;

        public function __construct()
        {

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

        public function inserir($nome, $telefone, $email)
        {
            $this->setNome($nome);
            $this->setTelefone($telefone);
            $this->setEmail($email);

            $servidor = new PDO('mysql:host=localhost;dbname=sistema', 'root', '');

            $consultaPrep = $servidor->prepare("INSERT into cadastro (nome, telefone, email) VALUES (:nome, :telefone, :email)");
            $consultaPrep->bindParam(':nome', $nome);
            $consultaPrep->bindParam(':telefone', $telefone);
            $consultaPrep->bindParam(':email', $email);

            $consultaPrep->execute();

            $servidor = null;
        }

        public function exibir()
        {
            $servidor = new PDO('mysql:host=localhost;dbname=sistema', 'root', '');

            $tabelaSelect = $servidor->query("SELECT * FROM cadastro");
            
                if($tabelaSelect){
                    echo"
                        <table border='1'>
                        <tr>
                            <td>Código</td> 
                            <td>Nome</td>
                            <td>Telefone</td>
                            <td>E-mail</td>
                        </tr>
                    ";
            
                    foreach($tabelaSelect as $valorLinha){
                        $codigo = $valorLinha['codigo'];
                        echo"
                        <tr>
                            <td>" . $valorLinha['codigo'] . "</td>
                            <td>" . $valorLinha['nome'] . "</td>
                            <td>" . $valorLinha['telefone'] . "</td>
                            <td>" . $valorLinha['email'] . "</td>
                        </tr>";
                    }
            
                    echo "</table>";
                }
            $servidor = null;
        }
    }
    
?>
