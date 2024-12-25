<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $message = $_POST['message'] ?? '';

    if (!empty($name) && !empty($message)) {
        $orders = [];

        // Если файл уже существует, читаем его содержимое
        if (file_exists('orders.json')) {
            $orders = json_decode(file_get_contents('orders.json'), true);
        }

        // Добавляем новую заявку
        $orders[] = [
            'name' => htmlspecialchars($name),
            'message' => htmlspecialchars($message),
            'date' => date('Y-m-d H:i:s')
        ];

        // Сохраняем обновленный список заявок
        file_put_contents('orders.json', json_encode($orders, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
        echo "Заявка успешно отправлена!";
    } else {
        echo "Заполните все поля!";
    }
}
?>
