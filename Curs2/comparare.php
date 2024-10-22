<?php
// returneaza decat bool

$a = 5;
$b = '5';

var_dump ($a == $b);  echo '<br>'; //compara valori
var_dump ($a === $b); echo '<br>'; //compara tip de date
var_dump ($a != $b); echo '<br>';//daca sunt diferite 
var_dump($a <> $b);  echo '<br>';  //daca sunt diferite in valori 
var_dump ($a !== $b); echo '<br>'; //daca sunt diferite in tip de date 

$b = 8; 
var_dump($a > $b); echo '<br>';
var_dump($a < $b); echo '<br>';

$b = 5;
var_dump($a >= $b); echo '<br>';
var_dump($a <= $b); echo '<br>';

$b = 10; 
var_dump ($a <=> $b); echo '<br>';

echo '<br>'; echo '<br>'; echo '<br>';
echo "OPERATORI LOGICI";
echo '<hr>'; 

$m = true; 
$p = !$m;
var_dump($p);

var_dump(false && false); echo '<br>'; // && " si "
var_dump(false && true); echo '<br>';
var_dump(true && true); echo '<br>';
var_dump(true && false); echo '<br>';
echo '<hr>'; 

var_dump(false || false); echo '<br>'; // || " sau " 
var_dump(false || true); echo '<br>';
var_dump(true || true); echo '<br>';
var_dump(true || false); echo '<br>'; 
echo '<hr>'; 

var_dump (5 < 3 xor 5 > 2); echo '<br>'; // daca una din conditie este adevarata, expresia este adevarata
var_dump (5 < 3 xor 5 > 2); echo '<br>'; 

$q = 1; //true
$w = 0; // false
var_dump ($q || $W);

echo '<hr>';

$t = (2 > 5) ? 'true ' : 'false';  
var_dump ($t);

echo '<br>'; echo '<hr>';

// verificare daca o valoare este null, afiseaza textul scris, daca nu afiseaza valoarea specificata
$g = null;
$j = 3;

$x = $g ??  10;
$y = $j ?? 10;
var_dump ($x, $y);


//proof git branches 
echo 'Tema curs 2';
  echo '<hr>'; echo '<br>';

  //1.
  function operatiiMatematice($a=6, $b=8)
  {
      $adunare = $a + $b;
      $scadere = $a - $b;
      $inmultire = $a * $b;
      $impartire = $a / $b;
      $modulo = $a % $b;
      $putere = $a ** $b;

      return  max($adunare, $scadere, $impartire, $impartire, $modulo, $putere);

  }
  $rezultatMaxim = operatiiMatematice();
  echo "Cea mai mare valoare dintre operatii este: " . $rezultatMaxim;
  echo '<hr>'; echo '<br>';

  //2.
  function afiseazaTablaInmultire($numar) 
  {
    for ($i = 0; $i <= 10; $i++) 
    {
        echo "$numar x $i = " . ($numar * $i) . "<br>";
    }
}


function verificaIntervalSiAfiseazaTabla($parametru)
 {
    if ($parametru >= 0 && $parametru <= 10) {
        echo "Tabla de inmultire pentru $parametru este:<br>";
        afiseazaTablaInmultire($parametru);
    } else {
        echo "Parametrul $parametru nu este in intervalul 0-10.";
    }
}


verificaIntervalSiAfiseazaTabla(5);  
echo "<br>";
verificaIntervalSiAfiseazaTabla(12);
echo '<hr>'; echo '<br>';

//3.
function comparaValori($valoare1, $valoare2)
 {
  
  if ($valoare1 < $valoare2) {
      echo "$valoare1 este mai mic decat $valoare2.<br>";
  }
  
  if ($valoare1 <= $valoare2) {
      echo "$valoare1 este mai mic sau egal cu $valoare2.<br>";
  }
  
  if ($valoare1 == $valoare2) {
      echo "$valoare1 este egal cu $valoare2.<br>";
  }
  
  if ($valoare1 >= $valoare2) {
      echo "$valoare1 este mai mare sau egal cu $valoare2.<br>";
  }
  
  if ($valoare1 > $valoare2) {
      echo "$valoare1 este mai mare decat $valoare2.<br>";
  }
}

comparaValori(2, 3);
echo "<br>";
comparaValori(5, 5);
echo "<br>";
comparaValori(10, 4);

echo '<hr>'; echo '<br>';

//4.
function calculeazaOperatie($param1, $param2, $param3) {

  $param2 = $param2 <= 0 ? 1 : $param2;
  $param3 = $param3 <= 0 ? 2 : $param3;

  if (($param1 - $param2) > 5 && $param3 % 2 == 0) {
            $rezultat = pow($param1 / $param2, $param2);
      echo "Rezultatul operatiei este: " . $rezultat;
  } else {
      echo "Conditiile nu sunt indeplinite.";
  }
}


calculeazaOperatie(12, 0, 4); 
echo "<br>";
calculeazaOperatie(20, 3, 2);  
echo "<br>";
calculeazaOperatie(15, -1, 3); 