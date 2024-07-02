<?php
$db = mysqli_connect('localhost', 'root', '', 'supermarket_chain');

if ($db === false) {
    echo 'Error: Unable to connect to the database.';
    exit;
}
$query = "SELECT * FROM Staff";  
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
            <th>ID персонала</th>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Отчество</th>
            <th>Стаж</th>
            <th>Почта</th>
            <th>Пароль</th>
            <th>ID роли</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?= $row['ID_Staff'] ?></td>
                <td><?= $row['Name'] ?></td>
                <td><?= $row['Surname'] ?></td>
                <td><?= $row['MiddleName'] ?></td>
                <td><?= $row['Experience'] ?></td>
                <td><?= $row['Email'] ?></td>
                <td><?= $row['Password'] ?></td>
                <td><?= $row['ID_Role'] ?></td>

            </tr>
        <?php endwhile; ?>
    </table>
    <form action="http://localhost/php/createstaff.php" method="post">
        <p>ID_Staff</p>
        <input type="number" name="ID_Staff">
        <p>Name</p>
        <input type="text" name="Name">
        <p>Surname</p>
        <input type="text" name="Surname">
        <p>MiddleName</p>
        <input type="text" name="MiddleName">
        <p>Experience</p>
        <input type="text" name="Experience">
        <p>Email</p>       
        <input type="text" name="Email">
        <p>Password</p>
        <input type="text" name="Password">
        <p>ID_Role</p>
        <input type="number" name="ID_Role">
        <button type="submit">Добавить работника</button>
    </form>
    </body>
</html>