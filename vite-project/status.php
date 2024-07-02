<?php
$db = mysqli_connect('localhost', 'root', '', 'supermarket_chain');

if ($db === false) {
    echo 'Error: Unable to connect to the database.';
    exit;
}
$query = "SELECT * FROM OrderStatus";  
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
            <th>ID Статуса</th>
            <th>Название</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?= $row['ID_OrderStatus'] ?></td>
                <td><?= $row['Name'] ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
    <form action="http://localhost/php/createstatus.php" method="post">
        <p>ID_OrderStatus</p>
        <input type="number" name="ID_OrderStatus">
        <p>Name</p>
        <input type="text" name="Name">
        <button type="submit">Добавить статус</button>
    </form>
    </body>
</html>