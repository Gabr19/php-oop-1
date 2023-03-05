<?php

    class Movie {
        public $name;
        public $price;

        function __construct($_name, $_price){
            $this->name = $_name;
            $this->price = $_price;
        }


    }




    $filmUno = new Movie("l'uomo senza sonno", "23");
    var_dump($filmUno) ;

    echo '<br>';

    $filmDue = new Movie("american psyco", "44");
    var_dump($filmDue) ;


?>


