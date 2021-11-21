<?php
//var_dump($POST);
$text = $_POST['text'];
$pdo = new PDO("mysql:host=localhost;dbname=my_project","root", "");
//вот так вот не надо: ' $sql = "INSERT INTO my_table (text) values (". $text .")"; '
//такая запись позволяет использовать эксплойты на Вашем сайте через параметр ". $text .",
//эта запись нам не BRO, нельзя давать прямой доступ из формы пользователю к нашей базе данных
//надо так: '$sql = "INSERT INTO my_table (text) values (::text)";'
//запись с использованием метки ':text' не позволит использовать на Вашем сайте враждебный sql код
//эта запись настоящая BRO, мы фильтруем запросы
$sql = "INSERT INTO my_table (text) VALUES (:text)";
$statement = $pdo->prepare($sql);
$statement->execute(['text' => $text]);

//возвращаемся на родную страницу
header("Location: task_9.php")
?>