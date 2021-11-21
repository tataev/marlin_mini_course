<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];
$hash = password_hash($password, PASSWORD_DEFAULT);

$pdo = new PDO("mysql:host=localhost;dbname=my_project","root", "");
//Ищем значение, которое уже есть
$sql = "SELECT * FROM my_registration WHERE email = :email";

$statement = $pdo->prepare($sql);
$statement->execute(['email' => $email]);
$task = $statement->fetch(PDO::FETCH_ASSOC);

if (!empty($task)) {
    $id = $task['id'];
    $pass = $task['password'];
    if (password_verify($password, $pass)) {
        $message = $task['email'];
        $_SESSION['user'] = $message;
        header('Location: task_14.php');
        exit;
    } else {
        $message = 'Пароль неверный!';
        $_SESSION['danger'] = $message;
        header('Location: task_14.php');
        exit;
    }
} else {
    $message = "Неверный логин или пароль.";
    $_SESSION['danger'] = $message;
    header('Location: task_14.php');
    exit;
}