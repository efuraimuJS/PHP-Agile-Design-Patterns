<?php

class InMemoryCart implements CartGateway
{
    private $listOfCarts = array();

    /**
     * @param $cartId
     * @return mixed
     */
    function retrieve($cartId)
    {
        return $this->listOfCarts[$cartId];
    }

    /**
     * @param ShoppingCart $cart
     * @return mixed
     */
    function persist(ShoppingCart $cart)
    {
        $this->listOfCarts[] = $cart;
    }

    /**
     * @return mixed
     */
    function getIdOfRecordedCart()
    {
        return end($this->listOfCarts);
    }
}