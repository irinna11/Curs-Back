<?php
 require_once 'Car.php';

 $bmw = new Car();  // intantiere obiect nou
 $bmw -> setModel('525');

 $audi = new Car();
 // $audi -> setModel('a4');

 var_dump($bmw, $audi);

 echo '<br>';

 echo $bmw->model;

 echo '<br>';

 echo $audi->model;

 unset($bmw);
 unset($audi);