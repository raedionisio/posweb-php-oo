<?php

    namespace Classes;

    class Carnivoro extends Animal
    {

        public function __construct($come)
        {
            parent::__construct($come);
        }

        public function habitoAlimentar()
        {
            
            echo "<p>Hábito alimentar de animais carnívoros: {$this->getCome()}</p>";
        }
    
    }
?>