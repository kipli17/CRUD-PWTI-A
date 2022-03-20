<?php

    $server = "localhost";
    $user = "root";
    $password = "passwordbaru";
    $nama_database = "phpcrud";

    $db = mysqli_connect($server, $user, $password, $nama_database);

    if( !$db ){
        die("Gagal terhubung dengan database: " . mysqli_connect_error());
    }

    ?>