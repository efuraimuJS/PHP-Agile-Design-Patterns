<?php

require_once './Receipt.php';
require_once '../Factory-Pattern/Keyboard.php';

use PHPUnit\Framework\TestCase;


class NullObjectPatternTest extends TestCase
{
    function testNullBehavior()
    {
        self::assertEquals(2, null + 2);
        self::assertEquals('nothing', null . 'nothing');

        self::assertTrue(null == 0);
        self::assertTrue(null < -1);

        self::assertFalse(null && false);
//        self::assertFalse(null); // Failed asserting that null is false.
        self::assertNull(null);
//        self::assertTrue(true && null); //Failed asserting that false is true.

//        self::assertTrue(is_object(null)); //Failed asserting that false is true.


        if (null) {
            echo 'Inside IF statement';

        } else {
            echo 'Inside ELSE';
        }
    }

    function testReceiptCanAddProductsToItTotal()
    {
        $receipt = new Receipt();

        $product = new Keyboard();
        $receipt->addToTotal($product);

        self::assertEquals(666, $receipt->getTotalPrice());

//        $receipt->addProductById(0);
        $receipt->addProductById(1);


    }
}
