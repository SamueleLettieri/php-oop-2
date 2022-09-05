<?php 

class ECommerce{
    protected $user;
    protected $productsForAnimals;
    protected $payment;




    function __construct($_user, $_productForAnimals, $_payment){
        $this->user = $_user;
        $this->productForAnimals = $_productForAnimals;
        $this->payment = $_payment;
    }


}
?>