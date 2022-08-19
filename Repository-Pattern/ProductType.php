<?php

class ProductType
{
    private $category;
    private $name;
    private $code;

    public function __construct($category, $code, $name)
    {
        $this->category = $category;
        $this->code = $code;
        $this->name = $name;
    }

    public function __get($typeProperty)
    {
        if (!isset($this->typeProperty))
            throw new Exception('No such property');
        return $this->typeProperty;
    }
}