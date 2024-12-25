<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="styles/auth.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>
<body>
<div class="auth-container">
    <div class="auth-form">
        <h1>«Русская косметика»</h1>
        <h2>Авторизация</h2>
        <?php if (!empty($error)): ?>
            <p style="color: red;"><?= $error ?></p>
        <?php endif; ?>
        <form action="auth.php" method="post">
    <label for="username">Логин:</label>
    <input type="text" id="username" name="username" placeholder="Введите логин" value="<?= htmlspecialchars($rememberedLogin) ?>">

    <label for="password">Пароль:</label>
    <input type="password" id="password" name="password" placeholder="Введите пароль">
    
    <div class="checkbox">
        <input type="checkbox" id="remember" name="remember" <?= !empty($rememberedLogin) ? 'checked' : '' ?>>
        <label for="remember">Запомнить меня</label>
    </div>

    <button type="submit">Войти</button>
    <div class="poslear">
        <a href="index.php">На главную</a>
        <a href="register.php" class="btn-secondary">Регистрация</a>
    </div>
</form>

    </div>
</div>

</body>
</html>
