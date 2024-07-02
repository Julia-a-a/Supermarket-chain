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
    <table class="tablebd">
      <tr>
        <th>ID</th>
        <th>Название</th>
        <th>Адрес</th>
        <th>Телефон</th>
        <th>Контактное лицо</th>
        <th>Должность контактного лица</th>
        <th>Факс</th>
        <th>Email</th>
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
</body>
</html>