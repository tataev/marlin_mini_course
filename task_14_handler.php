<?php
session_start();
$pdo = new PDO("mysql:host=localhost;dbname=my_project","root", "");

$email = $_POST['email'];
$password = $_POST['password'];
$hash = password_hash($password, PASSWORD_DEFAULT);

$sql = "SELECT * FROM my_registration WHERE email = :email and password = :password";
$statement = $pdo->prepare($sql);
$statement->execute(['email' => $email, 'password' => $password]);
$task = $statement->fetch(PDO::FETCH_ASSOC);

if (!empty($task)) {
    if (password_verify($password, $hash)) {
        $message = 'Пользователь '.$email.' успешно активирован с помощью пароля '.$password. '<br> Ваш hash '.$hash;
    } else {
        $message = 'Неверный логин или пароль. Ваш hash '.$hash;
    }
    $_SESSION['danger'] = $message;
    header('Location: task_14.php');
} else {
    $message = "Неверный логин или пароль.";
    $_SESSION['danger'] = $message;
    header('Location: task_14.php');
    exit;
}