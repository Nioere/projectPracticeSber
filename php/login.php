<?php

require_once('db.php');

$login = $_POST['login'];
$pass = $_POST['password'];

if(empty($login) || empty($pass)){
    echo "Заполните все поля";
} else {
    $sql = "SELECT * FROM users WHERE login = '$login' AND password = '$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
        echo "Добро пожаловать " . $row['login'];
        setcookie('login', $row['name'], time() + 3600 * 24 * 30, "/");
        header('Location: ../index.php');
        }
    } else {
        echo "нет такого пользователя";
    }
}