<?php
class EuropePricingStrategy implements PriceCalculator {

//    function discountEurope($price)
//    {
//        return -10;
//    }
//
//     function EuropeTaxes($price)
//    {
//        return $price * 20 / 100;
//    }
//
//     function convertToEuro($price)
//    {
//        return $price * 0.7;
//    }

    /**
     * @return mixed
     */
    function applyDiscount($price)
    {
        if($price > 1000) return -100;
        return -10;
    }

    /**
     * @return mixed
     */
    function calculateTaxes($price)
    {
        return $price * 20 / 100;
    }

    /**
     * @return mixed
     */
    function convertCurrencies($price)
    {
        return $price * 0.7;
    }
}