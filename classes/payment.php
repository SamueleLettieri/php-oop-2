<?php 
require_once __DIR__ . '/e-commerce.php';
require_once __DIR__ . '/user.php';

class payment extends ECommerce{
    protected $creditCard;
    protected $discount;


    function __construct($_user, $_productForAnimals, $_payment, $_creditCard){
        parent::__construct($_user, $_productForAnimals, $_payment);
        $this->creditCard = $_creditCard;
    }

    public function setdiscount($userRegistered){
        if($userRegistered == true){
            $this->discount =  20 .'%';
        }
    }

    public function getdiscount(){
        return $this->discount;
    }
}


?>