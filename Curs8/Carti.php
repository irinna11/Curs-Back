<?php

//2.
class Carti
{
    public $autor;
    public $titlu;
    public $an;
    public $pagini;

    public function __construct ($autor, $titlu, $an, $pagini) {
        $this-> autor = $autor;
        $this -> titlu =$titlu;
        $this-> an = $an;
        $this -> pagini = $pagini;
    }

    public function afiseazaDetalii() {
        echo "{$this->autor}, {$this->titlu}, nr. pagini: {$this->pagini}, an apariție: {$this->an}";
    }

}

$carte = new Carti ("Ion", "Liviu Rebreanu", "2005", "123");
$carte->afiseazaDetalii();
