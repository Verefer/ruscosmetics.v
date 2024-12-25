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
<form method="POST" action="../register.php" enctype="multipart/form-data">
    <label for="username">Логин:</label>
    <input type="text" id="username" name="username" required>

    <label for="password">Пароль:</label>
    <input type="password" id="password" name="password" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="photo">Фото (необязательно):</label>
    <input type="file" id="photo" name="photo" accept="image/*">

    <button type="submit">Зарегистрироваться</button>

    <div class="poslear">
        <a href="index.php">На главную</a>
        <a href="auth.php" class="btn-secondary">Уже есть аккаунт?</a>
    </div>
    
</form>
</div>
</div>

</body>
</html>