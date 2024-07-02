<?php
$db = mysqli_connect('localhost', 'root', '', 'supermarket_chain');

if ($db === false) {
    echo 'Error: Unable to connect to the database.';
    exit;
}
$query = "SELECT * FROM `Product`";  // Убран лишний SELECT * FROM
$result = mysqli_query($db, $query);

if ($result === false) {
    echo 'Error: Unable to fetch data.';
    exit;
}

?>

<?php 
$sql = "SELECT * FROM Product";
$result = $db->query($sql);
            ?>
            <table class="producttable">
                <tr>
                    <th>ЛК</th>
                    <th>Название </th>
                    <th>Цена</th>
                    <th>Скидка </th>
                    <th>Сумма </th>
                    <th>ID_Категории</th>
                </tr>
                <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row['LK'] . "</td>";
                            echo "<td>" . $row['Name'] . "</td>";
                            echo "<td>" . $row['Price'] . "</td>";
                            echo "<td>" . $row['Discount'] . "</td>";
                            echo "<td>" . $row['Availability'] . "</td>";
                            echo "<td>" . $row['ID_Category'] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6'>Нет продуктов для отображения</td></tr>";
                    }
                    ?>
            </table>