<?php

interface CartGateway
{
    function retrieve($cartId);

    function persist(ShoppingCart $cart);

    function getIdOfRecordedCart();
}