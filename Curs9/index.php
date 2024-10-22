<?php

require_once "Apple.php";
$apple = new Apple(name:'apple1', color:'red', shape:'round', year: 2024);
var_dump($apple);

echo "<br>";
echo $apple ->fall();
echo "<br>";
echo $apple ->location();



