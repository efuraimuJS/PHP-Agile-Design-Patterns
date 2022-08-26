<?php
spl_autoload_register(function ($classname) {
    $filename = $classname . ".php";

    if (file_exists($filename)) {
        include_once($filename);
    }
});
class VisaPayment implements PaymentMethodV
{

    /**
     * @return mixed
     */
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