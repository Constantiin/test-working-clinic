<?php

    error_reporting( E_ERROR );

    if (isset($_POST['name'])) {
        $name = $_POST['name'];
    } else {
        $name = '';
    }
    if (isset($name)) {
        $name = stripslashes($name);
        $name = htmlspecialchars($name);
    }

    if (isset($_POST['gender'])) {
        $gender = $_POST['gender'];
    } else {
        $gender = '';
    }

    if (isset($_POST['age'])) {
        $age = $_POST['age'];
    } else {
        $age = '';
    }

    if (isset($_POST['phone'])) {
        $phone = $_POST['phone'];
    } else {
        $phone = '';
    }

    if (isset($_POST['connect'])) {
        $connect = $_POST['connect'];
    } else {
        $connect = '';
    }

    $address = "sendtest@test.ru";

    $textMail = "Имя: $name\n Пол: $gender\n Возраст: $age\n
        Телефон: $phone\n Средство связи: $connect";

    mail($address, "Test", $textMail, "From:test@test.com; Content-type:text/plain; utf-8");

    header('location:index.php');

?>