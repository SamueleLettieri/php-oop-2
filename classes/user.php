<?php 
require_once __DIR__ . '/e-commerce.php';

class User extends ECommerce{
    protected $userRegistered;
    protected $userNotRegistered;


    function __construct($_user, $_productForAnimals, $_payment, $_userRegistered, $_userNotRegistered){
        parent::__construct($_user, $_productForAnimals, $_payment);
        $this->userRegistered = $_userRegistered;
        $this->userNotRegistered = $_userNotRegistered;
    }
}




?>