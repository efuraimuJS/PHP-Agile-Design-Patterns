<?php

class ShoppingHistory
{
    private $gateway;
    private $shoppingCartIds = array();

    public function __construct(CartGateway $gateway, $ids = array())
    {
        $this->gateway = $gateway;
        $this->shoppingCartIds = $ids;
    }

    function listAllCarts()
    {
        $shoppingCarts = array();
        foreach ($this->shoppingCartIds as $cartId) {
            $shoppingCarts = $this->gateway->retrieve($cartId);
        }

        return $shoppingCarts;
    }
}