<?php 
require_once __DIR__ . '/e-commerce.php';

class User extends ECommerce{
    protected $userRegistered;


    function __construct($_user, $_productForAnimals, $_payment, $_userRegistered){
        parent::__construct($_user, $_productForAnimals, $_payment);
        $this->userRegistered = $_userRegistered;
    }
}




?>