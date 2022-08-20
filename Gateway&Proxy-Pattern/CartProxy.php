<?php
require_once './ShoppingCart.php';

class CartProxy implements Cart
{
    private $shoppingCart;

    /**
     * @return mixed
     */
    function getProducts()
    {

        if (is_null($this->shoppingCart))
            $this->shoppingCart = new ShoppingCart();
        return $this->shoppingCart->getProducts();
    }
}