<?php
header("Content-Type: application/json");
header("Acces-Control-Allow-Origin: *");
header("Acces-Control-Allow-Methods: GET, POST, OPTIONS");
header("Acces-Control-Allow-headers: Content-Type");

// Tämä voisi tulla tietokannasta
$data = [
    'message' => 'Hello from PHP',
    'users' => [
        ['id' => 1, 'name' => 'Alice'],
        ['id' => 2, 'name' => 'Bob'],
        ['id' => 3, 'name' => 'Charlie'],
    ]
];

// Palautetaan data json muodossa
echo json_encode($data);
 