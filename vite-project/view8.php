<?php
$db = mysqli_connect('localhost', 'root', '', 'supermarket_chain');

if ($db === false) {
    echo 'Error: Unable to connect to the database.';
    exit;
}
$query = "SELECT * FROM Client WHERE LoyaltyCard<> 0";  // Убран лишний SELECT * FROM
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
            <th>ID Клиента</th>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Почта</th>
            <th>Карта лояльности</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?= $row['ID_Client'] ?></td>
                <td><?= $row['Name'] ?></td>
                <td><?= $row['Surname'] ?></td>
                <td><?= $row['Email'] ?></td>
                <td><?= $row['LoyaltyCard'] ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
    </body>
</html>