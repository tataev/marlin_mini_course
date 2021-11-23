<?php
session_start();

$text = $_POST['text'];
$file = $_FILES['img'];

$pictmp = $_FILES['pics']['tmp_name'];
$picname = $_FILES['pics']['name'];

$path = "img/uploads/";
$filedir = $path.$picname;

$format = explode('.', $file['name']);
$filename = 'image_' . strtotime(date("Y-m-d H:i:s")) . '.' . $format[1];

try {
    $db = new PDO("mysql:host=localhost;dbname=my_project;", "root", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    print $e->getMessage();
}
//Создать таблицу images, такой структуры: id(int), image(varchar255)
//добавим пояснение к картинке как в галерее text(varchar255)

if(isset($_POST['send'])){
    $sql="INSERT INTO images (text, image) VALUES (:text, :image)";
    $statement = $db->prepare($sql);
    $statement->bindParam(":text", $text, PDO::PARAM_STR);
    $statement->bindParam(":image", $picname, PDO::PARAM_STR);
//$sql->bindParam(":image", $filedir, PDO::PARAM_STR); or blob
    $statement->execute();

    $task = move_uploaded_file($file['img'], __DIR__ . '/img/uploads/' . $filename);

}

if ($task) {
    header('Location: task_15.php');
}