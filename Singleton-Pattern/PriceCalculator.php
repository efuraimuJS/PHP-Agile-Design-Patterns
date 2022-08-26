<?php

require_once '../Factory-Pattern/Product.php';

class PriceCalculator{

    function compute(Product $product){
        $discountProvider = DiscountProvier::getInstance();
        $price = $product->getPrice();
        $discountAsPercent = $discountProvider->getDiscountFor($product.getId());
        $discountAsValue = $price * $discountAsPercent;
        return $price - $discountAsValue;
    }
}