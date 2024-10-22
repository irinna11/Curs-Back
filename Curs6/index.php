<?php
$file = fopen(filename:'log.txt', mode:'r') or die('Unable to open file!');

var_dump($file);

echo fread($file, filesize(filename:'log.txt'));

fclose($file);

$file2 = fopen(filename:'cars.txt', mode:'w');
fwrite($file2, data:'BMW');
fclose($file2);

$file3 = fopen(filename:'cars.txt', mode:'a');
fwrite($file3, data:"\nAUDI");
fclose($file3);

// fopen(filename:'cars.txt', mode:'x'); to show when file exist



