<?php

    class Movie {
        public $name;
        public $price;
        public $description;

        function __construct($_name, $_price = null, $description){
            $this->name = $_name;
            $this->price = $_price;
            $this->description = $description;
        }

        function printMovie(){
            echo '<h1>';
            echo $this->name;
            echo '</h1>';

            echo '<h3>';
            echo $this->price;
            echo '</h3>';
            echo '<p>';
            echo $this->description;
            echo '</p>';
        }


    }




    $filmUno = new Movie("l'uomo senza sonno", "23", "descrizione film uno");
    $filmUno-> printMovie();

    echo '<br>';

    $filmDue = new Movie("american psyco", "44", "descrizione film due");
    $filmDue-> printMovie();


    echo '<br>';

    $filmTre = new Movie("nomefilmtre", "null", "descrizione film tre");
    $filmTre-> printMovie();



?>


