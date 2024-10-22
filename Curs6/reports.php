<?php

require_once 'export_to_csv.php';
$persons = [
    [
        'first_name' => 'Irina',
        'last_name' => 'Lepus',
        'phone' => '02542555',
        'email' => 'irina@gmail.com',
    ],
    [
        'first_name' => 'Ioana',
        'last_name' => 'Popescu',
        'phone' => '05681415',
        'email' => 'ioana@gmail.com',
    ],
    [
        'first_name' => 'Mihai',
        'last_name' => 'Munteanu',
        'phone' => '025544155',
        'email' => 'mihai@gmail.com',
    ],

];

exportToCsv($persons,'persons.csv', 'w+');
