<?php


class SimplePaymentDescription implements PaymentVisitor
{
    private $description;
    public function visit(PaymentMethodV $paymentMethodV)
    {
        $this->description = $paymentMethodV->getDescription();
    }

    public function getDescription()
    {
        return $this->description;
    }
}