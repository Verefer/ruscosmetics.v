<?php
require_once '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $customer_name = trim($_POST['customer_name']);
    $product = trim($_POST['product']);
    $quantity = (int)$_POST['quantity'];

    if (!$customer_name || !$product || !$quantity) {
        echo "Все поля обязательны для заполнения!";
        exit;
    }

    // Вставка нового заказа в базу данных
    $stmt = $pdo->prepare("INSERT INTO orders (customer_name, product, quantity) VALUES (?, ?, ?)");
    $result = $stmt->execute([$customer_name, $product, $quantity]);

    if ($result) {
        echo "Заказ успешно добавлен!";
    } else {
        echo "Ошибка при добавлении заказа. Попробуйте снова.";
    }
}
?>
