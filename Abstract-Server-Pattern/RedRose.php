<?php

require_once 'Roses.php';

class RedRose implements Roses
{
    private bool $sold = false;
    /**
     * RedRose constructor.
     */
    public function __construct()
    {
    }

    function sell(){
        $this->sold = true;
    }

    public function isSold()
    {
        return $this->sold;
    }
}