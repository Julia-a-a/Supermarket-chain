<?php
$db = mysqli_connect('localhost', 'root', '', 'supermarket_chain');

if ($db === false) {
    echo 'Error: Unable to connect to the database.';
    exit;
}
$query = "SELECT * FROM Category";  
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
            <th>ID Категории</th>
            <th>Имя</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?= $row['ID_Category'] ?></td>
                <td><?= $row['Name'] ?></td>


            </tr>
        <?php endwhile; ?>
    </table>
    <form action="http://localhost/php/createcategory.php" method="post">
        <p>ID_Category</p>
        <input type="number" name="ID_Category">
        <p>Name</p>
        <input type="text" name="Name">
        <button type="submit">Добавить категорию</button>
    </form>
    </body>
</html>