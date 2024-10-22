<?php

require_once 'Fruit.php';

class Apple extends \Curs9\Fruit
{
    public int $year;

    public function __construct(string $name, string $color, string $shape, int $year)
    {
        parent::__construct($name, $color, $shape);
        $this-> year = $year;
    }


    public function fall():string
    {
        return 'aplle is falling...';
    }
}