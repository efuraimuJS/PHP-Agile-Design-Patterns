<?php

class GrandPrice
{
    private $sellerFrom;

    function calculate($price, PriceCalculator $pricingStrategy)
    {

        $grandPrice = $price;
        $grandPrice += $pricingStrategy->applyDiscount($price);
        $grandPrice += $pricingStrategy->calculateTaxes($price);
        $grandPrice += $pricingStrategy->convertCurrencies($price);

        return $grandPrice;

    }




}