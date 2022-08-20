<?php

//interface Sell {
//    function removeFromInventory();
//    function retrievePayment();
//}

abstract class Sell{

    private $inventory;
    private $paymentProvider;

    function removeFromInventory()
    {
        $this->inventory->remove($this);
    }

    function retrievePayment()
    {
        $this->paymentProvider->retrieve($this->price);
    }
}