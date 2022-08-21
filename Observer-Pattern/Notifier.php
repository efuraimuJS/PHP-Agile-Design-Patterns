<?php

require_once __DIR__ . '/ProductSubject.php';
require_once __DIR__ . '/ProductObserver.php';

class Notifier implements ProductObserver
{
    private $product;
    /**
     * Notifier constructor.
     * @param ProductSubject $product
     */
    public function __construct(ProductSubject $product)
    {
    }

    /**
     * @return mixed
     */
    function update()
    {
        $newPrice = $this->product->getPrice();
    }
}