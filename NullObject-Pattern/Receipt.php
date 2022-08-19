<?php
require_once __DIR__ . '/../Factory-Pattern/Product.php';
require_once 'ProductProvider.php';


class Receipt
{
    private $total;

    public function addProductById($id)
    {
        $provider = new ProductProvider();
        $product = $provider->findProduct($id);
        $this->addToTotal($product);
    }

    public function addToTotal(Product $product)
    {
        if (!is_null($product))
            $this->total += $product->getPrice();
    }

    function getTotalPrice()
    {
        return $this->total;
    }
}