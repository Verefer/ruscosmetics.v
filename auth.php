<?php
session_start();
require_once 'includes/db.php';

$error = '';
$rememberedLogin = '';

if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: auth.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $rememberedLogin = $username;

    if (!$username || !$password) {
        $error = "Все поля обязательны для заполнения!";
    } else {
        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            header("Location: admin.php");
            exit;
        } else {
            $error = "Неверный логин или пароль.";
        }
    }
}

include 'views/auth.tpl.php';
