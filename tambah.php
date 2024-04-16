<?php
// koneksi dbms
require "functions.php";

//cek apakah tombol submit sudah ditekan apa belum?
if ( isset($_POST["submit"])){
    //cek apakah data berhasil ditambahkan atau tidak?
    if(tambah($_POST) > 0){
        echo "
        <script>
        alert('Data berhasil disimpan');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data gagal disimpan');
        document.location.href = 'index.php';
        </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Data</title>
</head>
<body>
    <h1>Tambah Data Buku</h1>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="judul">Judul :</label>
                <input type="text" name="judul" id="judul" required>
            </li>
            <li>
                <label for="pengarang">Pengarang :</label>
                <input type="text" name="pengarang" id="pengarang" required>
            </li>
            <li>
                <label for="penerbit">Penerbit :</label>
                <input type="text" name="penerbit" id="penerbit" required>
            </li>
            <li>
                <label for="tahun">Tahun :</label>
                <input type="text" name="tahun" id="tahun" required>
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="text" name="gambar" id="gambar" required>
            </li>
            <br></br>
            <li>
                <button type="submit" name="submit">Simpan</button>
            </li>
        </ul>
    </form>
</body>