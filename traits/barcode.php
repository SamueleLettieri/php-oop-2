<?php

trait code{
    protected $barcode;

    public function setBarcode($_barcode){
        $this->barcode = $_barcode;
    }

    public function getBarcode(){
       return $this->barcode; 
    }
}

?>