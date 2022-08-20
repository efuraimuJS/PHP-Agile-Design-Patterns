<?php
// Provide products of various Types.
// i.e. a gateway, repository/ Database access layer.
require_once 'NullProduct.php';

class ProductProvider
{

    /**
     * ProductProvider constructor.
     */
    public function __construct()
    {
    }

    public function findProduct($id)
    {
        if ($id == 0) {
            return new Keyboard();

        } else {
            return new NullProduct();
        }
    }
}