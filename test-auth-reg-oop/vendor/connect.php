<?php

    $connect = mysqli_connect('php-auth-reg', 'mysql', 'mysql', 'php-auth-reg');

    if (!$connect) {
        die('Error connect to DataBase');
    }