<?php

require_once 'PaymentMethod.php';
class PayPalPayment implements PaymentMethod{

    /**
     * @return mixed
     */
    function execute()
    {
        // TODO: Implement execute() method.
    }

    function __toString()
    {
        return 'Paypal';
    }
}