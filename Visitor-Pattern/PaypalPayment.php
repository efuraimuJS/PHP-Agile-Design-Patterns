<?php




class PaypalPayment implements PaymentMethodV
{
    private $paymentVisitor;
    public function getDescription()
    {
        return 'VisaDescription';
    }

    public function accept(PaymentVisitor $paymentVisitor)
    {

        $paymentVisitor->visit($this);
    }
}