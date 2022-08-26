<?php

require_once 'RedRose.php';
require_once 'ShopOwner.php';

use PHPUnit\Framework\TestCase;

class ShopOwnerTest extends TestCase
{
    function testOwnerCanSellRedRoses()
    {
        $redRose = new RedRose();
        $shopOwner = new ShopOwner($redRose);
        $shopOwner->sell();

        self::assertTrue($redRose->isSold());
    }
}
