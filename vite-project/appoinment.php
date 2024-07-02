<?php
$db = mysqli_connect('localhost', 'root', '', 'supermarket_chain');

if ($db === false) {
    echo 'Error: Unable to connect to the database.';
    exit;
}
$query = "SELECT * FROM Appointment";  
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
            <th>ID Назначения</th>
            <th>Объем товара</th>
            <th>Единица товара</th>
            <th>ID товара</th>
            <th>ID склада</th>
            <th>Изменить</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?= $row['ID_Appointment'] ?></td>
                <td><?= $row['VolumeOfTheProduct'] ?></td>
                <td><?= $row['ProductUnit'] ?></td>
                <td><?= $row['ID_Product'] ?></td>
                <td><?= $row['ID_Warehouse'] ?></td>
                <td><a href="http://localhost/php/updateappointment.php?id=<?= $row['ID_Appointment'] ?>">Изменить</a></td>
                <td><a href="#">Изменить</a></td>
                
            </tr>
        <?php endwhile; ?>
    </table>
    <form action="http://localhost/php/createappointment.php" method="post">
        <p>ID_Appointment</p>
        <input type="number" name="ID_Appointment">
        <p>VolumeOfTheProduct</p>
        <input type="number" name="VolumeOfTheProduct">
        <p>ProductUnit</p>
        <input type="text" name="ProductUnit">
        <p>ID_Product</p>
        <input type="number" name="ID_Product">
        <p>ID_Warehouse</p>       
        <input type="text" name="ID_Warehouse">
        <button type="submit">Добавить назначение</button>
    </form>
    </table>
    </body>
</html>