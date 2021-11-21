<?php
session_start();
$number = $_SESSION['info'];
$submit = $_POST['submit'];
if (isset($submit)) {(!$number) ? $number=1 : $number++;
    $_SESSION['info'] = $number;
    header('Location: task_13.php');
    exit;
}
?>

<!--$int = 100;--><!--echo ($int == 100) ? "да, int = 100" : "нет, int не ровно 100";-->
<!--expression ? true_value : false_value-->
<!--
if (!$number) {
$number = 1;
} else {
$number++;
}
 -->
<!--(!$number)? $number=1 : $number++ -->