<?php

$file = fopen("persons.csv", "r");

$persons = [];
$columns = fgetcsv($file);
while ($person = fgetcsv($file)) {
    foreach ($person as $key => $value) {
        $person[$columns[$key]] = $value;
        unset($person[$key]);
    }
    $persons[] = $person;
//    foreach ($data as $key => $value) {
//        $person[$columns[$key]] = $value;
//        $persons[] = $person; // trebuia in afara foreach :-)
//    }
}

//TODO: de facut functie codul de mai sus si de folosit in reports.php

echo '<pre>';
print_r($persons);

echo 'Tema curs 6';
echo '<hr>'; echo '<br>';


function readCsvFile($filename) {
    $file = fopen($filename, "r");
    $persons = [];

    if ($file !== false) {
        $columns = fgetcsv($file);

        while ($person = fgetcsv($file)) {
            foreach ($person as $key => $value) {
                $person[$columns[$key]] = $value;
                unset($person[$key]);
            }
            $persons[] = $person;
        }

        fclose($file);
    }

    return $persons;
}

// TODO: Optimize function by handling large files with chunking or using a generator
$persons = readCsvFile("persons.csv");

echo '<pre>';
print_r($persons);

//1
function writePhraseToFile($filename, $phrase, $times)
{
    $file = fopen($filename, "w");

    if ($file !== false) {

        for ($i = 0; $i < $times; $i++) {
            fwrite($file, $phrase . PHP_EOL);
        }

        fclose($file);
        echo "Fraza a fost scrisa in fisier.";
    } else {
        echo "Nu s-a putut deschide fisierul.";
    }
}


writePhraseToFile("output.txt", "Aceasta este o fraza.", 5);

//2.

function appendFileContent($sourceFile, $destinationFile)
{

    if (file_exists($sourceFile)) {

        $source = fopen($sourceFile, "r");

        $destination = fopen($destinationFile, "a");

        if ($source !== false && $destination !== false) {

            while (($line = fgets($source)) !== false) {
                fwrite($destination, $line);
            }
            fclose($source);
            fclose($destination);

            echo "Continutul fisierului sursa a fost copiat la finalul fisierului destinatie.";
        } else {
            echo "Nu s-au putut deschide fisierele.";
        }
    } else {
        echo "Fisierul sursa nu exista.";
    }
}


appendFileContent("source.txt", "destination.txt");

//3.

function findDocFilesAndSave($directory) {
    if (is_dir($directory)) {

        $files = scandir($directory);
        $docFiles = [];

        foreach ($files as $file) {

            if (pathinfo($file, PATHINFO_EXTENSION) === 'doc') {
                $docFiles[] = $file;
            }
        }


        if (!empty($docFiles)) {
            $outputFile = fopen("fisiere_text.txt", "w");

            if ($outputFile !== false) {

                foreach ($docFiles as $docFile) {
                    fwrite($outputFile, $docFile . PHP_EOL);
                }

                fclose($outputFile);
                echo "Numele fisierelor .doc au fost salvate in 'fisiere_text.txt'.";
            } else {
                echo "Nu s-a putut crea fisierul de iesire.";
            }
        } else {
            echo "Nu au fost gasite fisiere cu extensia '.doc'.";
        }
    } else {
        echo "Directorul nu exista sau nu este valid.";
    }
}


findDocFilesAndSave("/path/to/your/directory");