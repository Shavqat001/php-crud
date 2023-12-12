<?php

$server = 'localhost';
$name = 'root';
$pass = '';
$db = 'autobase';

$conn = new mysqli($server, $name, $pass, $db);

if ($conn->connect_error) {
    var_dump($conn->connect_error);
    die('die');
}

return $conn;