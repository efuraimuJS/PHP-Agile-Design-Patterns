<?php


class RosesToProductAdapter implements ProductInterface
{
    private $rose;

    public function __construct(TheOldRosesInterface $rose)
    {
        $this->rose = $rose;
    }

    function getDescription()
    {
        return 'TODO: Implement getDescription() method.';
    }

    function getPrice()
    {
        //
       return $this->rose->getPriceFromDB();
    }

    function getPicture()
    {
        return $this->rose->showImage();
    }

    function sell()
    {
        return $this->rose->sell();
    }
}