<?php

    include("config.php");

    if(isset($_POST['simpan'])){

        $id = $_POST['id'];
        $jenis = $_POST['jenis'];
        $type = $_POST['type'];
        $warna = $_POST['warna'];

        $sql = "UPDATE mobil SET jenis='$jenis', type='$type', warna='$warna' WHERE id=$id";
        $query = mysqli_query($db, $sql);

        if( $query ) {
            header('Location: list.php');
        } else {
            die("Gagal menyimpan perubahan...");
        }


    } else {
        die("Akses dilarang...");
    }

    ?>