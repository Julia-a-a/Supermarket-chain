<?php
$db = mysqli_connect('localhost', 'root', '', 'supermarket_chain');

if ($db === false) {
    echo 'Error: Unable to connect to the database.';
    exit;
}
$query = "SELECT * FROM Provider";  
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
            <th>ID Поставщика</th>
            <th>Название</th>
            <th>Адрес</th>
            <th>Телефон</th>
            <th>Контактное лицо</th>
            <th>Должность</th>
            <th>Факс</th>
            <th>Почта</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?= $row['ID_Provider'] ?></td>
                <td><?= $row['Name'] ?></td>
                <td><?= $row['Adress'] ?></td>
                <td><?= $row['PhoneNumber'] ?></td>
                <td><?= $row['ContactPerson'] ?></td>
                <td><?= $row['PositionOfContactPerson'] ?></td>
                <td><?= $row['Fax'] ?></td>
                <td><?= $row['Email'] ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
    <form action="http://localhost/php/createprovider.php" method="post">
        <p>ID_Provider</p>
        <input type="number" name="ID_Provider">
        <p>Name</p>
        <input type="text" name="Name">
        <p>Adress</p>
        <input type="text" name="Adress">
        <p>PhoneNumber</p>
        <input type="number" name="PhoneNumber">
        <p>ContactPerson</p>
        <input type="text" name="ContactPerson">
        <p>PositionOfContactPerson</p>       
        <input type="text" name="PositionOfContactPerson">
        <p>Fax</p>
        <input type="number" name="Fax">
        <p>Email</p>
        <input type="text" name="Email">
        <button type="submit">Добавить Поставщика</button>
    </form>
    </body>
</html>