<?php

    require_once "autoload.php";

    //use Classes\Animal;
    use Classes\Carnivoro;
    use Classes\Herbivoro;

    $tipoCarn = new Carnivoro("Carne");
    $tipoHerb = new Herbivoro("Legumes");

    $tipoCarn->habitoAlimentar();
    $tipoHerb->habitoAlimentar();

?>