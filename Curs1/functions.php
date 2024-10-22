<?php
declare(strict_types=0);

// FUNCTII

function showMessage()
{
    echo 'message';

}

function returnMessage()
{
    return 'message returned';

}

showMessage();  // apelare functie  (afisare )

echo '<br/>';

echo returnMessage(); // returneza ceva din functie 

function showName ($name='Lepus') 
{
    echo 'My name is : ' . $name;  //Concatenare
}

echo '<br/>';
showName ('Irina');
echo '<br/>';
showName ();

function addNumbers(int $a, int $b)
{ 
    return $a + $a;
}

echo '<br/>';
echo addNumbers(1, 1);
echo addNumbers (1, '5');
echo '<br/>';
echo '<br/>';

echo 'TEMA';
echo '<br/>';
echo '<br/>';
//TEMA 
// 1.
function afiseazaValoare($valoare) 
{
    echo 'Ati introdus valoarea:' . $valoare;
}

afiseazaValoare(42);
echo '<br/>';

//2.
function calculeazaTotal($pretProdus1, $pretProdus2)
{
    $total = $pretProdus1 + $pretProdus2;
    echo 'Total de plata pentru produsele selectate este: ' . $total . 'lei';
}

calculeazaTotal(150, 350);  
echo '<br/>';

//3.
function adunareTreiParametri($param1, $param2 = 10, $param3 = 20)
{
    $suma = $param1 + $param2 + $param3;
    echo "Rezultatul adunarii dintre $param1, $param2 si $param3 este: " . $suma;
}

adunareTreiParametri(5);        
echo '<br/>';
adunareTreiParametri(7, 8);     
echo '<br/>';
adunareTreiParametri(2, 3, 4); //  param2 :  ---definirea exacta a unui parametru 
echo '<br/>';

//4.
function concateneazaProduse($numeProdus1, $numeProdus2) 
{
    return $numeProdus1 . " si " . $numeProdus2;
}

$rezultat = concateneazaProduse("Laptop", "Mouse");
echo "Produsele selectate sunt: " . $rezultat;
echo '<br/>';
echo '<br/>'; echo '<br/>';

// CURS 2 // OPERATORI
echo "CURS 2 OPERATORI";
echo '<br/>'; echo '<br/>';
echo 5 + 7; echo '<br/>';
echo 10 - 5; echo '<br/>';
echo 2 * 2; echo '<br/>';
echo 15 / 3 ; echo '<br/>';
echo 10 % 3; echo '<br/>';
echo 2 ** 10; echo '<br/>';