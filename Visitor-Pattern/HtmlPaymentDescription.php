<?php
spl_autoload_register(function ($classname) {
    $filename = $classname . ".php";

    if (file_exists($filename)) {
        include_once($filename);
    }
});

class HtmlPaymentDescription implements PaymentVisitor
{

    private $description;
    public function visit(PaymentMethodV $paymentMethodV)
    {
        $this->description = '<HTML>'.$paymentMethodV->getDescription().'</HTML>';
    }

    public function getDescription()
    {
        return $this->description;
    }
}