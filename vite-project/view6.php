<?php
$db = mysqli_connect('localhost', 'root', '', 'supermarket_chain');

if ($db === false) {
    echo 'Error: Unable to connect to the database.';
    exit;
}
$query = "SELECT * FROM `Orders`";  // Убран лишний SELECT * FROM
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
    <table class="tablebd3_director">
        <tr>
            <th>ID заказа</th>
            <th>Номер заказа</th>
            <th>Сумма заказа</th>
            <th>Дата</th>
            <th>Количество</th>
            <th>Сумма за позицию</th>
            <th>ID_Статус</th>
            <th>ID_Клиент</th>
            <th>ID_Продукт</th>
            <th>ID_Работника</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?= $row['ID_Order'] ?></td>
                <td><?= $row['OrderNumber'] ?></td>
                <td><?= $row['AmountOrder'] ?></td>
                <td><?= $row['OrderDate'] ?></td>
                <td><?= $row['Quantity'] ?></td>
                <td><?= $row['Price'] ?></td>
                <td><?= $row['ID_OrderStatus'] ?></td>
                <td><?= $row['ID_Client'] ?></td>
                <td><?= $row['ID_Product'] ?></td>
                <td><?= $row['ID_Staff'] ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
    </body>
</html>