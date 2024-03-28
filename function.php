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