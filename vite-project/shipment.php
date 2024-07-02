<?php
$db = mysqli_connect('localhost', 'root', '', 'supermarket_chain');

if ($db === false) {
    echo 'Error: Unable to connect to the database.';
    exit;
}
$query = "SELECT * FROM Shipment";  
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
            <th>ID поставки</th>
            <th>Номер коробки</th>
            <th>Количество</th>
            <th>Вес</th>
            <th>Сумма</th>
            <th>Номер накладной</th>
            <th>Дата поставки</th>
            <th>Срок годности</th>
            <th>ID товара</th>
            <th>ID поставщика</th>

        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?= $row['ID_Shipment'] ?></td>
                <td><?= $row['BoxNumber'] ?></td>
                <td><?= $row['Quantity'] ?></td>
                <td><?= $row['Weight'] ?></td>
                <td><?= $row['Amount'] ?></td>
                <td><?= $row['InvoiceNumber'] ?></td>
                <td><?= $row['DeliveryDate'] ?></td>
                <td><?= $row['ExpirationDate'] ?></td>
                <td><?= $row['ID_Product'] ?></td>
                <td><?= $row['ID_Provider'] ?></td>

            </tr>
        <?php endwhile; ?>
    </table>
    <form action="http://localhost/php/createshipment.php" method="post">
        <p>ID_Shipment</p>
        <input type="number" name="ID_Shipment">
        <p>BoxNumber</p>
        <input type="number" name="BoxNumber">
        <p>Quantity</p>
        <input type="text" name="Quantity">
        <p>Weight</p>
        <input type="text" name="Weight">
        <p>Amount</p>
        <input type="text" name="Amount">
        <p>InvoiceNumber</p>       
        <input type="text" name="InvoiceNumber">
        <p>DeliveryDate</p>
        <input type="text" name="DeliveryDate">
        <p>ExpirationDate</p>
        <input type="text" name="ExpirationDate">
        <p>ID_Product</p>
        <input type="text" name="ID_Product">
        <p>ID_Provider</p>
        <input type="number" name="ID_Provider">
        <button type="submit">Добавить поставку</button>
    </form>
    </body>
</html>