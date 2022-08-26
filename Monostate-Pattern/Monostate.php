<?php


class Monostate
{
    private static $value;

    /**
     * @return mixed
     */
    public function getValue()
    {
        return self::$value;
    }
    /**
     * Monostate constructor.
     */
    public function __construct()
    {
    }

    public function setValue(string $value)
    {
        self::$value = $value;
    }
}