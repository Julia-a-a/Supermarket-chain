<?php
$db = mysqli_connect('localhost', 'root', '', 'supermarket_chain');

if ($db === false) {
    echo 'Error: Unable to connect to the database.';
    exit;
}
$query = "SELECT * FROM Orders";  
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
            <th>ID Заказа</th>
            <th>Номер заказа</th>
            <th>Сумма заказа</th>
            <th>Дата заказа</th>
            <th>Количество</th>
            <th>Цена</th>
            <th>ID статуса заказа</th>
            <th>ID клиента</th>
            <th>ID продукта</th>
            <th>ID персонал</th>

            
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
    <form action="http://localhost/php/createorders.php" method="post">
        <p>ID_Order</p>
        <input type="number" name="ID_Order">
        <p>OrderNumber</p>
        <input type="text" name="OrderNumber">
        <p>AmountOrder</p>
        <input type="text" name="AmountOrder">
        <p>OrderDate</p>
        <input type="text" name="OrderDate">
        <p>Quantity</p>
        <input type="text" name="Quantity">
        <p>Price</p>
        <input type="text" name="Price">
        <p>ID_OrderStatus</p>
        <input type="text" name="ID_OrderStatus">
        <p>ID_Client</p>
        <input type="text" name="ID_Client">
        <p>ID_Product</p>
        <input type="text" name="ID_Product">
        <p>ID_Staff</p>
        <input type="text" name="ID_Staff">
        <button type="submit">Добавить заказ</button>
    </form>
    </body>
</html>