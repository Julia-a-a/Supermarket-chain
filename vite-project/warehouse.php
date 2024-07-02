<?php
$db = mysqli_connect('localhost', 'root', '', 'supermarket_chain');

if ($db === false) {
    echo 'Error: Unable to connect to the database.';
    exit;
}
$query = "SELECT * FROM Warehouse";  
$result = mysqli_query($db, $query);

if ($result === false) {
    echo 'Error: Unable to fetch data.';
    exit;
}

?>

<html lang="ru">
<head>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <table class="tablebd3_director_loyal">
        <tr>
            <th>ID склада</th>
            <th>Мин запас</th>
            <th>Макс запас</th>
            <th>Название</th>
            <th>Адрес</th>

        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?= $row['ID_Warehouse'] ?></td>
                <td><?= $row['MinReserve'] ?></td>
                <td><?= $row['MaxReserve'] ?></td>
                <td><?= $row['Name'] ?></td>
                <td><?= $row['Address'] ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
    <form action="http://localhost/php/createwarehouse.php" method="post">
        <p>ID_Warehouse</p>
        <input type="number" name="ID_Warehouse">
        <p>MinReserve</p>
        <input type="number" name="MinReserve">
        <p>MaxReserve</p>
        <input type="number" name="MaxReserve">
        <p>Name</p>
        <input type="text" name="Name">
        <p>Address</p>
        <input type="text" name="Address">

        <button type="submit">Добавить склад</button>
    </form>
    </body>
</html>