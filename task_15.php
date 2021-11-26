<?php
//include 'functions.php';
//include 'task_15_handler.php';
session_start();
//var_dump($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>
        Подготовительные задания к курсу
    </title>
    <meta name="description" content="Chartist.html">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
    <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
    <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
    <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
    <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
</head>
<body class="mod-bg-1 mod-nav-link ">
<main id="js-page-content" role="main" class="page-content">
    <div class="row">
        <div class="col-md-6">
            <div id="panel-1" class="panel">
                <div class="panel-hdr">
                    <h2>
                        Задание 15
                    </h2>
                    <div class="panel-toolbar">
                        <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                        <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="panel-content">
                            <div class="form-group">

                                <form action="task_15_handler.php" class="form-art" method="post" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <p>Введите заметку для фотографии</p>
                                        <p><textarea placeholder="Введите заметку для фотографии" class="insrt-field text" name="text"> </textarea></p>
                                        <label class="form-label" for="simpleinput">Image</label>
                                        <p>Прикрепить картинку</p>
                                        <p><input type="file" id="simpleinput" class="form-control" name="file_img"></p>
                                    </div>
                                    <button class="btn btn-success mt-3" type="submit" name="send">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div id="panel-1" class="panel">
                <div class="panel-hdr">
                    <h2>
                        Загруженные картинки
                    </h2>
                    <div class="panel-toolbar">
                        <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                        <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="panel-content image-gallery">
                            <div class="row">
                                <div class="row">
                                    <?php
                                    $pdo = new PDO("mysql:host=localhost;dbname=my_project;", "root", "");

                                    $sql = "SELECT * FROM images";
                                    $statement  = $pdo->prepare($sql);
                                    $statement ->execute();
                                    $task = $statement ->fetchAll(PDO::FETCH_ASSOC);

                                    foreach ($task as $img) { ?>
                                        <div class="col-md-3 image">
                                            <img src="img/uploads/<?=$img['image']?>" width="100%">
                                            <p class="text-center"><?=$img['text']?></p>
                                            <a class="btn btn-danger" onclick="confirm('Вы уверены?');" href="task_15_handler.php?id=<?= $task['id'];?>"">Удалить</a>
                                        </div>
                                    <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</main>


<script src="js/vendors.bundle.js"></script>
<script src="js/app.bundle.js"></script>
<script>
    // default list filter
    initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
    // custom response message
    initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
</script>
</body>
</html>


<!--
Напишите скрипт загрузки файлов и их вывода.
После загрузки картинки, пользователь должен быть возвращен назад(на страницу формы)
и загруженные картинки должны быть выведены в блоке справа.
Для этого используйте таблицу images, такой структуры: id(int), image(varchar255)
Название картинок должно быть уникальным.
Даже если загрузить картинку с одинаковым названием, никаких ошибок и проблем происходить не должно.
Ведь название картинки загруженной с таким же именем уже нет. Оно уникально.
Задание должно быть выполнено с использованием отдельного файла — обработчика формы. Назовите файл task_15_handler.php
Для выполнения задания, скачайте файл верстки по ссылке ниже.
Далее добавьте его в папку со стилями и картинками которые у вас уже есть
 -->