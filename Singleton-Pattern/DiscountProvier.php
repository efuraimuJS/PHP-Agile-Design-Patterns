<?php


use phpDocumentor\Reflection\Types\Self_;

class DiscountProvier
{
    private static $instance = null;

    private function __construct(){

    }

    public static function getInstance()
    {
        if(self::$instance == NULL)
            self::$instance = new DiscountProvier();
        return self::$instance;
    }

    public function getDiscountFor($product)
    {
       return 30;
    }
}