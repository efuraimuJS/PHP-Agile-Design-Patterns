<?php


class SellServices extends Sell
{
    private $price;
    private $humanResources;

    function markHumanResourcesAsOccupied(){
        $this->humanResources->mark(2);
    }
}