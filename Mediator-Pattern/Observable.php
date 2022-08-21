<?php


abstract class Observable
{
    private $observers = array();
    public function register(Mediator $observer)
    {
        $this->observers = $observer;
    }

    protected function notify($hint)
    {
        foreach ($this->observers as $observer)
            $observer->update($hint);
    }
}