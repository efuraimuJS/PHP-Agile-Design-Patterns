<?php



use PHPUnit\Framework\TestCase;

class ObserverTest extends TestCase
{
    function testItCanNotify(){
        $product = new HardDisk();
        $mailNotifier = new Notifier($product);
        $product->register($mailNotifier);
    }
}
