

<?php

function view()
{
    include __DIR__ . '/templates/index.blade.php';
}

view();

//
//$conn = require __DIR__ . '/configs/db.php';
//
//function getById($conn, $id)
//{
//    $selectCars = 'SELECT * FROM cars where id=' . $id;
//    $result = $conn->query($selectCars);
//
//    while ($row = $result->fetch_assoc()) {
//        foreach ($row as $item) {
//            echo $item . '<br>';
//        }
//    }
//}
//
//function deleteEl($conn)
//{
//    $id = $_POST['id'];
//    $query = 'DELETE FROM cars WHERE id =' . $id;
//    $conn->query($query);
//}
//
//function createNewRandomCar($conn, array $params)
//{
//    $brand = $params[0];
//    $color = $params[1];
//    $year = $params[2];
//
//    $insertCar = "INSERT INTO cars (brand, color, year) VALUES ('$brand', '$color', $year)";
//
//    $conn->query($insertCar);
//}
//
//
//
//function getAll($conn)
//{
//    $result = $conn->query('SELECT * FROM cars');
//    while ($row = $result->fetch_assoc()) {
//        echo <<<tab
//    <tr>
//        <td class="td-name">
//            <span id="{$row['id']}">
//                <input id="{$row['id']}" class="input-name" type="text" value="{$row['brand']}" name="brand{$row['id']}">
//            </span>
//         </td>
//        <td> {$row['color']} </td>
//        <td> {$row['year']} </td>
//        <td>
//            <form action='cars.php' method='post'>
//                <input type='hidden' name='delete' value="1">
//                <input type='hidden' name='id' value='{$row['id']}'>
//                <button type='submit'>delete</button>
//            </form>
//        </td>
//        <td>
//            <form action='cars/update.php' method='post'>
//                <input type='hidden' name='blabla' value="blabla">
//                <input type='hidden' name='id' value='{$row['id']}'>
//                 <input type='hidden' name='brand' value='{$_POST['brand']}'>
//
//                <button type='submit'>update</button>
//            </form>
//        </td>
//    </tr>
//tab;
//    }
//}
//
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
//    if (isset($_POST['param'])) {
//        $param = $_POST['param'];
//        getById($conn, $param);
//    }
//    if (isset($_POST['insert'])) {
//        $params = explode(' ', $_POST['insert']);
//        createNewRandomCar($conn, $params);
//    }
//    if (isset($_POST['delete'])) {
//        deleteEl($conn);
//    }
//    if (isset($_POST['blabla'])) {
//        updateTable($conn);
//    }
//}
//?>
<!--<html>-->
<!--<body>-->
<!---->
<!--<a href="cars.php">cars</a>-->
<!--<a href="trucks.php">truck</a>-->
<!---->
<!--<form method="post" action="cars.php">-->
<!--    <input name="param" value="36"/>-->
<!--    <button type="submit">get by id</button>-->
<!--</form>-->
<!---->
<!--<form method="post" action="cars.php">-->
<!--    <input name="all" value="*"/>-->
<!--    <button type="submit">get all</button>-->
<!--</form>-->
<!---->
<!--<form method="post" action="cars.php">-->
<!--    <input name="insert"/>-->
<!--    <button type="submit">insert vals</button>-->
<!--</form>-->
<!---->
<!--<table class="table" border="1">-->
<!--    --><?php
//    getAll($conn);
//    ?>
<!--</table>-->
<!--</body>-->
<!--</html>-->
<!---->
<!--<style>-->
<!--    td {-->
<!--        padding: 10px;-->
<!--    }-->
<!---->
<!--    .td-name {-->
<!--        display: flex;-->
<!--        flex-direction: column;-->
<!--    }-->
<!---->
<!--    form {-->
<!--        margin: 0;-->
<!--    }-->
<!--</style>-->
<!---->
<?php
//$conn->close();
//?>
