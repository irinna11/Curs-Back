<?php

function exportToCsv(array $persons, string $filename, string $filemode){
    $file =fopen($filename, $filemode);

    fwrite($file, implode(",", array_keys($persons[0])));
    fwrite($file, data:"\n");
    foreach ($persons as $person) {
        fwrite($file, data:implode(",",$person)."\n");
    }

    fclose($file);
}

