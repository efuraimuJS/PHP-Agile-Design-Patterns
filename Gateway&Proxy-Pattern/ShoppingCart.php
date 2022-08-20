<?php

class ShoppingCart implements Cart
{
    private $products;

    /**
     * @return mixed
     */
    function getProducts()
    {
        return $this->products;
    }
}