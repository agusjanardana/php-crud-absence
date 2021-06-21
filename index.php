<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absence Report</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2>
            <center>Absence Report</center>
        </h2>
        <table class="table table-bordered table-hover" width="60%">
            <thead>
                <th>No</th>
                <th>Nama Siswa</th>
                <th>Kelas Siswa</th>
                <th>Timestamp</th>
                <th>Action</th>
            </thead>
            <?php
            require "absen.php";
            $absen = new Absence();
            $show = $absen->showAbsence();
            $no = 1;
            foreach ($show as $row) {

                echo "
            <tr>
                <td>$no</td>
                <td>$row[nama]</td>
                <td>$row[kelas]</td>
                <td>$row[waktu]</td>
                <td><a href='edit.php?id=$row[id]' class ='btn btn-primary btn-sm' >Edit</a>  <a href ='index.php?delete=$row[id]' class ='btn btn-danger btn-sm'>Delete</a></td>
                
            </tr>
        
        ";
                $no++;
            }
            ?>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>

<?php
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $absen->deleteAbsence($id);
    header('Location:index.php');
}
?>