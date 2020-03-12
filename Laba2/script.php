<?php

if($_POST['textField'] | $_POST['list']){
    echo "Форма отправлена методом POST!<br>";
    echo "Введенный текст = " . $_POST['textField'] . "<br>";
    echo "Выбранный элемент = " . $_POST['list'];

if($_FILES['userFile']){
     $fileName = $_FILES['userFile']['name'];
    copy($_FILES['userFile']['name'], $_FILES['userFile']['name']);
    echo "<br>Файл $fileName успешно загружен";
}

} else {
    echo "Форма отправлена методом GET!<br>";
    echo "Введенный текст = " . $_GET['textField'] . "<br>";
    echo "Выбранный элемент = " . $_GET['list'];
}  