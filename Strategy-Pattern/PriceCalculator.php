<?php

interface PriceCalculator
{
    function applyDiscount($price);

    function calculateTaxes($price);

    function convertCurrencies($price);
}