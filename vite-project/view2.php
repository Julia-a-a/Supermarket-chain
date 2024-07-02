<?php
$db = mysqli_connect('localhost', 'root', '', 'supermarket_chain');

if ($db === false) {
    echo 'Error: Unable to connect to the database.';
    exit;
}

$query = "SELECT * FROM `categoryalcohol`";  // Убран лишний SELECT * FROM
$result = mysqli_query($db, $query);

if ($result === false) {
    echo 'Error: Unable to fetch data.';
    exit;
}


$query2 = "SELECT * FROM `categoryanimal`";  // Убран лишний SELECT * FROM
$result2 = mysqli_query($db, $query2);

if ($result === false) {
    echo 'Error: Unable to fetch data.';
    exit;
}

$query3 = "SELECT * FROM `categorybread`";  // Убран лишний SELECT * FROM
$result3 = mysqli_query($db, $query3);

if ($result === false) {
    echo 'Error: Unable to fetch data.';
    exit;
}

$query4 = "SELECT * FROM `categorychemistry`";  // Убран лишний SELECT * FROM
$result4 = mysqli_query($db, $query4);

if ($result === false) {
    echo 'Error: Unable to fetch data.';
    exit;
}

$query5 = "SELECT * FROM `categorychild`";  // Убран лишний SELECT * FROM
$result5 = mysqli_query($db, $query5);

if ($result === false) {
    echo 'Error: Unable to fetch data.';
    exit;
}

$query6 = "SELECT * FROM `categoryclothes`";  // Убран лишний SELECT * FROM
$result6 = mysqli_query($db, $query6);

if ($result === false) {
    echo 'Error: Unable to fetch data.';
    exit;
}

$query7 = "SELECT * FROM `categoryfreeze`";  // Убран лишний SELECT * FROM
$result7 = mysqli_query($db, $query7);

if ($result === false) {
    echo 'Error: Unable to fetch data.';
    exit;
}
$query8 = "SELECT * FROM `categoryhome`";  // Убран лишний SELECT * FROM
$result8 = mysqli_query($db, $query8);

if ($result === false) {
    echo 'Error: Unable to fetch data.';
    exit;
}
$query9 = "SELECT * FROM `categorymeat`";  // Убран лишний SELECT * FROM
$result9 = mysqli_query($db, $query9);

if ($result === false) {
    echo 'Error: Unable to fetch data.';
    exit;
}

$query10 = "SELECT * FROM `categorymilk`";  // Убран лишний SELECT * FROM
$result10 = mysqli_query($db, $query10);

if ($result === false) {
    echo 'Error: Unable to fetch data.';
    exit;
}

$query11 = "SELECT * FROM `categoryseafood`";  // Убран лишний SELECT * FROM
$result11 = mysqli_query($db, $query11);

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
    <table class="tablebd2">
        <tr>
            <th>ID_Продукта</th>
            <th>ЛК</th>
            <th>Название</th>
            <th>Цена</th>
            <th>Скидка</th>
            <th>Наличие</th>
            <th>ID_Категории</th>
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
    <table class="tablebd2">
        <tr>
            <th>ID_Продукта</th>
            <th>ЛК</th>
            <th>Название</th>
            <th>Цена</th>
            <th>Скидка</th>
            <th>Наличие</th>
            <th>ID_Категории</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result2)): ?>
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
    <table class="tablebd2">
        <tr>
            <th>ID_Продукта</th>
            <th>ЛК</th>
            <th>Название</th>
            <th>Цена</th>
            <th>Скидка</th>
            <th>Наличие</th>
            <th>ID_Категории</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result3)): ?>
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
    <table class="tablebd2">
        <tr>
            <th>ID_Продукта</th>
            <th>ЛК</th>
            <th>Название</th>
            <th>Цена</th>
            <th>Скидка</th>
            <th>Наличие</th>
            <th>ID_Категории</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result4)): ?>
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
    <table class="tablebd2">
        <tr>
            <th>ID_Продукта</th>
            <th>ЛК</th>
            <th>Название</th>
            <th>Цена</th>
            <th>Скидка</th>
            <th>Наличие</th>
            <th>ID_Категории</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result5)): ?>
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
    <table class="tablebd2">
        <tr>
            <th>ID_Продукта</th>
            <th>ЛК</th>
            <th>Название</th>
            <th>Цена</th>
            <th>Скидка</th>
            <th>Наличие</th>
            <th>ID_Категории</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result6)): ?>
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
    <table class="tablebd2">
        <tr>
            <th>ID_Продукта</th>
            <th>ЛК</th>
            <th>Название</th>
            <th>Цена</th>
            <th>Скидка</th>
            <th>Наличие</th>
            <th>ID_Категории</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result7)): ?>
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
    <table class="tablebd2">
        <tr>
            <th>ID_Продукта</th>
            <th>ЛК</th>
            <th>Название</th>
            <th>Цена</th>
            <th>Скидка</th>
            <th>Наличие</th>
            <th>ID_Категории</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result8)): ?>
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
    <table class="tablebd2">
        <tr>
            <th>ID_Продукта</th>
            <th>ЛК</th>
            <th>Название</th>
            <th>Цена</th>
            <th>Скидка</th>
            <th>Наличие</th>
            <th>ID_Категории</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result9)): ?>
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
    <table class="tablebd2">
        <tr>
            <th>ID_Продукта</th>
            <th>ЛК</th>
            <th>Название</th>
            <th>Цена</th>
            <th>Скидка</th>
            <th>Наличие</th>
            <th>ID_Категории</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result10)): ?>
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
    <table class="tablebd2">
        <tr>
            <th>ID_Продукта</th>
            <th>ЛК</th>
            <th>Название</th>
            <th>Цена</th>
            <th>Скидка</th>
            <th>Наличие</th>
            <th>ID_Категории</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result11)): ?>
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
</body>
</html>