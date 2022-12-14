<?php 
require_once __DIR__ . '/e-commerce.php';
require_once __DIR__ . '/../traits/barcode.php';
require_once __DIR__ . '/../traits/position.php';

class productForAnimal extends ECommerce{
    use code;
    use position;

    protected $gamesForAnimals;
    protected $foodForAnimals;
    protected $petBeds;
    protected $collars;
    protected $objechtForAnimals;

    function __construct($_user, $_productForAnimals, $_payment, $_gamesForAnimals, $_foodForAnimals, $_petBeds, $_collars, $_objechtForAnimals){
        parent::__construct($_user, $_productForAnimals, $_payment);
        $this->gamesForAnimals = $_gamesForAnimals;
        $this->foodForAnimals = $_foodForAnimals;
        $this->petBeds = $_petBeds;
        $this->collars = $_collars;
        $this->objechtForAnimals = $_objechtForAnimals;
    }




}




?>