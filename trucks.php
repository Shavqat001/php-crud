<?php

$conn = require __DIR__ . '/configs/db.php';

$selectCars = 'SELECT * FROM trucks';
$result = $conn->query($selectCars);

function f($result) {
    while ($row = $result->fetch_assoc()) {
        echo '<tr><td>' . $row['brand'] . '</td><td>' . $row['color'] . '</td><td>' . $row['year'] . '</td></tr>';
    }
}

$conn->close();
?>

<table border="2" cellpadding="5">
    <?php
        f($result);
    ?>
</table>
