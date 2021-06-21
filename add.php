<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absence</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <div class="container ">
        <h2>Lakukan Absen</h2>
        <div class="row mt-4">
            <div class="col-sm-5">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="namaSiswa">Nama</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="form-group mt-3">
                        <label for="kelasSiswa">Kelas</label>
                        <input type="text" class="form-control" name="kelas">
                    </div>
                    <input type="submit" class="btn btn-primary mt-4" value="Tambah" name="submit">
                </form>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>

<?php
require 'absen.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];

    $absen = new Absence();

    $add = $absen->addAbsence($nama, $kelas);

    if ($add = 'Success') {
        header('Location:index.php');
    } else {
        echo "Error!";
    }
}

?>