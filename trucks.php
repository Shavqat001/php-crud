<?php

$conn = require __DIR__ . '/configs/db.php';

$selectCars = 'SELECT * FROM trucks';
$result = $conn->query($selectCars);

while($row = $result->fetch_assoc()) {
    foreach ($row as $item) {
        echo $item . '<br>';
    }
}

$conn->close();