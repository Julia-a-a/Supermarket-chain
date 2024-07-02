<?php
function redirect($url) {
    header("Location: $url");
    exit;
}

$db = mysqli_connect('localhost', 'root', '', 'supermarket_chain');
if ($db === false) {
    echo 'error';
    exit;
}

// Проверка наличия параметра product_id в POST-запросе
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ID_Product'])) {
    $productId = $_POST['ID_Product'];

    // Используйте подготовленные запросы для безопасности
    $stmt = $db->prepare("DELETE FROM Product WHERE ID_Product = ?");
    $stmt->bind_param("i", $productId);

    if ($stmt->execute()) {
        echo "Товар успешно удален";
    } else {
        echo "Ошибка при удалении товара: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Недостаточно данных для выполнения операции удаления";
}
?>