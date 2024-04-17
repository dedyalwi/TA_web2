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

function ubah($data){
    global $koneksi;
    $id = $data["id"];
    $judul = htmlspecialchars($data["judul"]);
    $pengarang = htmlspecialchars($data["pengarang"]);
    $penerbit = htmlspecialchars($data["penerbit"]);
    $tahun = htmlspecialchars($data["tahun"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "UPDATE data_buku SET
                judul ='$judul',
                pengarang = '$pengarang',
                penerbit = '$penerbit',
                tahun = '$tahun',
                gambar = '$gambar' 
            WHERE id = $id

        ";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function cari($keyword){
    $query = "SELECT * FROM data_buku
                WHERE
                judul LIKE  '%$keyword%' OR
                pengarang  LIKE  '%$keyword%' OR
                penerbit LIKE  '%$keyword%' OR
                tahun LIKE  '%$keyword%'

            ";
    return query($query);         

    }