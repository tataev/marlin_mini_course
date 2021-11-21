<?php
session_start();
$number = $_SESSION['info'];
$submit = $_POST['submit'];
if (isset($submit)) {(!$number) ? ($number = 1) : $number++;}
    $_SESSION['info'] = $number;
    header('Location: task_13.php');
?>