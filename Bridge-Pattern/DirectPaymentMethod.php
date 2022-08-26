<?php


use phpDocumentor\Reflection\Types\Parent_;

class DirectPaymentMethod extends PaymentMethod
{

    public function approve()
    {
        parent::approveImp();
    }

    public function send()
    {
        parent::sendImp();
    }
}