<?php

require_once __DIR__ . '/ProductSubject.php';

class HardDisk extends ProductSubject
{
    private $price;
    /**
     * HardDisk constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
        $this->notify();
    }
}