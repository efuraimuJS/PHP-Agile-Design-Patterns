<?php

spl_autoload_register(function ($classname) {
    $filename = $classname . ".php";

    if (file_exists($filename)) {
        include_once($filename);
    }
});

spl_autoload_register(function ($classname) {
    $filename = $classname . ".php";

    if (file_exists($filename)) {
        include_once($filename);
    }
});


use PHPUnit\Framework\TestCase;

class VistorTest extends TestCase
{
    private PaymentMethodV $paymentMethodV;

    function testItCanProvideSimpleDescription()
    {
        $simpleDetails = new SimplePaymentDescription();
        $visaPayment = new VisaPayment();

        $visaPayment->accept($simpleDetails);

        self::assertEquals('VisaDescription', $simpleDetails->getDescription());
    }

    function testItCanProvideHtmlDescription()
    {
        $htmlDetails = new HtmlPaymentDescription();
        $visaPayment = new VisaPayment();

        $visaPayment->accept($htmlDetails);



        self::assertEquals("<HTML>VisaDescription</HTML>", $htmlDetails->getDescription());
    }
}
