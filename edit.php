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
    <?php
    require 'absen.php';

    if (isset($_GET['id'])) {

        $absen = new Absence();
        $id_siswa = $_GET['id'];
        $show = $absen->getAbsenceByID($id_siswa);
        $edit = $show->fetch(PDO::FETCH_OBJ);
    } else {
        header('Location : index.php');
    }

    ?>
    <div class="container ">
        <h2>Edit Absen</h2>
        <div class="row mt-4">
            <div class="col-sm-5">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="namaSiswa">Nama</label>
                        <input type="text" class="form-control" name="nama" value="<?php echo $edit->nama; ?>">
                    </div>
                    <div class=" form-group mt-3">
                        <label for="kelasSiswa">Kelas</label>
                        <input type="text" class="form-control" name="kelas" value=" <?php echo $edit->kelas; ?>">
                    </div>
                    <input type="submit" class="btn btn-primary mt-4" value="Edit" name="tombol-update">
                </form>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>

<?php
if (isset($_POST['tombol-update'])) {
    $id_siswa = $_GET['id'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];

    if ($nama == ' ' || $kelas == ' ') {
        echo "Isi semuanya.";
    }

    $up = $absen->updateAbsence($id_siswa, $nama, $kelas);

    if ($up == 'Success!') {
        header('Location:index.php');
    } else {
        header('Location:edit.php?id=' . $id_siswa);
    }
}

?>