<?php


class ClientPersonalData
{
    private $postalCode;

    private $country;

    private $streetAddress;

    public function __construct($clientId)
    {
        //Class will load itself on creation with Active Record & populate it's private
        //variabels
    }

    /**
     * @return mixed
     */
    public function getStreetAddress()
    {
        return $this->streetAddress;
    }
    /**
     * @return mixed
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }
    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }


}