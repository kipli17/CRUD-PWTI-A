<?php

    include("config.php");

    if(isset($_POST['daftar'])){

        $jenis = $_POST['jenis'];
        $type = $_POST['type'];
        $warna = $_POST['warna'];
        $sql = "INSERT INTO mobil (jenis, type, warna) VALUE ('$jenis', '$type', '$warna')";
        $query = mysqli_query($db, $sql);

        if( $query ) {
            header('Location: list.php?status=sukses');
        } else {
            header('Location: list.php?status=gagal');
        }


    } else {
        die("Akses dilarang...");
    }

    ?>