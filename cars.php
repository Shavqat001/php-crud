<?php

$conn = require __DIR__ . '/configs/db.php';

function getAll($conn)
{
    $selectCars = 'SELECT * FROM cars';
    $result = $conn->query($selectCars);

    while($row = $result->fetch_assoc()) {
        foreach ($row as $item) {
            echo $item . '<br>';
        }
    }

}

function getById($conn, $id)
{
    $selectCars = 'SELECT * FROM cars where id=' . $id;
    $result = $conn->query($selectCars);

    while($row = $result->fetch_assoc()) {
        foreach ($row as $item) {
            echo $item . '<br>';
        }
    }


}


function createNewRandomCar($conn, array $params)
{
    $brand = $params[0];
    $color = $params[1];
    $year = $params[2];

    $insertCar = "INSERT INTO cars (brand, color, year) VALUES ('$brand', '$color', $year)";

    var_dump($insertCar);

    $result = $conn->query($insertCar);

    if ($result === TRUE) {
        echo "New car created successfully";
    } else {
        echo "Error: " . $conn->error;
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['all'])) {
        getAll($conn);
    }
    if (isset($_POST['param'])) {
        $param = $_POST['param'];
        getById($conn, $param);
    }

    if (isset($_POST['insert'])) {
        $params = explode(' ', $_POST['insert']);
        createNewRandomCar($conn, $params);
    }

}
$conn->close();

?>

<html>
<body>
<a href="cars.php">cars</a>
<a href="trucks.php">truck</a>
    <form method="post" action="cars.php">
        <input name="param" value="36" />
        <button type="submit">get by id</button>
    </form>

    <form method="post" action="cars.php">
        <input name="all" value="*" />
        <button type="submit">get all</button>
    </form>


    <form method="post" action="cars.php">
        <input name="insert" />
        <button type="submit">insert vals</button>
    </form>
</body>
</html>