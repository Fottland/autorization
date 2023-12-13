<?php
    $connect = mysqli_connect('localhost', 'root', '', 'test');
    if (!$connect) {
        die('Ничего не работает');
    }