<?php
class NullProduct implements Product{

    /**
     * @return mixed
     */
    function getPrice()
    {
       return 0;
    }

    /**
     * @return mixed
     */
    function getPicture()
    {
        return '/img/default.png';
    }

    /**
     * @return mixed
     */
    function getDescription()
    {
       return '';
    }
}