<?php
class USAPricingStrategy implements PriceCalculator{
//    private function discountUSA()
//    {
//        return -45;
//    }
//
//    private function USATaxes($price)
//    {
//        return $price * 5 / 100;
//    }
//
//    private function convertToDollar($price)
//    {
//        return $price * 1;
//    }

    /**
     * @param $price
     * @return mixed
     */
    function applyDiscount($price)
    {
        if($price > 1000) return -100;
        return -45;
    }

    /**
     * @param $price
     * @return mixed
     */
    function calculateTaxes($price)
    {
        return $price * 5 / 100;
    }

    /**
     * @param $price
     * @return mixed
     */
    function convertCurrencies($price)
    {
        return $price * 1;
    }
}