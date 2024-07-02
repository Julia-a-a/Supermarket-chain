<?php
$db = mysqli_connect('localhost', 'root', '', 'supermarket_chain');

if ($db === false) {
    echo 'Error: Unable to connect to the database.';
    exit;
}
$query = "SELECT * FROM `Category`";  // Убран лишний SELECT * FROM
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
            <th>ID_Категории</th>
            <th>Название</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?= $row['ID_Category'] ?></td>
                <td><?= $row['Name'] ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
    </body>
</html>