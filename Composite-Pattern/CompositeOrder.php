<?php


class CompositeOrder implements Order
{

    private $orders = array();

    function add(Order $order){
        $this->orders[] = $order;
    }

    function place()
    {
        array_walk($this->orders, function($order){
            $order->place();
        });
    }
}