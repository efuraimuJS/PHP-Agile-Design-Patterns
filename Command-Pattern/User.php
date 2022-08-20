<?php

class User
{
    private $paymentMethod;

    function getPaymentMethod()
    {
        //VisaPayment or PayPalPayment
        return $this->paymentMethod;
    }
}