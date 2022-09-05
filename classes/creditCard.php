<?php 
require_once __DIR__ . '/e-commerce.php';
require_once __DIR__ . '/payment.php';

class creditCard extends payment{
    protected $creditCardExpired;



    
    function __construct($_user, $_productForAnimals, $_payment, $_creditCard, $_creditCardExpired){
        parent::__construct($_user, $_productForAnimals, $_payment, $_creditCard);
        $this->creditCardExpired = $_creditCardExpired;
    }

    
    public function setcreditCardExpired($creditCardExpired){
        if($creditCardExpired == true){
        $this->creditCard = null;
        }
    }


}





?>