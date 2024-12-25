<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="../styles/dashboard.css">
    <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
</head>
<body>
    <div class="dashboard-container">
        <h1>Личный кабинет администратора</h1>

        <table>
            <thead>
                <tr>
                    <th>Имя клиента</th>
                    <th>Продукт</th>
                    <th>Количество</th>
                    <th>Дата заказа</th>
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orders as $order): ?>
                <tr>
                    <td><?= htmlspecialchars($order['customer_name']); ?></td>
                    <td><?= htmlspecialchars($order['product']); ?></td>
                    <td><?= htmlspecialchars($order['quantity']); ?></td>
                    <td><?= htmlspecialchars($order['created_at']); ?></td>
                    <td><a href="admin.php?delete=<?= $order['id']; ?>">Удалить</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <a href="auth.php?logout=true" class="logout-button">Выйти</a>
    </div>
</body>
</html>
