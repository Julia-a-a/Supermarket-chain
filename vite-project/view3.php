<?php
$db = mysqli_connect('localhost', 'root', '', 'supermarket_chain');

if ($db === false) {
    echo 'Error: Unable to connect to the database.';
    exit;
}
$query = "SELECT * FROM `expiringproduct`";  // Убран лишний SELECT * FROM
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
    <table class="tablebd3">
        <tr>
            <th>Название</th>
            <th>Срок годности</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?= $row['Name'] ?></td>
                <td><?= $row['ExpirationDate'] ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
    </body>
</html>