<?php

class Keyboard implements Product{

    /**
     * @return mixed
     */
    function getPrice()
    {
        return 666;
    }

    /**
     * @return mixed
     */
    function getPicture()
    {
        return 'lorem ipsum';
    }

    /**
     * @return mixed
     */
    function getDescription()
    {
        return 'Lorem ipsum dolor sit amet.';
    }
}