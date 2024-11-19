<?php
// panggil file connection.php 
require_once('connection.php');

// membuat query ke / dari database
function query($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);

    // cek jika query berhasil 
    if ($result === false) {
        // Handle the error
        echo "<script>window.alert('Aplikasi Gagal Terhubung Dengan Data Server!\nError: ')</script> " . mysqli_error($koneksi);
        echo "Error: " . mysqli_error($koneksi);
        return [];
    } else {
        echo "<script>window.alert('Aplikasi Berhasil Terhubung Dengan Data Server!')</script>";
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }
}
?>