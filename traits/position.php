<?php

trait position{
    protected $address;

    public function setAddress($_address){
        $this->address = $_address;
    }

    public function getAddress(){
       return $this->address; 
    }
}

?>