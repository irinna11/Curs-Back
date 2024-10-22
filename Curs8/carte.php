<?php

require_once 'Carti.php';

//1.
function alegeValoareAleatorie($vector)
{
    if (empty($vector)) {
        return null; // Verificăm dacă vectorul este gol
    }
    $cheieAleatorie = array_rand($vector); // Alege o cheie aleatorie din vector
    return $vector[$cheieAleatorie]; // Returnează valoarea corespunzătoare cheii alese
}
echo '<br>', '<hr>';

$valori = [10, 20, 30, 40, 50];
$valoareAleatorie = alegeValoareAleatorie($valori);
echo "Valoarea aleasă aleatoriu este: " . $valoareAleatorie;

echo '<br>', '<hr>';


//3.
function alegeValoareAleatorie1($vector)
{
    $cheieAleatorie = array_rand($vector);
    return $vector[$cheieAleatorie];
}

$titluri = [
    "Mândrie și prejudecată", "1984", "Crimă și pedeapsă",
    "Micul Prinț", "Harry Potter și Piatra Filosofală",
    "Divina Comedie", "Don Quijote", "Jane Eyre",
    "Moby Dick", "Război și pace"
];

$autori = [
    "Jane Austen", "George Orwell", "Fyodor Dostoevsky",
    "Antoine de Saint-Exupéry", "J.K. Rowling",
    "Dante Alighieri", "Miguel de Cervantes", "Charlotte Brontë"
];

$ani = [1813, 1949, 1866, 1943, 1997];

$pagini = [432, 328, 671, 96, 223, 752, 374, 267, 635, 1024];

// Generarea vectorului cu 10 obiecte Carte
$Carti = [];

for ($i = 0; $i < 10; $i++)
{
    $titlu = alegeValoareAleatorie1($titluri);
    $autor = alegeValoareAleatorie1($autori);
    $an = alegeValoareAleatorie1($ani);
    $numarPagini = alegeValoareAleatorie1($pagini);

    $carti[] = new Carti ($titlu, $autor, $an, $numarPagini);
}



foreach ($carti as $carte)
{
    echo "<pre>";
    $carte->afiseazaDetalii();
}
