<?php
session_start();
$number = $_SESSION['info'];
$submit = $_POST['submit'];
if (isset($submit)) {
    if (!$number) {
        $number = 1;
    } else {
        $number++;
    }
    $_SESSION['info'] = $number;
    header('Location: task_13.php');
    exit;
}
?>