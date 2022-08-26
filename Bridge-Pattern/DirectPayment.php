<?php


interface DirectPayment
{
    public function approve();

    public function send();
}