<?php
header('Access-Control-Allow-Origin: http://127.0.0.1:5500');  // CORS
header('Content-Type: application/json');

// Student data (only 10 records, only name + roll no)
$students = [
    ['name' => 'Atharva', 'prn' => 'UCS23M1074'],
    ['name' => 'Rohit', 'prn' => 'UCS23M1056'],
    ['name' => 'Sneha', 'prn' => 'UCS23M1123'],
    ['name' => 'Priya', 'prn' => 'UCS23M1019'],
    ['name' => 'Aditya', 'prn' => 'UCS23M1101'],
    ['name' => 'Manish', 'prn' => 'UCS23M1060'],
    ['name' => 'Kiran', 'prn' => 'UCS23M1144'],
    ['name' => 'Deepak', 'prn' => 'UCS23M1020'],
    ['name' => 'Meera', 'prn' => 'UCS23M1150'],
    ['name' => 'Sanjay', 'prn' => 'UCS23M1117']
];

echo json_encode($students, JSON_PRETTY_PRINT);