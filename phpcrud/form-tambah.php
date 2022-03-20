<!DOCTYPE html>
<html>
<head>
    <title>Dealer kipli</title>
</head>

<body>
    <header>
        <h3>Formulir Penambahan mobil</h3>
    </header>

    <form action="proses-penambahan.php" method="POST">

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
            <input type="submit" value="Daftar" name="daftar" />
        </p>

    </form>

    </body>
</html>