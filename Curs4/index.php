<?php

$cars = ['BMW', 'Volvo', 'Audi'];

echo $cars[1];

$cars2 [] = 'Audi';
$cars2 [1] = 'Opel';
$cars2 [] = 'Mercedes';

// array asociativ

$names = [
    'nume1' => 'Lorena', 
    'nume2' => 'Irina', 
    'nume3' => 'Andrei',
    'nume4' => 'Ionut',
    'nume4' => 'Marian',
];
echo '<br>';
echo $names ['nume3'];

$names2 ['nume1'] = 'Ionela';
$names2 ['nume2'] = 'Marius';

// array multidemensional

$garage =[
    ['brand' => 'BMW', 'gas_type' => 'disel', $cars],
    ['brand' => 'Audi', 'gas_type' => 'GPL'],
];

 echo'<br>';
 echo $garage [1]['brand'];
 echo'<br>';
 echo $garage [0][0][0]; // second index is for $cars element [0] pentru ca primele 2 brand si gas_type sunt definite deja, indexul fiind 0

 foreach($garage as $key => $car) {
    echo '<br>'.$key. ',' .$car['brand'];
}
echo '<br>', '<hr>';

// Functii de sortare vectori 

$animals =['dog', 'cat', 'mouse', 'elephant', 'bird'];
sort ($animals); // crescator dupa valoare in ordine alfabetica 
print_r ($animals);
echo '<br>', '<hr>';
rsort ($animals);
print_r ($animals); //print_r afisare din array

echo '<br>', '<hr>';

// Functii de sortare asociative

$colors = [
    'color1' => 'red',
    'color2' => 'green',
    'color3' => 'blue',
    'color4' => 'yallow',
    'color5' => 'black',
];

asort ($colors);
print_r ($colors);
echo '<br>', '<hr>';
ksort ($colors);
print_r($colors);

echo '<br>', '<hr>';

$cities = [
    'city2' => 'Bucuresti',
    'city5' => 'Cluj',
    'city1' => 'Timisoara',
    'city7' => 'Iasi',
];
arsort ($cities);
print_r ($cities);
echo '<br>', '<hr>';
krsort ($cities);
print_r ($cities);

echo '<br>';

if (in_array('Timisoara', $cities)){
        echo 'Timisoara is foud in the array.';
    }else{ 
        echo 'Timisoara is not found in the array.';
};

echo '<br>';

$citiesMultiple = array_chunk($cities, 2, true); //sparge array 
echo '<pre>';
print_r($citiesMultiple);

echo '<hr>';
$colum = array_column ($garage, 'brand'); // returneaza o coloana dintr-o matrice vector multidemnsional
print_r($colum);

echo '<hr>';

$array_keys = ['first', 'secound'];
$array_values =['Marian','Raul'];
$array_combined = array_combine($array_keys, $array_values); //combina 2 array-uri
print_r($array_combined);


echo 'Tema curs 6';
echo '<hr>'; echo '<br>';

//1. 
function eliminaVocale($string) 
{
    $vocale = array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U');
    $stringFaraVocale = str_replace($vocale, '', $string);
    return $stringFaraVocale;
}

$text = "Aceasta este o fraza de test.";
$rezultat = eliminaVocale($text);
echo $rezultat; 
echo '<hr>'; echo '<br>';

//2.
function statisticaCaractere($string)
{
    $statistica = array();
    for ($i = 0; $i < strlen($string); $i++) 
    {
        $caracter = $string[$i];
        if (isset($statistica[$caracter])) {
            $statistica[$caracter]++;
        } else {
            $statistica[$caracter] = 1;
        }
    }

    return $statistica;
}

$text = "acasa";
$rezultat = statisticaCaractere($text);
print_r($rezultat);
echo '<hr>'; echo '<br>';

//3.
function cuvinteDeDimensiune($string, $dimensiune) 
{
    $cuvinte = explode(' ', $string);
    $cuvintePotrivite = array();
    foreach ($cuvinte as $cuvant) {
        if (strlen($cuvant) == $dimensiune) {
            $cuvintePotrivite[] = $cuvant; 
        }
    }

    if (!empty($cuvintePotrivite)) {
        echo "Cuvintele cu dimensiunea $dimensiune sunt: " . implode(', ', $cuvintePotrivite);
    } else {
        echo "Nu au fost gasite cuvinte de dimensiune $dimensiune.";
    }
}

$text = "Aceasta este o propozitie simpla de test";
$dimensiune = 5;
cuvinteDeDimensiune($text, $dimensiune);
