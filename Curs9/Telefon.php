<?php

require_once "Produs.php";

class Telefon extends Produs
{
    private string $descriere;
    private string $disponibilitate;

    public function __construct(string $numeProdus, float $pret, string $descriere, string $disponibilitate)
    {
        parent::__construct($numeProdus, $pret);
        $this->descriere = $descriere;
        $this->disponibilitate = $disponibilitate;
    }

        public function getDescriere(): string
    {
        return $this->descriere;
    }

    public function setDescriere(string $descriere): void
    {
        $this->descriere = $descriere;
    }

    public function getDisponibilitate(): string
    {
        return $this->disponibilitate;
    }

    public function setDisponibilitate(string $disponibilitate): void
    {
        $this->disponibilitate = $disponibilitate;
    }

    public function toString(): string
    {
        return "Produsul: {$this->getNumeProdus()}, cu următoarea descriere: {$this->descriere}, având prețul: {$this->getPret()}, este: {$this->disponibilitate}.";
    }
}

$telefon = new Telefon("iPhone 15", 65625.99, "Telefon cu ecran OLED și cameră performantă", "disponibil");
echo $telefon->toString();

echo '<br>';

$produs1 = new Produs("Laptop Dell", 3200.50);
$produs2 = new Produs("Monitor Samsung", 800.75);

// Crearea a două obiecte de tip Telefon
$telefon1 = new Telefon("iPhone 15", 4999.99, "Telefon cu ecran OLED și cameră performantă", "disponibil");
$telefon2 = new Telefon("Samsung Galaxy S23", 3999.99, "Telefon cu ecran AMOLED și baterie de lungă durată", "indisponibil");

// Afișarea informațiilor fiecărui obiect folosind funcția toString()
echo $produs1->toString() . PHP_EOL;
echo '<br>';
echo $produs2->toString() . PHP_EOL;
echo '<br>';
echo $telefon1->toString() . PHP_EOL;
echo '<br>';
echo $telefon2->toString() . PHP_EOL;

