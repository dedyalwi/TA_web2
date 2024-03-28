<?php
//koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "buku");

//ambil data dari tabel data_buku / query data buku
$result = mysqli_query($koneksi, "SELECT * FROM data_buku");

//ambil data (fetch) dari objext result
//mysqli_fetch_row(); //mengembalikan array numeric
//mysqli_fetch_assoc(); //mengembalikan array asosiatif
//mysqli_fetch_array(); //mengembalikan array numeric &assosiatif
//mysqli_fetch_object(); //mengembalian sebuah object

/*while ($buku = mysqli_fetch_assoc($result) ) {
    var_dump($buku['judul']);
}
*/
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
        <?php while ($row = mysqli_fetch_assoc($result)) :?>
        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="">ubah</a>
                <a href="">hapus</a>
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
<?php endwhile ?>
    </table>
</body>