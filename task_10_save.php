<?php
session_start();

$text = $_POST['text'];
$pdo = new PDO("mysql:host=localhost;dbname=my_project","root", "");
//Ищем значение, которое уже есть
$sql = "SELECT * FROM my_table WHERE text=:text";
$statement = $pdo->prepare($sql);
$statement->execute(['text' => $text]);
$task = $statement->fetch(PDO::FETCH_ASSOC);
//Lorem ipsum
//var_dump($task);die;
//array(2) { ["id"]=> strings(1) "1" ["text"]=> string(11) "Lorem ipsum" }

if(!empty($task)){
    $message = "Введённая запись уже присутствует в таблице.";
    $_SESSION['danger'] = $message;

    header("Location: task_10.php");
//    выходим из продолжения скрипта, чтобы он не продолжался
    exit;
}

$sql = "INSERT INTO my_table (text) VALUES (:text)";
$statement = $pdo->prepare($sql);
$statement->execute(['text' => $text]);

header("Location: task_10.php")
?>