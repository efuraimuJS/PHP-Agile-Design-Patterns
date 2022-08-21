<?php


abstract class ProductSubject
{
    private array $observers = array();

    function register(ProductObserver $observer){
        $this->observers[] = $observer;
    }

    protected function notify(){
        foreach ($this->observers as $observer)
            $observer->update();
    }
}