<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];
$hash = password_hash($password, PASSWORD_DEFAULT);

$pdo = new PDO("mysql:host=localhost;dbname=my_project","root", "");
//Ищем значение, которое уже есть
$sql = "SELECT * FROM my_registration WHERE email=:email";

$statement = $pdo->prepare($sql);
$statement->execute(['email' => $email]);
$task = $statement->fetch(PDO::FETCH_ASSOC);

if(!empty($task)){
    $message = "Этот эл адрес уже занят другим пользователем";
    $_SESSION['danger'] = $message;

    header("Location: task_12.php");
//    выходим из продолжения скрипта, чтобы он не продолжался
    exit;
}

$sql = "INSERT INTO my_registration (email, password) VALUES (:email, :password)";
$statement = $pdo->prepare($sql);
$statement->execute(['email' => $email, 'password' => $password]);

header("Location: task_12.php")
?>