<?php

    include("config.php");

    if( !isset($_GET['id']) ){
        header('Location: list.php');
    }

    $id = $_GET['id'];

    $sql = "SELECT * FROM mobil WHERE id=$id";
    $query = mysqli_query($db, $sql);
    $siswa = mysqli_fetch_assoc($query);

    if( mysqli_num_rows($query) < 1 ){
        die("data tidak ditemukan...");
    }

    ?>


    <!DOCTYPE html>
    <html>
    <head>
        <title>Dealer kipli</title>
    </head>

    <body>
        <header>
            <h3>Formulir Edit mobil</h3>
        </header>

        <form action="proses-edit.php" method="POST">

                <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

            <p>
                <label for="jenis">jenis: </label>
                <input type="text" name="jenis" placeholder="jenis" value="<?php echo $siswa['jenis'] ?>" />
            </p>
            <p>
                <label for="type">type: </label>
                <input type="text" name="type" placeholder="type" />
            </p>
            <p>
                <label for="warna">warna: </label>
                <input type="text" name="warna" placeholder="warna" />
            </p>
            <p>
                <input type="submit" value="Simpan" name="simpan" />
            </p>


        </form>

        </body>
    </html>