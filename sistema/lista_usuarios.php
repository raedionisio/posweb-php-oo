<?php

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
        echo "<p><button><a href='index.html'>Novo Cadastro</a></button></p>";
    }

    $servidor = null;

?>