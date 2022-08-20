<?php

class FileCart implements CartGateway
{

    private $fileId;

    public function __construct()
    {
        $this->fileId = uniqid();
    }

    /**
     * @param $cartId
     * @return mixed
     */
    function retrieve($cartId)
    {
        return unserialize(file_get_contents($cartId));
    }

    /**
     * @param ShoppingCart $cart
     * @return mixed
     */
    function persist(ShoppingCart $cart)
    {
        file_put_contents($this->fileId, serialize($cart));
    }

    /**
     * @return mixed
     */
    function getIdOfRecordedCart()
    {
        return $this->fileId;
    }
}