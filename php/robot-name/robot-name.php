<?php

class Robot
{
    private $name;

    private static $lockedNames = [];

    public function __construct()
    {
        $this->name = $this->generateName();
    }

    public function getName()
    {
        return $this->name;
    }

    public function reset()
    {
        $this->name = $this->generateName();
    }

    private function generateName()
    {
        do {
            $prefix = substr(str_shuffle(str_repeat('ABCDEFGHIJKLMNOPQRSTUVWXYZ', 5)), 0, 2);
            $suffix = substr(str_shuffle(str_repeat('0123456789', 5)), 0, 3);

            $name = $prefix . $suffix;
        } while (in_array($name, self::$lockedNames));

        self::$lockedNames[] = $name;

        return $name;
    }
}
