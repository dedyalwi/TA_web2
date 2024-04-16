<?php

//koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "buku");

function query ($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $row = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $koneksi;
    $judul = htmlspecialchars($data["judul"]);
    $pengarang = htmlspecialchars($data["pengarang"]);
    $penerbit = htmlspecialchars($data["penerbit"]);
    $tahun = htmlspecialchars($data["tahun"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "INSERT INTO data_buku
        VALUES
        (NULL,'$judul','$pengarang','$penerbit','$tahun','$gambar')
        ";
    mysqli_query($koneksi,$query);
    return mysqli_affected_rows($koneksi);
}

function hapus($id){
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM data_buku WHERE id = $id");
    return mysqli_affected_rows($koneksi);
}