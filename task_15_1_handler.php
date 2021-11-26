<?php
$pdo = new PDO("mysql:host=localhost;dbname=my_project;", "root", "");
$id = $_GET['id'];
$sql = "SELECT * FROM images WHERE id = :id";
$statement = $pdo->prepare($sql);
$statement->execute(['id' => $id]);
$task = $statement->fetch(PDO::FETCH_ASSOC);

$filename = $task['image'];
$sql = "DELETE FROM images WHERE id = :id";
$statement = $pdo->prepare($sql);
$task = $statement->execute(['id' => $id]);

if($task){
    $path = 'img/uploads/'.$filename;
    unlink($path);
    header('Location: task_15_1.php');
}