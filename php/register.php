<?php

require_once('db.php');

$name = $_POST['name'];
$surname = $_POST['surname'];
$patronymic = $_POST['patronymic'];
$email = $_POST['email'];
$login = $_POST['login'];
$pass = $_POST['password'];
$repeatpass = $_POST['repeatPassword'];


if (empty($login) || empty($pass) || empty($repeatpass) || empty($email) || empty($name) || empty($surname)){
    echo "Заполните все поля";
    } else {
    if($pass != $repeatpass){
    echo "Пароли не совпадают";
    } else {
        $sql = "INSERT INTO `users` (login, password, name, surname, patronymic, email) VALUES ('$login', '$pass', '$name', '$surname', '$patronymic', '$email')";
        if($conn -> query($sql) == TRUE){
            echo "Успешная регистрация";
            header('Location: ../login.html');
        } else {
            echo "Ошибка: " . $conn -> error;
        }
    }
}