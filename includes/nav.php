<nav>
    <ul>
        <li><a href="index.php">Главная</a></li>
        <li><a id="open-modal">Оставить заявку</a></li>
        <li><a href="admin.php">Войти</a></li>
    </ul>
    <div id="send-modal" class="modal">
        <div class="modal-content">
            <?php include 'views/add_order.tpl.php'; ?>
            <script src="scripts/modal.js"></script>
        </div>
    </div>
</nav>
