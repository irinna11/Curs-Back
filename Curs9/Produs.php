<?php

class Produs
{
    private string $numeProdus;
    private float $pret;

    public function __construct(string $numeProdus, float $pret)
    {
        $this->numeProdus = $numeProdus;
        $this->pret = $pret;
    }

    public function getNumeProdus(): string
    {
        return $this->numeProdus;
    }

    public function setNumeProdus(string $numeProdus): void
    {
        $this->numeProdus = $numeProdus;
    }

    public function getPret(): float
    {
        return $this->pret;
    }

    public function setPret(float $pret): void
    {
        $this->pret = $pret;
    }

    public function toString(): string
    {
        return "Produs: {$this->numeProdus}, pret: {$this->pret}.";
    }
}
$produs = new Produs("Laptop", 3500.99);
echo $produs->toString();