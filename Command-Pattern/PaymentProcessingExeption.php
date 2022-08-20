<?php


class PaymentProcessingExeption extends Exception
{

    /**
     * PaymentProcessingExeption constructor.
     * @param string $string
     */
    public function __construct(string $message)
    {   parent::__construct($message);
    }
}