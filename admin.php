<?php
session_start();
require_once 'includes/db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: auth.php");
    exit;
}

// Удаление заказа
if (isset($_GET['delete'])) {
    $orderId = (int)$_GET['delete'];

    $stmt = $pdo->prepare("DELETE FROM orders WHERE id = ?");
    $stmt->execute([$orderId]);
    header("Location: admin.php");
    exit;
}

// Получение всех заказов
$stmt = $pdo->prepare("SELECT * FROM orders");
$stmt->execute();
$orders = $stmt->fetchAll();

include 'views/dashboard.tpl.php';
