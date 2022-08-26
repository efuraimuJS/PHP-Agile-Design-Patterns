<?php

require_once 'Monostate.php';

use PHPUnit\Framework\TestCase;

class MonostateTest extends TestCase
{
    function testMonostate(){
        $firstObject = new Monostate();
        $secondObject = new Monostate();

        $firstObject->setValue('100');

        self::assertEquals('100',$firstObject->getValue());
        self::assertEquals('100',$secondObject->getValue());
    }
}
