<!-- Форма для добавления нового заказа -->
<form method="POST" action="../views/add_order.php">
    <label for="customer_name">Имя клиента:</label>
    <input type="text" id="customer_name" name="customer_name" required>

    <label for="product">Продукт:</label>
    <input type="text" id="product" name="product" required>

    <label for="quantity">Количество:</label>
    <input type="number" id="quantity" name="quantity" required>

    <button type="submit">Добавить заказ</button>
</form>
