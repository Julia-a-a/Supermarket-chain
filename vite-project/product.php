<?php
$db = mysqli_connect('localhost', 'root', '', 'supermarket_chain');

if ($db === false) {
    echo 'Error: Unable to connect to the database.';
    exit;
}
$query = "SELECT * FROM Product";  
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
            <th>ID Товара</th>
            <th>ЛК</th>
            <th>Название</th>
            <th>Цена</th>
            <th>Скидка</th>
            <th>Наличие</th>
            <th>ID категории</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?= $row['ID_Product'] ?></td>
                <td><?= $row['LK'] ?></td>
                <td><?= $row['Name'] ?></td>
                <td><?= $row['Price'] ?></td>
                <td><?= $row['Discount'] ?></td>
                <td><?= $row['Availability'] ?></td>
                <td><?= $row['ID_Category'] ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
    <form action="http://localhost/php/dbfunction.php" method="post">
        <p>ID</p>
        <input type="number" name="ID_Product">
        <p>LK</p>
        <input type="number" name="LK">
        <p>Name</p>
        <input type="text" name="Name">
        <p>Price</p>
        <input type="number" name="Price">
        <p>Discount</p>       
        <input type="text" name="Discount">
        <p>Availability</p>
        <input type="text" name="Availability">
        <p>ID_Category</p>
        <input type="number" name="ID_Category">
        <button type="submit">Добавить товар</button>
    </form>
    </body>
</html>