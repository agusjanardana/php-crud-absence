<?php

class Absence
{

    public function __construct()
    {
        $host = "localhost";
        $dbname = "absendb";
        $username = "root";
        $password = "";

        $this->db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
    }

    public function addAbsence($nama, $kelas)
    {
        $createdAt = date("Y-m-d H:i:s");
        $sql = "INSERT INTO siswa(nama,kelas,waktu) VALUES ('$nama' , '$kelas', '$createdAt')";
        $query = $this->db->query($sql);

        if (!$query) {
            return 'Failed!';
        } else {
            return 'Success';
        }
    }

    public function showAbsence()
    {
        $sql = "SELECT * FROM siswa";
        $query = $this->db->query($sql);


        return $query;
    }

    public function getAbsenceByID($id)
    {
        $sql = "SELECT * FROM siswa WHERE id = '$id'";
        $query = $this->db->query($sql);

        return $query;
    }

    public function updateAbsence($id, $nama, $kelas)
    {
        $createdAt = date("Y-m-d H:i:s");
        $sql = "UPDATE siswa SET nama = '$nama', kelas = '$kelas', waktu ='$createdAt'  WHERE id = '$id'";
        $query = $this->db->query($sql);


        if (!$query) {
            return "Failed!";
        } else {
            return 'Success!';
        }
    }

    public function deleteAbsence($id)
    {
        $sql = "DELETE FROM siswa WHERE id = '$id'";
        $query = $this->db->query($sql);

        return $query;
    }
}
