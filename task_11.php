<?php
//include 'functions.php';
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
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание 11
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
                                    <?php if (isset($_SESSION['danger'])): ?>
                                        <div class="alert alert-danger fade show" role="alert">
                                            <?php
                                            echo $_SESSION['danger'];
                                            unset($_SESSION['danger']);
                                            ?>
                                        </div>
                                    <?php endif; ?>

                                    <?php if (isset($_SESSION['success'])): ?>
                                        <div class="alert alert-success fade show" role="alert">
                                            <?php
                                            echo $_SESSION['success'];
                                            unset($_SESSION['success']);
                                            ?>
                                        </div>
                                    <?php endif; ?>

                                    <form action="task_11_handler.php" method="post">
                                        <div class="form-group">
                                            <label class="form-label" for="simpleinput">Email</label>
                                            <input type="text" name="email" id="simpleinput" class="form-control">
                                        </div>
                                        <label class="form-label" for="simpleinput">Password</label>
                                        <input type="password" id="simpleinput" class="form-control" name="password">
                                        <button class="btn btn-success mt-3"  type="submit">Submit</button>
                                    </form>
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
//Задание 11.
//Напишите простенькую регистрацию. Нужно чтобы значения из двух полей записались в таблицу users.
//Таблица users должна быть такой структуры: id(int), email(varchar255), password(varchar255)
//Если введённый эл адрес уже существует в базе, должно выйти соответствующее сообщение.
//Если обновить страницу, сообщение должно исчезнуть.
//Пароль должен храниться в базе обработанным хэш-функцией. Для этого используйте функцию password_hash($password)
//Задание должно быть выполнено с использованием отдельного файла — обработчика формы.
//Назовите файл task_11_handler.php
//Для выполнения задания, скачайте файл верстки по ссылке ниже.
//Далее добавьте его в папку со стилями и картинками которые у вас уже есть
-->