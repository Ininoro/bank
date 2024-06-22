<?php

    $connect = new mysqli('localhost', 'root', '', 'site');

    if (!$connect) {
        die('Error connect to DataBase');
    }

    ?>