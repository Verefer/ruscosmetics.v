<h1>Личный кабинет</h1>
<table>
    <thead>
        <tr>
            <th>Имя клиента</th>
            <th>Продукт</th>
            <th>Количество</th>
            <th>Дата</th>
        </tr>
    </thead>
    <tbody>
        <!-- Здесь выводятся заказы -->
        <?php foreach ($orders as $order): ?>
        <tr>
            <td><?php echo htmlspecialchars($order['customer_name']); ?></td>
            <td><?php echo htmlspecialchars($order['product']); ?></td>
            <td><?php echo htmlspecialchars($order['quantity']); ?></td>
            <td><?php echo htmlspecialchars($order['created_at']); ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
