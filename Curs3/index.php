<?php


if (3 > 2){
    echo 'true';
}
echo '<br>';


$a = null;

if (! isset($a)){

    echo '$a is null';
}

else {
    echo '$a is not null';
}

echo '<br>';

if ($a < 5){
    echo '$a is lower than 5';
}
elseif ($a == 5){
    echo '$a is five';
}
else {
    echo '$a is bigger  than 5';
}

echo '<br>';

$b = 6;

switch($b) {
    case 1 : echo '$b is one';
        break; //opreste conditia dupa ce este verificata 
    case 2 : echo '$b is  two';
        break;
    case 3 : echo '$b is three';
        break;
    default: 
        echo '$b is not trough our cases'; // daca nu indeplineste conditiile de mai sus 
        break;  
}

echo '<br>'; echo '<hr>';

$z = 5;

while ($z <= 10) {  // se itereaza instructiunea pana nu se mai indeplineste conditia  
    echo $z . '<br>';
    $z++;
}

echo '<br>'; echo '<hr>';
$y = 0;
do {
    echo $y .'<br>';
    $y++;
}
    while ($y <= 5); // se executa o data chiar daca nu indeplineste conditia 

    
echo '<br>'; echo '<hr>';

for ($i = 0; $i <= 5; $i++){  
    echo $i .'<br>';
}

echo '<br>'; echo '<hr>';

// foreach se foloseste la array.uri

$colors = ['red', 'black', 'blue', 'yellow'];  
foreach ($colors as $color) {
    echo $color . '<br>';
}
echo '<br>'; echo '<hr>';

foreach ($colors as $key => $color) {
    echo 'key' . $key . 'and color is ' .$color . '<br>';
}

echo '<br>'; echo '<hr>';

for ($i = 0; $i <= 5; $i++){
    if ($i == 3) {
        break;  // opreste 
    }
    echo '$i is: ' .$i . '<br>';
} 
echo '<br>'; echo '<hr>';

for ($i = 0; $i <= 5; $i++){
    if ($i == 3) {
        continue; //sare conditia declarata 
    }
    echo '$i is: ' .$i . '<br>';
}
echo '<hr>'; echo '<br>';

echo 'Tema curs 3';
echo '<hr>'; echo '<br>';

//1.
function afiseazaNumereDivizibileCu3($numar1, $numar2) {
  
  if ($numar1 > $numar2) 
  {
      $temporar = $numar1;
      $numar1 = $numar2;
      $numar2 = $temporar;
  }

  echo "Numerele divizibile cu 3 între $numar1 și $numar2 sunt: ";

  for ($i = $numar1; $i <= $numar2; $i++) 
  {
      if ($i % 3 == 0) {
          echo $i . " ";
      }
  }
}

afiseazaNumereDivizibileCu3(10, 40);

echo '<hr>'; echo '<br>';
//2.
function numaraNumerePare($vector) {
  $count = 0; 

  foreach ($vector as $numar) 
  {
      if ($numar % 2 == 0) {
          $count++; 
      }
  }

  echo "Vectorul conține " . $count . " numere pare.";
}

$vector = array(1, 4, 7, 10, 13, 16, 19, 22);
numaraNumerePare($vector);

echo '<hr>'; echo '<br>';

//3.
function estePalindrom($numar) {
  
  $numarStr = strval($numar);
    
  $numarInversat = strrev($numarStr);
    
  if ($numarStr == $numarInversat) 
  {
      echo "$numar este palindrom.";
  } else {
      echo "$numar nu este palindrom.";
  }
}


estePalindrom(52425);   
estePalindrom(123456);  
