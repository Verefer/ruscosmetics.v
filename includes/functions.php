<?php
// Пример функции для проверки уникальности email
function isEmailUnique($email, $pdo) {
    $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->execute([$email]);
    return $stmt->rowCount() === 0;
}
?>
