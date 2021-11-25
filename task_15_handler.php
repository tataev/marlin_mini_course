<?php
session_start();

$_SERVER['DOCUMENT_ROOT'];
//D:\Work\OpenServer\OSPanel\userdata\temp

//Задаём переменные и путь куда перенести
$file = $_FILES['img'];
$text = $_POST['text'];
$path = "img/uploads/";

$file_img_tmp_name = $_FILES['file_img']['tmp_name'];
$file_img_name = $_FILES['file_img']['name'];
$file_dir_name = $path.$file_img_name;
//$format = explode('.', $file['name']);
//Пример использования разделителя explode
//$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
//$pieces = explode(" ", $pizza);
//echo $pieces[0]; // piece1
//echo $pieces[1]; // piece2
$rand_name = strtotime(date("Y-m-d H:i:s"));
//$file_dir_rand_name=$file_dir_name.$rand_name;
//сделаем файл уникальным, добавив в него время загрузки
$this_rand_name=$rand_name;
$bd_name=$this_rand_name.$file_img_name;
$file_dir_rand_name= $path.$bd_name;

//---------------------------------------------------------------------------------
//Проверка, почему-то не работал перенос картинок пока не начал проверять что куда пошло =)

//
//error_reporting(-1);
//---------------------------------------------------------------------------------
//if (isset($_POST[send])){
//    echo '<pre>';
//    print_r($_POST);
//    echo '</pre>';
//}
//---------------------------------------------------------------------------------
//Выдаёт следующий результат`
//Array
//(
//    [text] =>  123
//    [send] =>
//)
//---------------------------------------------------------------------------------
//if (!empty($_FILES)) {
//    echo '<pre>';
//    print_r($_FILES);
//    echo '</pre>';
//    move_uploaded_file($_FILES['file_img'][tmp_name], $path.$_FILES['file_img']['name'] );
//    // 1 файл - это который мы будем перемещать
//    // 2 файл - путь, куда мы будем перемещать
//}
//---------------------------------------------------------------------------------
//Выдаёт следующий результат
//---------------------------------------------------------------------------------
//Array
//(
//    [file_img] => Array
//    (
//        [name] => loading.gif
//        [type] => image/gif
//        [tmp_name] => D:\Work\OpenServer\OSPanel\userdata\temp\php71C8.tmp
//        [error] => 0
//ошибок нет, файл успешно загружен на сервер, если 1 то размер файла превышает
// (в php.ini указывается, 8 мегабайт через форму)
// 4 файл не загружен
// 7 - на папку нет доступа, нужны права 777
//        [size] => 4178
// размер файла
//     )
 //)

//всё работает
//move_uploaded_file($file_img_tmp_name, $file_dir)
//всё работает

try {
    $pdo = new PDO("mysql:host=localhost;dbname=my_project;", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e){
    print $e->getMessage();
}

//Создать таблицу images, такой структуры: id(int), image(varchar255)
//добавим пояснение к картинке как в галерее text(varchar255)

if(isset($_POST['send'])) {
    $sql = "INSERT INTO images (text, image) VALUES (:text, :image)";
    $statement = $pdo->prepare($sql);
    $statement->bindParam(":text", $text, PDO::PARAM_STR);
    $bd_name=$this_rand_name.$file_img_name;
    $statement->bindParam(":image", $bd_name, PDO::PARAM_STR);
//$sql->bindParam(":image", $filedir, PDO::PARAM_STR); or blob
    $statement->execute();

    $task = move_uploaded_file($file_img_tmp_name, $file_dir_rand_name);
}
    if ($task) {
        header('Location: task_15.php');
    }

?>