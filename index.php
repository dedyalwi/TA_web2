<?php
require 'functions.php';
$buku = query("SELECT * FROM data_buku ORDER BY id ASC");

//tombol cari ditekan?
if (isset($_POST["cari"])){
    $buku = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Daftar Buku</h1>
    <a href="tambah.php">Tambah Data Buku</a>
    <br></br>
    <form action="" method="POST">
        <input type="text" name="keyword" size="30"  autofocus 
            placeholder="Masukkan kata kunci pencarian" autocomplete="off">
        <button type="submit" name="cari">Cari</button>
    </form>
    <br>
    <table border="2" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
        </tr>
        <?php $i=1; ?>
        <?php foreach ($buku as $row) :?>
            
        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="ubah.php?id=<?= $row['id']; ?>"><input type='button' class='btn-update'></a> 
                <a href="hapus.php?id=<?= $row['id']; ?>"><input type='button' class='btn-delete'></a>
            </td>
            <td>
                <img src="img/<?= $row['gambar'] ?>" width="50">
            </td>
            <td><?= $row['judul'] ?></td>
            <td><?= $row['pengarang'] ?></td>
            <td><?= $row['penerbit'] ?></td>
            <td><?= $row['tahun'] ?></td>
        </tr>
        <?php $i++; ?>
<?php endforeach; ?>
    </table>

</body>