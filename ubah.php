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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Ubah Data Buku</h1>
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $buku["id"]; ?>">
        <table>
    
            <tr>
                <td for="judul"align="left">Judul :</td>
                <td><input type="text" name="judul" id="judul" required value="<?= $buku["judul"]; ?>"></td>
            </tr>
            <tr>
                <td for="pengarang"align="left">Pengarang :</td>
                <td><input type="text" name="pengarang" id="pengarang" required value="<?= $buku["pengarang"]; ?>"></td>
            </tr>
            <tr>
                <td for="penerbit"align="left">Penerbit :</td>
                <td><input type="text" name="penerbit" id="penerbit" required value="<?= $buku["penerbit"]; ?>"></td>
            </tr>
            <tr>
                <td for="tahun"align="left">Tahun :</td>
                <td><input type="text" name="tahun" id="tahun" required value="<?= $buku["tahun"]; ?>"></td>
            </tr>
            <tr>
                <td for="gambar"align="left">Gambar :</td>
                <td><input type="text" name="gambar" id="gambar" required value="<?= $buku["gambar"]; ?>"></td>
            </tr>
        </table>
            <br></br>
            
                <button type="submit" name="submit">Ubah Data</button>

   
        
    </form>
</body>