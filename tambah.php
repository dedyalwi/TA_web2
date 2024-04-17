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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Tambah Data Buku</h1>
    <form action="" method="POST">
      <table>
            <tr>
                <td for="judul" align="left">Judul :</td>
                <td><input type="text" name="judul" id="judul" required></td>
            </tr>
            <tr>
                <td for="pengarang" align="left">Pengarang :</td>
                <td><input type="text" name="pengarang" id="pengarang" required></td>
            </tr>
            <tr>
                <td for="penerbit" align="left">Penerbit :</td>
                <td><input type="text" name="penerbit" id="penerbit" required></td>
            </tr>
            <tr>
                <td for="tahun" align="left">Tahun :</td>
                <td><input type="text" name="tahun" id="tahun" required></td>
            </tr>
            <tr>
                <td for="gambar" align="left">Gambar :</td>
                <td><input type="text" name="gambar" id="gambar" required></td>
            </tr>
        </table>
        <br><br>
        
        <button type="submit" name="submit">Simpan</button>
        
    </form>
</body>