<?php


interface PaymentVisitor
{
    public function visit(PaymentMethodV $paymentMethodV);

    public function getDescription();
}