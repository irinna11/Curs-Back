<?php

class Animal
{
    public string $name;
    public int $age;

    protected int $legs;

    private  int $height;

    public function __construct(string $name, int $age, int $legs, int $height)
    {
        $this->name = $name;
        $this->age = $age;
        $this->legs = $legs;
        $this->height = $height;

    }
    public function getHeight(): int  //doar pot sa vad
    {
        return $this->height;
    }
    public function setHeight(int $height): void //se poate modifica
    {
        $this->height = $height;
    }
}