<?php
    $connect = mysqli_connect('localhost', 'root', '', 'hellodb');

    if(!$connect){
        die('Ошибка подключения к базе данных');
    }
?>