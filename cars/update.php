<?php

$conn = require __DIR__ . '/../configs/db.php';

function updateTable($conn)
{
    $id = $_POST['id'];
    $brand = $_POST['brand'];

    $sqlUpdate = "UPDATE cars SET brand = '$brand' WHERE id =" . $id;
    $conn->query($sqlUpdate);

    header("Location: http://localhost:1010/cars.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['blabla'])) {
        updateTable($conn);
    }
}
?>

<html>
<form action='update.php' method='post'>
             <input type='hidden'  name='blabla' value='blabla'>
              <input type='text' name='brand' value=''>
             <input type='text' name='id' value=''>
             <button type='submit'>update
             </button>
         </form>
</html>