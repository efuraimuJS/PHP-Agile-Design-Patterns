<?php


class OrderDelivery implements UserAddress
{

    private $deliveryAddress;

    function setAddress($newAddress)
    {
        $this->deliveryAddress = $newAddress;
    }
}