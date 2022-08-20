<?php

class ProductFactory
{
    function makeProductFrodId($productId)
    {
        if ($this->isKeyboard($productId)) {
            return new Keyboard();

        } else {
            return new Mouse();
        }
    }

    private function isKeyboard($productId)
    {
        return substr($productId, 0, 1) == 'K';
    }
}