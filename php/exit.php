<?php
session_start();
setcookie('login', '', time() - 3600 * 24 * 30, "/");

// Очистка корзины
unset($_SESSION['cart']);

session_destroy();

header('Location: ../index.php');
exit();
?>
