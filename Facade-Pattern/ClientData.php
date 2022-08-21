<?php


class ClientData
{
    /**
     * @var mixed
     */
    public $address;
    /**
     * @var int[]
     */
    public array $paymentHistory;
    public int $topPayment;

    /**
     * ClientData constructor.
     */
    public function __construct()
    {
    }
}