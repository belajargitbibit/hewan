<?php
//koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "hewan");

function query ($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows [] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $koneksi;
     $nama = htmlspecialchars($data ["nama"]);
     $kelompok = htmlspecialchars($data ["kelompok"]);
     $jenis  = htmlspecialchars($data ["jenis"]);
     $gambar = htmlspecialchars($data ["gambar"]);

            // query insert ke database
            $query = "INSERT INTO data_hewan
            VALUES
            ('','$nama','$kelompok','$jenis','$gambar')
            ";

            mysqli_query($koneksi,$query);
            return mysqli_affected_rows($koneksi);
}

function hapus($id){
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM data_flm WHERE id = $id");
    return mysqli_affected_rows($koneksi);
}
?>