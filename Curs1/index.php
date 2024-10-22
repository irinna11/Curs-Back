<?php

echo 'Hello World!'; //show hello world 

//comment inline

# comment line

/*
multi line
comment 
*/

/**
 * doc block comment
 */

 echo '<br/>'; 

 // TIPURI DE DATE 

 $a = 5;  
 echo $a;
 echo '<br/>';
 var_dump($a);

 $nume = 'Lepus $a';
 $prenume = "Irina $a";
 echo '<br/>';
 var_dump($nume);
 echo '<br/>';
 var_dump($prenume);
 $myName =''; // empty string

 $bool = false;
 echo '<br/>';
 var_dump($bool);

 $array = array('Irina', true);
 $array2 = ['Alex',false, 3.4, $a, $array];

 echo '<br/>';
 var_dump($array, $array2); // accepts multiple variables

 class MyObject {

 }

 $myObject1 = new MyObject();
 $myObject2 = new MyObject();
 echo '<br/>';
 var_dump($myObject1, $myObject2);

 $nullable = null ;
 echo '<br/>';
 var_dump($nullable);

if (isset($nullable)) {   // isset verifica daca este setata o variabila 
    echo 'variable is not null';
}else {
    echo 'variable is null';
}

define ('GREETINGS', 'Hello from my first PHP lesson!');
echo '<br/>';
echo GREETINGS;
echo '<br/>';

echo M_PI;   // constate predefinte PHP 


echo '<br/>';
echo '<br/>';

