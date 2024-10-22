<?php

class Car
{
    public string $model;

    public function __construct()
    {
        // echo 'Helo from construct method <br>';
        $this ->model = "Car";
    }

    public function setModel (string $model) : void
    {
        $this ->model = $model;
    }

    public function __destruct() // __destruct elimina tot, unset doar una
    {
        echo 'unsetted';
    }
}