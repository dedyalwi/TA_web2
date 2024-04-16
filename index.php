<?php
require 'functions.php';
$buku = query("SELECT * FROM data_buku");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Buku</h1>
    <a href="tambah.php">Tambah Data Buku</a>
    <br></br>
    <table border="1" cellpadding="10" cellspacing="0">
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
                <a href="ubah.php?id=<?= $row['id']; ?>">ubah</a> |
                <a href="hapus.php?id=<?= $row['id']; ?>">hapus</a>
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