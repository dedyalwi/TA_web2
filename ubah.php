<?php
// koneksi dbms
require "functions.php";

//ambil data di url
$id = $_GET["id"];

//query data buku berdasarkan id

//query data buku berdasarkan id
$buku = query("SELECT * FROM data_buku WHERE id = $id")[0];


//cek apakah tombol submit sudah ditekan apa belum?
if ( isset($_POST["submit"])){
    //cek apakah data berhasil diubah atau tidak?
    if(ubah($_POST) > 0){
        echo "
        <script>
        alert('Data berhasil diubah');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data gagal diubah');
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
    <title>Halaman Ubah Data</title>
</head>
<body>
    <h1>Ubah Data Buku</h1>
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $buku["id"]; ?>">
        <ul>
            <li>
                <label for="judul">Judul :</label>
                <input type="text" name="judul" id="judul" required value="<?= $buku["judul"]; ?>">
            </li>
            <li>
                <label for="pengarang">Pengarang :</label>
                <input type="text" name="pengarang" id="pengarang" required value="<?= $buku["pengarang"]; ?>">
            </li>
            <li>
                <label for="penerbit">Penerbit :</label>
                <input type="text" name="penerbit" id="penerbit" required value="<?= $buku["penerbit"]; ?>">
            </li>
            <li>
                <label for="tahun">Tahun :</label>
                <input type="text" name="tahun" id="tahun" required value="<?= $buku["tahun"]; ?>">
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="text" name="gambar" id="gambar" required value="<?= $buku["gambar"]; ?>">
            </li>
            <br></br>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>
    </form>
</body>