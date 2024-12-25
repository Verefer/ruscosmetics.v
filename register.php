<?php
require_once 'includes/db.php'; // Подключаем базу данных

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $email = trim($_POST['email']);
    $photo = $_FILES['photo'];

    if (!$username || !$password || !$email) {
        echo "Все поля обязательны для заполнения!";
        exit;
    }

    // Проверка уникальности email
    $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->execute([$email]);
    if ($stmt->rowCount() > 0) {
        echo "Email уже используется.";
        exit;
    }

    // Хэширование пароля
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Обработка загрузки фото
    $photoPath = null;
    if (!empty($photo['name'])) {
        $uploadDir = 'images/uploads/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $photoPath = $uploadDir . uniqid() . '-' . basename($photo['name']);
        if (!move_uploaded_file($photo['tmp_name'], $photoPath)) {
            echo "Ошибка загрузки файла.";
            exit;
        }
    }

    // Сохранение пользователя в БД
    $stmt = $pdo->prepare("INSERT INTO users (username, password, email, photo) VALUES (?, ?, ?, ?)");
    $result = $stmt->execute([$username, $hashedPassword, $email, $photoPath]);

    if ($result) {
        header("Location: auth.php");
        exit;
    } else {
        echo "Ошибка регистрации. Попробуйте снова.";
    }
}
?>

<?php include 'views/register.tpl.php'; ?>