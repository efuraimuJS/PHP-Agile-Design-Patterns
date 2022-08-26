<?php


abstract class PaymentMethod implements CreditPayment, DirectPayment
{

    abstract public function approve();

    abstract public function send();
    private $paymentSource;
    public function setPaymentSource(PaymentSource $paymentSource)
    {
        $this->paymentSource = $paymentSource;
    }

    protected function sendImp()
    {   $this->paymentSource->send();
        
    }

    protected function approveImp()
    {
        $this->paymentSource->approve();
    }
}