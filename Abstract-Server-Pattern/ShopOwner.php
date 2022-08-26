<?php

class ShopOwner
{
    private $rose;
    /**
     * ShopOwner constructor.
     * @param Roses $rose
     */
    public function __construct(Roses $rose)
    {
        $this->rose = $rose;
    }

    public function sell()
    {
        $this->rose->sell();
    }
}